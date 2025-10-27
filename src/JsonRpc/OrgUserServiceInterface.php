<?php

namespace linlic\JsonRpc;

interface OrgUserServiceInterface
{
    /**
     * 获取机构用户-用户名
     * @param array $userIds
     * @return array
     */
    public function getOrgUserName(array $userIds):array;
}