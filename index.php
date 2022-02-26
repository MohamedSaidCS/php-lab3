<?php
session_start();
require_once("vendor\autoload.php");
if(!isset($_SESSION['is_counted'])) {
    Counter::Count();
    Visitor::MarkVisited();
}
$counter = Counter::GetCount();

// session_destroy();
?>

<html">
<head>
    <title>Visitor Counter</title>
</head>
<body>
    <h1>Counted Unique Visitors:</h1>
    <p style="font-size: 1.25rem;"><?php echo $counter?></p>
</body>
</html>