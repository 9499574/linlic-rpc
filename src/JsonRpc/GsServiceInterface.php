<?php
namespace linlic\JsonRpc;

interface GsServiceInterface
{
    // 科室数据汇总
    public function getFields(array $params): array;
    public function getConfigs(array $params): array;
    public function getSetConf(array $params): array;
}
