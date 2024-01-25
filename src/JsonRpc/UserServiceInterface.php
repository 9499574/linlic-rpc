<?php

namespace linlic\JsonRpc;

interface UserServiceInterface
{
    /**
     * 获取两个数相加的值
     */
    public function test($a,$b):int;

    /*机构设置管理员账号
    * 请求参数：orgId表示机构的id、userName表示机构的用户名
    * 返回数组。status为1表示操作成功，0表示操作失败。message表示成功或失败的消息提示
    * manage_uid表示用户的uid，为了防止四舍五入出错，这里给的是字符串类型
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