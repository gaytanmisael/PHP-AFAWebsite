<?php if($onlineStore === 'yes') {
  echo '<a href="#" class="widget container push-bottom-medium woocommerce widget_product_search">Check out our Online Store</a>';
} else {

}; ?>

    </section>
  </section>

  <footer id="footer" class="footer-site invert">
    <div class="container clearfix">
      <div class="footer-products">
        <img src="/assets/img/footer.jpg" alt="AFA, INC" />
      </div>
    </div>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
  <script src="/assets/js/scripts.js"></script>

  <?php if($main_content === 'contact_us') { ?>
      <script type='text/javascript'>
      $(function(){
        $('#myForm').submit(function(evnt){
            evnt.preventDefault(); //Avoid that the event 'submit' continues with its normal execution, so that, we avoid to reload the whole page
            $.post(url+"site/submit", //The variable 'url' must store the base_url() of our application
            $("form#myForm").serialize(), //Serialize all the content of our form to URL format
            function (data) {
                $('div#results').prepend(data); //Add the AJAX response to some div that is going to show the message
            });
        });
      });
      </script>

  <?php } else {}; ?>

</body>
</html>
