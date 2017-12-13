(function( $ ) {

  //On Load...
  $( window ).load(function() {
  
    //Search for Testimonials
    $('.media-mosaic').each(function() {
      var testimonialArea = this;
      $(testimonialArea).themeMediaMosaic();
    });

  });

  //Theme Testimonials Functions
  $.fn.themeMediaMosaic = function() {  
    
  	//Define Mosaic Areas
    var themeMediaMosaic = $(this),
        mosaicItem  = $(themeMediaMosaic).find('.mosaic-item');
        //mosaicAction = $(themeMosaic).find('.mosaic-action');
    
    //Small Mosaic (Under 3 Images)
    if(mosaicItem.length < 3){
      themeMediaMosaic.addClass('smallMosaic');
    }
    
    //Medium Mosaic (3-6 Images)
    if(mosaicItem.length === 3 || (mosaicItem.length > 3 && mosaicItem.length < 6)  ){
      themeMediaMosaic.addClass('mediumMosaic');
    }

    //Large Mosaic (6+ Images)
    if(mosaicItem.length >= 6 ){
      themeMediaMosaic.addClass('largeMosaic');
    }
    
  };

})( jQuery );