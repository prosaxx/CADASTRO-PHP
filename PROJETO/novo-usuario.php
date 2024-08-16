<h1>NOVO USUÁRIO</h1>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>NOME</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" class="form-control" minlength="" required>
    </div>
    <div class="mb-3">
        <label>DATA DE NASCIMENTO</label>
        <input type="date" name="data_nasci" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
    </div>
</form>