<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/corona.css">
</head>
<body>
<!-- -------------------------------------- nav link --------------------- -->

<header class="main-head">
      <h1 id="logo">Prayaas</h1>
      <nav class="stroke">
        <ul>
          <li class="navLinks"><a href="donation1.html">Campaigns</a></li>
          <li class="navLinks"><a href="#benifits">Our Causes</a></li>
          <li class="navLinks"><a href="#contact">How to Help</a></li>
          <li class="navLinks"><a href="#contact">About Covid-19</a></li>
          <li class="navLinks"><a href="#contact">About us</a></li>
        </ul>
      </nav>
      <a class="navButton" href="don2.html"
        ><button class="navButton" id="donateButton">Donate</button></a
      >
    </header>



<!-- ------------------------------------ tabble ----------------------------- -->

<table id="customers">
<tr>
<th>lastupdatedtime</th>
<th>Satate</th>
<th>Confirmed</th>
<th>Active</th>
<th>Recovered</th>
<th>Deaths</th>
</tr>

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);


$i=1;
while($i < $statescount){
?>
<tr>
<td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?> </td>
<td><?php echo $coranalive['statewise'][$i]['state']?> </td>
<td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['active'] ?> </td>
<td><?php echo $coranalive['statewise'][$i]['recovered']  ?> </td>
<td><?php echo $coranalive['statewise'][$i]['deaths'] ?> </td>
</tr>

<?php


  $i++;
}


?>

</table>
</body>

</html>