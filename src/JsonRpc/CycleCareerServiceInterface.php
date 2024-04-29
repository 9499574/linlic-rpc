<?php

namespace linlic\JsonRpc;

interface CycleCareerServiceInterface
{

    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function careerField(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function careerConf(array $params):array;

    /**
     * 数据共享
     * @param $params
     * @return array
     */
    public function dataSharing($params):array;

}