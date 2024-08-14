<?php

namespace linlic\JsonRpc;

interface SupervisionActivityServiceInterface
{
    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function supervisionField(array $params):array;

    public function taskConf(array $params):array;
    public function supervisionTaskAutoField(array $params):array;
    public function taskAutoConf(array $params):array;
    

}