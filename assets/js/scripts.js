$(document).ready(function() {
    $(".newsletter").fancybox();

    $('.zoom').fancybox({
      openEffect    : 'none',
      closeEffect   : 'none'
    });

    $('.responsive_menu').slicknav();

    $('.wpcf7-form').on('submit', function(form) {
      form.preventDefault();

      $.post('/actions/submit', $('.wpcf7-form').serialize(), function(data){
        $('#results').html(data);
      });
    });

});
