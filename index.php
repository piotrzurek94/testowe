<?php

$dom = 'ElmStreet4';
$site = $_GET['s'];
//$site="https://prod.ceidg.gov.pl/CEIDG/ceidg.public.ui/SearchDetails.aspx?Id=58f430b6-bc75-4d62-8b3e-e36d9ece6706"; 
$tekst=file_get_contents($site); 


preg_match ('|href="mailto:(.*)">|U', $tekst, $token)
or die ("Brak adresu email");
echo $token[1];
 
?>