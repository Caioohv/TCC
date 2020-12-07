<div class="teste">
            <div class="main">
                <h1>Caixas</h1>
                <br>
                <div class="formPesquisa">
                    <form action="visualizarCaixa.php" method="POST" name="fdmView">
                        <input type="text" name="txtcod" id="txtcod" class="caixaTexto" placeholder="Código">
                        <input type="text" name="txtlocal" id="txtlocal" class="caixaTexto" placeholder="Cidade">
                        <input type="text" name="txtnome" id="txtnome" class="caixaTexto" placeholder="Nome">
                        <input type="submit" value="Pesquisar">
                    </form>
                </div>
                <br>
                <div class="tableCaixas">
                    <table>
                        <tr>
                            <th class="id">Id</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Status</th>
                            <th>Editar</th>
                        </tr>
                        <!-- <tr>
                            <td class="id">c000001</td>
                            <td>Ouro Preto</td>
                            <td>Caixa da praça 7</td>
                            <td>08:00h - 22:00h</td>
                            <td>
                                <div class="botoesEdit">
                                    <a href="editarCaixa.php">Editar</a>
                                </div>
                            </td>
                        </tr> -->
                        <?php
                        
                        include_once '../../Model/conexao.php';

                        if($con -> connect_error){
                            die("Falha na conexão com o banco de dados: " . $con->connection_error);
                        }
                        
                        $sql = "SELECT * FROM caixa";// WHERE id_caixa like".$_POST['txtcod']." AND endereco_caixa like ".$_POST['txtlocal']." AND nm_caixa like ".$_POST['txtnome'].";";
                        $result = mysqli_query($con, $sql);
                        
                        if($result->num_rows > 0){
                            while($row = $result -> fetch_assoc()){
                                echo '<tr>';
                                echo '<td> '.$row['id_caixa'].'</td>';
                                echo '<td> '.$row['nm_caixa'].'</td>';
                                echo '<td> '.$row['endereco_caixa'].'</td>';
                                echo '<td> '.$row['status_caixa'].'</td>';
                                echo '<td><div class="botoesEdit"><a href="editarCaixa.php">Editar</a></div></td>';
                                echo '</tr>';
                            }
                        }

                        ?>
                    </table>
                </div>

                
            </div>
        </div>
        