<?php

namespace linlic\JsonRpc;

/**
 * 技能考核 数据注册服务
 */
interface SkillDataRegisterServiceInterface
{
    /**
     * 考官数据注册服务
     * @param string $orgId
     * @param array $menuId
     * @return array
     */
    public function examinerDataService(string $orgId, array $menuId):array;

}