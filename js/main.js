/**
 *                                             _             _
 *     ___ ___  _ __ ___ _ __   ___  _ __ ___ (_)_ __   __ _| |
 *    / __/ _ \| '__/ _ \ '_ \ / _ \| '_ ` _ \| | '_ \ / _` | |
 *   | (_| (_) | | |  __/ | | | (_) | | | | | | | | | | (_| | |
 *    \___\___/|_|  \___|_| |_|\___/|_| |_| |_|_|_| |_|\__,_|_|
 *
 *   Webmaster: Philip Newborough
 *   Contact: corenominal [at] corenominal.org
 *   Twitter: @corenominal
 *   From: Lincoln, United Kingdom
 */

/**
 * For Search UX, sets character position in given element
 */
jQuery.fn.selectRange = function(start, end)
{
    if(typeof end === 'undefined')
    {
        end = start;
    }
    return this.each(function()
    {
        if('selectionStart' in this)
        {
            this.selectionStart = start;
            this.selectionEnd = end;
        }
        else if(this.setSelectionRange)
        {
            this.setSelectionRange(start, end);
        }
        else if(this.createTextRange)
        {
            var range = this.createTextRange();
            range.collapse(true);
            range.moveEnd('character', end);
            range.moveStart('character', start);
            range.select();
        }
    });
};

