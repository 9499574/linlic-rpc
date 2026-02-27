<?php

namespace linlic\JsonRpc;

interface ProjectInspectServiceInterface
{
    /**
     * 项目中检功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 项目中检菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 项目中检流程回调
     * @param array $params
     * @return bool
     */
    public function projectInspectFlowCallback(array $params): bool;

    /**
     * 机构设置
     * @param array $params
     * @return array
     */
    public function orgSet(array $params): array;
}