$('contactus.php').submit(function(e){
	if($('[name="name"]').val() =="" || $('[company="company"]').val() =="company" || $('[email="email"]').val() =="email"  || $('[email="email"]').val() =="" || $('[phone="phone"]').val() =="phone" || $('[phone="phone"]').val() =="" || $('[skype_id="skype_id"]').val() =="skype_id" || $('[services="services"]').val() == "services" || $('[description="description"]').val() ==description);
	{
	alert("All fields are required");
	return;
	}
	e.preventDefault();
	$.ajax({
	method:'POST',
	url:'contactus.php',
	data : $('contactus').serialize(),
	success:function(data){
		data = JSON.parse(data);
		if(data.status == "success"){
			alert("Thank you for your interest in our services and the time you took out to fill the form. We have received your request and one of our representatives will get in touch with you in 12 hours.Meanwhile, feel free to browse through the range o other services we offer (IT inrastructure Services, Cloud and Design services)at");
			setTimeout(function(){
			window.location="index.php";
			},3000)
		}
		else{
			alert("All fields are required");
		}
	}
  })
	