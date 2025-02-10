<?php

namespace linlic\JsonRpc;
/**
 * 轮转总览 数据注册服务接口
 */
interface CycleViewDataRegisterServiceInterface
{
    /**
     * 带教学员
     * @param string $orgId
     * @param array $menuId
     * @return array
     */
    public function registerWithTeacher(string $orgId, array $menuId):array;
}