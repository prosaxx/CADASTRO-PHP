<h1>EDITAR USUÁRIO</h1>
<?php
    $sql = "SELECT * FROM usuario WHERE cpf=".$_REQUEST["cpf"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="cpf" value="<?php print $row->cpf; ?>">
    <div class="mb-3">
        <label>NOME</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" value="<?php print $row->cpf;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>DATA DE NASCIMENTO</label>
        <input type="date" name="data_nasci" value="<?php print $row->data_nasci;?>"class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
    </div>
</form>