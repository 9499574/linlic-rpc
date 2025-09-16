<?php

namespace linlic\JsonRpc;

interface PaperTemplateServiceInterface
{
    /**
     * 试卷模板-功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

}