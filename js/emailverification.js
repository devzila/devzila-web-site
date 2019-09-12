$(document).ready(function(){
 $('form').submit(function(e){
 	e.preventDefault();
  // let name = $('[name="name"]').val();
	if($('[name="name"]').val() == null || $('[name="email"]').val() == "email")
	{
		alert('Please fill all the required(*) fields')
	
		return;
	}
		$.ajax({
		method:'POST',
		url:'contactus.php',
		data : $('form').serialize(),
		success:function(data){
			// alert(data);
			// console.log(data);
			data = JSON.parse(data);
			if(data.status == "success"){
        swal({
        title: "Thank You!",
        text: "Thank You for your interest in our services and the time you took out to fill the form. We have received your request and one of our representatives will get in touch with you within 12 hours. Meanwhile, feel free to browse through the range of other services we offer (IT infrastructure Services, Cloud and Design Services)at</br></br>ccd",
        icon: "img/logos/logo-shortcut.png",
        });
				
			}
			else{
			
			}
		}
	  });
	  });	
}); 