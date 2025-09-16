<?php

namespace linlic\JsonRpc;

interface TeacherStudentRelationServiceInterface
{
    /**
     * 功能字段
     * @param $params
     * @return array
     */
    public function getFields($params): array;

    /**
     * 菜单配置
     * @param $params
     * @return array
     */
    public function menuConf($params): array;
}