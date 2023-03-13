<?php
// request method
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo "Name : " . $_REQUEST["name"];
echo "<br>";
echo "Age : " . $_REQUEST["age"];
echo "<br>";
?>

<?php
// get method
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "Name : " . $_GET["name"];
echo "<br>";
echo "Age : " . $_GET["age"];
echo "<br>";
?>


<?php
// post method
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "Name : " . $_POST["name"];
echo "<br>";
echo "Age : " . $_POST["age"];
echo "<br>";
?>