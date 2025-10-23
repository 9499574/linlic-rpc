<?php

namespace linlic\JsonRpc;

interface TeachingActivityDepartmentNumServiceInterface
{

    /**
     * 教研室校验RPC
     * @param array $params
     * @return array
     */
    public function validConfigSr(array $params):array;

    /**
     * 模板RPC
     * @param array $params
     * @return array
     */
    public function templateConfigSr(array $params):array;

    /**
     * 导入PRC
     * @param array $params
     * @return array
     */
    public function importDataSr(array $params):array;

    /**
     * 标准基地校验RPC
     * @param array $params
     * @return array
     */
    public function validConfigSb(array $params):array;

    /**
     * 模板RPC
     * @param array $params
     * @return array
     */
    public function templateConfigSb(array $params):array;

    /**
     * 导入PRC
     * @param array $params
     * @return array
     */
    public function importDataSb(array $params):array;

}