<!-- ClassProfessor.php  -->
<?php
 class ClassProfessor{
    private $id;
    private $nome;
    private $email;
    private $salario;  
    private $nivel;      

    // Métodos SET
    public function setId($id){
     $this->id = $id;
    }
    public function setNome($nome){
         $this->nome = $nome;
    }
    public function setEmail($email){
         $this->email = $email;
    }
    public function setSalario($salario){
    $this->salario = $salario;
    }
    public function setNivel($nivel){ 
          $this->nivel = $nivel; 
    }

    // Métodos GET
    public function getId(){
     return $this->id;
    }
    public function getNome(){
         return $this->nome;
    }
    public function getEmail(){
         return $this->email;
    }
    public function getSalario(){
         return $this->salario;
    }
    public function getNivel(){
         return $this->nivel;
    }
 }//fim classe
?>