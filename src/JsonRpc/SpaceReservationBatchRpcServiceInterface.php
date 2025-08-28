<?php

namespace linlic\JsonRpc;

interface SpaceReservationBatchRpcServiceInterface
{
    public function validConfigAdd(array $params): array;

    public function templateConfigAdd(array $params): array;

    public function importDataAdd(array $params): array;
}