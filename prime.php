<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="number" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $count=0;
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
       for($i=1;$i<=$name;$i++)
       {
           $t=$name%$i;
           if($t==0)
           {
               $count+=1;
           }
       }
       if($count==2)
       {
       echo"$name prime";
       }
       else
       {
       echo "$name not prime";
       } 
   }
}
?>

</body>
</html>
