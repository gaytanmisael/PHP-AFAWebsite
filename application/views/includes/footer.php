<?php if($onlineStore === 'yes') {
  echo '<a href="http://www.amazon.com/s?ie=UTF8&field-brandtextbin=American%20Furniture%20Alliance&page=1&rh=n%3A1055398" target="_blank" class="widget container push-bottom-medium woocommerce widget_product_search">Check out our Online Store</a>';
} else {

}; ?>

    </section>
  </section>

  <footer id="footer" class="footer-site invert">
    <div class="container clearfix">
      <div class="footer-products">
        <img src="<?php echo base_url() . "assets/img/footer.jpg"; ?>" alt="AFA, INC" />
      </div>
    </div>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.5.5/jquery.slicknav.min.js"></script>
  <script src="<?php echo base_url() . "assets/js/scripts.js"?>"></script>

  <?php if($main_content ==='home_page') { ?>
  <script src="<?php echo base_url() . "assets/js/swiper.js"?>"></script>
  <?php }; ?>

</body>
</html>
