<?php

namespace linlic\JsonRpc;

interface ResponsibleTutorServiceInterface
{
    /**
     * 责任导师管理-配置字段
     *
     * @param array $params
     *
     * @return array
     */
    public function responsibleTutorList( array $params):array;

    /**
     * 责任导师管理-菜单配置项
     */
    function responsibleTutorConf(array $params): array;
}
