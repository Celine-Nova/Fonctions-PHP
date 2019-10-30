<?php
echo "Hello tout le monde nous sommes le :  " . date('d F Y');

echo PHP_EOL;
//  1. function Hello World!
function helloWorld() {
    return "Hello World";
}
echo "1. " . helloWorld();
echo PHP_EOL;
// 2. function multiplication
$const1 = 12;
$res1 = multiplication(5,6, $const1);
$res2 = multiplication(7,8, 125);
echo('2. résultat1= ' . $res1 . ' résultat2 = ' . $res2);


function multiplication($a, $b, $const1){
    $result = $a * $b + $const1;
    return $result;
}
echo PHP_EOL;
// 3. function concatenation
function concatenation($prenom, $nom){
    return $prenom . ' ' . $nom;
}
echo "3. methode 1 : Il s'appelle " . concatenation('Bruce', 'Willis');
echo PHP_EOL;
$prenom = "Laetitia";
$nom = "Millot";
echo "3. methode 2 : Elle s'appelle ". concatenation($prenom, $nom);

echo PHP_EOL;
// 4. Condition parametre abc ou 123
function conditionParameter($param){

    if (is_string($param)){
        return "abc";

    } else {
        return "123";
    }
}
echo "4. je suis une chaine de caractère ". conditionParameter('string') . " mais je peux aussi être un nombre " . conditionParameter(5);
echo PHP_EOL;

// 5. function qui retourne son argument
function returnMyArgument($arg){
    return $arg;
}
echo returnMyArgument("5. Je peux ecire ce que je veux dans mon parametre");

// 6. le nombre le plus grand
echo PHP_EOL;
$number1 = 6984;
$number2 = 454;
echo "Qui est plus grand" . $number1 . " ou " . $number2 ." ? ";
function bigger($number1, $number2){
    return (max($number1, $number2));
}
echo PHP_EOL;
echo "6. " . bigger(6984, 454) ." est plus grand que " . $number2;

echo PHP_EOL;
// 7. Remplacer les chiffres par des lettres
function replaceNumber($chaine){

    return strtr($chaine, "013", "oie");

}

echo "7. " . replaceNumber("L3s c0urs d3 pr0grammat10n W3b s0nt tr0p c00l, j3 r3mplace l3s ch1ffr3s par d3s l3ttres");