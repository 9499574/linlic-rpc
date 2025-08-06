<?php

namespace linlic\JsonRpc;

interface SelfselectdptServiceInterface
{
    /**
     * 考勤排班功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

}