<?php

namespace linlic\JsonRpc;

interface ClinicalSkillsCheckServiceInterface
{
    /**
     * 技能考核功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

    /**
     * 技能考核功能字段(App)
     * @param array $params
     * @return array
     */
    public function getAppFields(array $params) :array;

    /**
     * 技能考核菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 技能考核机构设置
     * @param array $params
     * @return array
     */
    public function SetConf(array $params):array;
}