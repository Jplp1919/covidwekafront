
<?php session_start(); 
$hostName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "newmodeldb";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
sleep(1);
header("Location: result.php");
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<br>

<body>
    <form method="post">
        <header>

        </header>

        <div class="card card-with-top-line">
            <div class="card-top-line"></div>
            <b>Risco de Contágio de COVID-19</b> 
            <p></p>
            Utilização de inteligência artificial para testes de predição de covid.
            <p>
            </p>
            Pesquisa voluntária. Favor responder ao questionário abaixo:
        </div>

        <div class="card">
            <label for="numres">Número de moradores na residência:</label>
            <br>
            <select name="numres" id="numres">
                <option value="" selected></option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9+</option>

            </select>
            <br><br>
        </div>
        <div class="card">
            <label for="rendaMedia">Renda média da casa:</label>
            <br>
            <select name="rendaMedia" id="rendaMedia">
                <option value="" selected></option>
                <option value=1>Acima de 20 salários mínimos</option>
                <option value=2>De 10 a 20 salários mínimos</option>
                <option value=3>De 4 a 10 salários mínimos</option>
                <option value=4>De 2 a 4 salários mínimos</option>
                <option value=5>Até 2 salários mínimos</option>
            </select>
            <br><br>
        </div>

        </div>
        <div class="card">
            <label for="sex">Sexo atribuído ao nascimento:</label>
            <br>
            <select name="sex" id="sex">
                <option value="" selected></option>
                <option value=0>Feminino</option>
                <option value=1>Masculino</option>
            </select>
            <br><br>
        </div>

        <div class="card">
            <label for="idade">Idade:</label>
            <br>
            <select name="idade" id="idade">
                <option value="" selected></option>
                <option value=1>Adolescente (15 a 19 anos)</option>
                <option value=2>Jovem (20 a 24 anos)/option>
                <option value=3>Adulto (25 a 44 anos)</option>
                <option value=4>Meia-idade (45 a 59 anos)</option>
                <option value=5>Idoso (60 a 74 anos)</option>
                <option value=6>Ancião (75 a 90 anos)</option>
                <option value=7>Velhice extrema (mais que 90 anos)</option>
            </select>
            <br><br>
        </div>

        <div class="card">
            <label for="frequentouEscola">Frequentou Escola?</label>
            <br>
            <select name="frequentouEscola" id="frequentouEscola">
                <option value="" selected></option>
                <option value=0>Não</option>
                <option value=1>Sim</option>
            </select>
            <br><br>
        </div>

        <div class="card">
            <label for="graudeEnsino">Grau de Ensino</label>
            <br>
            <select name="graudeEnsino" id="graudeEnsino">
                <option value="" selected></option>
                <option value=0>Fundamental</option>
                <option value=1>Médio</option>
                <option value=2>Superior</option>
            </select>
            <br><br>
        </div>

        <div class="card">
        <label for="cloncuiuSuperior">Concluiu superior?</label>
        <br>
        <select name="cloncuiuSuperior" id="cloncuiuSuperior">
            <option value="" selected></option>
            <option value=0>Não</option>
            <option value=1>Sim</option>
        </select>
            <br><br>
        </div>

        <div class="card">
            <label for="ensinoMaiordaCasa">Grau de ensino do morador que mais estudou na casa</label>
            <br>
            <select name="ensinoMaiordaCasa" id="ensinoMaiordaCasa">
                <option value="" selected></option>
                <option value=0>Fundamental</option>
                <option value=1>Médio</option>
                <option value=2>Superior</option>
            </select>
            <br><br>
        </div>

        <div class="card">
            <label for="raca">Cor de pele:</label>
            <br>
            <select name="raca" id="raca">
                <option value="" selected></option>
                <option value=0>Branca</option>
                <option value=1>Parda</option>
                <option value=2>Preta</option>
                <option value=3>Amarela</option>
                <option value=4>Indígena</option>
            </select>
            <br><br>
        </div>

        <div class="card">
            <label for="procurouSaude">Procurou serviço de saúde nos últimos 15 dias?</label>
            <br>
            <select name="procurouSaude" id="procurouSaude">
                <option value="" selected></option>
                <option value=0>Não</option>
                <option value=1>Sim</option>
            </select>
            <br><br>
        </div>

        <div class="card">
            <label for="tipoSaude">Que tipo de serviço de saúde?</label>
            <br>
            <select name="tipoSaude" id="tipoSaude">
                <option value="" selected></option>
                <option value=0>Posto de Saúde</option>
                <option value=1>Pronto Atendimento</option>
                <option value=2>Médico Particular</option>
                <option value=3>Hospital</option>
                <option value=4>Outro Serviço</option>
            </select>
            <br><br>
        </div>

        <div class="card">
            <label for="distanciamentoSocial">Cumpriu distanciamento social?</label>
            <br>
            <select name="distanciamentoSocial" id="distanciamentoSocial">
                <option value="" selected></option>
                <option value=0>Muito Pouco</option>
                <option value=1>Pouco</option>
                <option value=2>Mais ou menos</option>
                <option value=3>Muito</option>
                <option value=4>Completamente isolado</option>
            </select>
            <br><br>
        </div>


        <div class="card">
            <label for="motivoSaude">Por qual motivo procurou o serviço de saúde?</label>
            <br>
            <select name="motivoSaude" id="motivoSaude">
                <option value="" selected></option>
                <option value=0>Vacinação</option>
                <option value=1>Problema de saúde já existente</option>
                <option value=2>Retorno agendado</option>
                <option value=3>Sintomas de gripe ou dor de garganta</option>
                <option value=4>Buscar remédio</option>
                <option value=5>Outro motivo</option>
                <option value=6>Não procurou serviço de saúde</option>
            </select>
            <br><br>
        </div>

        <div class="card">
            <label for="rotinaAtividades">Rotina de atividades em casa</label>
            <br>
            <select name="rotinaAtividades" id="rotinaAtividades">
                <option value="" selected></option>
                <option value=0>Em casa o tempo todo</option>
                <option value=1>Sai de vez em quando para esticar as pernas</option>
                <option value=2>Sai de vez em quando para compras e esticar as pernas</option>
                <option value=3>Sai todos os dias para alguma atividade</option>
                <option value=4>Sai todos os dias, o dia todo, para trabalhar ou outra atividade regular</option>
            </select>
            <br><br>
        </div>


        <div class="card">
            <label for="rotinaCasaQuem">Visitas:</label>
            <br>
            <select name="rotinaCasaQuem" id="rotinaCasaQuem">
                <option value="" selected></option>
                <option value=0>Só familiares que moram junto</option>
                <option value=1>Alguns parentes próximos visitam 1 ou 2x na semana</option>
                <option value=2>Alguns parentes próximos visitam quase todo dia</option>
                <option value=3>Amigos, parentes ou outros visitam 1 a 2 vezes na semana</option>
                <option value=4>Amigos, parentes ou outros que visitam quase todos os dias</option>
            </select>
            <br><br>
        </div>

        <?php 
