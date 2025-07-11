<?php

namespace linlic\JsonRpc;

interface EnrollServiceInterface
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
     * 获取常量选择
     * @return array
     */
    public function getConstOptions():array;

    /**
     * 获取证书模块参数
     * @param array $params
     * @return array
     */
    public function certificateModuleParams(array $params):array;

    /**
     * 获取证书模块数据
     * @param array $params
     * @return array
     */
    public function certificateModuleDetail(array $params):array;


    /**
     * 获取证书模块列表数据
     * @param array $params
     * @return array
     */
    public function certificateModuleListData(array $params):array;


    /**
     * 获取证书模块选择用户条件
     * @param array $params
     * @return array
     */
    public function certificateSelectUserWhere(array $params):array;

    /**
     * 获取证书模块选择用户列表
     * @param array $params
     * @return array
     */
    public function certificateSelectUserList(array $params):array;

    /**
     * 报名表单填写回调接口
     * @param array $params
     * @return array
     */
    public function formSubmitCallback(array $params):array;

}