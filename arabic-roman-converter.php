<?php
	session_start();
	
	function form_submitted()
	{
		
		$eqo = array("", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX");
		$eqt = array("", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC");
		$eqh = array("", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM");
		$eqth = array("", "M", "MM", "MMM");
		$num = trim($_POST["num"]);
		
		
		if($num < 10)
		{
			
		$ans = $num % 10;
		echo "<br>", $eqo[$ans];

		}
		else if($num == 0 || $num == 10 || $num == 20 || $num == 30 || $num == 40 || $num == 50 || $num == 60 || $num == 70 || $num == 80 || $num == 90 )
		{	
			$ans1 = $num / 10;
		echo "<br>", $eqt[$ans1];
		}
		
		else if($num == 0 || $num == 100 || $num == 200 || $num == 300 || $num == 400 || $num == 500 || $num == 600 || $num == 700 || $num == 800 || $num == 900 )
		{	
			$ans3 = $num / 100;
			echo "<br>", $eqh[$ans3];
		}
		
		else if($num == 0 || $num == 1000 || $num == 2000 || $num == 3000)
		{	
			$ans4 = $num / 1000;
			echo "<br>", $eqth[$ans4];
		}

		else if($num > 1000 && $num < 4000)
		{	
			
			$ans4 = $num / 1000;
			$ans3 = intval(($num % 1000) / 100);
			$ans2 = intval((($num % 100) % 100) /10);
			$ans = intval((($num % 100) % 100) %10);
			echo "<br>", $eqth[$ans4] . $eqh[$ans3] . $eqt[$ans2] . $eqo[$ans];
			
		
		}	
		
		else if($num > 100)
		{	
			$ans3 = $num / 100;
			$ans2 = intval(($num % 100) / 10);
			$ans = intval(($num % 100) % 10);
			echo "<br>", $eqh[$ans3] . $eqt[$ans2] . $eqo[$ans];
	
		
		}	
		
		
		else if($num > 10)
		{	
			
				
			$ans2 = intval(($num % 100) / 10);
			$ans = intval(($num % 100) % 10);
			echo "<br>", $eqt[$ans2] . $eqo[$ans];
			
		}	
			
		else
		{
			echo "<br> You Entered an Invalid Data or Exceed the Range of Numbers. Please Check your Data";
		
		}
		
		
		
		
		
		
		
		
//else
//{}
		
		//$name = trim($_POST["name"]);
		//echo "hello ". $name;
	}
?>
<!doctype html>
<html>
<head>
	<title>New PHP</title>	
</head>
<body>
	<form method="post">
		<h1>
			Arabic to Roman Numeral Converter
		</h1>
		<label>Enter a Number to be converted:	<input type="text" name="num" value="<?php if(isset($_POST["num"])){ echo htmlentities($_POST["num"]); } ?>" /></label>
		<button type="submit" name="submit">Convert</button>
	</form>
	<div>
		<?php if(isset($_POST["submit"])) { form_submitted(); } ?>
	</div>
</body>
</html>
