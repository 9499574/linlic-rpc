<?php

namespace linlic\JsonRpc;

interface UserServiceInterface
{
    public function test($a,$b):int;
    /*
     * 机构设置管理员账号
     * @param string $orgId 机构的id编号
     * @param string $userName 管理员账号的用户名
     * @return array。如：['status'=>$status,'message'=>$message]
     */
    public function synManageUser($orgId,$userName):array;

    /*
    * 根据机构id，获取到机构下用户的数量信息
    * @param string $orgId 机构的id编号
    * @return int。如：20
    */
    public function getOrgUserCount($orgId):array;

}