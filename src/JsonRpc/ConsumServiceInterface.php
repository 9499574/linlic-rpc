<?php

namespace linlic\JsonRpc;
//耗材库存
interface ConsumServiceInterface
{
    /**
     * 功能字段
     * @param $params
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @param $params
     * @return array
     */
    public function getConfigs($params):array;

    /**
     * 机构端设置
     * @param $params
     * @return array
     */
    public function getSetConf($params):array;

}