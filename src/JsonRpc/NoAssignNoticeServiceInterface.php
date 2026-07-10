<?php

namespace linlic\JsonRpc;

interface NoAssignNoticeServiceInterface
{

    /**
     * 获取表单
     * @param array $params
     * @return array
     */
    public function getForm(array $params):array;

    /**
     * 获取用户
     * @param array $params
     * @return array
     */
    public function getUsers(array $params):array;
}
