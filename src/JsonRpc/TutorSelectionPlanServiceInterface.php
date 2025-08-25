<?php

namespace linlic\JsonRpc;

/**
 * 师生互选计划
 */
interface TutorSelectionPlanServiceInterface
{
    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;
}