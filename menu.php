<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imagepng" href="images/logobtc.png">

    <script language="Javascript" >
        var msg1 = "-   My Dream Wallet - Start investing in crypto virtualy   -";
        var speed=120;
        function ScrollTitle() {
        document.title=msg1;
        msg1=msg1.substring(1,msg1.length)+msg1.charAt(0);
        setTimeout("ScrollTitle()",speed);
        }
        ScrollTitle();
    </script>
</head>
<body>
    <?php
    session_start();
    $existing  = "Login";
    $ne = "";
    if (isset ($_SESSION['pseudo'])){
        $ne = $_SESSION['pseudo'];
    }

    if ($ne == null) {
    $output = $existing;
    } else {
    $output = $ne;
    }
    ?>
    <link rel="shortcut icon" href="#">
        <div class="topnav">
            <a class="partielogo" href="home.php"><img src="images/logo.png" alt="logo"></a>
            <a href="crypto.php">Crypto</a>
            <a href="ranking.php">Ranking</a>
            <a href="contact.php">Contact us</a>
            <a href="#cours">Aide</a>
            <div class="topnav-right">
            <a href="#mywallet">My Wallet</a>
            <a class="active" href="connect.php"><?php echo $output; ?></a>
            </div>
        </div>
        <div class="bordure"></div>

</body>

</html>