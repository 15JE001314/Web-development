 <html>
 <head>
 <title>  LABEXAM Student's marks details output php file </title>
 <style>
 body{
 	text-align: center;
 	color: blue;
    font-family: verdana;
    font-size: 150%;
    background color: #F5F5DC;
 }
 </style>
 <?php
 $id=$test1=$test2=$mid=$end=0;
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "labexam";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
  echo "Connected to database successfully<br>";
 
?>
</head>
<body >
<?php  
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $id=$_POST['id'];
 $name=$_POST['name'];
 $test1=$_POST['test1'];
 $test2=$_POST['test2'];
 $mid=$_POST['mid'];
 $end=$_POST['end'];

 // VALIDATION PART
  if(!empty($test1)){
  	  if($test1>15){
  	  echo "Enter valid marks<br>";}
	  if($test1 < 0.35 * 15){
      echo "Failed in test1<br>";}
      else {
      echo "Passed in test1<br>";}
  }
  else{
  	echo "Absent in test1<br>";
  }
 
 if(!empty($test2)){
  	  if($test2>15)
  	  echo "Enter valid marks<br>";
	  if($test2 < 0.35 * 15)
      echo "Failed in test2<br>";
      else
      echo "Passed in test2<br>";
  }
  else{
  	echo "Absent in test2<br>";
  }

  if(!empty($mid)){
  	  if($mid>20)
  	  echo "Enter valid marks<br>";
	  if($mid < 0.35 * 20)
      echo "Failed in mid exam<br>";
      else
      echo "Passed in mid exam<br>";
  }
  else{
  	echo "Absent in mid exam<br>";
  }

   if(!empty($end)){
  	  if($end>50)
  	  echo "Enter valid marks<br>";
	  if($end < 0.35 * 50)
      echo "Failed in end sem<br>";
      else
      echo "Passed in end sem<br>";
  }
  else{
  	echo "Absent in end exam<br>";
  }
 
  $total=$test1+$test2+$mid+$end;
  if($total<50)
  echo "HI ".$name."<br>You FAILED overall<br>";
  else
   echo "HI ".$name."<br>You PASSED overall<br>";

// Record Insertion part

 $sql = "INSERT INTO marks (s_id,s_name,test1,test2,midsem,endsem)
         VALUES ('$id','$name','$test1','$test2','$mid','$end')";
 if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully<br>";
    }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>
</body>
<html>