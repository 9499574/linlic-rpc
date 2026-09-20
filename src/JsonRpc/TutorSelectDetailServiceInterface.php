<?php

namespace linlic\JsonRpc;


/**
 * 师生互选详情
 */
interface TutorSelectDetailServiceInterface
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

    /**
     * 师生互选指定人员个人简介字段信息
     * @param array $params
     * @return array
     */
    public function getPlanUserIntroData(array $params): array;
}