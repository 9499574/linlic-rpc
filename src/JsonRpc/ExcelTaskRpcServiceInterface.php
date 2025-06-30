<?php

namespace linlic\JsonRpc;

interface ExcelTaskRpcServiceInterface
{
    public function funConf(array $params):array;

    public function menuConf(array $params):array;

    /**
     * 获取主表数据
     * @param array $params
     * @return array
     */
    public function getExcelTaskList(array $params):array;


    /**
     * 流程回调
     * @param array $params
     * @return array
     */
    public function flowCallback(array $params):array;
}