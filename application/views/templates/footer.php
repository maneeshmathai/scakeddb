    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="<?php echo base_url();?>#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="<?php echo base_url();?>#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="<?php echo base_url();?>#contact">Contact</a>
                        </li>
						 <li class="footer-menu-divider">&sdot;</li>
                        <li>
                             <a href="<?php echo base_url();?>auth/profile">Profile</a>
                        </li>
						 <li class="footer-menu-divider">&sdot;</li>
                        <li>
                           <?php if(isset($loggedin))?>
						<?php if($loggedin){?>
                        <a href='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=<?php echo base_url(); ?>login/logout'>Logout</a>
						<?php } else{?>
						<a href="<?php echo base_url();?>login">Login</a>
						<?php }?>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; SCAKE, Western Sydney University 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
