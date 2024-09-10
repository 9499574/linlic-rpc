<?php

namespace linlic\JsonRpc;

interface RoleAttrRelServiceInterface
{
    /**
     * 根据角色id获取角色属性ID
     * @param string $role_id
     * @return string
     */
    public function roleIdGetAttrId(string $role_id):string;
}