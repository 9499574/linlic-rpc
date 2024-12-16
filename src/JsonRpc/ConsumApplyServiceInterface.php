<?php

namespace linlic\JsonRpc;
// 耗材申领
interface ConsumApplyServiceInterface
{
    /**
     * 功能字段
     * @param $params
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @param $params
     * @return array
     */
    public function getConfigs($params):array;

    /**
     * 获取耗材存放地点下拉选项
     * @param $params
     * @return array
     */
    public function getRoomOptions($params):array;

    /**
     * 流程参数
     * @param array $params
     * @return array
     */
    public function flowParams(array $params): array;

    /**
     * 流程回调
     * @param array $params
     * @return bool
     */
    public function flowCallBack(array $params): bool;

    /**
     * 耗材使用保存
     * @param array $params
     * @return array
     */
    public function consumUseSave(array $params):array;

    /**
     * 更新耗材使用状态
     * @param array $params
     * @return array
     */
    public function consumUseStatusUpdate(array $params):array;

    /**
     * 耗材使用删除
     * @param array $params
     * @return array
     */
    public function consumUseDel(array $params):array;

}