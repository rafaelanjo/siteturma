<?php

//verificar o dia da semana
//extraido de :
//http://www.linhadecodigo.com.br/artigo/3565/trabalhando-com-funcoes-em-php.asp

// function dia_atual(){
//     $hoje = getdate();
//     // return $hoje;
//     // print_r($hoje);

//     switch($hoje["wday"]){
//         case 0:
//         return "domingo";
//         break;

//         case 1:
//             return "segunda";
//             break;

//             case 2:
//                 return "terça";
//                 break;

//                 case 3:
//                     return "quarta";
//                     break;

//                     case 4:
//                         return "quinta";
//                         break;
//                         case 5:
//                             return "sexta";
//                             break;
//                             case 6:
//                                 return "sabado";
//                                 break;

// }

// }

session_start();

if(empty($_SESSION['lista'])){
$_SESSION['lista'] =[];

}

function listar(){
//     echo"espeçho de array - Apresentação didática <br>";
//     echo"=============================" ."<br>";
// print_r($_SESSION['lista']);
// echo "<br><br>";

// $qtderegistros = count($_SESSION['lista']);
// echo "quantidade de registros no array =" . $qtderegistros;
// echo "<br><br>";

// echo "tabela com dados <br>";
// echo "=========================="."<br>";
// echo "<br>";

$tabela = "<table border='1'>
    	    <thead>
            <tr>
                <th>nome</th>
                <th>cep</th>
                <th>endereço</th>
                <th>bairro</th>
                <th>cidade</th>
                <th>uf</th>
                <th>Email</th>
                <th>telefone</th>
            </tr>
            </thead>
        <tbody>";
        $retorno = $tabela;

    foreach ($_SESSION['lista'] as $linhadoarray){
        $retorno .= "<tr>";
        foreach ($linhadoarray as $coluna=>$conteudodacoluna){
            $retorno .="<td>" .$conteudodacoluna . "</td>";
           
                    }
                    $retorno .="</tr>";
                }

                $retorno .="</tbody></table>";
                
                return $retorno;

               

}



            

    


?>