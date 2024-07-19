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
}