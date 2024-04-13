<?php include "cabecalho.php" ?>

<h1>📌Tarefas</h1>
<a href="novo-formulario.php" class="btn btn-primary">adicionar tarefas</a>

<table class="table p-3 bg-primary bg-opacity-10 border border-info border-start-0 rounded-end">
    <tr>
        <th>&nbsp;</th>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </tr>
    <?php
    include "conexao.php";
    $sql = "select * from tarefas order by status asc, id desc";
    $resultado = mysqli_query($conexao, $sql);

    while ($umaTarefa = mysqli_fetch_assoc($resultado)) :
    ?>
        <tr>
            <td>
                <?php
                if ($umaTarefa['status'] == 0){
                    ?>
                    <a href= 'editar-salvar.php?id=<?=$umaTarefa['id']?>' 
                    class="btn">✔</a>
                    <?php
                }
                ?>
            </td>
            <td><?= $umaTarefa['id']; ?></td>
            <td><?= $umaTarefa['titulo'] ?></td>
            <td><?= $umaTarefa['descricao'] ?></td>
            <td>
                <?php
                if ($umaTarefa['status'] == 1) {
                    echo "completo";
                } else {
                    echo "pendente";
                }
                ?>
            </td>
            <td>
                <a href="excluir.php?id=<?=$umaTarefa['id']?>"  class="btn" onclick="return confirm('Tem certeza que deseja Excluir essa tarefa ?')">❌</a>
            </td>
        <tr>
        <?php
    endwhile;
        ?>
</table>

<?php include "rodape.php" ?>