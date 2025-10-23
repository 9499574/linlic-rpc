<?php

namespace linlic\JsonRpc;

interface UserInfoServiceInterface
{
    /**
     * 更新用户信息字段(与之前的数据进行合并)
     * @param int $uid
     * @param array $params ['a'=>1,'b'=>[1,2,3]]
     * @return bool
     */
    public function updateUserInfoField(int $uid,array $params):bool;
}