<?php

namespace linlic\JsonRpc;

/**
 * excel在线查询接口
 */
interface ExcelTaskSelectRpcServiceInterface
{
    public function getFields(array $params):array;

    public function getMenuConf(array $params):array;


    public function getOrgSet(array $params):array;
}