<?php

namespace linlic\JsonRpc;
/**
 * 轮转总览 数据注册服务接口
 */
interface CycleViewDataRegisterServiceInterface
{
    /**
     * 带教老师
     * @param string $orgId
     * @param array $menuId
     * @return array
     */
    public function registerWithTeacher(string $orgId, array $menuId):array;
    /**
     * 带教学员
     * @param string $orgId
     * @param array $menuId
     * @return array
     */
    public function registerWithStudent(string $orgId, array $menuId):array;
    /**
     * 带教学员-字段
     * @param string $orgId
     * @param array $menuId
     * @return array
     */
    public function registerWithStudentField(string $orgId, array $menuId):array;
    /**
     * 带教学员-列表
     * @param string $orgId
     * @param array $businessId
     * @param array $fields
     * @return array
     */
    public function registerWithStudentDetail(string $orgId,array $businessId,array $fields):array;
}