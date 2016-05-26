<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>

<style type="text/css">
.input{
	width: 50px;
}

</style>
</head>
<body>

<nav class="navbar navbar">
  <div class="container-fluid">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Account</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

	<div class="row">
		<textarea rows="1" cols="40">Insert Title</textarea>
	</div>

	<div class="row">
		<textarea rows="5" cols="40">Insert description</textarea>
	</div>
	<div id="Price">
		<h5>Price Range</h5>
		<input type="text" name="min" placeholder="Minimum">
		<input type="text" name="max" placeholder="Maximum">
	</div>


	<div class="choose_file">
        <span>Choose Picture File</span>
        <input name="Select File" type="file" />
        <input name="Select File" type="file" />
        <input name="Select File" type="file" />
    </div>

    <input type="submit" value="Submit">

</body>
</html>
