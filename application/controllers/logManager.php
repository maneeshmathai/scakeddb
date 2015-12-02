<?php
class LogManager extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language','file'));
		$this->load->library(array('ion_auth','moves'));
	}
	function index($username=null,$password=null)
	{
		if($username=="ulogManager"&&$password=="914626ee75f6a1946de258d32f047374"){
			$users = $this->doctrine->em->getRepository('Entities\Users')->findAll();
			foreach($users as $user){
			$user_apps = $this->doctrine->em->getRepository('Entities\UserApps')->
				findOneBy(array('user' => $user,'name'=>'Moves'));
			if(!is_null($user_apps)){
				$moves =$this->doctrine->em->getRepository('Entities\Moves')->
					findOneBy(array('userApps' => $user_apps));
				$moves_activity =$this->doctrine->em->getRepository('Entities\MovesActivity')->
					findOneBy(array('userApps' => $user_apps));			
				$dateObject = new DateTime();
				$objtdate =  $dateObject->sub( new DateInterval('P02D') );
				$tdate=$objtdate->format('Y-m-d');
				$data = $this->moves->get_range($moves->getAccessToken(),"/user/summary/daily",$tdate,$tdate,array('timezone'=>'Australia/Sydney'));
				echo "</br>";
				foreach(json_decode($data) as $sData)
					{
						if(!is_null($sData->summary))
						foreach($sData->summary as $summary)
							if($summary->activity=="walking"||$summary->activity=="cycling"||$summary->activity=="running")
							$this->updateMovesActivity($summary,$moves_activity);	
					}
				$moves_activity->setDateUpdated($objtdate);
				$this->doctrine->em->persist($moves_activity);
				$this->doctrine->em->flush();
				$path = "data/".$user->getId();
				if(!file_exists($path))
					mkdir($path,0777,true);
					write_file('data/'.$user->getId().'/'.$tdate.'.json', $data);
				}
			}
			echo "Success";
		}
		else
		echo "Access Denied";
	}
	
	private function updateMovesActivity($summary,$moves_activity)
	{
		$moves_activity_details =$this->doctrine->em->getRepository('Entities\MovesActivityDetails')->
				findOneBy(array('movesActivity' => $moves_activity,'activity'=>ucwords($summary->activity)));
		if($moves_activity_details){
		if(isset($summary->steps))
		$moves_activity_details->setSteps($moves_activity_details->getSteps()+$summary->steps);
		$moves_activity_details->setDistance($moves_activity_details->getDistance()+$summary->distance);
		$this->doctrine->em->persist($moves_activity_details);
			$this->doctrine->em->flush();
		return true;
		}
		else
		{
			$moves_activity_details = new Entities\MovesActivityDetails;
			$moves_activity_details->setActivity(ucwords($summary->activity));
			if(isset($summary->steps))
			$moves_activity_details->setSteps($summary->steps);
			$moves_activity_details->setDistance($summary->distance);
			$moves_activity_details->setMovesActivity($moves_activity);
			$this->doctrine->em->persist($moves_activity_details);
			$this->doctrine->em->flush();
			return true;
		}
		return false;

	}
	
}