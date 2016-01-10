<html>
<head>
	<title>PHP Test</title>
</head>
<body>

<?php

include 'Worker.php';

$obj  = new Worker();
$obj->createWorker();

echo $obj->getWorkerName();

?>

<?php echo '<p>Hello World</p>'; ?>
</body>
</html>
