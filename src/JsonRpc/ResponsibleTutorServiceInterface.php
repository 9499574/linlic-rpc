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
}
