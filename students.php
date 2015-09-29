<?php

require_once 'classes/Connection.php';
$db = new Connection('localhost', 'itstep', '123123', 'itstep_db');
$persons = $db->selectAll('SELECT * FROM persons');

?>

<html>
<head>
    <title>Students App</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

    <header class="main">
        <a class="logo" href="#">КА "ШАГ"</a>
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="/students.php">Студенты</a>
                </li>
                <li>
                    <a href="/groups.php">Группы</a>
                </li>
                <!--<li>
                    <a href="#students">Студентам</a>
                    <ul>
                        <li><a href="#students/lk">Личный кабинет</a></li>
                        <li><a href="#students/schedule">Расписание</a></li>
                    </ul>
                </li>-->
            </ul>
        </nav>
    </header>
    <section class="main">

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
    </section>
</body>
</html>
