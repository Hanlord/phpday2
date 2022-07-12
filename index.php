<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpday2</title>
</head>
<body>

<!-- exercise1 -->
<p>POST METHOD</p>
       <form action="index.php" method ="POST">
           Name: <input type="text"  name="name" />
           Surname: <input type ="text" name="surname" />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       if( isset($_POST['submit']))
       {
           if( $_POST["name"] || $_POST["surname"] )
           {
               echo "Welcome ". $_POST[ 'name']. $_POST[ 'surname']. "<br />";
           }else
           echo "please insert your name, or please insert your surname."."<br />";
       }
       ?>
<!-- exercise2 -->
<?php


function divideNum($num1, $num2){
    
  $result = $num1 / $num2;
  echo $result ."<br />";
}
divideNum(10,5);
?>

<!-- exercise 3 -->
<?php
function addNum($math, $physics, $english){
    $result = $math + $physics + $english;
    $result2 = $result / 3;
    echo "sum= $result" . " average = $result2" ."<br />";
}
addNum(3,4,5)
?>
<!-- exercise 4 -->
<?php
function formula($width,$height,$depth){
    $area = $width * $height;
    $volume = $width * $height * $depth;
    echo "area = $area" . " volume = $volume" ."<br />";
}
formula(7,2,5)
?>

<!-- exercise 5 -->
<?php
function timeC($number){
     $hour = floor($number/60);
     $rest = $number%60;
     $minute = $rest;
    echo "$hour hour(s). and $minute minute(s)";
}
timeC(200)
?>

<!-- exercise 6 -->
<p>POST METHOD</p>
       <form action="index.php" method ="POST">
           Name: <input type="text"  name="name" />
           Surname: <input type="text"  name="surname" />
           Age: <input type ="text" name="age" />
           
           <input  type="submit" name="submit"  />
       </form>
       <form action="index.php" method ="GET">
           Hobbies: <input type="text"  name="hobbies"/>
           <input  type="submit" name="submit2"  />
        </form>
<?php
 if( isset($_POST['submit']))
 {
     if( $_POST["name"] || $_POST["age"] ||$_POST["surname"])
     {
        if(strlen($_POST['name']) >5){
            $color = 'green';
         }else{
            $color = 'red';
         }
         echo "<span style='color: $color'>Welcome ". $_POST[ 'name']  ." ". $_POST[ 'surname']. "</span>"."<br />";
         echo "You are " . $_POST['age']. " years old.";
         
     }
 }
 if(isset($_GET['submit2'])){
    if($_GET["hobbies"]);
 }
 echo "My Hobby is".$_GET['hobbies'].".";
?>
</body>
</html>