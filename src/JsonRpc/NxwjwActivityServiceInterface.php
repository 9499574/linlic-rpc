<?php

namespace linlic\JsonRpc;

interface NxwjwActivityServiceInterface
{

    /**
     * 活动督导统计功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;


    /**
     * 活动督导明细功能字段
     * @param $params
     * @return array
     */
    public function getDetailFields(array $params):array;

}