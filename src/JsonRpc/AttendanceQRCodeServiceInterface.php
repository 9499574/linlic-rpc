<?php

namespace linlic\JsonRpc;

interface AttendanceQRCodeServiceInterface
{
    /**
     * 功能字段
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
}