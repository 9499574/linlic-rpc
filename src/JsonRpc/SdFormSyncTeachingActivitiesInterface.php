<?php

namespace linlic\JsonRpc;

/**
 * 山东大学齐鲁医院-课程导入
 * 表单同步教学活动接口
 */
interface SdFormSyncTeachingActivitiesInterface
{
    public function handle(array $params):bool;
}