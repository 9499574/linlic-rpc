<?php

namespace linlic\JsonRpc;

interface CourseDepartmentNumServiceInterface
{
    /**
     * 校验RPC
     * @param array $params
     * @return array
     */
    public function baseValidConfig(array $params): array;

    /**
     * 模板RPC
     * @param array $params
     * @return array
     */
    public function baseTemplateConfig(array $params): array;

    /**
     * 导入PRC
     * @param array $params
     * @return array
     */
    public function baseImportData(array $params): array;

    /**
     * 校验RPC
     * @param array $params
     * @return array
     */
    public function staffRoomValidConfig(array $params): array;

    /**
     * 模板RPC
     * @param array $params
     * @return array
     */
    public function staffRoomTemplateConfig(array $params): array;

    /**
     * 导入PRC
     * @param array $params
     * @return array
     */
    public function staffRoomImportData(array $params): array;
}