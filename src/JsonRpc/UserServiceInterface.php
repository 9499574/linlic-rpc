<?php

namespace linlic\JsonRpc;

interface UserServiceInterface
{
    /*
     * 机构添加管理员账号
     * @param string $org_id 机构编号
     * @param string $user_name 机构的用户名
     * @return bool
     */
    public function addManageUser($orgId,$userName):bool;
}