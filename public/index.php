<pre>
<?php
$db = new Pdo('mysql:dbname=marylyn;host=localhost;unix_socket=/tmp/mysql/veronica.sock', 'margaret', 'e30H79S8');
foreach ($db->query("show databases") as $row) {
  var_dump($row);
}
