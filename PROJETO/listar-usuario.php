<H1>LISTAR USUÁRIOS</H1>

<?php
    $sql = "SELECT * FROM USUARIO";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>NOME</th>";
            print "<th>CPF</th>";
            print "<th>DATA DE NASCIMENTO</th>";
            print "<th>AÇÕES</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->data_nasci."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&cpf=".$row->cpf."';\" class='btn btn-success'>EDITAR</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&cpf=".$row->cpf."';}else{false;}\" class='btn btn-danger'>EXCLUIR</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'> Não Encontrou Resultados!</p>";
    }

?>