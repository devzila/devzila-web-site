$(document).ready(function(){
	console.log("abc")
 $('form').submit(function(e){

e.preventDefault();
console.log("b")

	if($('[name="name"]').val() !="" || $('[name="company"]').val() !=""  || $('[name="email"]').val() !=""  || $('[name="phone"]').val() !=""  || $('[name="skype-id"]').val() !=""  || $('[name="LEADCF2"]').val() !=""  || $('[name="description"]').val() !="" );
	{
	alert("All fields are required");
	return;
	}
		$.ajax({
		method:'POST',
		url:'contact-us.php',
		data : $('form').serialize(),
		success:function(data){
			data = JSON.parse(data);
			if(data.status == "success"){
				$('#successModal').modal('show');
				
			}
			else{
			
			}
		}
	  })
	  })	
}) 