<?php

require_once 'classes/Connection.php';

$db = new Connection('localhost', 'itstep', '123123', 'itstep_db');

$persons = $db->selectAll('SELECT * FROM persons');

?>

<table>
    <tr>
        <th>Id</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>BirthDate</th>
    </tr>
    <? foreach($persons as $person) { ?>
        <tr>
            <td><?=$person['Id']?></td>
            <td><?=$person['FirstName']?></td>
            <td><?=$person['LastName']?></td>
            <td><?=$person['Birthday']?></td>
        </tr>
    <? } ?>
</table>