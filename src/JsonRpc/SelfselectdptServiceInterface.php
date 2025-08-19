<?php

namespace linlic\JsonRpc;

interface SelfselectdptServiceInterface
{
    /**
     * 自选科室功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;
    /**
     * 获取设置配置
     *
     * @param array $params
     * @return array
     */
    public function getSettingConf(array $params): array;
    /**
     * 自选科室流程审核回调
     *
     * @param array $params
     * @return bool
     */
    public function selfSelectDptCallBack(array $params):bool;
}