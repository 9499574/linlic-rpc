<?php

namespace linlic\JsonRpc;

/**
 * 模块短信服务接口（技能考核）
 */
interface ModuleSmsSkillAssessServiceInterface
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

}