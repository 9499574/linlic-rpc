<?php

namespace linlic\JsonRpc;
/**
 * 网站设置接口
 */
interface OrgSiteSettingServiceInterface
{
    public function getConf(int $orgId):array;
}