 <!-- Newsletter section start -->
 <div class="rs-newsletter style1 mb--90 sm-mb-0 sm-pb-70">
     <div class="container">
         <div class="newsletter-wrap">
             <div class="row y-middle">
                 <div class="col-lg-6 col-md-12 md-mb-30">
                     <div class="content-part">
                         <div class="sec-title">
                             <div class="title-icon md-mb-15">
                                 <img src="{{asset('assets/front/images/white-newsletter3.png') }}" alt="images">
                             </div>
                             <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-12">
                     <form class="newsletter-form">
                         <input type="email" name="email" placeholder="Enter Your Email" required="">
                         <button type="submit">Submit</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Newsletter section end -->
 <!-- Footer Start -->
 <footer id="rs-footer" class="rs-footer">
     <div class="footer-top">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                     <h4 class="widget-title">Explore</h4>
                     <ul class="site-map">
                         <li class="@yield('about_menu_active')">
                             <a href="{{url('/about')}}">About</a>
                         </li>
                         <li class="@yield('contact_menu_active')">
                             <a href="{{url('/contact')}}">Contact</a>
                         </li>
                         <li><a href="#">eLearning School</a></li>
                         <li><a href="#">Privacy Policy</a></li>
                         <li><a href="#">Courses</a></li>
                         <li><a href="#">Become A Teacher</a></li>
                         <li><a href="#">Blog</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                     <h4 class="widget-title">Categories</h4>
                     <ul class="site-map">
                         <li><a href="#">All Courses</a></li>
                         <li><a href="#">Web Development</a></li>
                         <li><a href="#">Genarel Education</a></li>
                         <li><a href="#">Digital Marketing</a></li>
                         <li><a href="#">Web Design</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                     <h4 class="widget-title">Resources</h4>
                     <ul class="site-map">
                         <li><a href="#">Become A Teacher</a></li>
                         <li><a href="#">Instructor/Student Profile</a></li>
                         <li><a href="#">Courses</a></li>
                         <li><a href="#">Checkout</a></li>
                         <li><a href="#">Terms & Conditions</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                     <h4 class="widget-title">Address</h4>
                     <ul class="address-widget">
                         <li>
                             <i class="flaticon-location"></i>
                             <div class="desc">503 Old Buffalo Street Northwest #205 New York-3087</div>
                         </li>
                         <li>
                             <i class="flaticon-call"></i>
                             <div class="desc">
                                 <a href="tel:(123)-456-7890">(123)-456-7890</a> ,
                                 <a href="tel:(123)-456-7890">(123)-456-7890</a>
                             </div>
                         </li>
                         <li>
                             <i class="flaticon-email"></i>
                             <div class="desc">
                                 <a href="mailto:infoname@gmail.com">infoname@gmail.com</a> ,
                                 <a href="#">www.yourname.com</a>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-bottom">
         <div class="container">
             <div class="row y-middle">
                 <div class="col-lg-4 md-mb-20">
                     <div class="footer-logo md-text-center">
                         <a href="index-2.html"><img src="assets/images/logo.png" alt=""></a>
                     </div>
                 </div>
                 <div class="col-lg-4 md-mb-20">
                     <div class="copyright text-center md-text-left">
                         <p>&copy; 2020 All Rights Reserved. Developed By <a href="http://rstheme.com/">RSTheme</a></p>
                     </div>
                 </div>
                 <div class="col-lg-4 text-right md-text-left">
                     <ul class="footer-social">
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Footer End -->

 <!-- start scrollUp  -->
 <div id="scrollUp">
     <i class="fa fa-angle-up"></i>
 </div>
 <!-- End scrollUp  -->