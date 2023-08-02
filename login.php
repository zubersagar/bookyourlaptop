<?php


session_start();

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$db = 'laptop' ;

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
    ?>
    <script>
    alert('Connection Successful');
    </script>
    <?php
}

else{
    echo "No Connection" ;
}

?>

<html>
<head>
<style>	
	body
	{
	background:url("rog back.jpg");
	background-size:cover;
	margin:0;
	}
	



</style>
</head>
<body>
	
	   <form action="" method="post">
	    <br><br><br><br>

	     <b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size="6">LOGIN FORM</font></b>
		<br><br><br><br>

	
	      <font size="5" color="black">USERNAME:</font>
 	    <input type="text" name="name" placeholder="Enter Username" size="30">
	<br><br><br><br>


	     <font size="5" color="black">PASSWORD:</font>
	    <input type="password" name="password" placeholder="Enter Password"  size="30">
		<br><br><br><br>


	   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" style="height:40px; width:100px">LOGIN</button>
	   

	   <p>Already have an account ? <a href="Signup.php">Login</a></p>

	  </form>

	
</body>
</html>

<?php 


if (isset($_POST['name']))
{
    $name=$_POST['name'] ;
    $password=$_POST['password'] ;

    $sql = "SELECT * from users where name='$name' AND password='$password' limit 1" ;

    $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result)==1)
    {

      $_SESSION['email'] = $email ;
      $_SESSION['name'] = $name ;


        ?>
        <script>
            alert("Login Successful !");
            location.replace("main.php");
        </script>
        
        <?php
        exit();
    }

    else{
        ?>

        <script>
            alert("Incorrect Username or Password") ;
        </script>

        <?php
    }
}


?>
