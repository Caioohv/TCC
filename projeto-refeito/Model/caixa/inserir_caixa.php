<?php 

function getCoordenadas($endereco){
    
    $latitude;
    $longitude;

    $key = "AIzaSyCoqvTufKcOjkclTixbx1upyq_WLrAt15c";
    $endereco = urlencode($endereco);
   // 

    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$endereco&key=$key";
    $lat_long = get_object_vars(json_decode(file_get_contents($url)));
    $latitude = $lat_long['results'][0]->geometry->location->lat;
    $longitude = $lat_long['results'][0]->geometry->location->lng;




    $result = array($latitude, $longitude);
    return $result;
}


session_start();
        
include '../conexao.php';

    if(isset($_POST['submit'])){

        //passa os valores recebidos pelo post para variáveis
        
        $nm_caixa = $_POST['Nome'];
        
        $status_caixa = $_POST['status'];
        $fk_email_adm = $_SESSION['userId'];

        $cidade = $_POST['Cidade'];
        $bairro = $_POST['Bairro'];
        $rua = $_POST['Rua'];
        $numero = $_POST['Numero'];
        $estado = $_POST['Estado'];
        $pais = $_POST['Pais'];


        $horario_inicio_caixa = $_POST['hrrAbrir'];
        $horario_fim_caixa = $_POST['hrrFechar']; 
        
        //inserindo no banco de dados a querry 
        //Brasil, Minas Gerais, Ouro Brando, Siderurgia, Mannesmann 111
        $endereco = $pais .", ". $estado .", ". $cidade .", ". $bairro . ", ". $rua ." ". $numero;
        //$fk_email_adm = 'caioviier@gmail.com';
        $fk_email_adm = $_SESSION['userId'];
    

        $coords = getCoordenadas($endereco);
        $latitude = $coords[0];
        $longitude = $coords[1];
        


        $result = "
        insert into caixa(
        nm_caixa, horario_inicio_caixa, horario_fim_caixa, status_caixa, fk_email_adm, cidade, bairro, rua, numero, estado, pais, endereco, latitude, longitude)
        values(
        '$nm_caixa', '$horario_inicio_caixa', '$horario_fim_caixa', '$status_caixa', '$fk_email_adm', '$cidade',
        '$bairro', '$rua', '$numero', '$estado', '$pais', '$endereco', '$latitude', '$longitude');
        ";
        
        echo $result;
        //executando querry
        $result = mysqli_query($con, $result);
        if($result){
            mysqli_close($con);
            echo "Caixa cadastrado com sucesso!";
            header("location: ../../index.php?page=visualizarC");
            
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao cadastrar caixa</p>';
            mysqli_close($con);
        }

        

    }

?>