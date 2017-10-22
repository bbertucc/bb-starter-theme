(function( $ ) {
  
  //Contact Info Controls
  $.fn.themeContactControls = function(mapParent, mapLat, mapLng) {  
    
    //Set Map Element
    var uluru = {lat: Number(mapLat), lng: Number(mapLng)};
    var map = new google.maps.Map(document.getElementById(mapParent), {
      zoom: 14,
      center: uluru
    });
    
    //jshint unused:false
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });

  };
  
})( jQuery );
