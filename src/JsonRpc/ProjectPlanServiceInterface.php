<?php

namespace linlic\JsonRpc;

interface ProjectPlanServiceInterface
{
    /**
     * 项目计划功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 项目计划菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 机构设置
     * @param array $params
     * @return array
     */
    public function orgSet(array $params): array;
}