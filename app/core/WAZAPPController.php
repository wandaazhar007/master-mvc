<?php 
/**
 * MyFramework
 * @author	Wanda Azhar
 * @copyright	24-04-2020
 * Github: https://github.com/wandaazhar007/
 * Instagram: @wanda_azharr
 */

    class WAZAPPController {
        
        public function view($view, $data = []) {
            require_once '../app/views/' . $view . '.php';
        }

        public function model($model){
            require_once '../app/models/' . $model . '.php';
            return new $model;
        }
    }