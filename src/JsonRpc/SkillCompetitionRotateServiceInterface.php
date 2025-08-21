<?php

namespace linlic\JsonRpc;

interface SkillCompetitionRotateServiceInterface
{
    /**
     * 技能竞赛轮转-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionRotateField($params):array;

    /**
     * 技能竞赛轮转-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionRotateConf($params):array;

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
    public function skillCompetitionRotateViewField($params):array;

    /**
     * 技能考核查看-配置字段-学生端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionRotateViewConf($params):array;

    /**
     * 技能考核查看-模块字段-考官端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionRotateViewExaminerField($params):array;

    /**
     * 技能考核查看-配置字段-考官端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillCompetitionRotateViewExaminerConf($params):array;

    /*
     * 技能考核规则配置项
     * */
    public function getSkillCompetitionRotateRuleConf(string $orgId, array $menuId): array;

    /*
     *技能考核签到回调
     * */
    public function signInCallBack($params): bool;
}