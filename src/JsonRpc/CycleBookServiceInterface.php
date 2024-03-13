<?php

namespace linlic\JsonRpc;

interface CycleBookServiceInterface
{
    /**
     * 功能字段
     * @return array
     */
    public function getFields():array;

    /**
     * 功能配置
     * @return array
     */
    public function getConfigs():array;

    /**
     * 数据共享
     * @return array
     */
    public function getMenuConfWhere():array;
}