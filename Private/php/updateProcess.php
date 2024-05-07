<?php 

    session_start();

    class UpdateProcess {

        private $conection;
        private $register;

        public function __construct(Conection $conection, Register $register) {
            $this->conection = $conection->conection();
            $this->register = $register;
        }

        public function create() {
            
          try {
            if ($this->register->__get('dataCriacao') === null) {
                $this->register->__set('dataCriacao', (new DateTime())->format('Y-m-d H:i:s'));
            }

                $query = 'INSERT INTO tb_processos(
                    nome, unidade, status, datacriacao, pessoa) 
                    VALUES(:nome, :unidade, :status, :datacriacao, :pessoa
                )';
    
                $stmt = $this->conection->prepare($query);
    
                $stmt->bindValue(':nome', $this->register->__get('nome'));
                $stmt->bindValue(':unidade', $this->register->__get('unidade'));
                $stmt->bindValue(':status', $this->register->__get('status'));
                $stmt->bindValue(':datacriacao', $this->register->__get('dataCriacao'));
                $stmt->bindValue(':pessoa', $this->register->__get('pessoa'));
    
                $stmt->execute();
                $_SESSION['return'] = 'Dados inseridos com sucesso';
                header('Location: ./novoProcesso.php');
           } catch (Exception $e) {
                $_SESSION['error'] = 'Os dados não foram inseridos. Favor tentar novamente';
                header('Location: ./novoProcesso.php');
            }


        }

    }

?>