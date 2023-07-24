<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>

    //Atvidade 1 

    <?php
    $aluno=[
    'disciplinas' => [
        'psw'=> [
            'avaliação'=> 3,
            'trabalho'=> 3,
            'atividades'=> 4
        ],
        'bd'=> [
            'avaliação'=> 2.5,
            'trabalho'=> 2.3,
            'atividades'=> 3.3
        ],
        'redes'=> [
            'avaliação'=> 3,
            'trabalho'=> 3,
            'atividades'=> 4
        ],
        'asw'=> [
            'avaliação'=> 2.8,
            'trabalho'=> 2.5,      
            'atividades'=> 3.8
        ]
        ]
    ];
//como imprimir todo o array:
    echo '<pre>'; 
      print_r($aluno);
    echo '</pre>';

//como imprimir so redes:
    echo '<pre>'; 
       print_r($aluno['disciplinas']['redes']) ;
     echo '</pre>';

//nota final das disciplinas

    echo "Nota final de redes:";
    echo '<pre>'; 
    print_r($aluno['disciplinas']['redes']['avaliação']+$aluno['disciplinas']['redes']['atividades']+$aluno['disciplinas']['redes']['trabalho']) ;
    echo '</pre>';
    echo "Nota final de psw:";
    echo '<pre>'; 
    print_r($aluno['disciplinas']['psw']['avaliação']+$aluno['disciplinas']['psw']['atividades']+$aluno['disciplinas']['psw']['trabalho']) ;
    echo '</pre>';
    echo "Nota final de asw:";
    echo '<pre>'; 
    print_r($aluno['disciplinas']['asw']['avaliação']+$aluno['disciplinas']['asw']['atividades']+$aluno['disciplinas']['asw']['trabalho']) ;
    echo '</pre>';
    echo "Nota final de bd:";
    echo '<pre>'; 
    print_r($aluno['disciplinas']['bd']['avaliação']+$aluno['disciplinas']['bd']['atividades']+$aluno['disciplinas']['bd']['trabalho']) ;
    echo '</pre>';
    ?>

     //Atvidade 2

    <?php 

    $listaordenada = [
    'gato',
    'cachorro',
    'mosquito'

    ];    
    $array = [
    'nome' => 'Heloisa',
    'endereco' => 'Morrinhos',
    'idade' => '17',
    'nascimento' => null,
    ];

    echo '<pre>';
    print_r($listaordenada);
    echo '</pre>';

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    echo "<h1>Contar os elementos do array:</h1>";
    echo '<pre>';
        print_r (count($listaordenada));
    echo '<pre/>';
    echo '<pre>';
        print_r (count($array));
    echo '<pre/>';

    echo "<h1>Mostrar os indices do array:</h1>";
    echo '<pre>';
        print_r (array_keys($listaordenada));
    echo '<pre/>';
    echo '<pre>';
        print_r (array_keys($array));
    echo '<pre/>';

    echo "<h1>Mostrar o valor da posição dos indices:</h1>";
    echo '<pre>';
        print_r (array_values($listaordenada));
    echo '<pre/>';
    echo '<pre>';
        print_r (array_values($array));
    echo '<pre/>';

    echo "<h1>Procurar algo dentro do array:</h1>";
    echo '<pre>';
        print_r (in_array('Heloisa', $array));
    echo '<pre/>';
    echo '<pre>';
    print_r (in_array('elefante', $listaordenada)); 
    echo '<pre/>';

    echo "<h1>Procurar algo dentro do array e receber um verdadeiro ou falso:</h1>";
    echo '<pre>';
    var_dump(in_array('Heloisa', $array)); 
    echo '<pre/>';
    echo '<pre>';
    var_dump(in_array('elefante', $listaordenada)); 
    echo '<pre/>';

    echo "<h1>Mostrar em qual indice esta:</h1>";
    echo '<pre>';
    print_r (array_search('Heloisa', $array)); 
    echo '<pre/>';
    echo '<pre>';
    print_r (array_search('mosquito', $listaordenada)); 
    echo '<pre/>';

    echo "<h1>Verificar se um indice de array esta preenchido:</h1>";
    echo '<pre>';
    var_dump (isset($listaordenada ['1'])); 
    echo '<pre/>';
    echo '<pre>';
    var_dump (isset($array ['nascimento'])); 
    echo '<pre/>';

    echo "<h1>Verifica o ultimo indice:</h1>";
    echo '<pre>';
    echo array_key_last($listaordenada);
    echo '<pre/>';

    echo "<h1>Separa as variaveis com o q esta entre aspas:</h1>";
    echo '<pre>';
    echo implode(', ', $listaordenada); 
    echo '<pre/>';

    echo "<h1>Organiza em ordem alfabetica:</h1>";
    sort($array);
    print_r($array);
    echo '<pre/>';

    echo "<h1>Ordena  de forma reversa:</h1>";
    arsort($array);
    print_r($array);
    echo "<pre>";
    echo '<hr>';

    $array = [
        [
        'id' => 1,
        'nome' => 'Maria',
        'idade' => 17
        ],
        ['id' => 2,
        'nome' => 'Heloisa',
        'idade' => 18
        ],
        ['id' => 3,
        'nome' => 'Adelaide',
        'idade' => 40
        ],
        ['id'=> 4,
        'nome' =>'Adilia',
        'idade' => 83
        ]
    ];

    uasort($array, function($a, $b){
        if($a['nome'] == $b['nome']) return 0;
        return $a['nome'] < $b['nome'] ? -1:1;
    });

    echo '<pre>';
    print_r(array_values($array));
    echo '</pre>';


    echo '<h1>Forech Aninhado</h1>';
    foreach($array as $key => $value){
        foreach($value as $xkey => $yvalue){
            echo $xkey;
            echo '<br>';
            echo $yvalue;
            echo '</pre>';
        }
    }


?>
</body>
</html>