<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/stylecrypto.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">
    <meta name="Description" content="Data films et series" />
    <?php include("menu.php"); ?>
    <script>
  function sendFormulaire(id, type,name){
    document.getElementById("cryptocurrencyvalues").value = parseFloat(document.getElementById(id).innerHTML);
    document.getElementById("name").value = name;
    document.getElementsByName("type").forEach(function(ele, idx){
      ele.value = type;
    });

    document.getElementById("Form").submit()
    


    
  }


// MAINTENANT que ta fonction sendForm() est déclarée, il faut l'exécuter en l'appelant comme ceci
</script>

</head>
<body>
       

<?php 

$valeur  = "Vous n'avez pas encore de portefeuille ? Inscrivez-vous !";
    $nu="";
    if (isset ($_SESSION['pseudo'])){
        $nu = $_SESSION['pseudo'];
        $ni = $_SESSION['mailA'];
        $na = $_SESSION['natio'];
        $valeurconnect = "Devient le meilleur investisseur du monde $nu !";
    }

    if ($nu == null) {
    $output1 = $valeur;
    } else {
    $output1 = $valeurconnect;
    }
    ?>

  <div class="titre">
      <h1>Lancez-vous dès maintenant !</h1>
      <p><?php echo $output1; ?></p>
      <?php if (!isset($ni)) { ?>
      <button class="button-9" role="button" href="login.php" onclick="self.location.href='login.php'">S'inscrire !</button>
      <?php } ?>
  </div>

<?php

$valeur  = "new_utilisateur";
$valeur2 = "mail";
$valeur3 = "nationalité";
$valeur4 = "id";
$valeurwallet = 0;
$qbtc = 0;
$qeth = 0;
$qbnb = 0;
$qsol = 0; 
$qlink = 0; 
$qdot = 0; 
$qada = 0; 
$qxrp = 0; 
$qavax = 0; 
$qluna = 0; 
$nu="";
if (isset ($_SESSION['pseudo'])){
    $nu = "1";
    $npseudo = $_SESSION['pseudo'];
    $nmail = $_SESSION['mailA'];
    $nnatio = $_SESSION['natio'];
    $nid = $_SESSION['id'];
}

if ($nu == null) {
$output1 = $valeur;
$output2 = $valeur2;
$output3 = $valeur3;
$output4 = $valeur4;
} else {
$output1 = $npseudo;
$output2 = $nmail;
$output3 = $nnatio;
$output4 = $nid;

$db_username = '254480';
$db_password = 'Thomas&PierreMDW*';
$db_name     = 'mydreamwallet_base';
$db_host     = 'mysql-mydreamwallet.alwaysdata.net';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
    or die('could not connect to database');
$requete = "SELECT * FROM User WHERE User.id='".$output4."'; ";
$exec_requete = mysqli_query($db,$requete);
$count = mysqli_num_rows($exec_requete);
for ($j = 0; $j < $count; $j++) {
  $ligne = mysqli_fetch_array($exec_requete);
  $valeurwallet = $ligne["vwallet"];
  $qbtc = $ligne["q_btc"];
  $qeth = $ligne["q_eth"];
  $qbnb = $ligne["q_bnb"];
  $qsol = $ligne["q_sol"];
  $qlink = $ligne["q_link"];
  $qdot = $ligne["q_dot"];
  $qada = $ligne["q_ada"];
  $qxrp = $ligne["q_xrp"];
  $qavax = $ligne["q_avax"];
  $qluna = $ligne["q_luna"];
}
$_SESSION['vwallet'] = $valeurwallet; 
}

