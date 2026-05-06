<?php

namespace linlic\JsonRpc;

interface ScsrmCustomRpcServiceInterface
{
    //省人民学员补助字段
    public function stuHosSubsidyField(array $params):array;

    //省人民学员补助配置
    public function stuHosSubsidyConfig(array $params):array;


    //省人民学员绩效补助字段
    public function stuPerformanceField(array $params):array;

    //省人民学员绩效补助配置
    public function stuPerformanceConfig(array $params):array;

}