 <html>
 <head>
 <title>  LABEXAM Student Marks details inp </title>
 <style>
 input[type=number] {
    width: 40%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=text] {
    width: 40%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
}

input[type=submit]:hover {
    background-color: #45a049;

}
body{
	 align-content: center;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
 </style>
 <?php
 $name="";
?>
</head>
<body >
<form action="marksout.php" method="post">
<h1>  Input Student marks record  </h1>
Student ID :<input type="number" name="id" >
<br><br>
Student Name  :<input type="text" name="name" >
<br><br>
Test1 (out of 15): <input type="number" name="test1" >
<br><br>
Test2 (out of 15): <input type="number" name="test2" >
<br><br>
midsem (out of 20): <input type="number" name="mid" >
<br><br>
endsem (out of 50): <input type="number" name="end" >
<br><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
<html>