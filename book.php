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

</head>


<title>book</title>

<body background="ht.jpg">

<form action="" method="post">

<center><font color="black" size="6"> Book your Laptop</font></center>

<div align="center">

<hr><table><tr>

<td width="900" align="center">


<nav width="1000">

<center><font size="4" color="green">


<a href="main.php"><font color="white" size="5">Home</a>|</font>
<a href="Car.php"><font color="white" size="5">laptops</a>|</font>
<a href="book.php"><font color="white" size="5">Booking</a>|</font>
<a href="contact.php"><font color="white" size="5">Contact us</a></font>



</nav>


</td>

</table>

<font color="yellow" size="6">Please Fill The Following Details</font><br><br><br>

<center>
<form action="regis.asp" method="get" name="f1">
<fieldset width="500px">
<legend>Booking</legend>
<p><label><font color="black" size="5"><b>Full Name:</b>

<input name="name" type="text" Size="30"> </input></font></label></b><br>
<br>
<br>

<p ><b><label><font color="black" size="5"><b>Contact No:  </b> 
<input name="contact" type="text" size="30"> </input></font></label></b><br>
<br>
<br>

<p ><b><label><font color="black" size="5"><b>Address:  </b> 
<input name="address" type="text" size="30"> </input></font></label></b><br>
<br>
<br>

<label><font color="black" size="5"><b>Quantity: </b>
<input name="quantity" type="text" size="30"> </input></font></label><br>
<br>
<br>



<label><font color="black" size="5"><b>Model No:   </b>
<input name="model" type="text" size="30"> </input></font></label><br>
<br>
<br> 


<input type="reset" height="20" width="20" value="RESET"></input>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" style="height:40px; width:100px">Book</button>

</center><br>
<br>
<br>
</fieldset>
<font color="white" size="6"><i>Our Agent Will Contact You.</i><br>
Our Contact details are given in the<br>
<b>"Contact Us"</b> option.
</font>

</form><br>
<br>
<br>
<br>
<br>

<article>

<footer>



</footer>

</article>
</form>
</body>

</html>


<?php 

if(isset($_POST['submit']))
{
    $name = $_POST['name'] ;
    $contact = $_POST['contact'] ;
    $address = $_POST['address'] ;
    $quantity = $_POST['quantity'] ;
    $model = $_POST['model'] ;

    $insertquery = "INSERT into orders(name,contact,address,model,quantity) values ('$name','$contact','$address','$quantity','$model')" ;
    
    $res = mysqli_query($con,$insertquery);

    if ($res)
    {
        ?>
       
       <script>
            alert("Our Agent will Contact you soon");
        </script>
       
       <?php
    }

    else{
        ?>

<script>
            alert("Order Failed") ;
        </script>
        <?php
    }

}
?>