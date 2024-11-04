<?php

namespace linlic\JsonRpc;

interface FurtherEducationFundServiceInterface
{
    /**
     * @param string $funcName
     * @param array $params
     * @return array
     */
    public function getFuncName(string $funcName,array $params):array;

    /**
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;
}