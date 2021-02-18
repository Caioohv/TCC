
<?php

function verificaHora($abertura, $fechamento){

    //formato: 12:00, 12:00
    //define horas
    $aberturaSeparado = explode(":", $abertura);
    $horaabre = $aberturaSeparado[0];
    $minutoabre = $aberturaSeparado[1];

    $fechamentoSeparado = explode(":", $fechamento);
    $horafecha = $fechamentoSeparado[0];
    $minutofecha = $fechamentoSeparado[1];


    date_default_timezone_set('America/Sao_Paulo');
    //H maiusculo: Horas 0-23; i minusculo: Minutos 0-59;
    //-1 pois a hora do php está adiantada em 1, possivelmente pelo horário de verão
    $horalocal = date("H");
    $minutolocal = date("i");

    //                          Hora local aqui
    //00:00 -------------- Abre --------------- Fecha ---------- 23:59

    //testes
    // echo $horaabre;
    // echo '<br>';
    // echo $minutoabre;
    // echo '<br>';
    // echo $horafecha;
    // echo '<br>';
    // echo $minutofecha;
    // echo '<br>';
    // echo $horalocal;
    // echo '<br>';
    // echo $minutolocal;
    // echo '<br>';
    // $localtime = localtime();
    // $localtime_assoc = localtime(time(), true);
    // print_r($localtime);
    // echo '<br>';
    // print_r($localtime_assoc);
    

    $aberto = '<span style="color: green">Aberto</span>';
    $fechado = '<span style="color: red">Fechado</span>';
    

    $resultado = $fechado;


    //se a hora local está dentro do horário de funcionamento, está funcionando.
    if(($horalocal > $horaabre) && ($horalocal < $horafecha)){
        
        $resultado = $aberto;

    //se a hora local é igual o abre ou o fecha, verifica os minutos.
    }else if(($horalocal == $horaabre)){
        
        //Se o minuto local for maior ou igual o de abrir, está aberto, se não, está fechado.
        if(($minutolocal >= $minutoabre)){
            $resultado = $aberto;
        }else{
            $resultado = $fechado;
        }
        

    //se a hora local está fora da hora de funcionamento, está fechado.
    }else if(($horalocal == $horafecha)){
        //Se o minuto local for maior ou igual
        if(($minutolocal < $minutoabre)){
            $resultado = $aberto;
        }else{
            $resultado = $fechado;
        }
    }else{

        $resultado = $fechado;

    }


    return $resultado;
}

function getSql(){
    $sql = "SELECT * FROM caixa";

    



    return $sql;
}





include_once 'Model/conexao.php';

if($con -> connect_error){
    die("Falha na conexão com o banco de dados: " . $con->connection_error);
}





$sql = setSql();
$result = mysqli_query($con, $sql);

if($result->num_rows > 0){
    while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td> '.$row['id_caixa'].'</td>';
        echo '<td> '.$row['nm_caixa'].'</td>';

        $id=$row['id_caixa'];
        $endereco = $row['rua']." n° ".$row['numero']." - ".$row['cidade'];
        echo '<td> '.$endereco.'</td>';
        //verifica se está aberto ou fechado
        $hrrabrir = $row['horario_inicio_caixa'];
        $hrrfechar = $row['horario_fim_caixa']; 


        $abertooufechado = verificaHora($hrrabrir, $hrrfechar);

        $statuscaixa = $row['status_caixa']."  -  ".$abertooufechado;

        echo '<td> '.$statuscaixa.'</td>';
        echo'<td> '.$row['fk_email_adm'].'</td>';
        echo '<td><div class="botoesEdit"><a href="index.php?page=editarC&id='.$id.'">Editar</a> <a href="index.php?page=excluirC&id='.$id.'">Excluir</a></div></td>';
        echo '</tr>';
    }
}

?>