<?php

namespace linlic\JsonRpc;

interface SpaceReservationTypeServiceInterface
{

    /**
     * 空间预约类型-模块字段
     * @param array $params
     * @return array
     */
    public function getFields($params):array;

    /**
     * 房间预约类型数据初始化
     * @param array $params
     * @return bool
     */
    public function dataInit(array $params) :bool;
}
