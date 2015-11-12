<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?php echo $user->first_name." ".$user->last_name?></h2>
                    <p><strong>Email: </strong><?php echo $user->email;?></p>
                    <p><strong>Gender: </strong> <?php echo $user->gender;?>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="<?php echo base_url();?>/images/male.png" alt="" class="img-circle img-responsive">
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
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong> MOVES </strong></h2>                    
                    <p><small>Activity Tracker</small></p>
                    <button class="btn btn-info btn-block"><span class="fa "></span> Activate </button>
                </div>
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong>KRUMBS</strong></h2>                    
                    <p><small>Food Diary</small></p>
                    <button class="btn btn-info btn-block"><span class="fa"></span> Activate </button>
                </div>
              </div>
    	 </div>                 
		</div>
	</div>
</div>
</body>
</html>