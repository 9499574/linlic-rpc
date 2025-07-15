<?php

namespace linlic\JsonRpc;
/**
 * 线下考场座位排考
 */
interface OfflineExamPlanServiceInterface
{
    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function fields(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 证书功能字段
     * @param array $params
     * @return array
     */
    public function certificateFields(array $params):array;

    /**
     * 证书详情数据
     * @param array $params
     * @return array
     */
    public function certificateDetail(array $params):array;
}