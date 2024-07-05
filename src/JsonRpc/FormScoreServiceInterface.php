<?php

namespace linlic\JsonRpc;

interface FormScoreServiceInterface
{
    /**
     * 计算表单分数
     * @param array $templateContent
     * @param array $fillingContent
     * @return float
     */
    public function computeTotalScore(array $templateContent, array $fillingContent):float;
}