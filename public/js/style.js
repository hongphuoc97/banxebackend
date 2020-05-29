$(document).ready(function() {                     
                                                   
     $("#formsubmit").validate({                   
         rules: {                                  
       	  username: "required",                    
             password: "required"                  
                                                   
         },                                        
         messages: {                               
       	  username: "Vui lòng nhập username",      
             password: "Vui lòng nhập password"    
                                                   
         }                                         
     });                                           
});                                                