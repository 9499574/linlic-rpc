<?php

namespace linlic\JsonRpc;

/**
 * 表单当字典服务
 */
interface FormDictionaryServiceInterface
{
    /**
     * 获取表单选项
     * 需要nacos里面配置，指定表单的id和key、value的key
     * @param string $orgId
     * @param int $systemId
     * @param string $menuId
     * @param array $select
     * @param array $where
     * @param int $limit
     * @param int $page
     * @param string $keyword
     * @param string $dict_key
     * @return array
     */
    public function getOptions(string $orgId, int $systemId, string $menuId, array $select = [], array $where = [], int $limit=0, int $page=0, string $keyword='', string $dict_key=''):array;
}