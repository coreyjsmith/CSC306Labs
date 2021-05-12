<html>
<body>

<?php
$cookie_name = "user";
$cookie_uname = "corey";
$cookie_age = 28;
$cookie_gender= "male";
setcookie($cookie_name, $cookie_age,$cookie_gender time() + (86400 * 30 *7), "/"); // 86400 = 1 day * 7 = 7 days
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "The name of cookie '" . $cookie_name . "' is not set";
} else {
echo "Cookie name'" . $cookie_name . "' is set<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>