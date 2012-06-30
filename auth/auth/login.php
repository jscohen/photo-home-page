<!doctype html>
<html>
 <head>
  <meta charset="utf-8"/>
  <title>Welcome - Please log in!</title>
  <style type="text/css">
    label {
	  display : block;
	  color: darkred;
	  font-weight: bold 
    }
  </style>
 </head>
 <body>
    <form method="post" action="authenticate.php">
	  <label>Email</label>
	  <input placeholder="email" type="text" name="email" id="email"/>
	  <label>Password:</label>
	  <input placeholder="password" type="password" name="password" id="password"/>
	  <div style="margin-top: 10px">
		 <button type="submit">Login</button>
	  </div>
	</form>
 </body>
</html>
 