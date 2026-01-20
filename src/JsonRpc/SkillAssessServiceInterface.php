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
    public function skillAssessViewField($params):array;

    /**
     * 技能考核查看-配置字段-学生端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillAssessViewConf($params):array;

    /**
     * 技能考核查看-模块字段-考官端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillAssessViewExaminerField($params):array;

    /**
     * 技能考核查看-配置字段-考官端
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function skillAssessViewExaminerConf($params):array;

    /*
     * 技能考核规则配置项
     * */
    public function getSkillAssessRuleConf(string $orgId, array $menuId): array;

    /*
     *技能考核签到回调
     * */
    public function signInCallBack($params): bool;

    /**
     * 技能考核信息统计生成oss上json文件(AI 数据分析使用)
     * @param array $params
     * @return bool
     * */
    public function getSkillAssessAnalyzeToOssFile(array $params):bool;

    /**
     * 出科技能考试完成情况
     * @param array $params
     * @return array
     */
    public function ckSkillFinishCase(array $params):array;
}