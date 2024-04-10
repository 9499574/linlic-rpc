<?php

namespace linlic\JsonRpc;

interface CycleCareerServiceInterface
{

    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function CareerField(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function CareerConf(array $params):array;

}