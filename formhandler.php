<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSONHandler_project</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <!--This section shows the name of the block.-->
    <h1>Name of the block</h1>
    <h2></h2>
</body>
</html>

<?php
    //Through the include, this server reaches the secret server that is handling the API.
    include("server2.php");
    echo "<h3>$gettheblock</h3>";
?>