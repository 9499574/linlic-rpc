<?php

namespace linlic\JsonRpc;

/**
 * 跳转外链
 */
interface JumpUrlServiceInterface
{
    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function menuConfig(array $params):array;
}