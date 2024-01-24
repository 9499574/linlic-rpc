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
    public function setManageUser($orgId,$userName):array;

    /*
    * 根据机构id，获取到机构下用户的数量信息
    * @param string $orgId 机构的id编号
    * @return array。比如['set_count'=>100,'has_count'=>2],其中set_count为空字符串的时候，表示还没有进行设置
    */
    public function getOrgUserCount($orgId):array;

    /*
    * 根据机构id，获取到机构下用户的数量信息
    * @param string $orgId 机构的id编号
    * @return int。如：['status'=>$status,'message'=>$message]
    */
    public function setOrgCount($orgId,$setCount):array;

}