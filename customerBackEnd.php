<!doctype html>
<html>
	<head>
		<title>Melee Shop</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div class="center">
	<p>
		<h1>Purchase Sucsessful!</h1>
		<h2>Your Order Reciept</h2>
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	echo "<p>";

	$marthQ = $foxQ = $turnipQ = $shipping = $total = 0;
	$marth = $fox = $turnip = 0;
	$user = $pwd = "";

	$marthQ = $_POST["marthqt"];
	$foxQ = $_POST["foxqt"];
	$turnipQ = $_POST["turnipqt"];

	$shipping = $_POST["ship"];

	$user = $_POST["username"];
	$pwd = $_POST["pwd"];

	$marth = 100 * $marthQ;
	$fox = 300 * $foxQ;
	$turnip = 3 * $turnipQ;
	$total = $marth + $fox + $turnip;

	echo "<table>";
	echo "<tr><th></th><th>Cost</th><th>Quantity</th><th>Subtotal</th></tr>";
	echo "<tr><th>Falchion</th><td>$100</td><td>" . $marthQ . "</td><td>$" . $marth . ".00</td></tr>";
	echo "<tr><th>Blaster</th><td>$300</td><td>" . $foxQ . "</td><td>$" . $fox . ".00</td></tr>";
	echo "<tr><th>Turnip</th><td>$3</td><td>" . $turnipQ . "</td><td>$" . $turnip . ".00</td></tr>";

	if ($shipping == 0) {
		echo "<tr><th>Shipping</th><td colspan='2'>7-Day Shipping</td><td>$" . $shipping . ".00</td></tr>";
	}
	if ($shipping == 50) {
		echo "<tr><th>Shipping</th><td colspan='2'>Overnight Shipping</td><td>$" . $shipping . ".00</td></tr>";
	}
	if ($shipping == 5) {
		echo "<tr><th>Shipping</th><td colspan='2'>3-Day Shipping</td><td>$" . $shipping . ".00</td></tr>";
	}

	echo "<tr><th colspan='3'>Total</th><th>$" . $total . ".00</th></tr>";
	echo "</table><br>";
	echo "Your Username: " . $user . " <br>";
	echo "Your Password: " . $pwd . " <br>";
	echo "</p>";
?>
	
	</div>
	</body>
</html>