<?php

namespace linlic\JsonRpc;

interface CycleBookSubImportServiceInterface
{

    /**
     * 前置PRC
     * @param array $params
     * @return array
     */
    public function preFormConfig(array $params): array;

    /**
     * 校验RPC
     * @param array $params
     * @return array
     */
    public function validConfig(array $params): array;

    /**
     * 模板RPC
     * @param array $params
     * @return array
     */
    public function templateConfig(array $params): array;

    /**
     * 导入PRC
     * @param array $params
     * @return array
     */
    public function importData(array $params): array;

    /**
     * 2022国标大纲轮转手册数据初始化
     * @param array $params
     * @return bool
     */
    public function handle2022CycleBookStandardDataInit(array $params): bool;

}