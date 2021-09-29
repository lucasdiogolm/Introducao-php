<?php
    
    /* 
        Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção
        de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o 
        nadador irá competir, por exemplo, 6 a 12 anos categoria infantil, de 13 a 18 categoria adolescente,
        acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for
        cadastrado.
    */

    $categorias = [];               //variável "categorias" será um array vazio (lista de categorias)
    $categorias[] = 'Infantil';     //primeira posição do array é "Infantil"
    $categorias[] = 'Adolescente';  //segunda posição do array é "Adolescente"
    $categorias[] = 'Adulto';       //terceira posição do array é "Adulto"
    $categorias[] = 'Idoso';       //terceira posição do array é "Idoso"
    //print_r($categorias);

    $nome = 'Eduardo';              //Nome do competidor
    $idade = 32;                     //Idade do nadador
    //var_dump($nome);              //traz a informação sobre o que temos no 'nome'
    //var_dump($idade);             //tras a informação sobre o que temos na variável 'idade'

    //condicionais
    /*if($idade >= 6 && $idade <= 12){    
        echo 'Infantil';                
    }
    else if($idade >= 13 && $idade <= 18){ 
        echo 'Adolescente';                 
    }
    else{
        echo 'Adulto';                      
    }*/
    if($idade >= 6 && $idade <= 12){    
        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == 'Infantil')
                echo "O nadador ". $nome." compete na categoria Infantil";    
        }                
    }
    else if($idade >= 13 && $idade <= 18){ 
        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == 'Adolescente')
                echo "O nadador ". $nome." compete na categoria Adolescente";    
        }                      
    }
    else{
        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == "Adulto")
                echo "O nadador ". $nome." compete na categoria Adulto";    
        }                           
    }


    