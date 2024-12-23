<?php

namespace linlic\JsonRpc;

interface TeacherDeclarationServiceInterface
{
    /**
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;

    /**
     * 审核回调
     * @param array $params
     * @return bool
     */
    public function flowCallBack(array $params): bool;

    /**
     * @param array $params
     * @return array
     */
    public function formSubmitCallback(array $params):array;
}