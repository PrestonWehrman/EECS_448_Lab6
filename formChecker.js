'use strict';

function formValidate() {
	let msg = "ERROR: One or more input fields is incorrectly filled:\n";
	let pass = true;
        
	let marthQuantity = document.getElementById("marthqt").value;
	let foxQuantity = document.getElementById("foxqt").value;
	let turnipQuantity = document.getElementById("turnipqt").value;
	
	let shipping = document.getElementsByName("ship");
	let shipPass = false;
        
	let username = document.getElementById("username").value;
        
	const emailVal = email => {
		let emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		return emailReg.test(email);
	};
	let pwd = document.getElementById("pwd").value;
        
	if (marthQuantity < 0) {
		msg = msg.concat("Falchion Quantity\n");
		pass = false;
	}
	if (foxQuantity < 0) {
		msg = msg.concat("Blaster Quantity\n");
		pass = false;
	}
	if (turnipQuantity < 0) {
		msg = msg.concat("Turnip Quantity\n");
		pass = false;
	}
        
	for (let i = 0; i < shipping.length; i++) {
		if (shipping[i].checked) {
			shipPass = true;
			break;
		}
	}
	if (shipPass == false) {
		msg = msg.concat("Shipping Selection\n");
		pass = false;
	}

	if (!emailVal(username) || username == "") {
		msg = msg.concat("Username\n");
		pass = false;
	}
	if (pwd == "") {
		msg = msg.concat("Password\n");
		pass = false;
	}

	if (pass == false) {
		msg = msg.concat("Please fix your order form.");
		window.alert(msg);
	}

	return pass;
}