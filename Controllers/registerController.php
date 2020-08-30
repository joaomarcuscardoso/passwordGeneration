<?php
class RegisterController extends Controller {
    private $array;

    public function __construct() {
        $this->array = array();
    }
    
    public function index() {

        $this->loadTemplate("register", $this->array);
    }

}