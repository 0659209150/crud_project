
<?php
$con = new mysqli('localhost', 'root', '', 'my first database');
if (!$con) {
    echo "successfully connected!";
}
?>