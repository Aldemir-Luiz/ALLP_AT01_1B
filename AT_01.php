<?php
// variaveis
$peso = 60;
$altura = 1.80;
$imc = $peso / ($altura**2);
// condicionais
if ($imc < 16) {
    echo "seu IMC é $imc e você estar na classificação de magreza grau III";
}
elseif ($imc >= 16 and $imc <= 16.9) {
    echo "seu IMC é $imc e você estar na classificação de magreza grau II";
}
elseif ($imc >= 17 and $imc <= 18.4) {
    echo "seu IMC é $imc e você estar na classificação de magreza grau I";
}
elseif ($imc >= 18.5 and $imc <= 24.9){
    echo "seu IMC é $imc e você estar na classificação de Eutrofia"; 
}
elseif ($imc >= 25 and $imc <= 29.9){
    echo "seu IMC é $imc e você estar na classificação de pré-obesidade";
}
elseif ($imc >= 30 and $imc <= 34.9){
    echo "seu IMC é $imc e você estar na classificação de obesidade mooderada grau I";
}
elseif ($imc >= 35 and $imc <= 39.9) {
    echo "seu IMC é $imc e você estar na classificação de obesidade severa grau II";
}
else {
echo "seu IMC é $imc e obesidade muito severa grau III";
}
?>
