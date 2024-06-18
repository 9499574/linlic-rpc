<?php

namespace linlic\JsonRpc;

interface SkillAssessServiceInterface
{

    /**
     * 技能考核-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillAssessField($params):array;

    /**
     * 技能考核-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillAssessConf($params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf($params):array;

}