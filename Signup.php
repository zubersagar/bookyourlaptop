<?php

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
    <center>
        <div class="form">
<form action="" method="post">
	    <br><br><br><br>

	     <b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size="6">Register form</font></b>
		<br><br><br><br>

	
	      <font size="5" color="black">USERNAME:</font>
 	    <input type="text" name="name" placeholder="Enter Username" size="30">
	<br><br><br><br>
	      
    <font size="5" color="black">EMAIL:</font>
 	    <input type="text" name="email" placeholder="Enter Email" size="30">
	<br><br><br><br>


	     <font size="5" color="black">PASSWORD:</font>
	    <input type="password" name="password" placeholder="Enter Password"  size="30">
		<br><br><br><br>


	   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" style="height:40px; width:100px">Sign up</button>
	   <button type="reset" style="height:40px; width:100px">CANCEL</button>

       <p>Already have an account ? <a href="login.php">Login</a></p>
	   
	   <a href=""></a>
	  </form>
</div>

</center>
</body>
</html>


<?php 

if(isset($_POST['submit']))
{
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

    $insertquery = "INSERT into users(name,email,password) values ('$name','$email','$password')" ;
    
    $res = mysqli_query($con,$insertquery);

    if ($res)
    {
        ?>
       
       <script>
            alert("Registered Successfully");
        </script>
       
       <?php
    }

    else{
        ?>

<script>
            alert("Registration Failed") ;
        </script>
        <?php
    }

}
?>

