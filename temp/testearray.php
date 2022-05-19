<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
echo "teste de array <br>";

//Atribuição de array

$array_numeros = array(5,10,15,20,25);

print_r($array_numeros);

echo "<br><br>";

//veriificar a quantidade de itens
$qtdeitens = count($array_numeros);

echo "quantidade de itens da coleção = " . $qtdeitens;

//apresentar os dados ultilizando estrutura de repetição
for($i=0;$i< $qtdeitens;$i++){
echo "<br>";
    echo "Indice = " . $i ."valor = ". $array_numeros[$i] . "<br>";
}

//foreach
echo "<br>";
foreach($array_numeros as $i){
echo $i . "<br />";

}

$salario = array ();
$salario ["Claudia"] = 1000;
$salario ["joão"] = 7000;
$salario ["luiza"] = 12000;

foreach($salario as $key_arr => $var_arr ){
    echo $var_arr . "=" . $key_arr . "<br/>";
}

// Arrays multidomensional
$produtos = array(
array("maçã",20,10),
array("banana",10,15),
array("laranja",15,7),
array("pera",20,5)

);

//for dentro do outro for
for ($linha = 0; $linha < 4; $linha++) {
echo "<p><b>linha número : ". $linha. "</b></P>";
echo "<ul>";

for ($coluna = 0; $coluna < 3; $coluna++) {
    echo "<li>".$produtos[$linha][$coluna]."</li>";
}


echo "</ul>";

}

$idade = array("marcos"=>"35", "suzana"=>"37", "joel"=>"43");
session_start();

//se a session não existir, sera criada

if (empty($_SESSION['listar'])) {
    $_SESSION['lista'] = [];
}

array_push($_SESSION['lista'], $idade);

$tabela = "<table border='1'>
<thead>
<tr>
<th>nome</th>
<th>idade</th>
</tr>
</thead>
<tbody>";

$retorno = $tabela;


print_r($_SESSION['lista']);

foreach ($_SESSION['lista'] as $linhadoarray){
//lembrando que primeiro você coloca o valor do produto e depois colocar os valores e o nome.
    foreach($linhadoarray as $key_nome => $var_idade ){
$retorno .= "<tr>";
$retorno .= "<td>" . $key_nome . "</td>";
$retorno .= "<td>" . $var_idade . "</td>";
$retorno .= "</tr>";

}
}

$retorno .= "<tr>";
$retorno .= "<td> . *********. </td>";
$retorno .= "<td> . ********* . </td>";
$retorno .= "</tr>";



$indice = array_keys($idade);
rsort($indice);
//qualquer simbolo de exclamação é uma negação, ele esta negado o seu valor.  while faça em quanto.
//indece é o nome ex: nome, nome coluna
   
while(!empty($indice)){

$retorno .= "<tr>";
    $nomecoluna = array_pop($indice);
    $retorno .= "<td>" . $nomecoluna . "</td>";
    $retorno .= "<td>" .$idade[$nomecoluna] ."</td>";
    $retorno .= "</tr>";
    $retorno .= "<tr>";
}

$retorno .= "<tr>";
$retorno .= "<td> . *********. </td>";
$retorno .= "<td> . ********* . </td>";
$retorno .= "</tr>";

$indice = array_keys($idade);
do{
    $retorno .= "<tr>";
    $nomecoluna = array_pop($indice);
    $retorno .= "<td>" . $nomecoluna . "</td>";
    $retorno .= "<td>" .$idade[$nomecoluna] ."</td>";
    $retorno .= "</tr>";
}

while(!empty($indice));



$retorno .="</tbody><table>";
echo $retorno;

// ?>

// </body>
// </html>