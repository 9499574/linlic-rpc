<?php

namespace linlic\JsonRpc;

interface TrainingPlanServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @param $params
     * @return array
     */
    public function getConfigs($params):array;

    /**
     * 培养计划表单填报回调
     * @param $params
     * @return bool
     */
    public function submitTrainingPlanCallBack($params): bool;

    /**
     * 获取学生=>导师培养计划
     * @param string $orgId 机构id
     * @param string $systemId 系统id
     * @param array $menuId 多个菜单ID
     * @param array $pairs 要查询的学生id和导师ID例：[['uid' => '学生ID', 'teacher_uid' => '导师ID'],...]
     * @param array $select 要查询的字段
     * @return array
     */
    public function getStudentTrainingPlan(string $orgId, string $systemId, array $menuId, array $pairs, array $select = ['*']): array;
}