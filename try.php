<?php
$hash="password";
$a1=password_hash($hash, PASSWORD_DEFAULT);
echo $a1;
if (password_verify($hash, $a1)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>