<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','agendamentos');
    
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setAgendamentos($email,$senha,$endereco,$bairro,$cep,$cidade,$estado){
        $stmt = $this->mysqli->prepare("INSERT INTO cadastro (`email`, `senha`, `endereco`, `bairro`, `cep`, `cidade`, `estado`) VALUES (?,?,?,?,?,?,?);");
        $stmt->bind_param("sssssss", $email,$senha,$endereco,$bairro,$cep,$cidade,$estado);
        if( $stmt->execute() == TRUE){
            return true;
        }else{
            return false;
        }
    }
    public function getAgendamentos(){
        try{
            $stmt = $this->mysqli->query("SELECT * FROM cadastro;");
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            
            foreach ($lista as $l){
                $f_lista[$i]['id'] = $l['id'];
                $f_lista[$i]['email'] = $l['email'];
                
                $i++;
            }
            return $f_lista;
        }catch(Exception $e){
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
}
?>