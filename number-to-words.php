<?php
	session_start();
	
	function convert()
	{
		$result = "";
		$num = trim($_POST["num"]);
		if($num == 0)
			$result = "zero";
		else if($num == 1000000000)
			$result = "one billion";
		else {
			$hundred = intval($num % 1000 / 100);
			$tensThou = intval($num % 100000 / 1000);
			$hundredsThou = intval($num % 1000000 / 100000);
			$tensMillions = intval($num % 100000000 / 1000000);
			$hundredMillions = intval($num % 1000000000 / 100000000);
			$ones = array(
				"", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", 
				"eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"
			);
			
			$tens = array(
				"", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"
			);
			if($hundredMillions)
				$result .= $ones[$hundredMillions]. " hundred " ;
			if($tensMillions) {
				if($tensMillions > 19)
					$result .= $tens[intval($tensMillions/10)]." " .$ones[intval($tensMillions%10)];
				else
					$result .= $ones[intval($tensMillions)];
			}
			if($tensMillions || $hundredMillions)
				$result .= " million ";
			if($hundredsThou)
				$result .= $ones[$hundredsThou]. " hundred " ;
			if($tensThou) {
				if($tensThou > 19)
					$result .= $tens[intval($tensThou/10)]." " .$ones[intval($tensThou%10)];
				else
					$result .= $ones[intval($tensThou)];
			}
			if($tensThou || $hundredsThou)
				$result .= " thousand ";
			if($hundred)
				$result .= $ones[$hundred] . " hundred ";
			if($num > 19)
				$result .= $tens[intval($num % 100 / 10)] ." ". $ones[intval($num%10)];
			else
				$result .= $ones[intval($num)];
		}
		echo $result;
	}
?>
<!doctype html>
<!doctype html>
<html>
<head>
	<title>Number To Words</title>	
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>
					<label>Number</label>
				</td>
				<td>
					<input type="number" min="1" max="1000000000"name="num" value="<?php if(isset($_POST["num"])){ echo htmlentities($_POST["num"]); } ?>"/>
				</td>
				<td>
					<input type="submit" value="Convert" name="convert"/>
				</td>
			</tr>
		</table>
		<div>
			<?php if(isset($_POST["convert"])) { convert(); } ?>
		</div>
	</form>
</body>
</html>
