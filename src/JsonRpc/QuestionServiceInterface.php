<?php

namespace linlic\JsonRpc;

interface QuestionServiceInterface
{

    /**
     * 题库-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function questionField($params):array;
    /**
     * 题库-创建机构题库表（按机构和类型分表）
     * @param $params ['org_id'=>'123']
     * @return array
     */
    public function createOrganQuestionTable($params):array;

    /**
     * 题库-菜单设置
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function questionConf(array $params):array;
}