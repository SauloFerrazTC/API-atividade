<?php 

namespace Controllers;
require_once ("../../model/UserModel.php");
use Models\UserModel;

Class UserController {

    private $userModel;
    public function __construct() {
        $this->userModel = new UserModel();
    }

  public function createPost($data, $objetivo) {   

       $result = $this->userModel->api('POST', $objetivo , $data);

        return $result;
    }

    public function getPosts($objetivo) {
        $result = $this->userModel->api('GET', $objetivo, '1');

        return $result;
    }
  
}

?>