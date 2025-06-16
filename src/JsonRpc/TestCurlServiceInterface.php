<?php

namespace linlic\JsonRpc;

interface TestCurlServiceInterface
{
    // 10 seconds
    public function tenSeconds();

    // 15 seconds
    public function fifteenSeconds();

    // 30 seconds
    public function thirtySeconds();
}