<?php

namespace linlic\JsonRpc;

interface ClinicalSkillsVideoServiceInterface
{
    /**
     * 临床能力视频题库功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

    /**
     * 临床能力视频题库菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 临床能力视频题库机构设置
     * @param array $params
     * @return array
     */
    public function InstitutionConf(array $params):array;

}