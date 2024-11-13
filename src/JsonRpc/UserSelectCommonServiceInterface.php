<?php

namespace linlic\JsonRpc;

/**
 * 选择人员
 * 菜单配置-公共使用
 */
interface UserSelectCommonServiceInterface
{
    /**
     * 菜单配置
     * linlic\JsonRpc\UserSelectCommonServiceInterface\UserSelectCommonServiceInterface
     * @param array $params
     * @return array
     */
    public function menuConfig(array $params):array;
}