<?php

class Result extends Dbh {

    public $button_id;

    function __construct($id) {
        $this->button_id = $id;
    }

    private function fetchDataButtonOne() {

    }

    public function showResult() {
        switch($this->button_id) {
            case 1:
                echo 'You clicked button 1';
                break;
            case 2:
                echo 'You clicked button 2';
                break;
            case 3:
                echo 'You clicked button 3';
                break;
            case 4:
                echo 'You clicked button 4';
                break;
            case 5:
                echo 'You clicked button 5';
                break;
        }
    }

}