<?php

namespace linlic\JsonRpc;

interface DormServiceInterface
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
     * 我的宿舍功能字段
     * @param $params
     * @return array
     */
    public function myDormFields($params):array;
}