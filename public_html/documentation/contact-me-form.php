<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<!-- Bootstrap Latest compiled and minified CSS -->
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous" />
			<!-- Optional Bootstrap theme -->
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"/>
			<!-- ////////////////////////////////////////////////
			//// LINK TO YOUR CUSTOM CSS FILES HERE
			///////////////////////////////////////////////////// -->
			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
			<!-- js-cookie (for capstone) -->
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
			<!-- jQuery form validation and additional methods (for capstone) -->
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/additional-methods.min.js"></script>
			<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

			<title>Contact Me</title>
		</head>

		<body>

			<h1>Contact Me</h1>

			<!-- The div class="form-wrap" is the black box containing the form. It's set to a column width of 12 for small screens, and a column width of 6 for medium screens on up -->
			<div class="col-xs-12 col-md-7 form-wrap">
				<!-- Form is centered within it's container, and is set to 10 be columns wide RELATIVE TO IT'S CONTAINER, and offset to the right by one column. See classes: col-xs-offset-1 & col-xs-10 -->
				<form method="get" action="#" id="contact-me" name="contact-us" class="form-horizontal col-xs-10 col-xs-offset-1">

					<div class="form-group">
						<!-- Labels for each field are places within a <label> tag. Use the "for" attribute. the class="control-label" is for styling. -->
						<label for="contactMeEmailName" class="control-label">Name</label>
						<!-- the div class="input-group" contains both the text field and the icon to the left -->
						<div class="input-group">
							<!-- this div and span contains the glyphicon to the left. aria-hidden is so that screen readers don't read this element -->
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</div>
							<!-- text field input. pay attention to the id, placeholder text, type, and placeholder attributes -->
							<input type="text" class="form-control" id="contactMeEmailName" name="contactMeName"  placeholder="Your name here." maxlength="150" />
						</div>
					</div>

					<div class="form-group">
						<label for="contactMeEmail" class="control-label">Email</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<input type="email" id="contactMeEmail" name="contactMeEmail" class="form-control" maxlength="150" placeholder="your.email@something.com"/>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label" for="txtareaComments">What's on your mind!</label>
						<textarea class="form-control" rows="5" id="txtareaComments" maxlength="500" placeholder="500 characters max."></textarea>
					</div>

					<div class="form-group">
						<!-- the following <a> tag has been styled as a button with class="btn" -->
						<button type="reset-form" class="btn" role="button">Reset Form</button>
						<button type="submit" class="btn">Submit</button>
						<button type="cancel" class="btn">cancel</button>
					</div>
				</form>
			</div> <!-- CLOSE FORM WRAP -->
			</body>
	</html>
