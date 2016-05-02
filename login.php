
<?PHP
	 include_once("connection.php"); 
	  if( isset($_POST['txtUsername']) && isset($_POST['txtPassword']) ){
		    $username = $_POST['txtUsername'];
			$password = $_POST['txtPassword'];
			
			 $query = "SELECT username, password FROM tbl_client ". 
				" WHERE username = '$username' AND password = '$password'";

			$result = mysqli_query($conn, $query);	

			if($result->num_rows > 0)	{
				 if(isset($_POST['mobile']) && $_POST['mobile'] == "android"){
						echo "success";
						exit;
				 }
				 echo "login successful";
				  
				
			}
			else{
				echo "login failed!";
				
			}
	  }
?>

<html>
<head><title>Login|DominikPaluch</title></head>
    <body>
        <h1>Login Example|<a href=”http://www.drewpal.eu”>DominikPaluch</a></h1>
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            Username <input type="text" name="txtUsername" value="" /><br/>
            Password <input type="password" name="txtPassword" value="" /><br/>
            <input type="submit" name="btnSubmit" value="Login"/>
        </form>
    </body>
</html>
