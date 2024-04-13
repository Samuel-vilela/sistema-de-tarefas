<?php include "cabecalho.php"?>

<h2>cadastrar nova tarefa</h2>
<form class="p-3 bg-primary bg-opacity-10 border border-info border-start-0 rounded-end" method="post" action="novo-salvar.php">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" required maxlength="100">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao"></textarea>
    <button type="submit" class="btn btn-light">Salvar nova tarefa</button>
</form>

<?php include "rodape.php"?>