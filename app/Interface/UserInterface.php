<?php
    namespace App\Interface;


    interface UserInterface{

        public function login();

        public function register($request);

    }
