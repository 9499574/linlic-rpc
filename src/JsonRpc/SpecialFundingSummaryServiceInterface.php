<?php

namespace linlic\JsonRpc;

interface SpecialFundingSummaryServiceInterface
{
    /**
     * 专项经费汇总功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;
}