<head>
<?php
    require_once "navbar.php";
    require_once "function.php";
?>
</head>
<body style="background-color: #1a202c">
<?php
    if(isset($_SESSION["userId"])){
        echo "<span style='color: white'>".$_SESSION["userId"]."</span>";
    }else{
        echo "<span style='color: white'>You are not login</span>";
    }
?>
</body>
<?php require_once "footer.php" ?>