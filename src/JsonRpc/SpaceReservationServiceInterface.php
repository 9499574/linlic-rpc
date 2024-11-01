<?php

namespace linlic\JsonRpc;

interface SpaceReservationServiceInterface
{

    /**
     * 空间预约-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function spaceReservationField($params):array;

    /**
     * 空间预约-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function spaceReservationConf($params):array;

    /**
     * 获取空间预约设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf(array $params):array;

    /**
     * 空间预约-审核回调
     * @param array $params
     * @return array
     */
    public function flowCallBack(array $params):array;
}
