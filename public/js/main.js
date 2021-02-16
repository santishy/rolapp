$(function() {
    $( window ).scroll(function() {
      if ($( this ).scrollTop() > 50) {
          $( ".lnk-up" ).addClass('lnk-one');
          $( ".lnk-up" ).removeClass('lnk-two');
      } else {
          $( ".lnk-up" ).addClass('lnk-two');
          $( ".lnk-up" ).removeClass('lnk-one');
      }
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