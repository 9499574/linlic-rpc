<?php

namespace linlic\JsonRpc;

interface ExamJoinModulesServiceInterface
{

    /**
     * 创建考试
     * @param $params
     * @return array
     */
    public function createExam($params):array;

    /**
     * 添加考试人员
     * @param $params
     * @return array
     */
    public function addExamUser($params):array;

    /**
     * 去除考试人员
     * @param $params
     * @return array
     */
    public function deleteExamUser($params):array;

}