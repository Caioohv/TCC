<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

.modal {
  position: fixed;
  top: 20vh;
  right: 20vw;
  bottom: 50vh;
  left: 20vw;
  font-family: Arial, Helvetica, sans-serif;
  background: white;
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
  border: 2px solid #cccccc;
  border-radius: 1.5rem;
  padding: 20px;
}


.modal:target {
  opacity: 1;
  pointer-events: auto;
}


.modal > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 15px 20px;
  background: #fff;
}


.fechar {
  position: absolute;
  width: 30px;
  right: -15px;
  top: -20px;
  text-align: center;
  line-height: 30px;
  margin-top: 5px;
  background: #ff4545;
  border-radius: 50%;
  font-size: 16px;
  color: #8d0000;
}

    </style>
</head>
<body>
    
    <a href="?cpf=12345678912&nome=breche#abrirModal">Aluno 1</a>
    <a href="?cpf=12345678953456789876543345678#abrirModal">Aluno 2</a>
    <a href="?cpf=12345678912#abrirModal">Aluno 3</a>
    <a href="?cpf=12345678912#abrirModal">Aluno 4</a>

    <div id="abrirModal" class="modal">
        <a href="#fechar" title="Fechar" class="fechar">x</a>
        <h2>Teste</h2>
        <table>
            <tr>
              <th><?php echo 'cpf: '.$_GET['cpf'] . '  '?></th>
              <th>Lastname</th>
              <th>Age</th>
            </tr>
            <tr>
              <td>Jill</td>
              <td>Smith</td>
              <td>50</td>
            </tr>
            <tr>
              <td>Eve</td>
              <td>Jackson</td>
              <td>94</td>
            </tr>
          </table>

    </div>

<?php

  

  $_GET['nomedodado'];


$vetor = {id=123&nome=caio};

  //id do aluno
  $vetor['id-do-aluno']; // == 123
  //nome do aluno
  $vetor[1]; // == caio


  123 == $_GET['id'];

  


?>


</body>
</html>