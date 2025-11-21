<?php

namespace linlic\JsonRpc;

interface SpaceReservationTypeServiceInterface
{

    /**
     * 空间预约类型-模块字段
     * @return array
     */
    public function getFields($params):array;
}
