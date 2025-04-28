<?php

namespace linlic\JsonRpc;

interface PblCourseServiceInterface
{
    /**
     * 功能字段
     * @param $params
     * @return array
     */
    public function getFields($params):array;
}