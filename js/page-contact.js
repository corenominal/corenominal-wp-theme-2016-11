jQuery( document ).ready( function( $ )
{

    $( document ).on( 'keydown', '.input', function(event)
    {
        $( '#notify' ).html( '' );
    });

    $( document ).on( 'submit', '#contact-form', function(event)
    {
        event.preventDefault();

        $( '#notify' ).html( '' );

        $( '#submit' ).prop( 'disabled', 'disabled' );
        $( '#submit' ).html( '<i class="fa fa-circle-o-notch fa-spin fa-fw" aria-hidden="true"></i> processing ...' );

        var data = {
            form: $( '#form' ).val(),
            name: $( '#name' ).val(),
            email: $( '#email' ).val(),
            enquiry: $( '#enquiry' ).val(),
            message: $( '#message' ).val()
        }

        $.ajaxSetup({
            beforeSend: function(xhr) {
                xhr.setRequestHeader( 'X-WP-Nonce', $( '#security' ).val() );
            }
        });

        $.ajax({
            url: 'https://corenominal.org/wp-json/iewp_forms/processor',
            type: 'POST',
            dataType: 'json',
            data: data
        })
        .done(function( data ) {
            if( data.error )
            {
                var err = '<div class="alert alert-error">';
                err += '<p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ';
                err += data.error;
                err += '</p></div>';
                $( '#notify' ).html( err );
            }
            else
            {
                $( '#contact-form' ).slideUp( 400, function()
                {
                    $( '#thankyou' ).slideDown( 400 );
                });
            }
            $( '#submit' ).removeProp( 'disabled' );
            $( '#submit' ).html( '<i class="fa fa-paper-plane" aria-hidden="true"></i> Submit' );
        })
        .fail(function() {
            console.log("error");
        });

    });
});
