<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<style>
		.error{color:red}
	</style>
	 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>

	<script>
		$(document).ready(function(){
			$('#robsform').validate({
				rules : {
					name : {
						required : true,
						minlength : 2
					},
					number : {
						range: [13, 23]
					}
				},
				messages : {
					name : {
						required : "Please enter your name",
						minlength : "Your name must consist of at least 2 characters"
					},
					number : {
						range: "please enter a number between 13 and 23"
					}
				}
			});
		});
	</script>
</head>
<body>
	<form id="robsform">
		<div>
			<input type="text" required="required" name="name" />
		</div>
		<div>
			<input type="number" required="required" name="number" />
		</div>
		<input type="submit" />
	</form>
</body>
</html>