<?php

namespace linlic\JsonRpc;

/**
 * 证书模块接口（教学活动）
 */
interface CertificateTeachingActivityServiceInterface
{
    /**
     * 功能参数
     * @param $params
     * @return array
     */
    public function getDomainParams($params):array;

    /**
     * 模块数据详情
     * @param $params
     * @return array
     */
    public function getModuleDataDetail($params):array;

    /**
     * 获取模块列表数据
     * @param $params
     * @return array
     */
    public function getModuleDataList($params):array;

    /**
     * 模块功能规则
     * @param $params
     * @return array
     */
    public function getModuleRule($params):array;

    /**
     * 模块人员列表
     * @param $params
     * @return array
     */
    public function getModuleUser($params):array;


}