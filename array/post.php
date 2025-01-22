<div class="titulo">$_POST</div>


<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="FOR">Fortaleza</option>
        <option value="CAU">Caucaia</option>
        <option value="MAR">Maracanau</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<?php
print_r($_GET);
echo '<br>';
print_r($_POST);
