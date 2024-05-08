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


        public function read() {

            try {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $filter = $_POST['filter'];
                } else {
                    $filter = isset($_GET['filter']) ? $_GET['filter'] : '';
                }
                $query = 'SELECT COUNT(*) AS total FROM tb_processos WHERE nome LIKE :filter OR unidade LIKE :filter OR status LIKE :filter OR pessoa LIKE :filter';
                $stmt = $this->conection->prepare($query);
                $stmt->bindValue(':filter', "%$filter%");
                $stmt->execute();
                $totalResults = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
                $totalPages = ceil($totalResults / 10);
                $query = 'SELECT * FROM tb_processos WHERE nome LIKE :filter OR unidade LIKE :filter OR status LIKE :filter OR pessoa LIKE :filter LIMIT 10 OFFSET :offset';
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($page - 1) * 10;
                $stmt = $this->conection->prepare($query);
                $stmt->bindValue(':filter', "%$filter%");
                $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return ['results' => $results, 'totalPages' => $totalPages];


            } catch (Exception $e) {
                $_SESSION['error'] = 'Os dados não foram inseridos. Favor tentar novamente';
                header('Location: ./index.php');
            }

        }

        public function update() {

            try{
                
                $codigo = $_SESSION['codigo'];
                $query = 'select * from tb_processos where codigo = :codigo';
                $stmt = $this->conection->prepare($query);
                $stmt->bindValue(':codigo', $codigo);
                $stmt->execute();
                $return = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $_SESSION['codigo'] = $return[0]['codigo'];
                $_SESSION['nome'] = $return[0]['nome'];
                $_SESSION['pessoa'] = $return[0]['pessoa'];
                $_SESSION['unidade'] = $return[0]['unidade'];
                $_SESSION['status'] = $return[0]['status'];

            } catch(Exception $e) {
                $_SESSION['error'] = 'Os dados não foram inseridos. Favor tentar novamente';
                header('Location: ./index.php');
            }

        }

        public function updateFinal() {

            try{
                
                $codigo = $_SESSION['codigo'];
                $status = $_POST['status'];
                $dataModificacao = date('Y-m-d H:i:s');
        
                $query = 'update tb_processos set status = :status, datamodificacao = :datamodificacao where codigo = :codigo';
                $stmt = $this->conection->prepare($query);
                $stmt->bindValue(':status', $status);
                $stmt->bindValue(':datamodificacao', $dataModificacao);
                $stmt->bindValue(':codigo', $codigo);
                $stmt->execute();
                $_SESSION['updateProcess'] = 'Dados atualizados com sucesso';
                header('Location: ./index.php');


            } catch(Exception $e) {
                $_SESSION['error'] = 'Os dados não foram inseridos. Favor tentar novamente';
                header('Location: ./index.php');
            }

        }

        public function delete() {

            try{

                $codigo = $_SESSION['codigo'];
                $query = 'delete from tb_processos where codigo = :codigo';
                $stmt = $this->conection->prepare($query);
                $stmt->bindValue(':codigo', $codigo);
                $stmt->execute();
                $_SESSION['updateProcess'] = 'Dados deletados com sucesso';
                header('Location: ./index.php');

            } catch(Exception $e) {
                $_SESSION['error'] = 'Os dados não foram inseridos. Favor tentar novamente';
                header('Location: ./index.php');
            }

        }


    }

?>