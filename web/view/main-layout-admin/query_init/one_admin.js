<?html

$query_primary_admin = "INSERT INTO tb_admins (nickname, email, pass) VALUES ('Burguer Admin','burguer_admin@gmail.com','burguer2021')";

if(!isset($_SESSION['admin'])){
    $bd = new Base();
    $bd->exec($query_primary_admin);
    $_SESSION['nickname'] = 'Burguer Admin';
}

?>