<?php

namespace linlic\JsonRpc;

interface GuoMiHmacServiceInterface
{
    public function saveDataIntegrityRecordHmac(string $orgId, string $bizType, int $bizId, array $plainTextData):bool;

    public function checkDataIntegrityRecordHmac(string $orgId, string $bizType, int $bizId, array $plainTextData):bool;
}