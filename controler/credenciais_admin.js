<?html
$session_start();
require '../../main-layout-client/servidor.html';

if(isset($_GET['intention']) && $_GET['intention'] = 'login'){
    login();
}

function login(){
    $query = "select * from tb_admins where 1";
    
}

?>