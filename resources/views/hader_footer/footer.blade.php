<!--==========================
    Footer
  ============================-->
  <style media="screen">
    #footer{

      background:#303a48;
    }
  </style>
  <footer id="footer">
    <div class="container">
      <div class="copyright" style="float: left;">
        &copy; Copyright <strong>Best School</strong>. All Rights Reserved
      </div>

      <div class="copyright" style="float: right;">
        <nav>
       <a href="{{ url('/school') }}" class="scrollto">Home </a>
            <a href="{{ url('/about') }}" style="margin-left: 10px;">About Us</a>
            <a href="{{ url('/review') }}" style="margin-left: 10px;">Parents Review </a>
            <a href="{{ url('/team') }}" style="margin-left: 10px;">Team</a>
            <a href="{{ route('post_home') }}" style="margin-left: 10px;">Blog</a></li>
            <a href="{{ url('/contact') }}" style="margin-left: 10px;">Contact</a>
            </nav>
      </div>



            </div>
  </footer><!-- #footer -->

  <script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/chat_widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"c4adc0fce4744623",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('rev') }}/lib/jquery/jquery.min.js"></script>
  <script src="{{ asset('rev') }}/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{ asset('rev') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('rev') }}/lib/easing/easing.min.js"></script>
  <script src="{{ asset('rev') }}/lib/superfish/hoverIntent.js"></script>
  <script src="{{ asset('rev') }}/lib/superfish/superfish.min.js"></script>
  <script src="{{ asset('rev') }}/lib/wow/wow.min.js"></script>
  <script src="{{ asset('rev') }}/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{ asset('rev') }}/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="{{ asset('rev') }}/lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('rev') }}/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('rev') }}/js/main.js"></script>

</body>
</html>
