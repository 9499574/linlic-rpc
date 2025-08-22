<?php

namespace linlic\JsonRpc;

interface FundUseInfoServiceInterface
{
    /**
     * 资金使用信息功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

    /**
     * 资金使用信息菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params) :array;
}