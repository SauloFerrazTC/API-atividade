<?php 

// atribui o namespace (que funciona como apelido), faz o require do autoload e usa o PDO
namespace Connections;
use PDO;


class Connection{

    function getConnection () {
        $host = 'localhost'; 
        $port = '5433';      
        $dbname = 'postgres'; 
        $user = 'postgres';         
        $password = 'password';       
        

        $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);

        
        
        return $pdo;
        
    }
    
}

?>