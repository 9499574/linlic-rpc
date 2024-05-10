<?php

namespace linlic\JsonRpc;

interface SmsServiceInterface
{
    /**
     * 忘记密码
     * @param int $phone
     * @param int $code
     * @return bool
     */
    public function forgotPassword(int $phone, int $code):bool;
}