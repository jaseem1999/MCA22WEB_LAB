<html>
<head>  
<title>Palindrome</title>
</head>
<body>
<h1>Palindrome</h1>
<form action="" method="post">
Enter a number: <input type="text" name="number" />
<input type="submit" value="Check" />
</form>

<?php
// Function to check if a number is a palindrome or not
function isPalindrome($number) {
  $temp = $number;
  $reverse = 0;

  // Reverse the number
  while ($temp != 0) {
    $reverse = $reverse * 10 + $temp % 10;
    $temp /= 10;
  }

  // If the number and its reverse are equal, it is a palindrome
  return $reverse == $number;
}

// Example usage
if (isset($_POST['number'])) {
  $num = $_POST['number'];
  if (isPalindrome($num)) {
    echo "$num is a palindrome";
  } else {
    echo "$num is not a palindrome";
  }
}
?>