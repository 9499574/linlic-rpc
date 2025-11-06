<?php

namespace linlic\JsonRpc;

interface SmsSettingServiceInterface
{
    public function getOrgConfig(string $orgId):array;
}