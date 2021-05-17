jQuery(document).ready(function ($) {
    $("#submit_btn").click(function() { 
       
	    var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields		
		$("#enquiry_form input[required], #enquiry_form textarea[required]").each(function(){
			$(this).css('background-color',''); 
			if(!$.trim($(this).val())){ //if this field is empty 
				$(this).css('background-color','#FFDEDE'); //change border color to #FFDEDE   
				proceed = false; //set do not proceed flag
			}
			//check invalid email
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('background-color','#FFDEDE'); //change border color to #FFDEDE   
				proceed = false; //set do not proceed flag				
			}
			//check invalid email
			var num_reg = /[0-9 -()+]+$/; 
			if($(this).attr("type")=="tel" && !num_reg.test($.trim($(this).val()))){
				if(num_reg.length < 10) {
					alert('Please enter a valid phone number.');
					return false;
				}
				$(this).css('background-color','#FFDEDE'); //change border color to #FFDEDE   
				proceed = false; //set do not proceed flag				
			}
		});
       
        if(proceed) //everything looks good! proceed...
        {
			//get input field values data to be sent to server
            post_data = {
				'user_name'		: $('input[name=name]').val(),
				'user_date'		: $('input[name=date]').val(),
				'user_age'		: $('input[name=age]').val(),
				'user_grade'	: $('input[name=grade]').val(),
				'user_pname'	: $('input[name=pname]').val(),
				'user_number'	: $('input[name=number]').val(),
				'user_email'	: $('input[name=email]').val(),
				'user_branch'	: $('input[name=branch]').val(),
				'msg'			: $('textarea[name=message]').val()
			};
            
            //Ajax post data to server
            $.post('php/sendmail.php', post_data, function(response){  
				if(response.type == 'error'){ //load json data from server and output message     
					output = '<br><br><div class="error">'+response.text+'</div>';
				}else{
				    output = '<br><br><div class="success">'+response.text+'</div>';
					//reset values in all input fields
					$("#enquiry_form input[required=true], #enquiry_form textarea[required=true]").val(''); 
					$("#enquiry_form").slideUp(); //hide form after success
				}
				$("#enquiry_results").hide().html(output).slideDown();
            }, 'json');
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#enquiry_form  input[required=true], #enquiry_form textarea[required=true]").keyup(function() { 
        $(this).css('background-color','');
        $("#result").slideUp();
    });
});
