jQuery(document).ready(function(){

jQuery(".email_Change_setting").click(function(){
      $oldEmail = jQuery("#oldEmail1").val();
      $newEmail1 = jQuery('#newEmail1').val();
      if($oldEmail == '' || $newEmail1 == '')
       alert('One or more fields are Empty ')
       else
      jQuery.ajax({
          type: 'post',
          async: false,
          url: the_ajax_script.ajaxurl,
          data: {
               action : 'user_email_change',
               oldEmail : $oldEmail,
               email_id : $newEmail1,
               
          },
          success: function(response)
            {
                //console.log(response);
                alert(response);
                 jQuery("#oldEmail1").val('');
      jQuery('#newEmail1').val('');
            },
            error: function(MLHttpRequest, textStatus, errorThrown)
            {
                console.log(MLHttpRequest);
            }
        });
    });
    jQuery('.clear-email').click(function(){
      jQuery("#oldEmail1").val('');
     jQuery('#newEmail1').val('');
      
    });
});

