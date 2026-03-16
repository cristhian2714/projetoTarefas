<?php 

    namespace Projeto\model;
    require_once('loginPessoa.php');
    use Projeto\view\loginPessoa;

    class Pessoa{
        private string $email;
        private string $senha;
       

        public function __construct(string $email, string $senha)
        {
            $this->email = $email;
            $this->senha = $senha;
        }

        function validarSenha($senha){
            $senhaBD = 2003;
            if($senhaBD == $senha){
                return "Acesso Liberado!";
            }else{
                return "Senha Inválida!";
            }
        }
      

    }//fim da classe
?>










































?>