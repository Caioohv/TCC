<?php 
    include_once('../../Model/conexao.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visualizar Administradores</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap"
            rel="stylesheet">



        <script>
            function confirmarExclusao(id,nm){
                if(window.coonfirm("Deseja realmente apagar o registro de"+nm+ " ?")){
                    window.location = "../../Model/adm/excluirAdm.php?id_adm=" + id;
                }
            }

        </script>

    </head>

    <body>
        <!-- Conteúdo da Página -->
        <h1>Administradores</h1>
        <?php
            //comando sql para selecionar os administradores cadastrados
            $sql = "SELECT * FROM admin order by nm_adm";

            //executando comando sql
            $dadosAdmin = $con->query($sql);

            if($dadosAdmin->num_rows > 0){
                ?>
                <table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                
                <?php
                    //retorna cada linha da tabela 
                    while($exibir = $dadosAdmin->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $exibir['id_adm']?></td>
                            <td><?php echo $exibir['nm_adm ']?></td>
                            <td><?php echo $exibir['cpf_adm']?></td>
                            <td><?php echo $exibir['email_adm']?></td> 
                            <td><a href="editarAdm.php?id_adm=<?php echo $exibir['id_adm']?>">Editar</a></td>  
                            <td><a href="#" onclick="confirmarExclusao('<?php echo $exibir['id_adm']?>','<?php echo $exibir['nm_adm ']?>')">Excluir</a></td>                     
                        </tr>
                        <?php
                    }

                ?>
                </table>
                    <?php
            }else{
                echo "Nenhum registro encontrado";
            }


        ?>
    </body>
    </html>
