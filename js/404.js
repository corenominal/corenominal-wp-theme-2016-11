function do_404()
{
   // Cross-browser support for requestAnimationFrame
   var requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || window.mozRequestAnimationFrame;

   // Set-up the canvas
   var canvasContainer = document.getElementById( 'header-canvas' );
   var canvasWidth = canvasContainer.offsetWidth;
   var canvasHeight = canvasContainer.offsetHeight;
   canvasContainer.innerHTML = '<canvas id="canvas" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>';
   var canvas = document.getElementById( 'canvas' );
   var c = canvas.getContext('2d');
   var particles = [];
   var noOfParticles = 150;
   var maxParticleSize = 80;

   // Initial fill
   c.fillStyle = 'rgba( 33, 33, 33, 1 )';
   c.fillRect( 0, 0, canvasWidth, canvasHeight );

   function particle()
   {
	   // Create a new particle
	   var id = particles.length,
		   x = canvasWidth / 2,
		   y = canvasHeight / 2,
		   vx = Math.random() * 10 - 5,
		   vy = Math.random() * 10 - 5,
		   size = Math.floor( ( Math.random() * maxParticleSize ) + 1 ),
		   colour = 'rgba( 255, 255, 255, 0.' + Math.floor((Math.random() * 5) + 3) + ' )',
		   life = 0,
		   death = Math.random() * 500 + 10;

	   particles[particles.length] = { 'id':id, 'x':x, 'y':y, 'vx':vx, 'vy':vy, 'size':size, 'colour': colour, 'life': life, 'death': death };
   }

   function emitter()
   {
	   // Update the particles
	   for (i = 0; i < particles.length; i++)
	   {

		   particles[i].x += particles[i].vx;
		   particles[i].y += particles[i].vy;

		   particles[i].life++;

		   // Remove dead particles
		   if( particles[i].life > particles[i].death )
		   {
			   particles.splice(i, 1);
		   }
	   }

	   // Create new particles
	   while ( particles.length < noOfParticles )
	   {
		   particle();
	   }
   }

   function renderer()
   {
	   c.fillStyle = 'rgba( 33, 33, 33, 0.4 )';
	   c.fillRect( 0, 0, canvasWidth, canvasHeight );

	   for (i = 0; i < particles.length; i++)
	   {
		   if( particles[i].life < 20 )
		   {
			   c.fillStyle = 'rgba( 255, 255, 255, 0 )';
		   }
		   else
		   {
			   c.fillStyle = 'rgba( 255, 255, 255, 0.' + Math.floor((Math.random() * 5) + 3) + ' )';
		   }
		   c.fillRect(particles[i].x,particles[i].y,particles[i].size,particles[i].size);
	   }
   }

   function main()
   {
	   emitter();
	   renderer();
	   requestAnimationFrame(main);
   }
   main();
}

jQuery( document ).ready( function( $ )
{
	// get height of noggin
	var noggin_height = $( '#noggin' ).height();
	var document_height = $( document ).height();
	$( '#header-canvas-wrapper' ).height( document_height - ( noggin_height + 14 ) );
	$( '#header-canvas' ).height( document_height - ( noggin_height + 14 ) );

	do_404();
    var resizeTimer;

    $(window).on('resize', function(e)
    {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function()
        {
            do_404();
        }, 250);
    });
});
