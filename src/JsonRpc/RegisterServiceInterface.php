<?php

namespace linlic\JsonRpc;

interface RegisterServiceInterface
{
    /**
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

}