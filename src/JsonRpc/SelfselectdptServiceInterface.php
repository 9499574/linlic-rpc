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

}