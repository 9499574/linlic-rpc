<?php

namespace linlic\JsonRpc;

interface PracticeStatisticsServiceInterface
{
    /**
     * 练习统计功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;
}