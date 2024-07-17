<?php

namespace linlic\JsonRpc;

interface LeaveTypeServiceInterface
{
    public function getFields(array $params):array;

    public function getConfigs(array $params):array;

}