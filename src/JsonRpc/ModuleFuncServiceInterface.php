<?php

namespace linlic\JsonRpc;

interface ModuleFuncServiceInterface
{
    public function funcIdGetDataList(array $func_id):array;
}