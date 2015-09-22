<?

$link = mysql_connect('localhost', 'itstep', '123123');
// connection error
if(!$link ) {
    echo '<span style="color: red;">Mysql connection error: ' . mysql_error() . '</span>';
}

$db_selected = mysql_select_db('itstep_db', $link);
// select error
if (!$db_selected) {
    echo '<span style="color: red;">Mysql select database error: ' . mysql_error() . '</span>';
}

$query = 'INSERT INTO persons (FirstName, LastName, Birthday)
            VALUES (\'test\', \'test\', \'1999-01-01\')';

$result = mysql_query($query);

mysql_close($link);