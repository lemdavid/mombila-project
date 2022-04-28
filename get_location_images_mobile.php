
<style>
* {
  box-sizing: border-box;
}

.page-wrap {
  max-width: 90%;
  margin: 0 auto;
  margin-top:5%;
}

.slide-container,
.thumb-container {
  width: 100%;
  overflow: hidden;
  scroll-snap-type: x mandatory;
  margin-bottom: -15px;
  display: flex;
  padding: 0;
}
.slide-container li,
.thumb-container li {
  display: block;
}
.slide-container__wrap,
.thumb-container__wrap {
  overflow: hidden;
}

.slide-container {
  scroll-padding: 5%;
}
.slide-container li {
  flex: 0 0 90%;
  padding: 0 10px;
  position: relative;
  scroll-snap-align: start;
}
.slide-container img {
  display: block;
  width: 100%;
}
.slide-container p {
  position: absolute;
  bottom: 0;
  left: 10px;
  right: 10px;
  margin: 0;
  padding: 30px;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
}

.thumb-container__wrap {
  display: none;
}

@media (min-width: 765px) {
  .slide-container {
    scroll-padding: 0;
  }
  .slide-container li {
    flex-basis: 100%;
    padding: 0;
  }
  .slide-container p {
    right: 0;
    left: 0;
  }

  .thumb-container.scrolling {
    scroll-snap-type: none;
  }
  .thumb-container li {
    flex: 0 0 33.3333333333%;
    scroll-snap-align: center;
  }
  .thumb-container a {
    display: block;
    width: 100%;
    padding-top: 56.25%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-origin: border-box;
    overflow: hidden;
    text-indent: -9999px;
    border: 4px solid transparent;
    transition: border-color 0.3s;
  }
  .thumb-container a:hover, .thumb-container a:focus {
    border-color: orange;
  }
  .thumb-container a.active {
    border-color: red;
  }
  .thumb-container__wrap {
    position: relative;
    display: flex;
  }

  .prev,
.next {
    display: flex;
    align-items: center;
  }
  .prev.disabled,
.next.disabled {
    pointer-events: none;
    opacity: 0.5;
  }
}

</style>

<script>
$(document).ready(function() {



$('#close_image_location').click(function(){


                         document.getElementById("view_group_location_image").style.display = 'none';



});





});
</script>

<img src="cancel_icons.png" width="100px" style="margin-left:90%; margin-top:2%;" id="close_image_location"></img>

<div class="page-wrap">
	<div class="carousel">
		<div class="slide-container__wrap">
			<ul class="slide-container">

               <?php include 'database_connection.php';

$get_location = $_POST['get_location'];
$get_location = htmlentities($get_location);


$result = $ireport->query('SELECT
  location.database_ids as database_ids,
  location.database_id as database_id,
  location.image_root as image_root,
  location.image_group as image_group,
  location.location_name as location_name,
  location.location_address as location_address

FROM Your_location as location
WHERE  location.database_ids = "'.$get_location.'"
 GROUP BY location.database_ids ORDER BY location.database_ids DESC LIMIT 1');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   // will selected information is output
        $row = $result->fetch_assoc();


         $database_ids = htmlentities($row['database_ids']);
         $database_id = htmlentities($row['database_id']);
         $image_root = htmlentities($row['image_root']);
         $image_group = htmlentities($row['image_group']);
         $location_name = htmlentities($row['location_name']);
         $location_address = htmlentities($row['location_address']);

         $image = $image_root.$database_ids.$image_group;
         $image_1 = $image_root.$database_ids.$image_group.'0.jpg';
         $image_2 = $image_root.$database_ids.$image_group.'1.jpg';
         $image_3 = $image_root.$database_ids.$image_group.'2.jpg';
         $image_4 = $image_root.$database_ids.$image_group.'3.jpg';
         $image_5 = $image_root.$database_ids.$image_group.'4.jpg';

       for ( $i = 0; $i < $database_id ; $i++)
    {
      $image =  $image_root.$database_ids.$image_group.$i.'.jpg';

            echo ' <li id="slide'.$i.'" tabindex="-1">
					<img src="'.$image.'" alt="Slide '.$i.' Image" height="1500px"/>
					<p>'.$location_name.'</p>
				</li>';


     }



}


?>




			</ul>
		</div>
		<div class="thumb-container__wrap">
			<a href="#prev" class="prev" style="color:white; font-size:154px;">&laquo;</a>
			<ul class="thumb-container">

         <?php
          for ( $i = 0; $i < $database_id ; $i++)
    {
      $image =  $image_root.$database_ids.$image_group.$i.'.jpg';

				echo '<li><a href="#slide'.$i.'" style="background-image: url('.$image.');">Scroll to Slide '.$i.' of 10</a></li>';


     }

          ?>






			</ul>
			<a href="#next" class="next" style="color:white; font-size:154px;">&raquo;</a>
		</div>
	</div>
