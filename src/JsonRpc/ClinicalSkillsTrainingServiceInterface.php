<?php

namespace linlic\JsonRpc;

interface ClinicalSkillsTrainingServiceInterface
{
    /**
     * 技能训练功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 技能训练功能字段(App)
     * @param array $params
     * @return array
     */
    public function getAppFields(array $params):array;

    /**
     * 技能训练菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 技能训练机构设置
     * @param array $params
     * @return array
     */
    public function SetConf(array $params):array;
}