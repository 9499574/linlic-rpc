<?php

namespace linlic\JsonRpc;

interface ProjectItemServiceInterface
{
    /**
     * 项目立项功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 项目立项菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 项目立项流程回调
     * @param array $params
     * @return bool
     */
    public function projectItemFlowCallback(array $params): bool;

    /**
     * 机构设置
     * @param array $params
     * @return array
     */
    public function orgSet(array $params): array;
}