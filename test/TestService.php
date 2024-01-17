<?php
require 'vendor/autoload.php';
use linlic\JsonRpc\TestServiceInterface;
class TestService implements TestServiceInterface{

    public function add($a, $b): int
    {
        return $a+$b;
    }
}