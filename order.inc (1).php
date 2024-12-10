<?php
	include 'includes/autoloader.inc.php';

	$cart = new Cart();
	$order = new Order();
	$carts = $cart->get_cart($_SESSION['id']);

	$count = 0;
	$total = 0;
	$result = "";
	while($row = $carts->fetch_assoc()){
		$total += $row['product_price'];
		$count++;
	}

	if(isset($_POST['order-submit'])){
		$order->place_order();
		$order->cart_to_order($_POST['user_id']);
		$order->clear_cart($_POST['user_id']);
		$_SESSION['cart'] = 0;
		unset($_POST);
		$count = 0;
		$total = 0;
		
		// Set a session variable to show a success alert
		$_SESSION['order_success'] = true;
	}

	// Check if the order was successfully placed and show the success alert
	if (isset($_SESSION['order_success']) && $_SESSION['order_success'] === true) {
		echo "<script type='text/javascript'>
				alert('Your order has been successfully placed!');
				// Optionally, redirect to another page after the alert
				window.location.href = 'index.php'; // Replace with your thank you page URL
			</script>";
		
		// Unset the session variable to avoid showing the alert again after page reload
		unset($_SESSION['order_success']);
	}
?>
