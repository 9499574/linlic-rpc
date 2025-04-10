<?php

namespace linlic\JsonRpc;

interface ImportExcelServiceInterface
{
    /**
     * 前置页表单配置
     * @param array $params
     * @return array
     */
    public function preFormConfig(array $params):array;


    /**
     * 参数校验
     * @param array $params
     * @return array
     */
    public function validConfig(array $params):array;


    /**
     * 模板下载
     * @param array $params
     * @return array
     */
    public function templateConfig(array $params):array;

    /**
     * 导入数据
     * @param array $params
     * @return array
     */
    public function importData(array $params):array;
}