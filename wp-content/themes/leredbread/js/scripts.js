jQuery(function(){

    jQuery('#close-comments').on('click', function(event){

      event.preventDefault();

      jQuery.ajax({
        method: 'post',
        url: lrb_vars.rest_url + 'wp/v2/posts/' + lrb_vars.post_id,
        data: {
          comment_status: 'open'
        },
        beforeSend: function(xhr) {
          xhr.setRequestHeader( 'X-WP-Nonce', lrb_vars.comment_nonce );
        }

      }).done(function(response){
        alert('Success! Comments were closed.');
      });

   });

});

//steps 1-3 in slides!
//created a form and button
//in functions.php
//event handler here, passing data along with request- making request onclick
//data object need to pass multiple properties such as security (the nonce) and action hook
//have to pass the post id through with the request

//last step is to write some php

//Ajax: change the url- concat.
//use the beforeSend callback function
