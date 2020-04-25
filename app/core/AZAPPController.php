<?php 

/*
    Framework PHP AzApp
    Copyright : @Azarwanda
    Instagram : @wanda_azharr
*/
    class AZAPPController {
        
        public function view($view, $data = []) {
            require_once '../app/views/' . $view . '.php';
        }

        public function model($model){
            require_once '../app/models/' . $model . '.php';
            return new $model;
        }
    }