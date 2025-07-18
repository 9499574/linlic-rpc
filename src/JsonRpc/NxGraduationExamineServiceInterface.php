<?php

namespace linlic\JsonRpc;

interface NxGraduationExamineServiceInterface
{

    /**
     * 结业审核获取功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 结业审核获取设置配置
     * @param array $params
     * @return array
     */
    public function getConf(array $params):array;


    /**
     * 结业审核明细功能字段
     * @param $params
     * @return array
     */
    public function getDetailFields(array $params):array;

    /**
     * 结业审核明细功能配置
     * @param $params
     * @return array
     */
    public function getDetailConf(array $params):array;
}