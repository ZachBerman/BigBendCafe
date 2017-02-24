// Loader
//*******************
// Wait for window load
$(window).load(function() {
// Animate loader off screen
$(".se-pre-con").fadeOut("slow");;
});

// Closes the Responsive Menu on Menu Item Click
//*******************
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
	
// Gallery and Gallery Filter Styles 
//*******************
$(window).load(function(){
if ( $('#gallery-masonry').length > 0 ) {
		// Call to Masonry plugin
		var gallerymasonry = $('#gallery-masonry').isotope({
			itemSelector: '.single-item',
			layoutMode: 'masonry',
			transitionDuration: '.6s',
			hiddenStyle: {
				opacity: 0,
				transform: "scale(.85)"
			},
			visibleStyle: {
				opacity: 1,
				transform: "scale(1)"
			}
		});

// Filtering the gallery items
//*******************
$('#gallery-masonry-sort a').on( 'click', function(e) {
			e.preventDefault();
			var $this = $(this);
			if ( $this.parent('li').hasClass('active') ) {
				return false;
			} else {
				$this.parent('li').addClass('active').siblings('li').removeClass('active');
			}
			var filterValue = $this.data('target');
			gallerymasonry.isotope({ filter: filterValue });
			return $this;
		});

	}
	
	  }); 		
	 
	 
// Magnific Popup Gallery
//*******************
$('.gallery-item').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});

