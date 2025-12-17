<?php

namespace linlic\JsonRpc;

interface UserSearchServiceInterface
{
    /**
     * 通过搜索条件获取用户
     * @param int $org_id
     * @param string $system_id
     * @param array $search_params
     * @param array $uidArr
     * @param bool $keyword_is_user
     * @return array
     */
    public function get(
        int $org_id,
        string $system_id,
        array $search_params,
        array $uidArr = [],
        bool $keyword_is_user = false
    ): array;


    /**
     * 通过where条件获取用户(列表查询方式)
     * @param array $params
     * @return array
     */
    public function whereGet(array $params):array;


    /**
     * 获取主用户表条件筛选用户ID
     * @param int $org_id
     * @param string $where
     * @return array
     */
    public function getMainUserUid(int $org_id,string $where):array;

    /**
     * 通过手机号获取用户
     * @param int $orgId
     * @param string $mobPhone
     * @return array
     */
    public function getOrgMobPhoneUser(int $orgId,string $mobPhone):array;


    /**
     * 通过用户名获取用户编号
     * @param int $orgId
     * @param array $userName
     * @return array
     */
    public function getUserNameListByUserIds(int $orgId,array $userName):array;

    /**
     * 通过ccmtv用户编号获取用户编号
     * @param array $ccmtvUid
     * @return array
     */
    public function getCcmtvUidByUserIds(array $ccmtvUid):array;
}