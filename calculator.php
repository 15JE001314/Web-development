<?php 
$result = "";
    class Calculator
    {
        var $a;
        var $op;
    public function calculate(string $a,string $op)
    {
        $arr=explode(",",$a); 
        switch($op)
        {
            case "+":
				$ans=0;
				for ($i = 0; $i < count($arr); $i++) {
					$ans+=$arr[$i];
					}
				return $ans;
            break;

            case "-":
				$ans=$arr[0];
            for ($i = 1; $i < count($arr); $i++) {
					$ans-=$arr[$i];
					}
				return $ans;
            break;

            case "*":
            $ans=$arr[0];
            for ($i = 1; $i < count($arr); $i++) {
					$ans*=$arr[$i];
                    echo $ans;
					}
				return $ans;
            break;

            case "/":
            $ans=$arr[0];
            for ($i = 1; $i < count($arr); $i++) {
					$ans/=$arr[$i];
					}
				return $ans;
			break;

            default:
            return "Error!";
        }   
    }
    }
    $item=new Calculator();
function test_input($data) {
  if($data<0)
  {
     echo "The result is negative so taking mod we get ";
      $ans=($data*-1);
      echo $ans;
      return -1;
  }
  
}

if(isset($_POST['submit']))
{   
    $result = $item->calculate($_POST['n1'],$_POST['op']);
}
?>
<style>
body{
background-image :url("aasd.jpg");
}
</style>
<body background="">
 <img src = ""/>
<form method="post">
    <style>
        </style>
        <br><br>
            <h1>
                <center><u>CALCULATOR</u></center>
            </h1>
          <center> <font size="5">Enter the numbers :-></font>
        <input type="text" name="n1"></center>
        <center><font color="red"> * Numbers should be separated by comma(,) </font></center>
        <br><br>
        <center><font size="5">Select Operator</font>
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        </center>
        <br><br><br>
        <center><input type="submit" name="submit" value="      APPLY          ">
        <strong><font size="5"><br><br> The Result obtained is -> <?php 
    if(test_input($result)!=-1)
    {
           echo $result;       
    } ?>
            </font>
       </center>
</form>
 </body>
