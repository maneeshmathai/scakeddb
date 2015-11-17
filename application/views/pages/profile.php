<div class="container">
	<div class="row">
	<?php if($moves):?>
		<div class="col-md-offset-2 col-md-8 col-lg-offset-1 col-lg-6">
		<?php else:?>
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
		<?php endif;?>
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?php echo $user->first_name." ".$user->last_name?></h2>
                    <p><strong>Email: </strong><?php echo $user->email;?></p>
                    <p><strong>Gender: </strong> <?php echo $user->gender;?>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="<?php echo $user->picture;?>" alt="" class="img-circle img-responsive">
                        <figcaption class="ratings">
                            <p>Ratings
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                 <span class="fa fa-star-o"></span>
                            </a> 
                            </p>
                        </figcaption>
                    </figure>
                </div>
				<div class="col-xs-12 col-sm-8 col-sm-height">
				</div>
				<div class="col-xs-12 col-sm-4 col-sm-height">
				<a href="<?php echo base_url();?>auth/edit_user/<?php echo $user->id;?>" class="btn btn-info btn-block" role="button"><span class="fa"></span>Edit Profile</a>
				</div>
				<div class="panel-body text-center">
				</div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong> MOVES </strong></h2>                    
                    <p><small>Activity Tracker</small></p>
					<?php if(!$moves):?>
                    <a href="https://api.moves-app.com/oauth/v1/authorize?response_type=code&client_id=4Lk81jtiK0Hh2UcRcyBbTyh5AMS7ZZJ6&scope=activity&redirect_uri=<?php echo base_url();?>auth/profile/moves" class="btn btn-info btn-danger btn-block" role="button"><span class="fa"></span>Activate</a>
					<?php else:?>
					<button class="btn btn-block btn-success disabled"><span class="fa"></span> Activated Successfully</button>
					<?php endif;?>
                </div>
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong>KRUMBS</strong></h2>                    
                    <p><small>Food Diary</small></p>
                    <button class="btn btn-info btn-block btn-danger disabled"><span class="fa"></span> Not Enabled </button>
                </div>
              </div>
    	 </div>    
				
		</div>
		<?php if($moves):?>
		<div class="well profile">
				<div class="col-sm-12">
					<div class="col-xs-12">
					<h2><strong>Moves Data</strong></h2>
					<p><small>Activity : <?php echo $moves_activity->getactivity();?></small></p>
					<p><small>Total Steps : <?php echo $moves_activity->getsteps();?></small></p>
					<p><small>Total distance : <?php echo $moves_activity->getdistance()/1000;?> km</small></p>
					</div>
				</div>
		</div>	
		<?php endif;?>
	</div>
</div>
</body>
</html>