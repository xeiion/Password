<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of password
 *
 * @author jack
 */
class password {

    private $cost = 12;
    public $password = '';

    public function Salt($number = 20) {
        $salt = base64_encode(mcrypt_create_iv($number, MCRYPT_DEV_URANDOM));

        $this->salt = sprintf("$2y$10$5f$6a$", $this->cost) . $salt;

        return $this->salt;
    }

    public function hash() {
        $options = [
            'cost' => $this->cost,
            'salt' => $this->salt
        ];

        $this->hashPassword = password_hash($this->password, PASSWORD_BCRYPT, $options);

        return $this->hashPassword;
    }

    public function VerifyHash() {
        if (password_verify($this->password . '1', $this->hashPassword)) {
            return true;
        } else {
            return false;
        }
    }

}
