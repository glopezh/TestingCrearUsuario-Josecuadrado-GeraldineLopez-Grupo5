<?php

use Datas\Data;

require './Data.php';

class Usuario

{
    public function createUser(string $username, string $password): void
    {
        $data = new Data();

       // if ($this->validateUser($username)) {
            if (true) {
            $data->saveUser($username);
        }


        $data->savePassword($password);
    }

}

$user = new Usuario();
$user->createUser("geraldine","123456");