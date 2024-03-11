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


    /*
    * 根据ccmtvUid的数组，获取到用户的相关信息
    * @param $ccmtvUidArr 数组类型，表示ccmtv的用户uid数组
    * @$colArr:数组类型，表示要获取到的字段值，如['user_name','true_name']。如果不填，则默认返回最基本的信息
    * @return array。如：[['user_name'=>'xxx','true_name'=>'yyy','mobphone'=>'ccx'],['user_name'=>'yx15','true_name'=>'95s','mobphone'=>'ccx']]
    */
    public function getUserByCcmtvUidArr($ccmtvUidArr,$colArr = []):array;

    /*
    * 根据uid的数组，获取到用户的相关信息
    * @param $uidArr 数组类型，表示用户的uid数组
    * @$colArr:数组类型，表示要获取到的字段值，如['user_name','true_name']。如果不填，则默认返回最基本的信息
    * @return array。如：[['user_name'=>'xxx','true_name'=>'yyy','mobphone'=>'ccx'],['user_name'=>'yx15','true_name'=>'95s','mobphone'=>'ccx']]
    */
    public function getUserByUidArr($uidArr,$colArr = []):array;

    /*
    * 根据where条件组，返回用户的uid的数组
    * $where：如： ['org_id'=>'609114673077370880','system_id'=>'610565232448225280','user_name'=>'xx','true_name'=>'yy']，目前参数org必带，如果要想查系统里所有的后台用户，org_id传-1,如果没有org_id参数，则全部返回空数组。
    * 如果数组的键值为空字符，则后台会自动过滤掉此查询条件。比如['user_name'=>'xx','true_name'=>''],等同于['user_name'=>'xx']的查询
    * user_name、true_name、mobphone字段，目前都是做的like的模糊查询。
    */
    public function getUidArrByWhere(array $where):array;


    /**
     * 根据where条件获取用户ID
     * @param $orgId
     * @param array $where [['user_name','=','asdassdf23423'],['aaa','=','111']]
     * @param $systemId
     * @return array
     */
    public function getUserIdByWhere($orgId,array $where, $systemId=null):array;

    /**
     * 机构开通系统 初始化角色数据
     * @param array $params
     * @return bool
     */
    public function orgSystemRoleInit(array $params):bool;

    /**
     * 机构开通系统 初始化角色与资料数据
     * @param array $params
     * @return bool
     */
    public function orgSystemRoleFormInit(array $params):bool;

    /**
     * 机构开通系统 初始化角色权限数据
     * @param array $params
     * @return bool
     */
    public function orgSystemRolePower(array $params):bool;

    /**
     * 获取机构系统下的角色
     * @param string $orgId
     * @param string $systemId
     * @param int $roleType 0所有类型 1角色组类型 2正常角色类型
     * @return array
     */
    public function getOrgSystemRoles(string $orgId,string $systemId,int $roleType=0):array;

}