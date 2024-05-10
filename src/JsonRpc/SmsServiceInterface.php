<?php

namespace linlic\JsonRpc;

interface SmsServiceInterface
{
    /**
     * 忘记密码
     * @param string $phone
     * @param int $code
     * @return bool
     */
    public function forgotPassword(string $phone, int $code):bool;
}