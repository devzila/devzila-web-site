<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Devzila Software Solutions</title>
        <?php include("inc/head.inc.php");?>
    </head>
    <body>
   	<?php include("inc/header.inc.php");?>
     	<div class="container">
      		<h1 class="heading pt-3">LET’S GET IN TOUCH</h1>
      		<p class="sub-heading pt-4">Thank you for your interest in Devzila Software Solutions! Have any enquiry? Need to share your thoughts with us? Write to us, call us or drop in at the contact details mentioned below:</p>
      	<div>
      		<form  method="post" action="contactus.php">
      		<table class="table-style pt-4">
				<tbody>
					<tr>
						<td class="half"><input class="input-styling" maxlength="100" name="name" required="required" type="text" placeholder="Name*"></td>
						<td class="half"><input class="input-styling" maxlength="100" name="company" required="required" type="text" placeholder="Company*"></td>
					</tr>
					<tr>
						<td class="half"><input class="input-styling" maxlength="100" name="email" required="required" type="text" placeholder="Email*"></td>
						<td class="half"><input class="input-styling" maxlength="9999999999" name="phone" required="required" type="tel"placeholder="Phone No*"></td>
					</tr>
					<tr>
						<td class="half"><input class="input-styling" maxlength="50" name="skype-id" type="text" placeholder="Skype ID"></td>
						<td style="width: 250px;"><select class="input-styling" name="LEADCF2"><option value="Services">Services</option><option value="Accounting System">Accounting System</option><option value="Application Development">Application Development</option><option value="Cloud Solution">Cloud Solution</option><option value="CMS">CMS</option><option value="Custom Web Application">Custom Web Application</option><option value="eCommerce Development">eCommerce Development</option><option value="DevOps">DevOps</option><option value="Enterprise Solutions">Enterprise Solutions</option><option value="Hire a Developer">Hire a Developer</option><option value="Internet Marketing">Internet Marketing</option><option value="Managed IT Solutions">Managed IT Solutions</option><option value="SEO">SEO</option><option value="Testing Services">Testing Services</option><option value="Visioncarma">Visioncarma</option><option value="Website Design">Website Design</option><option value="Web Security">Web Security</option></select></td>
					</tr>
					<tr>
						<td colspan="2"><textarea class="input-styling" maxlength="32000" name="description" placeholder="Project Description "></textarea></td>
					</tr>
					<!-- <tr>
						<td class="half"><input class="input-styling" maxlength="80" name="enterdigits" type="text" placeholder="Enter the Captcha" required data-error="Please complete the Captcha"></td>
						<td><img id="imgid" src="https://crm.zoho.com/crm/CaptchaServlet?formId=d315f8ee31049ddd780e2fe30240d7c703441fa3945626d4957af1ddf3270f8f&amp;grpid=1ddd392d8b669efb9b79b7201718f11702fdfcf7a0fc0bb7624c85602452733c"><br /><a class="reload_btn btn btn-danger btn-sm">Reload</a></td>
					</tr> -->
					<tr class="pull-right">
						<td colspan="2"><button type="submit" class="btn btn-danger btn-md mr-2">Submit</button><button type="reset" class="btn btn-secondary btn-md">Reset</button></td>
					</tr>
				</tbody>
			</table>
		</form>
		</div>
		</div>
<?php include("inc/footer.inc.php");?>
</body>
</html>
