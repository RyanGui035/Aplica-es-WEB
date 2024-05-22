<!-- ClassAluno.php  -->
<?php
 class ClassAluno{
    private $id;
    private $nome;
    private $email;
    private $curso;  
    private $turno;      

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
    public function setCurso($curso){
    $this->curso = $curso;
    }
    public function setTurno($turno){ 
          $this->turno = $turno; 
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
    public function getCurso(){
         return $this->curso;
    }
    public function getTurno(){
         return $this->turno;
    }
 }//fim classe
?>