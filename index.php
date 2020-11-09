<?php
require __DIR__ . '/vendor/autoload.php';

use Foolz\Inet\Inet;
use ipinfo\ipinfo\IPinfo;

$client = new IPinfo();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if (isset($_REQUEST['Calcular'])) {
    $numeroDecimal;
    $numeroDecimal = htmlspecialchars($_REQUEST['decimal']);
    $ip = \Foolz\Inet\Inet::dtop($numeroDecimal);
    $details = $client->getDetails($ip);

    echo '<script>alert ("IP: ' . $details->ip . '\nCiudad: ' . $details->city .'\nPais: ' . $details->country .'\nRegion: ' . $details->region . '")</script>';
}


echo '<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<style>
ul {
    list-style-type: none;
  }
  
  button{
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 12px 20px;
    text-align: center;
    top: 50%;
  left: 50%;
  }
  input {
    width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid green;
  color: black;
  }
  .form{ 
      text-align: center; 
    }
    .datos{
        text-align: ;
    }
    body {
        background-color: #E6E6FA;
      }


</style>
<body background=>

<form method="post" action="" name="datos">
    <div class="form">
        <label><h1>Decimal</h1></label>
        <input  type="text" name="decimal" required placeholder="Introduce el numero decimal"/>
        <br>
        <button type="Calcular" name="Calcular" value="Calcular">Calcular</button>
    </div>
</form>

</body>

</html>';
