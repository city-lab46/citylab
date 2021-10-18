<?php

class Views {

    function __construct() {
    }

    public function render($viewName) {
        require '../application/views/' . $viewName . '.php';
    }
}