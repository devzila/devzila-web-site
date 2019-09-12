<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Devzila Software Solutions</title>
<?php include("inc/head.inc.php");?>
    <style>
    	.text-center{
      	text-align: center;
    	}
    </style>
</head>
<body>
<?php include("inc/header.inc.php");?>
    <div class="container">
        <h1 class="heading pt-3">LET’S GET IN TOUCH</h1>
      	<p class="sub-heading pt-4">Thank you for your interest in Devzila Software Solutions! Have any enquiry? Need to share your thoughts with us? Write to us, call us or drop in at the contact details mentioned below:</p>
      	<form  method="post" action="" id="form">
      	<table class="table-style pt-4">
			<tbody>
				<tr>
					<td class="half"><input class="input-styling" maxlength="100" name="name" required="required" type="text" placeholder="Name*"></td>
					<td class="half"><input class="input-styling" maxlength="100" name="company"  type="text" placeholder="Company"></td>
				</tr>
				<tr>
					<td class="half"><input class="input-styling" maxlength="100" name="email" required="required" type="email" placeholder="Email*"></td>
					<td class="half"><input class="input-styling"   type="tel" name="phone" pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{3}" maxlength="10"placeholder="Phone No"></td>
				</tr>
				<tr>
					<td class="half"><input class="input-styling" maxlength="50" name="skype-id" type="text" placeholder="Skype ID" ></td>
					<td style="width: 250px;"><select class="input-styling" name="LEADCF2"><option value="Services">Services</option><option value="Accounting System">Accounting System</option><option value="Application Development">Application Development</option><option value="Cloud Solution">Cloud Solution</option><option value="CMS">CMS</option><option value="Custom Web Application">Custom Web Application</option><option value="eCommerce Development">eCommerce Development</option><option value="DevOps">DevOps</option><option value="Enterprise Solutions">Enterprise Solutions</option><option value="Hire a Developer">Hire a Developer</option><option value="Internet Marketing">Internet Marketing</option><option value="Managed IT Solutions">Managed IT Solutions</option><option value="SEO">SEO</option><option value="Testing Services">Testing Services</option><option value="Visioncarma">Visioncarma</option><option value="Website Design">Website Design</option><option value="Web Security">Web Security</option></select></td>
				</tr>
				<tr>
					<td colspan="2"><textarea class="input-styling" maxlength="32000" name="description" placeholder="Project Description " ></textarea></td>
				</tr>
				<tr class="pull-right">
					<td colspan="2"><button type="submit" class="btn btn-danger btn-md mr-2" >Submit</button>
					<button type="reset" class="btn btn-secondary btn-md">Reset</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	</div>
<?php include("inc/footer.inc.php");?>
</body>
</html>
