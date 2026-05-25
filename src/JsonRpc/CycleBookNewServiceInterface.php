<?php

namespace linlic\JsonRpc;

interface CycleBookNewServiceInterface
{
    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSettingConf(array $params):array;

    /**
     * 获取轮转配置常量
     * @param array $params
     * @return array
     */
    public function getCycleBookConstOptions(array $params):array;

}