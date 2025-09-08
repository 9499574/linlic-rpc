<?php

namespace linlic\JsonRpc;

interface TeacherStudentRelationServiceInterface
{
    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;
}