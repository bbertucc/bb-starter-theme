(function( $ ) {
  
  //Ajax Filterable Map
  $.fn.themeMap = function() {  
    
  	//Define where map is going to show 
    var mapElement = this; 
            
    // Render a Google Map onto the selected jQuery element
    function new_map( $el ) {
    	
    	// Set Markers
    	var $markers = mapElement.parent().find('.include-ajax_map_marker');
    	    	
    	// map args
    	var args = {
    		zoom		: 13,
    		center		: new google.maps.LatLng(29.9545295, -90.0855407),
    		mapTypeId	: google.maps.MapTypeId.ROADMAP
    	};
    	
    	// create map	        	
    	var map = new google.maps.Map( $el[0], args);
    	
    	// add a markers reference
    	map.markers = [];
    	
    	// add markers
    	$markers.each(function(){
        add_marker( $(this), map );
    	});
    	
    	
    	// center map
    	center_map( map );
    	
    	// return map
    	return map;
    	
    }
    
    // add a marker to the selected Google Map
    function add_marker( $marker, map ) {
    
    	// Marker var
    	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
      
    	// create marker
    	var marker = new google.maps.Marker({
    		position	: latlng,
    		map			: map
    	});
    
    	// add to array
    	map.markers.push( marker );
    
    	// if marker contains HTML, add it to an infoWindow
    	if( $marker.html() )
    	{
    		// create info window
    		var infowindow = new google.maps.InfoWindow({
    			content		: $marker.html()
    		});
    
    		// show info window when marker is clicked
    		google.maps.event.addListener(marker, 'click', function() {
    
    			infowindow.open( map, marker );
    
    		});
    	}
    
    }
    
    // center the map, showing all markers attached to this map
    function center_map( map ) {
    
    	// vars
    	var bounds = new google.maps.LatLngBounds();
    
    	// loop through all markers and create bounds if markers exist
      	$.each( map.markers, function( i, marker ){
      		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
      		bounds.extend( latlng );
      	});
       
      //no markers?
      if( map.markers.length === 0 ) {

        map.setCenter( new google.maps.LatLng( 29.9545295, -90.0855407 ) );
        map.setZoom( 13 );

    	// only 1 marker?
    	}else if( map.markers.length === 1 ) {
      	
    		// set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 13 );
        
    	}else{
      	
    		// fit to bounds
    		map.fitBounds( bounds );
    		
    	}
    
    }
    
    //render each map when the document is ready (page has loaded)
    var map = null;
  	mapElement.each(function(){
  
  		// create map
  		map = new_map( $(this) );
  
  	});

  };
  
})( jQuery );
