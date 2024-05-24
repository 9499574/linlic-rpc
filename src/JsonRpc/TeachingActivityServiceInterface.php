<?php

namespace linlic\JsonRpc;

interface TeachingActivityServiceInterface
{
    /**
     * 功能字段
     * @return array
     */
    public function getFields():array;

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
}