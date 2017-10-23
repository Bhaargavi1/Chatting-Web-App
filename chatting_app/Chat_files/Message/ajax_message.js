   function messages(){
    var request = new XMLHttpRequest();
          request.onreadystatechange = function(){
          if(request.readyState == 4 && request.status == 200){
            document.getElementById('messages').innerHTML = request.responseText;
           }
          }
          request.open("POST", "database_message.php", true);
          request.send();

}          
          
$(document).ready(function(){
        $(".submit_message").click(function(){
          var message = $("#msg_text").val();
          if(message.length>0)
        {
          $.ajax({
              type: "POST",
              url: "database_message.php",
              data: {
                  msg_send: message
              },            
              cache:false,
              success: function(data)
              { 
                $('#msg_text').val('');
              },
               error: function(jqXHR, textStatus, err) {
                //show error message
                alert('text status '+textStatus+', err '+err)
            }
          });
         messages();     
        } return false;
     });
});