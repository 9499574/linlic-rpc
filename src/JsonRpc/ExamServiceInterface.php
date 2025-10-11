<?php

namespace linlic\JsonRpc;

interface ExamServiceInterface
{

    /**
     * 考试-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examField($params):array;

    /**
     * 考试-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examConf($params):array;

    /**
     * 考试-自动发布记录-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examAutoPublishField($params):array;


    /**
     * 考试-考试详情-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examSituationField($params):array;

    /**
     * 考试-考试详情-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examSituationConf($params):array;

    /**
     * 考试-特殊考试注册后获取参数地址-测试用
     * @param $params
     * @return array
     */
    public function examRegisterParams($params):array;

    /**
     * 根据轮转数据获取学生分数
     * @param $params
     * @return array
     */
    public function getLeaveDeptData($params):array;

    /**
     * 根据轮转数据获取学生参加考试详情
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
     * 获取试卷作答记录 key为试卷id
     * @param $params
     * @return array
     */
    public function getPaperAnswerCount($params):array;

    /**
     * 根据业务编号获取考试试卷题目内容
     * $params参数结构如下：business_id模块某业务编号这里特指paper_id试卷编号
     * [
     *    ["business_id" => "692476229400604673", "other_params" => ""],
     *    ["business_id" => "692476229400604674", "other_params" => ""],
     * ]
     * @return array
     * [
     *    ["business_id" => "692476229400604673", "ques_list"=[] ]
     *    ["business_id" => "692476229400604674", "ques_list"=>[] ],
     *  ]
     */
    public function getExamPaperQsRecord(array $params):array;

    /**
     * 根据业务编号批量获取用户作答试卷题目内容
     * $params参数结构如下：business_id模块某业务编号这里特指user_record_id
     * [
     *    ["business_id" => "692476229400604673", "other_params" => ""],
     *    ["business_id" => "692476229400604674", "other_params" => ""],
     * ]
     * @return array
     * [
     *    ["business_id" => "692476229400604673", "exam_score" => "100", "user_record_paper"=[] ]
     *    ["business_id" => "692476229400604674", "exam_score" => "80", "user_record_paper"=>[] ],
     *  ]
     */
    public function getUserPaperAnswerRecord(array $params):array;

    /*
     * 获取考试规则配置项
     * */
    public function getExamRuleConf(string $orgId, array $menuId): array;

    /**
     * 免考流程回调
     * @param array $params
     * @return bool
     */
    public function exemptExamFlowCallBack(array $params): bool;
    /**
     * 免考申请表单提交回调
     * @param array $params
     * @return array
     */
    public function exemptExamFormSubmitCallback(array $params): array;

    //获取常量选择
    public function getConstOptions():array;

    /*
     * 考试详情信息统计生成oss上json文件(AI 数据分析使用)
     * @param array businessId
     * @param array redisKey  oss地址最终存放位置
     */
    public function getExamDetailToOssFile(array $params):bool;
}