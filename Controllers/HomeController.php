<?php
class HomeController extends Controller {
    private $array;
    public function __construct() {
        $this->array = array();
    }
    public function index() {

        $this->loadTemplate("home", $this->array);
    }


}


