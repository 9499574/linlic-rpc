<?php

namespace linlic\JsonRpc;

interface ProjectDeclareServiceInterface
{
    /**
     * 项目申报功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 项目申报菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

     /**
      * 项目申报流程回调
      * @param array $params
      * @return bool
      */
    public function projectDeclareFlowCallback(array $params): bool;
}