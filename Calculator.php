<?php
	session_start();
	
	function ADD()
	{
		$fnum = trim($_POST["fnum"]);
		$snum = trim($_POST["snum"]);
		$sum = $fnum + $snum;
		echo number_format($sum,2);
	}
	function SUBTRACT()
	{
		$fnum= trim($_POST["fnum"]);
		$snum = trim($_POST["snum"]);
		$difference = $fnum - $snum;
		echo number_format($difference,2) ;
	}
	function MULTIPLY()
	{
		$fnum = trim($_POST["fnum"]);
		$snum = trim($_POST["snum"]);
		$product = $fnum * $snum;
		echo number_format($product,2);
	}
	function DIVIDE()
	{
		$fnum = trim($_POST["fnum"]);
		$snum = trim($_POST["snum"]);
		$quotient = $fnum / $snum;
		echo number_format($quotient,2);
	}
	function EXPONENT()
	{
		$fnum = trim($_POST["fnum"]);
		$snum = trim($_POST["snum"]);
		$temp=$fnum;
		for($i=1;$i<$snum;$i++)
		{	
			$fnum = $fnum * $temp; 
		}
		echo number_format($fnum,2);
	}
	

?>
<!doctype html>
<html>
<head>
	<title>New PHP</title>	
</head>
<body>
	<form method="post"><center>
		<label>First Value:<input type="number" name="fnum" value="<?php if(isset($_POST["fnum"])){ echo htmlentities($_POST["fnum"]); } ?>" /></label>
		<br>
		<label>Second Value:<input type="number" name="snum" value="<?php if(isset($_POST["snum"])){ echo htmlentities($_POST["snum"]); } ?>" /></label>
	<br>
		<button type="submit" name="+">Add(+)</button>
		<button type="submit" name="-">Subtract(-)</button>
		<button type="submit" name="*">Multiply(*)</button>
		<button type="submit" name="/">Divide(/)</button>	
		<button type="submit" name="Ex">Raise(^)</button>
	</center></form>
	<div><center><br><br>
	<font size ="20"; bgcolor="yellow";>	<?php if(isset($_POST["+"])) { ADD(); } ?> </font>
	<font size ="20">	<?php if(isset($_POST["-"])) { SUBTRACT(); } ?> </font>
	<font size ="20">	<?php if(isset($_POST["*"])) { MULTIPLY(); } ?> </font>
	<font size ="20">	<?php if(isset($_POST["/"])) { DIVIDE(); } ?> </font>	
	<font size ="20">	<?php if(isset($_POST["Ex"])) { EXPONENT(); } ?> </font>	
	</center></div>
</body>
</html>
