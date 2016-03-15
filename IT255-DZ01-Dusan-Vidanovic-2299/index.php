<!DOCTYPE HTML> 
<html>
  <head>
    <style>
.error {color: #FF0000;}
          </style>
  </head>

<body> 
<?php
$nameErr = $lastnameErr = "";
$name = $lastname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Ima je obavezno";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["lastname"])) {
     $lastnameErr = "Prezime je obavezno";
   } else {
     $lastname = test_input($_POST["lastname"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Ime: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   Prezime: <input type="text" name="lastname">
   <span class="error">* <?php echo $lastnameErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Vase ime i prezime:</h2>";
echo $name;
echo "<br>";
echo $lastname;
?>

</body>
</html>