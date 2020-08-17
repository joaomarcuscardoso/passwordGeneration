<?php
class HomeController extends Controller {
    private $array;
    public function __construct() {
        $this->array = array("user_password_generation" => "");
    }
    public function index() {
        if(!empty($_GET['password_length'])) {

            $length = addslashes($_GET['password_length']);
            $password = "";
            $upperLetters = "ABCDEFGHIJKLMNOPQRSTUVYXWZÇ";
            $lowerLetters = "abcdefghijklmnopqrstuvyxwzç";
            $symbols = "!@#$%&*_+-;=:?";
            $numbers = "0123456789";

            if(!empty($_GET['upperLetters'])) {
                $password .= str_shuffle($upperLetters);
            }
            if(!empty($_GET['lowerLetters'])) {
                $password .= str_shuffle($lowerLetters);
            }
            if(!empty($_GET['symbolos'])) {
                $password .= str_shuffle($symbols);
            }
            if(!empty($_GET['numbers'])) {
                $password .= str_shuffle($numbers);
            }


            $this->array['user_password_generation'] =  substr(str_shuffle($password), 0, $length);

            
        }

        if(empty($this->array['user_password_generation']) && !empty($_GET['form_submit'])) {
            $this->array['messages_error'] = "Preenchas os dados que você que para sua senha, por favor!";
        }
       
        $this->loadTemplate("home", $this->array);
    }


    



}


