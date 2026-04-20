<?php

namespace linlic\JsonRpc;

interface FeedbackServiceInterface
{

    /**
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

}