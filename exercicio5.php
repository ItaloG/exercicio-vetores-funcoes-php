<!-- Crie um formulário onde o usuário informa seu nome e escolhe em uma lista a cidade onde 
mora. 
As cidades devem ser carregadas pelo backend. 
As cidades são: Jandira, Itapevi, Barueri, Osasco, Cotia, Santana de Parnaíba, Carapicuíba e São 
Paulo. Utilizar um índice para cada cidade iniciando em 1. 
Ao enviar o formulário o sistema deve informar o seguinte: 
Nota: Você deve enviar no value da <option> o índice de cada cidade. 
Dica: Você pode repetir o vetor na página que processa o formulário. 
Olá {Fulano}, de {Jandira}, seja bem-vindo. -->
<?php
    $cidades =[
        1 => "Jandira",
        2 => "Itapevi",
        3 => "Barueri",
        4 => "Osasco",
        5 => "Cotia",
        6 => "Santana de Parnaíba",
        7 => "Carapicuíba",
        8 => "São Paulo"
    ];

    $nome = $_POST['nome'];
    $cidade = $_POST['cidades'];
    
    $resposta ="Olá ". $nome . ", de " . $cidades[$cidade] . ", seja bem-vindo.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css" />
    <title>Document</title>
</head>
<body>
    <form method="POST" action="exercicio5.php">
        <div class="input-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome"/>
        </div>
        <label>Informa sua cidade:</label>
        <div class="input-group">
            <select name="cidades" id="cidades">
                <?php
                for($i=1; $i <= count($cidades);$i++){
            ?>
            <option value="<?=$i?>"><?=$cidades[$i]?></option>
            <?php
                }
                ?>
            <!-- <option><?=$cidades[2]?></option>
            <option><?=$cidades[3]?></option>
            <option><?=$cidades[4]?></option>
            <option><?=$cidades[5]?></option>
            <option><?=$cidades[6]?></option>
            <option><?=$cidades[7]?></option>
            <option><?=$cidades[8]?></option> -->
        </select>
    </div>
    
        <div >
        <h2><?=$resposta?></h2>
        </div>
        <button>Eniviar</button>
    </form>
</body>
</html>