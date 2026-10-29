<?php

namespace linlic\JsonRpc;

interface UserInfoServiceInterface
{
    /**
     * 更新用户信息字段(与之前的数据进行合并)
     * @param int $uid
     * @param array $data ['a'=>1,'b'=>[1,2,3]]
     * @return bool
     */
    public function updateUserInfoField(int $uid,array $data):bool;


    /**
     * 批量更新用户字段
     * @param array $data [['uid'=>1,'data'=>['a'=>1,'b'=>2]],['uid'=>2,'data'=>['a'=>1,'b'=>2]]]
     * @return bool
     */
    public function batchUpdateUserInfoField(array $data):bool;


    /**
     * 更新CCMTV用户信息
     * @param int $uid
     * @param array $data ['user_name'=>"",'true_name'=>""]
     * @return bool
     */
    public function updateCCMTVUserInfo(int $uid, array $data):bool;

    /**
     * 获取用户编辑详情数据
     * @param int $uid
     * @return array
     */
    public function getUserDetail(int $uid):array;
}