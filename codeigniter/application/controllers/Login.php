<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function efetua_login() {
        
        $usuario = $this->input->post("usuario");
        $senha = $this->input->post("senha");
        
        echo "usuario:" .$usuario. "<br>";
        echo "senha:" .$senha;
        
    }
}
//http://blog.thiagobelem.net/criando-um-sistema-de-login-com-php-e-mysql
//http://www.universidadecodeigniter.com.br/criando-um-crud-com-codeigniter/