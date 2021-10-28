<?php

class User
{
    public static function authenticate($username,$pw){
        return $username == 'tony' && $pw =='test';
    }
}