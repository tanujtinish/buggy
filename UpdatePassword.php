<!DOCTYPE html>
<html lang="en">
	<title>Sign Up</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">-->
    <style type="text/css">
      #mainbody{
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;

      }
      .bg-1{
        background-color: #981a66;
        color: white;
      }
      .img-responsive{
        margin: 0 auto;
      }
      #signupform{
        padding-top: 75px;
        margin: 0 auto;
        width: 25%;
      }
	  .inv {
  display: none;
}
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script >

	var a;
	var check = function() 
	{
		if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value) 
	    {
		    document.getElementById('message').style.color = 'green';
		    document.getElementById('message').innerHTML = 'matching';
			document.getElementById('submit').disabled = false;
	    } 
	    else 
	    {
		    document.getElementById('message').style.color = 'red';
		    document.getElementById('message').innerHTML = 'not matching';
			document.getElementById('submit').disabled = true;
        }
    }
    

</script>
  </head>
  <body id="mainbody">
   <img class ="img-responsive" src="ntc-logo.png" i>
   <div class="container-fluid bg-1 text-center">
   <h3 class="margin"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
   </div>

   <form id="signupform" method="post" action="UpdatePassword1.php" >
    <div class="form-group">

	  <label for="">New Password:</label>
      <input type="password" name="Password" class="form-control" id="password" onkeyup='check();' /><br>
      <label for="">Confirm New Password:</label>
      <div><input type="password" name="confirm_password" class="form-control" id="confirm_password"  onkeyup='check();' > <span id='message'></span></div><br>
      
	  <div>
	  <button id="submit" class="btn btn-default btn-primary">Change Password</button>
	  </div>
	  
    </div>
   </form>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>