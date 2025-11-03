<?php

namespace linlic\JsonRpc;

interface PushMessageLogServiceInterface
{
    /**
     * 获取菜单配置
     * @param array $params
     * @return array
     */
    public function getModuleMenuConf(array $params):array;

    /**
     * 获取模块字段
     * @param array $params
     * @return array
     */
    public function getModuleFields(array $params):array;

    /**
     * 导出数据
     * @param array $businessParams
     * @return array
     */
    public function exportData(array $businessParams):array;
}