if(isset($_POST['submit'])){
  $sexo = $_POST['sex'];
  $query="";
  $numeroMoradores = $_POST['numres'];
  $rendaMedia = $_POST['rendaMedia'];
  $idade= $_POST['idade'];
  $frequentouEscola = $_POST['frequentouEscola'];
  $graudeEnsino = $_POST['graudeEnsino'];
  $cloncuiuSuperior = $_POST['cloncuiuSuperior'];
  $ensinoMaiordaCasa = $_POST['ensinoMaiordaCasa'];
  $raca = $_POST['raca'];
  $procurouSaude = $_POST['procurouSaude'];
  $tipoSaude = $_POST['tipoSaude'];
  $distanciamentoSocial = $_POST['distanciamentoSocial'];
  $motivoSaude = $_POST['motivoSaude'];
  $rotinaAtividades = $_POST['rotinaAtividades'];
  $rotinaCasaQuem = $_POST['rotinaCasaQuem'];

 

  $query1 = "INSERT INTO pessoa (";
  //1 + fields + 2 + values + 3
  $query2 = ") VALUES(";
  $query3 = ")";
  $fields = "";
  $values = "";
  $needComma = false;
  if($numeroMoradores >=1){
    $fields .= "NumeroMorador ";
    $values .= "$numeroMoradores "; 
    $needComma = true;
  } 

  if($rendaMedia >=1){
    if($needComma){
        $fields .= ", ";
        $values .= ", ";
     }
    $fields .= "Rendamédia ";
    $values .= "$rendaMedia"; 
    $needComma = true;
  } 

  if($sexo >=0){

     if($needComma){
        $fields .= ", ";
        $values .= ", ";
     }
     $fields .= "Sexo ";
     $values .= "$sexo ";
     $needComma = true;
    } 
   
    if($idade >=1){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "Idade ";
        $values .= "$idade ";
        $needComma = true;
       } 
       
       
       if($frequentouEscola>=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "FrequentouEscola ";
        $values .= "$frequentouEscola ";
        $needComma = true;
       } 

       if($graudeEnsino >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "GrauEnsino ";
        $values .= "$graudeEnsino ";
        $needComma = true;
       } 
       
       if($cloncuiuSuperior >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "ConcluiuSuperior ";
        $values .= "$cloncuiuSuperior ";
        $needComma = true;
       } 

       if($ensinoMaiordaCasa >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "GrauEnsinoMoradorMaisEstudou ";
        $values .= "$ensinoMaiordaCasa ";
        $needComma = true;
       } 

       if($raca >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "CorRaca ";
        $values .= "$raca ";
        $needComma = true;
       } 

       if($procurouSaude >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "ProcurouServicoSaudeQuinzeDias ";
        $values .= "$procurouSaude ";
        $needComma = true;
       } 


       if($tipoSaude >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "TipoServicoSaude ";
        $values .= "$tipoSaude ";
        $needComma = true;
       } 

       if($distanciamentoSocial >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "CumprindoIsolamento ";
        $values .= "$distanciamentoSocial ";
        $needComma = true;
       } 

       if($motivoSaude >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "MotivoProcuraServico ";
        $values .= "$motivoSaude ";
        $needComma = true;
       } 
       if($rotinaAtividades >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "RotinaAtividades ";
        $values .= "$rotinaAtividades ";
        $needComma = true;
       } 
       if($rotinaCasaQuem>=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "RotinaCasa ";
        $values .= "$rotinaCasaQuem ";
        $needComma = true;
       } 
       
       

    $query .= $query1 . $fields . $query2 . $values . $query3;
    $result = $conn->query($query);
      if($result){
        
      }  else{
        
  }


   //sleep(5);

  //$jsonFile = 'output.json';

  // Read the JSON data from the file
  //$jsonData = file_get_contents($jsonFile);
  //echo $jsonData;
  // Parse the JSON data into a PHP associative array
 // $dataArray = json_decode($jsonData, true);


  //if ($dataArray === null) {
 //   echo 'Error parsing JSON.';
//} else { 
// Access the data
//$resultado = $dataArray['Resultado'];
//$certeza = $dataArray['Certeza'];
//$id = $conn->insert_id;
//}

$last_id = mysqli_insert_id($conn);
$_SESSION['last_id'] = $last_id;
echo $last_id;
      }
?>
        <form action="result.php" method="post">
    <button type="submit" name="submit">Enviar</button>
</form>

    </form>

    <footer>
        <p></p>
    </footer>
</body>

</html>


