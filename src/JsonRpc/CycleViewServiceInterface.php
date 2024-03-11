<?php

namespace linlic\JsonRpc;

interface CycleViewServiceInterface
{

    /**
     * 功能字段
     * @return array
     */
    public function viewField():array;

    /**
     * 功能配置
     * @return array
     */
    public function viewConf():array;
}