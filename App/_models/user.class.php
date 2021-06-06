<?php
class user extends DatabaseModel
{
    public $id;
    public $username;
    public $password;
    public $email;
    public $gender;
    public $address;
    public $status;
    public $activation;
    public $privilege;
    public $lastlogin;
    public $tablename = 'users';
    public $dbfields = array(
        'username',
        'password',
        'email',
        'gender',
        'address',
        'status',
        'activation',
        'privilege',
        'lastlogin'
    );
    
}
