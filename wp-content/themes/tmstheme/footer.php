<!-- footer section -->

</body>
<!-- footer section -->
<footer class="container-fluid">
  <section class="container ft" background-color: #e7e7e7; display: flexbox;">
  
    <div class="ft-col">
      <span class="ft-title">Solutions</span>
      <ul class="contacts" style="margin-left: 2.9rem;">
        <li class="footer-company-name" ><a class="ft-a"   href="<?=bloginfo('url');?>/outs/" aria-label="outsourced">Outsourced</a></li>
        <li class="footer-company-name" ><a class="ft-a"   href="<?=bloginfo('url');?>/ent/" aria-label="enterprise">Enterprise</a></li>
      </ul><img class="ft-logo" aria-label="footerlogo" src="<?php echo get_template_directory_uri(); ?>/img/TR-Testmark.svg" 			alt="logo"
          style="width: 12rem;">
    </div>
    <div class="ft-col">
      <span class="ft-title" style="margin-left:3rem;">Company</span>
        <ul class="contacts" style="margin-left: 3.5rem;">
            <li><a class="ft-a" href="https://in1gotech.com/partners/" aria-label="partners" target="_blank">Partners</a></li>
            <li><a class="ft-a"  href="https://in1gotech.com/patrons/" aria-label="clients" target="_blank">Clients</a></li>
            <li><a class="ft-a"  href="#" aria-label="services">Resources</a></li>
            <li><a class="ft-a" href="<?=bloginfo('url');?>/#contactus" aria-label="contact us"target="_blank">Contact Us</a></li>
      </ul>
    </div>
    <div class="ft-col" >
      <span class=" ft-title">Connect With Us</span>
      <ul >
        <li>
          <div class="contacts ft-contacts">
            <a class="ft-a"  href="https://www.google.com/maps/place/In1Go+Technologies+Inc./@14.4481538,120.9922245,17z/data=!4m12!1m6!3m5!1s0x3397cf04d69589b7:0x378e5251d103adb7!2sLAS+PINAS+CARGO+COMPLEX!8m2!3d14.4481486!4d120.9944132!3m4!1s0x0:0x4b64607b8f930152!8m2!3d14.447798!4d120.9948852" id="map" aria-label="map" target="_blank"><i class="fa fa-map-marker social-icons"
                style="border-radius: 20px; text-align: center;"></i></a>
            <a class="ft-a"  href="https://www.google.com/maps/place/In1Go+Technologies+Inc./@14.4481538,120.9922245,17z/data=!4m12!1m6!3m5!1s0x3397cf04d69589b7:0x378e5251d103adb7!2sLAS+PINAS+CARGO+COMPLEX!8m2!3d14.4481486!4d120.9944132!3m4!1s0x0:0x4b64607b8f930152!8m2!3d14.447798!4d120.9948852" id="address" aria-label="address" target="_blank" >Las Pinas
              Cargo Complex
              J. Aguilar Avenue, Talon Uno,
              Las Pinas City, 1747,
              Philippines
            </a>
          </div>
        </li>
        <li>
          <div class="contacts ft-contacts">
            <a class="ft-a"  href="tel:+63288143209" aria-label="phone"> <i class="fa fa-phone social-icons"
                style="border-radius: 20px; padding: .7em"></i></a>
            <p>
              <a class="ft-a"  href="tel:+63288143209" id="number1" aria-label="contact number1">+63 2 8814 3209</a>
              <br>
              <a class="ft-a"  href="tel:+63285118618" id="number2" aria-label="contact number2">+63 2 8511 8618</a>
            </p>
          </div>
          <div class="contacts ft-contacts" >
            <a class="ft-a"  href="mailto:customercare@in1go.com.ph" aria-label="email address" id="email"> <i class="fa fa-envelope social-icons"
                style="border-radius: 20px; padding: .7em; "></i></a>
            <a class="ft-a"  href="mailto:customercare@in1go.com.ph" id="email">customercare@in1go.com.ph</a>
          </div>
        </li>
        <li>
          <div class="contacts ft-contacts solicons" style="margin: .9rem 0 0 3rem;">
            <a  href="https://www.facebook.com/in1gotech/" aria-label="facebook profile" target="_blank"><i class="fab fa-facebook-f social-icons"></i></a>
            <a href="https://www.linkedin.com/showcase/1go-transport-management/?viewAsMember=true" aria-label="linkedin profile" target="_blank"><i
                class="fab fa-linkedin-in social-icons"></i></a>
 <a href="https://www.youtube.com/channel/UCWu79HfXHYax8e-wnLhJU3g/videos" aria-label="youtube" profile" target="_blank"><i class="fab fa-youtube social-icons"></i></a>
          </div>
        </li>
      </ul>
    </div>
  </section>
<h6 class="toc"><span style="font-weight: 500;">Copyright ?? 2022 1GoLogistics</span> | <a href="https://in1gotech.com/privacy-policy/"target="_blank">Privacy Policy</a>
  </h6>
</footer>
<style>
</style>
<!-- jquery -->
<?php wp_footer()?>
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100677485664957");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<!-- jquery -->
</html>
<!-- footer section -->
