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


}