(function( $ ) {

  //On Initial Load..
  $( window ).load(function() {
    
    //Set queryOffset
    var theQueryOffset = 0;
    
    //Create Initial Load Element for each Filterable Archive
    $('.content-include').each(function() {
      $(this).append('<div id="load_more">Load More</div>');
    });
    
    //Get Content
    getContent(theQueryOffset);
    
    //On Filter change..
    $(document).find('.single_filter-checkbox').on('click', function() {
            
      //Set Checkbox Class
      if($(this).parent().hasClass('selected')) {
        $(this).parent().removeClass('selected');
      } else {
        $(this).parent().addClass('selected');
      }
      
      //Clear content area
      $('#the_filterable_archive_content').html('<div id="load_more">Load More</div>');

      //Reset queryOffset
      var theQueryOffset = 0;          
  
      //Get New Content
      getContent(theQueryOffset);
    });
    

  });
  
  //Get Filter Values
  function getFilterTerm() {
    var filter_term = [];    
    if( $('.filterable_archive-filters input:checked').length ) {
    
      //Set filters if filter is checked..
      $('.filterable_archive-filters input:checked').each(function() {
        var data = $(this).data('filter_term');
        filter_term.push(data);
      });
    
    }else{
      
      //Set filters from all unchecked filters
      $('.filterable_archive-filters input').each(function() {
        var data = $(this).data('filter_term');
        filter_term.push(data);
      });  
      
  
    }    
    return filter_term;
  }

  //Get Content Type
  function getContentType() {
    var content_type = [];    
    var data = $('#the_filterable_archive_content').data('content_type');
    content_type.push(data);
    return content_type;
  }
  
  //Get Content
  function getContent(theQueryOffset) {
    $.ajax({
      type: 'POST',
      url: getContentGroupContent.ajax_url,
      data: {
        action: 'filter_filterable_archive',
        query_offset: theQueryOffset,
        filter_term: getFilterTerm,
        content_type: getContentType
      },
      beforeSend: function() {
        
        //Create Loading Bar
        $('#the_filterable_archive_content').append('<p id="contentGroupLoadingIcon" style="color: #6d6e70; text-align:center; margin: 40px 0;"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></p>');
        
        //Replace load_more id so that content is loaded once
        $('#load_more').html('');
        $('#load_more').attr('class','');
        $('#load_more').attr('id','load_here');
                
      },
      success: function(data) {
        
        //Delete Loading Icon
        $('#contentGroupLoadingIcon').remove();
                
        //Replace Load Here Element with Data
        $('#load_here').replaceWith(data);     
        
        //On click, load More posts
        $('#load_more').click(function(){
          
          console.log('click');
    
          //Get the queryOffset
          var theQueryOffset = $(this).data('query_offset');      
          
          //Get Content
          getContent(theQueryOffset);
          
        });
    
      },
      error: function() {
        $('#the_filterable_archive_content').append('<p>Oops! A filter error occured.</p>');
      }
    });
  }
    
})( jQuery );