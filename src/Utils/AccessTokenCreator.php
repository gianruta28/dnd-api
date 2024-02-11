<?php

namespace App\Utils;

class AccessTokenCreator
{
    public function run()
    {
        $token = bin2hex(openssl_random_pseudo_bytes(16));
        return $token;
    }

}