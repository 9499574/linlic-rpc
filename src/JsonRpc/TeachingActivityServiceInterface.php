<?php

namespace linlic\JsonRpc;

interface TeachingActivityServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @return array
     */
    public function getConfigs():array;

    /**
     * 数据共享
     * @return array
     */
    public function getMenuConfWhere():array;

    /**
     * 获取设置配置
     *
     * @param array $params
     * @return array
     */
    public function getSettingConf(array $params): array;

    /**
     * 数据共享
     * @param array $params
     * @return array
     */
    public function getShareFields(array $params):array;
    /**
     * 获取活动类型
     * @param array $params
     * @return array
     */
    public function getActivityCategorys(array $params):array;
    /**
     * 请假回调接口
     * @param array $params
     * @return void
     */
    public function leaveCallBack(array $params):void;
    /**
     * 用户评价回调接口
     * @param array $params
     * @return void
     */
    public function userAssessCallBack(array $params):void;
}