(function( $ ) {
  
  //Ajax Filtered List
  $.fn.themeFilteredList = function() {  
    
  	//Define filterable list elements 
    var parentElement = this;    	 
    var filteredResults = parentElement.children('.single_map-includes');
    var filteredMap = parentElement.children('.single_map-the_map');
              
    //Main Ajax function
    function getContent(filteredResults) {
      var ajax_url = ajax_params.ajax_url;
      $.ajax({
        type: 'GET',
        url: ajax_url,
        data: {
          action: 'filter',
          postType: getPostType,
          categoryFilters: getCategoryFilters,
          tagFilters: getTagFilters,
          eventLabelFilters: getEventLabelFilters,
        },
        beforeSend: function() {
          $(filteredResults).fadeOut( 200 , function() {
            $(this).html('Loading...');
          }).fadeIn( 500 );
        },
        success: function(data) {
          
          //Show List
          filteredResults.html( data);
          
          //Show Map
          filteredMap.themeMap();
        },
        error: function() {
          filteredResults.html('<p>There has been a filter error.</p>');
        }
      });
    }
    getContent(filteredResults);
  
    //If input is clicked, trigger input change and add css class
    $('.single_map-category_filters, .single_map-tag_filters, .single_map-event_label_filters').find('input').on('click', function() {
      
      //Set Checkbox Class
      if ($(this).hasClass('selected')) {
        $(this).removeClass('selected');
      } else {
        $(this).addClass('selected');
      }
            
      //Get New Content
      getContent(filteredResults);
    });
    
    //Get Post Type
    function getPostType() {
      var postType = [];          
      var data = parentElement.data('post_type');
      postType.push(data);
      return postType;
    }

    //Get Category Filters
    function getCategoryFilters() {
            
      //Make values an Array
      var categoryFilters = [];
        
      //Save Checked Values
      parentElement.find('.category_filters-filter input:checked').each(function() {
        var data = $(this).data('category_filter');
        categoryFilters.push(data);
      });
          
      //Return Checked Values
      return categoryFilters;

    }

    //Get Tag Filters
    function getTagFilters() {
      
      //Make values an Array
      var tagFilters = [];
  
      //Save Checked Values
      parentElement.find('.tag_filters-filter input:checked').each(function() {
        var data = $(this).data('tag_filter');
        tagFilters.push(data);
      });
          
      //Return Checked Values
      return tagFilters;
    }

    //Get Event Lable Filters
    function getEventLabelFilters() {
      
      //Make values an Array
      var eventLabelFilters = [];
  
      //Save Checked Values
      parentElement.find('.event_label_filters-filter input:checked').each(function() {
        var data = $(this).data('event_label_filter');
        eventLabelFilters.push(data);
      });
          
      //Return Checked Values
      return eventLabelFilters;
    }
  
  };
  
})( jQuery );