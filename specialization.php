<?php

require_once('classes/Connection.php');
$db = new Connection('localhost', 'itstep', '123123', 'itstep_db');

if(isset($_POST['add'])) {
    if(isset($_POST['name']) && !empty($_POST['name'])) {
        $query = 'INSERT INTO spec (Name) VALUES (%s)';
        $query = sprintf($query, $_POST['name']);
        $db->query($query);
    }
}

if(isset($_GET['del_id'])) {
    $db->query('DELETE FROM spec WHERE Id=' . $_GET['del_id']);
}

$specs = $db->selectAll('SELECT * FROM spec');

?>

<form action="" method="post">
    <input type="text" name="name"/>
    <input type="submit" value="Добавить" name="add"/>
</form>
<ul>
    <? foreach($specs as $spec) { ?>
        <li><?=$spec['Name']?><a href="?del_id=<?= $spec['Id'] ?>"> X </a></li>
    <? } ?>
</ul>