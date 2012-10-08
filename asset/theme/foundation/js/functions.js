
( function($) {
    //load plugins
    $(document).foundationTopBar();
    $(document).foundationNavigation();
    $(document).foundationTabs();


    $(document).ready(function(){
     
        $('.pagination a').live('click',function(){
            return false;
        });
        $('.search').live('click',function(){
            $.ajax({
                type: "POST",
                url: $('#page_path').val(),
                data:$('#search').serialize(),        
                success: function(html){
                    $(".data-grid").html(html);
                }    
            });
         
        });
               

        // ---------------------------------------------------------- Confirm Put To Use

//        $(".deleteTransaction").live("click", function(event) {
//            
//            var url=$(this).attr('href');
//            var heading = 'Confirm Transaction Delete';
//            var question = 'Please confirm that you wish to delete transaction';
//            var cancelButtonTxt = 'Cancel';
//            var okButtonTxt = 'Confirm';
//
//            var callback = function() {
//                
//            };
//
//            confirm(heading, question, cancelButtonTxt, okButtonTxt, callback,url);
//            return false;
//        });

 
    });
} ) ( jQuery );


// ---------------------------------------------------------- Generic Confirm  

function confirm(heading, question, cancelButtonTxt, okButtonTxt, callback,url) {

    var confirmModal = 
    $('<div class="modal hide fade">' +    
        '<div class="modal-header">' +
        '<a class="close" data-dismiss="modal" >&times;</a>' +
        '<h3>' + heading +'</h3>' +
        '</div>' +

        '<div class="modal-body">' +
        '<p>' + question + '</p>' +
        '</div>' +

        '<div class="modal-footer">' +
        '<a href="#" class="btn" data-dismiss="modal">' + 
        cancelButtonTxt + 
        '</a>' +
        '<a href="'+url+'" id="okButton" class="btn btn-primary">' + 
        okButtonTxt + 
        '</a>' +
        '</div>' +
        '</div>');

    confirmModal.find('#okButton').click(function(event) {
        callback();
        confirmModal.modal('hide');
    });

    confirmModal.modal('show');     
};

//for ajax loading
//$('<div id="ajax-load"></div><div id="ajax-load-inner"></div>')
//    .ajaxStart(function() {
//        $(this).show();          
//    })
//    .ajaxStop(function() {
//        $(this).hide();
//    })
//    .appendTo('body');


//for pagination
function pagination(div,url,parm){
        
    if(parm!=""){
        $.ajax({
            type: "POST",
            url: url,
            data: parm+'&'+$('#search').serialize(),
            success: function(html){
                $("."+div).html(html).css('display','none').fadeIn('slow');
            }
    
        });
    }
  
}