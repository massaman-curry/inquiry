<?php

class Model{

    public function getRequest(){
        return substr($_SERVER['REQUEST_URI'], 11);
    }

}