jQuery( document ).ready( function( $ )
{
    /**
	 * FitVids
	 */
	$( '.post' ).fitVids();

    /**
	 * Stupid little animation mouseover logo event
	 */
    $( '#logo' ).mouseover( function()
    {
      var position = 1;

      function wave()
      {

        switch( position )
        {
          case 1:
              $( '#waving-arm' ).attr( 'points', '67.5183995 7.42467755 65.6408954 8.35310936 71.2617841 19.5914451 73.1393724 18.6636819' );
              $( '#waving-arm' ).attr( 'transform', 'translate(69.390134, 13.508061) rotate(15.000000) translate(-69.390134, -13.508061) ' );
              break;
          case 3:
              $( '#waving-arm' ).attr( 'points', '63.1360752 10.130244 61.2585711 11.0586758 66.8794598 22.2970115 68.7570481 21.3692483' );
              $( '#waving-arm' ).attr( 'transform', 'translate(65.007810, 16.213628) rotate(-29.000000) translate(-65.007810, -16.213628) ' );
              break;

          default:
              $( '#waving-arm' ).attr( 'points', '66.0877354 8.11120099 64.2102313 9.0396328 69.83112 20.2779685 71.7087083 19.3502053' );
              $( '#waving-arm' ).removeAttr( 'transform' );
        }

        position++;

        if ( position === 5 )
          position = 1;

       foo = setTimeout( wave, 140 );
      }

      wave();
    });

    $( '#logo' ).mouseout( function()
    {
      clearTimeout( foo );
    });

    /**
	 * Prevent Link titles from wrapping on the external link icon alone
	 */
	$('.post h1 a, .post h2 a').html(function()
	{
	    var icon = '<i class="fa fa-external-link" aria-hidden="true"></i>';
	    if( $( this ).html().indexOf( icon ) > -1 )
	    {
	      var text = $( this ).html().replace( icon, '' );
	      text = text.trim().split(' ');
	      if( text.length > 1 )
	      {
	      var last = text.pop();
	      return text.join(" ") + (text.length > 0 ? ' <span class="nowrap">' + last + ' ' + icon + '</span>' : last);
	      }
	    }
	});

    /**
	 * Add a nice icon to "Post Comment" button.
	 * Note: there is probably an easier way to do this.
	 */
	$( '.form-submit #submit' ).remove();
	var str = '<button class="comment-submit button button-primary" id="submit" name="submit">';
	str += '<i class="fa fa-share"></i> Post Comment';
	str += '</button>';
	$( '.form-submit' ).append( str );

    /**
     * Add a class to the last pingback
     */
    $( '.pingback' ).last().addClass('last');

    /**
	 * Search UX
	 */
    var s = $( '#s' ).val().trim();
	if( s.length > 0 )
	{
		setTimeout(function()
		{
			$( '#s' ).focus();
		}, 100 ); // timeout required for weird Chrome bug
		if( s != '' )
		{
			var sl = s.length;
			$( '#s' ).focus();
			$( '#s' ).selectRange(sl);
		}
		$( '.search-form' ).on( 'submit',function(e)
		{
			var s = $( '#s' ).val().trim();
			if( s === '' )
			{
				$( '#s' ).val('');
				$( '#s' ).focus();
				e.preventDefault();
			}
		});
	}

    /**
	 * Archives filter
	 */
	if( $( '#filter-archives' ).length > 0 )
	{
		setTimeout(function()
		{
			$( '#filter-archives' ).focus();
		}, 100 ); // timeout required for weird Chrome bug
	}
    $( '#filter-archives' ).on('input', function(e)
	{
        var filter = $(this).val().toLowerCase();
		if( filter === '' )
		{
			$( 'li.date' ).show();
            $( 'li.title' ).show();
		}
        else
		{
			$( 'li.title' ).each( function( i )
			{
				var haystack = $( this ).text().toLowerCase();
				if( haystack.indexOf( filter ) === -1 )
				{
					$( this ).removeClass( 'result' );
					$( this ).hide();
				}
				else
				{
					$( this ).addClass( 'result' );
					$( this ).show();
				}
			});
            $( 'ul.month' ).each( function( i )
            {
                month = $( this );
                var m = month.children('.result').length;
                if( m == 0 )
                {
                    month.hide();
                }
                else
                {
                    month.show();
                }
            });
		}
        var c = $( '.result' ).length;
		if( c === 0 )
		{
			if( $( '#no-results' ).length === 0 )
			{
				$( '.content' ).append( '<p id="no-results" class="search-no-results">Nothing, bupkis, dick, diddly-squat, zilch :(</div>' );
			}
		}
		else
		{
			$( '#no-results' ).remove();
		}
    });

    /**
	 * Tag filter
	 */
	if( $( '#filter-tags' ).length > 0 )
	{
		setTimeout(function()
		{
			$( '#filter-tags' ).focus();
		}, 100 ); // timeout required for weird Chrome bug
	}
	$( '#filter-tags' ).on('input', function(e)
	{
		var filter = $(this).val().toLowerCase();
		if( filter === '' )
		{
			$( '.tags li' ).show();
		}
		else
		{
			$( '.tags li' ).each( function( i )
			{
				var haystack = $( this ).text().toLowerCase();
				if( haystack.indexOf( filter ) === -1 )
				{
					$( this ).removeClass( 'tag' );
					$( this ).hide();
				}
				else
				{
					$( this ).addClass( 'tag' );
					$( this ).show();
				}
			});
		}
		var c = $( '.tag' ).length;
		if( c === 0 )
		{
			if( $( '#no-results' ).length === 0 )
			{
				$( '.content' ).append( '<p id="no-results" class="search-no-results">Nothing, bupkis, dick, diddly-squat, zilch :(</div>' );
			}
		}
		else
		{
			$( '#no-results' ).remove();
		}
	});

    /**
     * Mobile Menu
     */
     $( document ).on( 'click', '#hamburger', function(e)
     {
         e.preventDefault();
         var burger = $( this );
         if( burger.hasClass('active') )
         {
             burger.removeClass('active');
             $( '#mobile-menu' ).slideUp(400, function(){
                 $( '#mobile-menu' ).remove();
             });
         }
         else
         {
             burger.addClass('active');
             var mobileMenu  = '<div id="mobile-menu" class="mobile-menu"><div class="container">';
             mobileMenu += $('#site-menu').html();
             mobileMenu += '</div></div>';
             $( '#noggin' ).after( mobileMenu );
             $( '#mobile-menu' ).slideDown(400);
         }
     });

    /**
     * Handle widow resizing
     */
    var w = $( window ).width();
    $( window ).resize( function()
    {
        if ( $( window ).width()==w ) return;
        w = $( window ).width();
        // fix mobile menu
        if( w >= 984 )
        {
            $( '#mobile-menu' ).remove();
            $( '#hamburger' ).removeClass('active');
        }
    });

    /**
     * Newsletter signup - big smiles
     */
    $( '.corenominal-weekly-micro-inten' ).hide();
    $( document ).on( 'focus', '#mce-EMAIL', function( e ) {
    	e.preventDefault();
    	$( '.corenominal-weekly-micro-inten' ).show();
    });

    $( document ).on( 'blur', '#mce-EMAIL', function( e ) {
    	e.preventDefault();
    	$( '.corenominal-weekly-micro-inten' ).hide();
    });
});
