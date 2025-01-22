<div class="titulo">Formulario</div>
<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gerenciador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>Tarefa:
                <input type="text" name="nome">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <? 
    if (isset($_GET['nome'])){
        $_SESSION['lista_tarefas'] [] = $_GET['nome'];
    }

    $lista_tarefas = array();
    if (isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    } ?>
    <table>
        <tr>
            <th>Tarefas:</th>
        </tr>
        <? foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><? echo $tarefa; ?></td>
            </tr>
        <? endforeach; ?>
    </table>
</body>

</html>