    <!-- Header -->
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Scake Diabetics App</h1>
                        <h3>An approach to manage chronic disease</h3>
                        <hr class="intro-divider">
						<?php if(isset($loggedin))?>
						<?php if($loggedin){?>
						 <a href="<?php echo base_url();?>auth/profile"class="btn btn-default btn-lg"><i class="fa  fa-fw"></i> <span class="network-name">Check your Profile</span></a>
						<?php } else{?>
						<ul class="list-inline intro-social-buttons">
							<li>
							 <i class="fa fa-fw"></i> <span class="network-name">Login with</span></a>
							</li>						
                            <li>
                                <a href="<?php echo base_url();?>login" class="btn btn-default btn-lg"><i class="fa  fa-envelope-o fa-fw"></i> <span class="network-name">Google</span></a>
                            </li>
                        </ul>
						<?php }?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Krumbs -Connect Experiences</h2>
                    <p class="lead">With Krumbs, Connect Experiences.
Life’s best moments are about what you see, what you hear, who you’re with, how you feel.
Krumbs automagically connects your experiences together by these bits(mood, people, events, location), letting you easily communicate and relive them.
With a few taps communicate what's up to your friends or find those notes you took while on a work trip.
Krumbs does it all for you. Use Krumbs to create a diary of food you take in.
Connect Experiences Now!</p>
<p>
 </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="images/krumbs.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Moves - Activity Diary for iPhone and Android</h2>
                    <p class="lead">Moves automatically records any walking, cycling, and running you do. You can view the distance, duration, steps, and calories* burned for each activity. The app is always on, so there’s no need to start and stop it. Just keep your phone in your pocket or your bag.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="images/moves.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
		<a  name="contact"></a>
		<a  name="about"></a>
		<div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
					<div align="left"> This is a prototype diabetic app developed using SCAKE framework.  </div>
					<div align="left"> Contact m.mathai@cmcrc.com </div>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                   
                </div>
            </div>

        </div>
    </div>
    <!-- /.content-section-b -->



    </div>
    <!-- /.banner -->