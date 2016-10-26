
<!DOCTYPE html>
<html>
<body>
 
 
 <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l") . "<br>";
?>
</body>
</html>

<?php
date_default_timezone_set("America/Los_Angeles");
echo "The time is " . date("h:i:sa");
?>