</div>
  <script>
      ( function() {
	var $carousels, $slideScrollers, $thumbnailScrollers, $nextBtns, $prevBtns;
	const activeThumbnail = 'active', scrollingThumbnails = 'scrolling', disabledBtns = 'disabled';

	$( document ).ready( function() {
		$carousels = $( '.carousel' );
		$slideScrollers = $carousels.find( '.slide-container' );
		$thumbnailScrollers = $carousels.find( '.thumb-container' );

		$nextBtns = $carousels.find( '.next' ).on( 'click', nextSlide );
		$prevBtns = $carousels.find( '.prev' ).on( 'click', prevSlide );
		$slideScrollers.on( 'scroll', scrollHandler );

		// Set up initial state
		$carousels.each( function() {
			updateIndicators( $( this ) );
			updateArrows( $( this ) );
		} );
	} );

	function nextSlide( e ) {
		e.preventDefault();
		var $carousel = $( this ).closest( $carousels );
		scrollToSlide( $carousel, $carousel.data( 'currIndex' ) + 1 );
	}

	function prevSlide( e ) {
		e.preventDefault();
		var $carousel = $( this ).closest( $carousels );
		scrollToSlide( $carousel, $carousel.data( 'currIndex' ) - 1 );
	}

	function scrollHandler() {
		var $carousel = $( this ).closest( $carousels );
		updateIndicators( $carousel );
		updateArrows( $carousel );
	}

	function scrollToSlide( $carousel, index ) {
		var $container = $carousel.find( $slideScrollers );
		var $slides = $container.find( 'li' );
		var goToIndex = Math.max( Math.min( index, $slides.length - 1 ), 0 ); // make sure the index is within the bounds of the slideshow

		if( $carousel.data( 'currIndex' ) == goToIndex ) { return; } // bail - no need to update the DOM

		var scrollTo = $slides.eq( goToIndex ).get( 0 ).offsetLeft - $container.get( 0 ).offsetLeft;
		$container.get( 0 ).scrollTo( scrollTo, 0 );
		updateIndicators( $carousel, index );
		updateArrows( $carousel );
	}

	function getCurrentSlide( $carousel ) {
		var $container = $carousel.find( $slideScrollers );
		var scrollPos = $container.get( 0 ).scrollLeft;
		var containerOffset = $container.get( 0 ).offsetLeft;

		var $slides = $container.find( 'li' );
		var index = 0;

		$slides.each( function( i ) {
			var slidePos = this.offsetLeft - containerOffset;
			if( slidePos <= scrollPos ) {
				index = i;
			} else {
				return false; // bail out, we've passed the scroll position
			}
		} );

		return index;
	}

	function updateIndicators( $carousel, index ) {
		if( typeof index == 'undefined' ) {
			index = getCurrentSlide( $carousel );
		}

		if( $carousel.data( 'currIndex' ) == index ) { return; } // bail - no need to update the DOM

		var $indicatorScroller = $carousel.find( $thumbnailScrollers );
		var $indicators = $indicatorScroller.find( 'li' );
		var $currIndicator = $indicators.eq( index );

		$indicators.find( 'a' ).removeClass( activeThumbnail );
		$currIndicator.find( 'a' ).addClass( activeThumbnail );

		$carousel.data( 'currIndex', index);

		// Scroll the indicators to center the one that is active
		var indicatorPos = $currIndicator.get( 0 ).offsetLeft - $indicatorScroller.get( 0 ).offsetLeft;
		var scrollerWidth = $indicatorScroller.width();
		var scrollTo = -(scrollerWidth / 2) + indicatorPos + ( $currIndicator.width() / 2 );
		$indicatorScroller.addClass( scrollingThumbnails ).animate( {
			scrollLeft: scrollTo
		}, 400, function() {
			$indicatorScroller.removeClass( scrollingThumbnails );
		} );
	}

	function updateArrows( $carousel ) {
		var $slides = $carousel.find( $slideScrollers ).find( 'li' );
		var $next = $carousel.find( $nextBtns );
		var $prev = $carousel.find( $prevBtns );
		var currIndex = $carousel.data( 'currIndex' );

		if( currIndex >= $slides.length - 1 ) {
			$next.addClass( disabledBtns );
		} else if( $next.hasClass( disabledBtns ) ) {
			$next.removeClass( disabledBtns );
		}

		if( currIndex <= 0 ) {
			$prev.addClass( disabledBtns );
		} else if( $prev.hasClass( disabledBtns ) ) {
			$prev.removeClass( disabledBtns );
		}
	}
})();
  </script>
