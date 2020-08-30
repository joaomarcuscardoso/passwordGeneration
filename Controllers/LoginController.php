<?php
class LoginController extends Controller {
    private $array;

    public function __construct() {
        $this->array = array();
    }

    public function index() {


        $this->loadTemplate("login", $this->array);
    }



}