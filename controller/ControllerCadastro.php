<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/sistema_login/model/cadastro.php");
class cadastroController{

    private $cadastro;

    public function __construct(){      
        $this->cadastro = new Cadastro();
        if(isset($_POST['inputEmail3'])){
            $this->incluir();
        }
        
    }

    private function incluir(){
        
        $this->cadastro->setEmail($_POST['inputEmail3']);
        $this->cadastro->setSenha($_POST['inputPassword']);
        $this->cadastro->setEndereco($_POST['inputAddress8']);
        $this->cadastro->setBairro($_POST['inputAddress2']);
        $this->cadastro->setCep($_POST['inputAddress3']);
        $this->cadastro->setCidade($_POST['inputCity']);
        $this->cadastro->setEstado($_POST['inputState']);
        $result = $this->cadastro->incluir();
        
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }

    }
    public function listar(){
        return $result = $this->cadastro->listar();
    }
}
new cadastroController();
?>