<?php
	session_start();
	
	function arr()
	{
		$ones = array("","one","two","three","four","five","six","seven","eight","nine","ten","eleven","twelve","thirteen","fourteen","fifteen","sixteen","seventeen","eighteen","nineteen");
		$tenths = array("","","twenty","thirty","forty","fifty","sixty","seventy","eighty","ninety");
		$hundreds = array("","one hundred","two hundred", "three hundred", "four hundred", "five hundred","six hundred","seven hundred","eight hundred","nine hundred");
		$thousands = array("","one thousand","two thousand","three thousand","four thousand","five thousand","six thousand","seven thousand","eight thousand","nine thousand","ten thousand","eleven thousand","twelve thousand","thirteen thousand","fourteen thousand","fifteen thousand","sixteen thousand","seventeen thousand","eighteen thousand","nineteen thousand",);
		$tenthou= array("","twenty  ","thirty  ","forty ","fifty","sixty","seventy","eighty","ninety");
		
		
			$num = $_POST['n'];	
			
			$n = $num % 20; 
			$n1 = intval(($num % 100) / 10);
			$n2 = intval(($num % 1000)/100);
			$n3 = intval(($num % 20000)/1000);
			$n4 = intval(($num % 100000)/10000);
		
		
		echo "<br/><b> NUMBER: :</b> ",$num;
		echo "<br/> <b>RESULT:      </b>",$tenthou[$n4], " ",$thousands[$n3], " ",$hundreds[$n2]," ", $tenths[$n1], " ",$ones[$n];
	}
?>
<!doctype html>
<html>
<head>
	<title>Number-to-words</title>	
</head>
<body>
	<form method="post">
		<label><h2>Number to Words</h2></label>
		<label>Input number:<input type="text" name="n" value="<?php if(isset($_POST["n"])){ echo htmlentities($_POST["n"]); } ?>" /></label>
		<button type="submit" name="submit">Submit</button>
	</form>
	<div>
		<?php if(isset($_POST["submit"])) { arr(); } ?>
	</div>
</body>
</html>
