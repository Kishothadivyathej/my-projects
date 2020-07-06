<html>
<head>
<style>
body {background-color:red};
</style>
</head>
<body>
<?php
$sql = "SELECT id, firstname, lastname FROM student";
?>
$result = mysqli_query($conn, $sql);
</body>
</html>