<?php

namespace linlic\JsonRpc;

interface ExcelTaskRpcServiceInterface
{
    public function getMainFields(array $params):array;

    public function getMainMenuConf(array $params):array;

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
     * @return bool
     */
    public function flowCallback(array $params):bool;


    /**
     * 获取详情数据
     * @param array $params
     * @return array
     */
    public function getDetailData(array $params):array;

    /**
     * 获取Excel任务解析列表数据
     * @param array $params
     * @return array
     */
    public function getExcelTaskParsedList(array $params):array;
}