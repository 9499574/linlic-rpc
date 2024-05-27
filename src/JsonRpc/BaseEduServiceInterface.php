<?php

namespace linlic\JsonRpc;

interface BaseEduServiceInterface
{

    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function Field(array $params):array;

}