<?php 

    class Controller {

        public static function callUseCase(string $useCase = null){

            if(function_exists($useCase)){
                call_user_func($useCase);
            
            } else {
                echo 'erro';
                throw new Exception("O caso de uso chamado não existe");
            }

        }

        public static function loadView(string $path, array $data = null){

            extract($data);
            
            $caminho = __DIR__ . "/../views/" . $path;
       
            if(file_exists($caminho)){
                 require $caminho;
            } else {
                print "erro";
            }
        }
    }

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    } else {
        $action = "preventDefault";
    }
    
    Controller::callUseCase($action);
?>