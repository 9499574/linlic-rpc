<?php

namespace linlic\JsonRpc;

/**
 * 数据统计
 */
interface UserSummaryTableRegisterServiceInterface
{
    /**
     * 获取规则配置
     * @param string $orgId
     * @param array $menuId
     * @return array
     */
    public function getRuleConf(string $orgId, array $menuId):array;
}