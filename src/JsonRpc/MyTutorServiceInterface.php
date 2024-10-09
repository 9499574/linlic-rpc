<?php

namespace linlic\JsonRpc;

interface MyTutorServiceInterface
{
    
    /**
     * 功能字段
     * @param $params ['status'=>0]
     * @return array
     */
    public function MytutorServiceField($params):array;

    /**
     * 功能配置
     * @return array
     */
    public function MytutorServiceConf():array;
    
}