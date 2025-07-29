<?php

namespace linlic\JsonRpc;

interface SpecialFundingServiceInterface
{
    /**
     * 专项经费功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 机构设置接口
     * @param array $params
     * @return array
     */
    public function orgSet(array $params):array;
}