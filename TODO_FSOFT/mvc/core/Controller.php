<?php
class Controller{
    //method gọi model
    public function model($model){
        require_once './mvc/models/'.$model.'.php';
        return new $model;
    }

    //method gọi view
    public function view($view, $data = []){
        require_once './mvc/views/'.$view.'.php';
    }
}
