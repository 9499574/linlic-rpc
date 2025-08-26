<?php

namespace linlic\JsonRpc;

interface SkillCompetitionTrackServiceInterface
{

    /**
     * 技能考核-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionTrackField($params):array;

    /**
     * 技能考核-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionTrackConf($params):array;

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
     * 根据轮转数据获取学生参加详情
     * @param $params
     * @return array
     */
    public function getLeaveDeptDetailList($params):array;

    /**
     * 消息配置
     * @param $params
     * @return array
     */
    public function messageConf($params):array;

    /**
     * 技能考核查看-模块字段-学生端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionTrackViewField($params):array;

    /**
     * 技能考核查看-配置字段-学生端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionTrackViewConf($params):array;

    /**
     * 技能考核查看-模块字段-考官端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionTrackViewExaminerField($params):array;

    /**
     * 技能考核查看-配置字段-考官端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionTrackViewExaminerConf($params):array;

    /*
     * 技能考核规则配置项
     * */
    public function getSkillCompetitionTrackRuleConf(string $orgId, array $menuId): array;
}