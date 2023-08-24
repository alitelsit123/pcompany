 
 <style>

footer a,
footer a:visited {
    color: inherit;
}

footer .copyright {
    color: #d8d8d8;
}
 </style>
 <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
              <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank" href="<?php echo $contact['twitter'] ?>"><i class="fa fa-instagram"></i></a></li>
               <li><a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><i class="fa fa-youtube"></i></a></li>
               <li><a target="_blank" href="<?php echo $contact['linkin'] ?>">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50"
                style="fill:#F06000;transform: translateY(5px);">
                    <path d="M41,4H9C6.243,4,4,6.243,4,9v32c0,2.757,2.243,5,5,5h32c2.757,0,5-2.243,5-5V9C46,6.243,43.757,4,41,4z M37.006,22.323 c-0.227,0.021-0.457,0.035-0.69,0.035c-2.623,0-4.928-1.349-6.269-3.388c0,5.349,0,11.435,0,11.537c0,4.709-3.818,8.527-8.527,8.527 s-8.527-3.818-8.527-8.527s3.818-8.527,8.527-8.527c0.178,0,0.352,0.016,0.527,0.027v4.202c-0.175-0.021-0.347-0.053-0.527-0.053 c-2.404,0-4.352,1.948-4.352,4.352s1.948,4.352,4.352,4.352s4.527-1.894,4.527-4.298c0-0.095,0.042-19.594,0.042-19.594h4.016 c0.378,3.591,3.277,6.425,6.901,6.685V22.323z"></path>
                </svg>
              </a></li>
            </ul>

            <ul class="copyright">
               <li><?php echo $_settings->info('name') ?> &copy; Copyright <?php echo date('Y') ?></li>
              <!--  <li>Design by <a href="http://srikrishnacommunication.com/Giridesigns.html" title="Styleshout" target="_blank">Giri Designs</a></li>    -->
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="<?php echo base_url ?>profile_asset/js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="<?php echo base_url ?>profile_asset/js/jquery-migrate-1.2.1.min.js"></script>

   <script src="<?php echo base_url ?>profile_asset/js/jquery.flexslider.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/waypoints.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/jquery.fittext.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/magnific-popup.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/init.js"></script>