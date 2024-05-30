<?php

namespace linlic\JsonRpc;

interface SupervisionTaskServiceInterface
{
    /**
     * 任务督导-功能字段
     * @param array $params
     * @return array
     */
    public function supervisionField(array $params):array;

    

}