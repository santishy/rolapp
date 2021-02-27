$(function() {
    var audios = $('.custom-audio');
    
    /*** Stop all audios except the current play 
     * @params 'element' (integer) id of audio play.
    */
    function StopAllAudios(element) {
      let audios = document.querySelectorAll('audio:not([data-id="'+ element +'"])');
      audios.forEach(function(audio) {
        audio.pause();
      });
    }

    $('.custom-audio').on('play',function(e) {
      StopAllAudios($(this).data('id'));
    });

    $( window ).on('scroll',function() {
      if ($( this ).scrollTop() > 50) {
          $( ".lnk-up" ).addClass('lnk-one');
          $( ".lnk-up" ).removeClass('lnk-two');
      } else {
          $( ".lnk-up" ).addClass('lnk-two');
          $( ".lnk-up" ).removeClass('lnk-one');
      }
    });

    lightbox.option({
      'albumLabel': 'Imagen %1 de %2'
    });

    $("#frmContact").on('submit',function() {
      $(this).find('#btnSubmit').prop('disabled',false);
      $(this).find('#btnSubmit').addClass('disabled');
      $(this).find('#btnSubmit').text('Enviado...');
    });

    $( '#lnkUp' ).on("click",function(e) {
      e.preventDefault();
      $("html, body").animate({ scrollTop: 0}, 800);
      return false;
    });

    $( ".nav-link-custom" ).on('click',function(e) {
      e.preventDefault();

      if (  $("#divHome").length ) {
        var element = "#" + $( this ).data('link');

        $("html, body").animate({ scrollTop: $(element).offset().top}, 500);
      } else {
        window.location.href = $(this).attr('href');
      }
    });

    /*
    $( "nav li a" ).each(function(index){
      if(this.href.trim() == window.location){
        if( !$(this).parent().parent().hasClass( "dropdown-menu" ) )
          $(this).parent().addClass( "active" ); // For the first childs.
        else if( $( this ).parent().parent().parent().hasClass( "dropdown-submenu" ) )
          $( this ).parent().parent().parent().parent().parent().addClass( "active" ); // For the childs of childs.
        else
          $( this ).parent().parent().parent().addClass( "active" ); // For the parents.
      }
    });*/
  });