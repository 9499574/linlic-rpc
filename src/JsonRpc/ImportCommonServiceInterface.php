<?php

namespace linlic\JsonRpc;

interface ImportCommonServiceInterface
{
    /**
     * 获取注册列表
     * @param array $params
     * @return array
     */
    public function getRegistrationList(array $params):array;
}