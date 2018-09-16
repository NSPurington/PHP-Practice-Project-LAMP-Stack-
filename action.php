Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.
<form action="action.php" method="post">
<p>Your name: <input type="text" name="name" /></p>
<p>Your age: <input type="text" name="age" /></p>
<p><input type="submit" /></p>
</form>
<?php
if ("action.php"["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['name']);
    if(empty($name)){
        echo "Name is empty";
    } else {
        echo $name;
    }
};
echo $_SERVER['PHP_SELF'];
?>