<form action="" method="post">
    <input type="text" name="firstName"/>
    <input type="text" name="lastName"/>
    <input type="text" name="birthDate"/>

    <input type="submit" value="Добавить" name="add"/>
</form>

<?php

$link = mysql_connect('localhost', 'itstep', '123123');
mysql_select_db('itstep_db', $link);

if(isset($_POST['add'])) {
    /*$query = 'INSERT INTO persons (FirstName, LastName, Birthday)'
        . 'VALUES (\''
        . $_POST['firstName'] . '\', \''
        . $_POST['lastName'] . '\', \''
        . $_POST['birthDate'] . '\')';*/

    $query = "INSERT INTO persons (FirstName, LastName, Birthday)"
        . " VALUES ('%s', '%s', '%s')";

    $query = sprintf($query, $_POST['firstName'], $_POST['lastName'], $_POST['birthDate']);

    $result = mysql_query($query);
}

$result = mysql_query('SELECT * FROM persons');

echo '<table>';
while($row = mysql_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['Id'] . '</td>';
    echo '<td>' . $row['FirstName'] . '</td>';
    echo '<td>' . $row['LastName'] . '</td>';
    echo '<td>' . $row['Birthday'] . '</td>';
    echo '<td><a href="delete.php?id='. $row['Id'] .'">X</a></td>';
    echo '</tr>';
}
echo '</table>';