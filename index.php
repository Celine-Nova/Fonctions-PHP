<?php
echo "hello";

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
function conditionParametre($param){

    if (is_string($param)){
        return "abc";

    } else {
        return "123";
    }
}
echo "4. je suis une chaine de caractère ". conditionParametre('string') . " mais je peux aussi être un nombre " . conditionParametre(5);
echo PHP_EOL;

// 5. function qui retourne son argument
function jeRetourneMonArgument($arg){
    return $arg;
}
echo jeRetourneMonArgument("5. Je peux ecire ce que je veux dans mon parametre");