<?php 

    class Controller {

        public static function callUseCase(string $useCase = null){

            if(function_exists($useCase)){
                call_user_func($useCase);
            
            } else if(function_exists("preventDefault")) {
            
                call_user_func("preventDefault");
            
            } else {
                throw new BadFunctionCallException("Usecase not exists");
            }

        }

        public static function loadView(string $path, array $data = null){
            
            if($data != null) {
                extract($data);
            }            
            
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