?>
<div class="container">
  <table class="responsive-table">
    <thead>
      <tr>
        <th scope="col">Crypto - MDW</th>
        <th scope="col">%UP/DOWN</th></th>
        <th scope="col">Market Cap</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Buy</th>
        <th scope="col">Sell</th>
      </tr>
    </thead>
    <tbody>
      <form id="Form" action="transaction.php" method='POST'>
      <tr>
        <th scope="row">CASH</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $valeurwallet; ?></td>
        <td data-title="Domestic Gross" data-type="currency"> $ </td>
        <td data-title="International Gross" data-type="currency">⬇</td>
        <td data-title="Budget" data-type="currency">⬇</td>
      </tr>
      <tr>
        <th scope="row">BITCOIN</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qbtc; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-btc" style="font-weight: bold;">BTC</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="btc" value="Buy" onclick="sendFormulaire('stock-price-btc', 'buy','btc')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="btc" value="Sell" onclick="sendFormulaire('stock-price-btc', 'sell','btc')"></div></td>
      </tr>
      <tr>
        <th scope="row">ETHEREUM</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qeth; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-eth" style="font-weight: bold;">ETH</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="eth" value="Buy" onclick="sendFormulaire('stock-price-eth', 'buy','eth')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="eth" value="Sell" onclick="sendFormulaire('stock-price-eth', 'sell','eth')"></div></td>
      </tr>
      <tr>
        <th scope="row">BINANCE COIN</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qbnb; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-bnbbtc" style="font-weight: bold;">BNBC</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="bnb" value="Buy" onclick="sendFormulaire('stock-price-bnbbtc', 'buy','bnb')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="avax" value="Sell" onclick="sendFormulaire('stock-price-bnbbtc', 'sell','bnb')"></div></td>
      </tr>
       <tr>
        <th scope="row">SOLANA</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qsol; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-sol" style="font-weight: bold;">SOL</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="sol" value="Buy" onclick="sendFormulaire('stock-price-sol', 'buy','sol')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="avax" value="Sell" onclick="sendFormulaire('stock-price-sol', 'sell','sol')"></div></td>
      </tr>
      <tr>
        <th scope="row">CHAIN LINK</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qlink; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-link" style="font-weight: bold;">LINK</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="link" value="Buy" onclick="sendFormulaire('stock-price-link', 'buy','link')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="link" value="Sell" onclick="sendFormulaire('stock-price-link', 'sell','link')"></div></td>
      </tr>
      <tr>
        <th scope="row">POLKA DOT</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qdot; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-dot" style="font-weight: bold;">DOT</td></td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="dot" value="Buy" onclick="sendFormulaire('stock-price-dot', 'buy','dot')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="dot" value="Sell" onclick="sendFormulaire('stock-price-dot', 'sell','dot')"></div></td>
      </tr>
      <tr>
        <th scope="row">CARDANO</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qada; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-wbt" style="font-weight: bold;">ADA</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="ada" value="Buy" onclick="sendFormulaire('stock-price-ada', 'buy','ada')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="ada" value="Sell" onclick="sendFormulaire('stock-price-ada', 'sell','ada')"></div></td>
      </tr>
      <tr>
        <th scope="row">XRP</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qxrp; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-xrp" style="font-weight: bold;">XRP</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="xrp" value="Buy" onclick="sendFormulaire('stock-price-xrp', 'buy','xrp')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="xrp" value="Sell" onclick="sendFormulaire('stock-price-xrp', 'sell','xrp')"></div></td>
      </tr>
      <tr>
        <th scope="row">AVAX</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qavax; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-ava" style="font-weight: bold;">AVAX</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="avax" value="Buy" onclick="sendFormulaire('stock-price-ava', 'buy','avax')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="avax" value="Sell" onclick="sendFormulaire('stock-price-ava', 'sell','avax')"></div></td>
      </tr>
      <tr>
        <th scope="row">LUNA</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency"><?php echo $qluna; ?></td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-lun" style="font-weight: bold;">LUNA</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green"><input type="button" name="luna" value="Buy" onclick="sendFormulaire('stock-price-lun', 'buy','luna')"></div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red"><input type="button" name="luna" value="Sell" onclick="sendFormulaire('stock-price-lun', 'sell','luna')"></div></td>
      </tr>
    </tbody>
    <input id="cryptocurrencyvalues" type='hidden' name="values" value=None> 
    <input class="type" type='hidden' name="type" value=None>
    <input class="type" type='hidden' id="name" name="name" value=None>
    </form>
  </table>
</div>

<!-- linking javascript -->
<script src="js/eth.js"></script>





</body>
<?php include("footer.php"); ?>
</html>