<?php

namespace linlic\JsonRpc;

interface OperateServiceInterface
{
    /**
     * 获取用户列表
     * @return array
     */
    public function getUserList(): array;
}