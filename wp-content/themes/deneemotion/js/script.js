( function( $ ) {
    
    $(window).load(function() {
      /***************************************************************************
        *
        *   this will execute if browser is IE 8 or less
        *
        ***************************************************************************/
        if ($.browser.msie && parseInt($.browser.version,10) < 9) {
            /*alert("I'm IE 8");*/
            window.location.replace("http://deneemotion.ae/update-browser/");
        }
    })
    
    // A $( document ).ready() block.
    $( document ).ready(function() {

        var menuClosed = true;
        
        $(".menu-button").on('click', function() {
            //console.log( "Menu closed - " + menuClosed);
            if(menuClosed)
            {
                $('.site-header').removeClass('hide');
                $('.site-header').addClass('show');
                menuClosed = false;
            }
            else
            {
                $('.site-header').removeClass('show');
                $('.site-header').addClass('hide');
                menuClosed = true;
            }
        });

        if($('#video-grid').length != 0)
        {
            var container = document.querySelector('#video-grid');

            imagesLoaded( container, function() {
                var msnry = new Masonry( container, {
                  // options
                  itemSelector: '.video-item',
                });
            });
        }

        if($('#blog-grid').length != 0)
        {
            var container = document.querySelector('#blog-grid');

            imagesLoaded( container, function() {
                var msnry = new Masonry( container, {
                  // options
                  itemSelector: '.blog-item',
                });
            });
        }

        $(".scrollvideobutton").on('click', function() {
            $('html, body').animate({
                        scrollTop: $(".video").offset().top
                    }, 1000);
        });
        
    });
} )( jQuery );
