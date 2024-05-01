<script>
    console.log("Hello from php website");
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">

    <title>Loading CMS</title>
    <!-- <img src="../assets/loading.svg"> -->
</head>
<body>

<svg width="200" height="200" id="svg">
  <circle id="dot1" class="shape" />
  <circle id="dot2" class="shape" />
  <circle id="dot3" class="shape" />
  <circle id="dot4" class="shape" />
</svg>
<div class="control-panel">
    <!-- Loading, Complaint Management System -->
    <span>Loading, Complaint Management System</span>
</div>

</body>
</html>

<?php
    require_once("./handlers/dbConnectivity.php");

    $lol = dbConnectivity();
    if ($lol == TRUE) {
        header("Refresh: 3 ; ./pages/start.php");

    } else {
        echo '<script>alert("Database connectivity failed, Try checking credentials !")</script>'; 

    }



?>