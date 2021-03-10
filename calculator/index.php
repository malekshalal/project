
<?php

$targetLength = -1;
$prices = array('30' => array(26, 26, 26, 28, 28, 32, 34, 35), 
				'40' => array(35, 35, 35, 37, 37, 40, 42, 43));
$width = '30';
$cntRows = 1;

if (isset($_GET['width'])) {
	$width = $_GET['width'];
}

// if (isset($_GET['row'])) {
// 	$cntRows = $_GET['row'];
// }

if (isset($_GET['length'])) {
	if ($_GET['length'] >= 1 && $_GET['length'] <= 10000 + 5) {
		$targetLength = $_GET['length'];
		$targets = array();

		require_once('target.php');

		$lengths = array(50, 60, 70, 80, 90, 100, 110, 117);

		for ($i = 0; $i <= $targetLength + 5; $i ++) {
			$target = new Target();
			$mnLength = -1;

			if ($i > 120) {
				$targets[$i - 120] = new Target();
			}

			foreach ($lengths as $value) {
				$prev = $i - $value;

				if ($i == $value) {
					$target->addElement($value);
					array_push($targets, $target);
					$mnLength = 0;
					break;
				} 

				if ($prev > 0 && $targets[$prev]->length > 0 ) {
					if ($mnLength == -1 || $targets[$prev]->length < $mnLength) {
						$mnLength = $targets[$prev]->length;
					}
				} 
			}

			if ($mnLength == 0) {
				continue;
			}

			foreach ($lengths as $value) {
				$prev = $i - $value;
				if ($prev > 0 && $targets[$prev]->length == $mnLength ) {
					$t = new Target($targets[$prev]);
					$t->addElement($value);
					$target->merge($t);
				}
			}
			array_push($targets, $target);
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form method="GET" action="?">
		<label for="width">Choose a width:</label>
		<select name="width" id="width" >
			<?php
			foreach ($prices as $key => $value) {
				if ($width == $key) {
					echo '<option value="' . $key . '" selected>' . $key . '</option>';
				} else {
					echo '<option value="' . $key . '">' . $key . '</option>';
				}
			}
			?>
		</select>

		Length: <input type="number" id="length" name="length" min="1" max="10000" value="<?php if ($targetLength > 0) echo $targetLength; ?>">	
		<!-- Number of Rows: <input type="number" name="row" min="1" value="<?php echo $cntRows; ?>">
		<input type="submit" value="Calculate"> -->
	</form>
	
	<?php
		if ($targetLength > 0) {
			$i = $targetLength;

			while ( $i > 0 ) {
				if ($targets[$i]->length > 0) {
					break;
				}

				$i --;
			}

			if ($i == 0) {
				echo "<br><strong>Sum: 0<br>";
				echo "Length: 0</strong><br><br>";
			}

			for ($j = $i - 5; $j <= $i + 5; $j ++) {
				if ($j <= 0 || $targets[$j]->length == 0) continue;

				echo "<br><strong>Sum: " . $j . "<br>";
				echo "Length: " . $targets[$j]->length . "</strong><br><br>";
				
				// $cntShelves = $cntRows * $targets[$j]->length;
				// $cntBeams = ($targets[$j]->length + 1) * 2;

				foreach ($targets[$j]->elements as $element) {
					echo "[";
					$strPrice = ' (price: ';
					$sum = 0;

					$first = true;
					foreach ($element as $value) {
						
						if (!$first) {
							echo ", ";
							$strPrice .= ' + ';
						} 

						$strPrice .= $prices[$width][ array_search($value, $lengths)];
						$sum += $prices[$width][ array_search($value, $lengths)];

						echo $value;
						$first = false;
					}
					echo "]";
					$strPrice .= ' = ' . $sum . ' )';
					echo $strPrice . "<br><br>";
				}
			}
		}
	?>
</body>
</html>