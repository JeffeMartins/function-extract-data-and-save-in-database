<?php

function extrairDados(){

    $msg2 = file_get_contents("reg/certquit.2018");
    $msg3 = explode("\n", $msg2);


    
    
    for($i= 0; $i < count($msg3); ++$i){
    
         $nome_cond = substr($msg3[$i], 10, 30);
         $nome_ed = substr($msg3[$i], 40, 23);
         $endereco = substr($msg3[$i], 69, 35);
         $unidade = substr($msg3[$i], 0, 10);
         $cod_edificio = substr($msg3[$i], 104, 6);
         $apto = substr($msg3[$i], 111, 6);

         //$array = array("nome_cond","nome_ed", "endereco", "unidade", "cod_edificio", "apto");
        
        //$result = compact("quitacao", "", $array);

            //echo $nome_cond . $nome_ed . $endereco . $unidade . $cod_edificio . $apto . "\n";

            $conn = new mysqli("localhost", "root", "tayrone123","dbphp7");

        if($conn->connect_error){
            echo "Houve um erro ao se conectar ao banco: " . $conn->connect_error;
            }else{
                echo "Você esta conectado ao banco";
            }

        $stmt = $conn->prepare("INSERT INTO quitacao (nome_cond, nome_ed, endereco, unidade, cod_edificio, apto) VALUES(?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssss", $nome_cond, $nome_ed, $endereco, $unidade, $cod_edificio, $apto);

        echo "</br>";

        if($stmt->execute()){

        echo "dandos gravados em banco com sucesso <br><br>";
        }else{

            echo "Erro de execução";
        }
            
        
}
        
}
          //extrairDados();


?>