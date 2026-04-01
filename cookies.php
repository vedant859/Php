#Page 1
<form action="page2.php" method="post">
Font Color: <input name="color">
<input type="submit">
</form>

#Page 2
<?php
setcookie("color", $_POST['color']);
echo "<a href='page3.php'>Go Next</a>";
?>

#Page 3
<?php
echo "<body style='color:".$_COOKIE['color']."'>";
echo "Styled Page";
?>
