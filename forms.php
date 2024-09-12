<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function quantcaracter($String){
            echo "O tamanho do nome com os espaços é: ". strlen($String);
        }

        function reverseString($String){
            echo "<br>O nome Reverso: ". strrev($String);
        }

        //parte a string e guarda em um vetor, depois disso transforma a primeira palavra em maiusculo e concatena numa stringresultado
        function upperFirstLetter($String){
            //existe uma função para isso -> ucwords
            $result = explode(" ", $String);
            $strresult = "";
            for($i=0; $i<count($result); $i++){
                $str1 = $result[$i];
                $str1[0] = strtoupper($str1[0]);
                $strresult = $strresult." ".$str1;
            }
            echo "<br>Primeira letra maiuscula: " . $strresult;
        }

        function upperString($String){
            echo "<br>String em maiusculo:  " . strtoupper($String);
        }

        function lowerString($String){
            echo "<br>String em minusculo:  " . strtolower($String);
        }

        function loopName($String){
            echo "<br><br>Repetição do nome: ";
            for($i=0; $i<3; $i++){
                
                echo "<br>" . $String;
            }
        }

        function searchAna($String){
            if(strpos($String, "ana")){
                echo "<br>'ana' foi encontrada! ";
            }else{
                echo "<br>'ana' nao foi encontrada! ";
            }

        }

        function verifyString($String){
            $result = explode(" ", $String);
            $size = count($result);
            if($result[$size-1] == "antos"){
                echo "<br>Palavra 'antos' encontrada no final!";
            }else{
                echo "<br>Palavra 'antos' não foi encontrada no final!";
            }
        }

        function shuffleString($String){
            echo "<br>String embaralhada: " . str_shuffle($String);
        }

        function returnCharString($String){
            $result = explode(" ", $String);
            $first = $result[0];
            $resultstr = strtoupper($first[0]);
            echo "<br>O primeiro caracter da String em maiusculo: " . $resultstr;
        }

        $name = "";

        if (isset($_POST["nome"])) {
            $name = $_POST["nome"];

            if(!empty(trim($name))){//verifica se o nome é vazio
                //letra a
                quantcaracter($name);
                //letra b
                reverseString($name);
                //letra c
                upperFirstLetter($name);
                //letra d
                upperString($name);
                //letra e
                lowerString($name);
                //letra f
                loopName($name);
                //letra g
                searchAna($name);
                //letra h
                verifyString($name);
                //letra i
                shuffleString($name);
                //letra j
                returnCharString($name);
                


            }else{
                echo "Nome Em Branco!";
                return; 
            }
        }
    ?>
</body>
</html>