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


    /**
     * 表单打分数据入库
     * @param array $params
     * @return array
     */
    public function formScoreCallback($params):array;


    /**
     * 根据轮转数据获取学生分数
     * @param $params
     * @return array
     */
    public function getLeaveDeptData($params):array;

    /**
     * 消息配置
     * @param $params
     * @return array
     */
    public function messageConf($params):array;
}