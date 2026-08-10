<?php

namespace linlic\JsonRpc;

interface FillingFormServiceInterface
{
    /**
     * 获取填报表单数据
     * @param int $orgId
     * @param array $where
     * @param string $whereRaw
     * @param array $fields
     * @return array
     */
    public function getListData(int $orgId,array $where,string $whereRaw = "",array $fields=['*']):array;
}