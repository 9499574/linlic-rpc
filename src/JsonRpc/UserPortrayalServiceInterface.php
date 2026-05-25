<?php

namespace linlic\JsonRpc;

interface UserPortrayalServiceInterface
{
    /**
     * 功能字段接口
     * @param array $params
     * @return array
     */
    public function getPortrayalFields(array $params):array;

    /**
     * 功能配置接口
     * @param array $params
     * @return array
     */
    public function getPortrayalConfigs(array $params):array;

}