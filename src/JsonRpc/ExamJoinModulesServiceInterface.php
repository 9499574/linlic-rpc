<?php

namespace linlic\JsonRpc;

interface ExamJoinModulesServiceInterface
{

    /**
     * 创建考试
     * @param $params
     * @return array
     */
    public function createModulesExam($params):array;

    /**
     * 添加考试人员
     * @param $params
     * @return array
     */
    public function addModulesExamUser($params):array;

    /**
     * 去除考试人员
     * @param $params
     * @return array
     */
    public function deleteModulesExamUser($params):array;

}