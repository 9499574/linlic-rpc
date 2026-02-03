<?php

namespace linlic\JsonRpc;

interface ModuleSmsNoticeServiceInterface
{
    /**
     * 获取模块短信服务配置参数
     * @param int $orgId
     * @param string $menuId
     * @return array ['user_option'=>[['label'=>'','value'=>'']],'rule_option'=>[['label'=>'','value'=>'','children'=>[]]],'time_option'=>[['label'=>'','value'=>'']]]
     */
    public function getModuleConfigParams(int $orgId,string $menuId):array;


    /**
     * 获取模块短信服务过滤数据
     * @param array $params
     * @return array
     */
    public function getModuleFilterData(array $params):array;

    /**
     * 获取模块短信服务配置数据
     * @param int $orgId
     * @param int $systemId
     * @param array $menuIds
     * @return array
     */
    public function getModuleSmsConfData(int $orgId,int $systemId,array $menuIds):array;

    /**
     * 添加模块短信服务配置数据
     * @param array $data
     * @return bool
     */
    public function addModuleSmsConfData(array $data):bool;
}