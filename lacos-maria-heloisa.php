<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades laços</title>
</head>
<body>

//Atividade 1

<?php
    $array=[
        "Agropecuaria" => [
            "Maria" => [
                "Solo"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "Heloisa" => [
                "Solo"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "Ana" => [
                "Solo"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "João" => [
                "Solo"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
            ]
        ],
        "Informática" => [
            "Maria" => [
                "ASW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "Heloisa" => [
                "ASW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "Ana" => [
                "ASW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "João" => [
                "ASW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
            ]
        ]
    ];
    foreach($array as $valor => $cursos){
        echo $valor;
        echo "<pre>";
        foreach($cursos as $Nvalor => $alunos){
            echo $Nvalor;
            echo "<pre>";
            foreach($alunos as $fvalor => $disciplina){
                echo $fvalor;
                echo "<pre>";
                foreach($disciplina as $xvalor => $notas){
                    echo $xvalor;
                    echo "<pre>";
                    echo $notas;
                    echo "<pre>";
                }
            }
        }
    }
?>

    //Atividade 2

<?php
    $array=[
        "Agropecuaria" => [
            "Maria" => [
                "Solo"=>[
                    "Nota1"=> 4,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 3,
                    "Nota2" => 4
                ],
                "Plantio"=>[
                    "Nota1"=> 5,
                    "Nota2" => 2
                ]
                ],
            "Heloisa" => [
                "Solo"=>[
                    "Nota1"=> 1,
                    "Nota2" => 2
                ],
                "Sementes"=>[
                    "Nota1"=> 6,
                    "Nota2" => 3
                ],
                "Plantio"=>[
                    "Nota1"=> 4,
                    "Nota2" => 3
                ]
                ],
            "Ana" => [
                "Solo"=>[
                    "Nota1"=> 4,
                    "Nota2" => 1
                ],
                "Sementes"=>[
                    "Nota1"=> 3,
                    "Nota2" => 2
                ],
                "Plantio"=>[
                    "Nota1"=> 7,
                    "Nota2" => 3
                ]
                ],
            "João" => [
                "Solo"=>[
                    "Nota1"=> 3,
                    "Nota2" => 2
                ],
                "Sementes"=>[
                    "Nota1"=> 5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4,
                    "Nota2" => 4
                ]
            ]
        ],
        "Informática" => [
            "Matheus" => [
                "ASW"=>[
                    "Nota1"=> 5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 3,
                    "Nota2" => 3
                ],
                "PSW"=>[
                    "Nota1"=> 2,
                    "Nota2" => 2
                ]
                ],
            "Carol" => [
                "ASW"=>[
                    "Nota1"=> 4,
                    "Nota2" =>4 
                ],
                "BD"=>[
                    "Nota1"=> 6,
                    "Nota2" => 1
                ],
                "PSW"=>[
                    "Nota1"=> 3,
                    "Nota2" => 2
                ]
                ],
            "Jeovana" => [
                "ASW"=>[
                    "Nota1"=> 2,
                    "Nota2" => 1
                ],
                "BD"=>[
                    "Nota1"=> 5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 3,
                    "Nota2" => 1
                ]
                ],
            "Fernando" => [
                "ASW"=>[
                    "Nota1"=> 9,
                    "Nota2" => 0
                ],
                "BD"=>[
                    "Nota1"=> 0,
                    "Nota2" => 0
                ],
                "PSW"=>[
                    "Nota1"=> 3,
                    "Nota2" => 1
                ]
            ]           
        ]
    ];
    echo "<h1>"."Impressão Disciplinas:"."</h1>";
    foreach($array as $chave => $cursos){
        echo $chave;
        echo "<pre>";
    };
    echo "<h1>"."Impressão do total de alunos:"."</h1>";
    foreach($array as $chave => $cursos){
        foreach($cursos as $Nchave => $alunos){
            echo $Nchave;
            echo "<pre>";
        }
    }
    echo "<h1>"."Impressão Alunos por Curso:"."</h1>";
    foreach($array as $chave => $cursos){
        echo $chave;
        echo "<pre>";
        foreach($cursos as $Nchave => $alunos){
            echo $Nchave;
            echo "<pre>";
        }
    }
    echo "<h1>"."Alunos com nota maior que 5:"."</h1>";
    foreach($array as $chave => $cursos){
        foreach($cursos as $Nchave => $alunos){
            foreach($alunos as $disciplina => $notas){
                if( $notas['Nota1']> 5 || $notas['Nota1'] == 5 )
                echo $Nchave;
                echo "<pre>";
               if ( $notas['Nota2']>5 || $notas['Nota1'] == 5)
                echo $Nchave;
                echo "<pre>";  
                }
            }
        }
    echo "<h1> Impressão de medias: </h1>";
        foreach($array as $chave => $cursos){
            foreach($cursos as $Nchave => $alunos){
                foreach($alunos as $disciplina => $notas){
                    $n1 = ($notas['Nota1']);
                    $n2 = ($notas['Nota2']);
                    $media = ($n1+$n2)/2;
                    if( $media > 5 )
                        echo "$Nchave foi aprovado com media $media na disciplina $disciplina";
                        echo "<pre>"; 
                     if ($media == 5)
                    echo "$Nchave foi aprovado com media $media na disciplina $disciplina";
                    echo "<pre>"; 
                    if ($media < 5)
                    echo "$Nchave foi reprovado com media $media na disciplina $disciplina";
                    echo "<pre>"; 
                    }
                }
            }
    ?>
</body>
</html>