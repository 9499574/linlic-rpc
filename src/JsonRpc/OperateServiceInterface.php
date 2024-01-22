<?php

namespace linlic\JsonRpc;

interface OperateServiceInterface
{
    /**
     * 根据用户编号返回用户姓名
     * @param array $uid 用户编号
     * @return array
     */
    public function getUserName(array $uid): array;
}