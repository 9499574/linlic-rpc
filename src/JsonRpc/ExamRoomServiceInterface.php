<?php

namespace linlic\JsonRpc;

/**
 * 考场管理
 */
interface ExamRoomServiceInterface
{
    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function fields(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function menuConfig(array $params):array;

    /**
     * 机构设置
     * @param array $params
     * @return array
     */
    public function orgSet(array $params):array;
}