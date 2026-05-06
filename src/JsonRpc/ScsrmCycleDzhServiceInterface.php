<?php

namespace linlic\JsonRpc;

interface ScsrmCycleDzhServiceInterface
{
    //省人民实习生绩效字段
    public function getInterJxFields(array $params):array;

    //省人民实习生绩效配置
    public function getInterJxConfig(array $params):array;
}