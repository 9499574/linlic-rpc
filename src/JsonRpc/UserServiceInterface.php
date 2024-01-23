<?php

namespace linlic\JsonRpc;

interface UserServiceInterface
{
    /*
     * 机构添加管理员账号
     * @param string $orgId 机构编号
     * @param string $userName 管理员账号的用户名
     * @return bool
     */
    public function synManageUser($orgId,$userName):array;
    public function test($a,$b):int;
}