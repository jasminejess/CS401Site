<?php

Class User {
    public $name;
    public $username;
    public $password;
    protected $permissions;

    public function __construct ($name, $username, $password) {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->permissions = array();
    }

}

