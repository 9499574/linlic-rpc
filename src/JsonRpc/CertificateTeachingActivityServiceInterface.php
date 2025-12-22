<?php

namespace linlic\JsonRpc;

/**
 * 证书模块接口（教学活动）
 */
interface CertificateTeachingActivityServiceInterface
{
    /**
     * 功能参数
     * @param  $org_id
     * @param  $menu_id
     * @return array
     */
    public function getDomainParams($org_id,$menu_id):array;

    /**
     * 模块数据详情
     * @param $org_id
     * @param $menu_id
     * @param $business_id
     * @param array $user_ids
     * @return array
     */
    public function getModuleDataDetail($org_id, $menu_id, $business_id, array $user_ids=[]):array;

    /**
     * 获取模块列表数据
     * @param $org_id
     * @param $menu_id
     * @param $page
     * @param $limit
     * @param array $search_params
     * @return array
     */
    public function getModuleDataList($org_id, $menu_id, $page=1, $limit=10, array $search_params=[]):array;

    /**
     * 模块功能规则
     * @param $org_id
     * @param $menu_id
     * @return array[]
     */
    public function getModuleRule($org_id,$menu_id):array;

    /**
     * 模块人员列表
     * @param $org_id
     * @param $menu_id
     * @param $business_id
     * @return array[]
     */
    public function getModuleUser($org_id,$menu_id,$business_id):array;


}