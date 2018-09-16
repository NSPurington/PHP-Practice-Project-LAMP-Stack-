<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
	<h2>Hello World in PHP</h2>
	<hr>
	<?php echo '<p>Hello World</p>'; ?>
	<br>
	<h2>Browser Test in PHP</h2>
        <hr>
	<?php echo $_SERVER['HTTP_USER_AGENT']; ?>

	<?php
	if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
	?>
	<h3>strpos() must have returned non-false</h3>
	<p>You are using Internet Explorer</p>
	<?php } else { ?>
	<h3>strpos() must have returned false</h3>
	<p>You are not using Internet Explorer</p>
	<?php }	?>
	<br>
	<h2>Form Test in PHP</h2>
        <hr>	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	    <p>Your name: <input type="text" name="name" /></p>
	    <p>Your age: <input type="text" name="age" /></p>
	    <p><input type="submit" /></p>
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $name = htmlspecialchars($_REQUEST['name']);
	    if(empty($name)){
	        echo "Name is empty";
	    } else { 
	        echo $name;
	    }
	}
	echo "<br>";
	?>
	<br>
 	<h2>Server Info Test in PHP</h2>
        <hr>
	<?php 
	echo $_SERVER['PHP_SELF'], " ", "php self";
	echo "<br>";
	echo $_SERVER['SERVER_NAME'], " ", "server name";
	echo "<br>";
	echo $_SERVER['HTTP_HOST'], " ", "http host";
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'], " ", "http user agent";
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'], " ", "script name";
	echo "<br>";
	?>
	<br>
	<h2>While Test in PHP</h2>
        <hr>
	<?php
	$i=1;
	while($i<=10){
	    echo $i."<br/>";
	    $i++;
	}
	?>
	<br>
        <h2>Do While Test in PHP</h2>
        <hr>
	<?php
	$i=1;
	do {
	    echo $i."<br/>";
	    $i++;
	}
	while($i<=10);
	?>
	<br>
        <h2>For Test in PHP</h2>
        <hr>
	<?php
	for($i=1;$i<=10;$i++)
	{
	echo $i."<br/>";
	}
	?>
	<br>
        <h2>Foreach Test in PHP</h2>
        <hr>
	<?php
	$names = array('Nick','Amy','Eleanor','Hank');
	foreach($names as $value) {
	echo "Hi ",$value,"!","<br/>";
	}
	?> 
	</body>
</html>