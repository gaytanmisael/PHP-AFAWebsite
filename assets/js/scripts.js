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
        if(data.st == 0) {
          $('#results').html(data.msg).addClass('error');
        }

        if(data.st == 1) {
          $('#results').html(data.msg).removeClass('error').addClass('success');

          $('.wpcf7-form').hide("slow");
        }

        // Basic Results
        // $('#results').html(data);
      }, 'json');
      return FALSE;
    });

});
