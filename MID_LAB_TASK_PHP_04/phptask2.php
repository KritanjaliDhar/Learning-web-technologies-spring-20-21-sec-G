<?php

$vat= 15;
$pricewithoutvat= 50;
$vatonprice=$pricewithoutvat*($vat/100);
$totalprice=$pricewithoutvat+$vatonprice;
echo number_format($totalprice,2);