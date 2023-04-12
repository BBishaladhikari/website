<?php
// Generate a random OTP code
$otp = mt_rand(100000, 999999);

// Store the OTP code in a session variable
session_start();
$_SESSION['otp'] = $otp;

// Send the OTP code to the user via email or SMS
$to = 'user@example.com';
$subject = 'Your OTP code';
$message = 'Your OTP code is: ' . $otp;
$headers = 'From: admin@example.com' . "\r\n" .
           'Reply-To: admin@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

// Display a form to prompt the user to enter the OTP code
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
?>
  <form method="post">
    <label for="otp">Enter OTP code:</label>
    <input type="text" name="otp" id="otp">
    <input type="submit" value="Verify">
  </form>
<?php
}

// Verify the OTP code entered by the user
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['otp'] == $_SESSION['otp']) {
    // OTP code is valid
    // Do something here, such as logging in the user
    echo 'OTP code is valid';
  } else {
    // OTP code is invalid
    // Display an error message to the user
    echo 'OTP code is invalid';
  }
}
?>
