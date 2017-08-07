<?php

  include "conecta.php";  $Obj_Conexao = new CONEXAO();

  $pega_dados = $Obj_Conexao->Consulta("select * from materias");

$retorno = mysql_num_rows($pega_dados);

  if($retorno == 0 )

  {

          print("<center>Erro ao carregar as informações !!<br>");

          return 0;

  }

  else

  {
    echo '<pre>';
    while ($linha = mysql_fetch_assoc($pega_dados)) {
      print_r($linha);
    }



  }



?>