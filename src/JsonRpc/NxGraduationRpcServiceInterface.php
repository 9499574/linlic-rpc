<?php

namespace linlic\JsonRpc;

/**
 * 宁夏-学员结业情况查询
 */
interface NxGraduationRpcServiceInterface
{
    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function menuConfig(array $params):array;
}