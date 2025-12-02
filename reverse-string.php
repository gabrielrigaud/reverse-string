<?php
function reverse_string(string $str): string {
    $reversed = '';
    $length = strlen($str);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

$test = "Bonjour le monde !";
$resultat = reverse_string($test);
echo "Chaîne originale : $test\n";
echo "Chaîne inversée : $resultat\n";
?>