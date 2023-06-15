<h2>Working with DB (SELECT)</h2>

<?php

$db_host = 'localhost';
$db_name = 'test';
$db_user = 'root';
$db_pass = '';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die('DB connection error: ' . $conn->connect_error);
}

$where = '';
$filter = '';
if (isset($_GET['filter'])) {
    $filter = trim(filter_var($_GET['filter'], FILTER_SANITIZE_STRING));

    if ($filter !== '') {
        $where = ' WHERE name LIKE "%'.$filter.'%"';
    }
}
?>

<form action="">
    <label for="search">Search in the table:</label>
    <input type="text" name="filter" id="search" value="<?= $filter ?>">
    <input type="hidden" name="task" value="5">
    <button>Search</button>  
</form>
<hr>
<?php

$res = $conn->query('SELECT * FROM user' . $where );
if ($res->num_rows > 0) {

    if ($filter !== '') {
        echo "<p>Active filter: $filter</p>";
    }

    ?>    
    <table border=1>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($r = $res->fetch_assoc()) {
            echo '<tr><td>'.$r['id'].'</td><td>'.$r['user_name'].'</td><td>'.$r['user_email'].'</td><td>'.$r['user_message'].'</td></tr>';
        }
        ?>
        </tbody>
    </table>

    <?php
} else {
    echo '<p>Not found!</p>';
}
