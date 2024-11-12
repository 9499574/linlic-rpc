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
     * @param mixed ...$arguments
     * @return array
     */
    public function get(...$arguments):array;
}