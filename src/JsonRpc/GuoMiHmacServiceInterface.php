<?php

namespace linlic\JsonRpc;

interface GuoMiHmacServiceInterface
{
    public function saveDataIntegrityRecordHmac(string $orgId, string $bizType, string $bizId, array $plainTextData):bool;

    public function checkDataIntegrityRecordHmac(string $orgId, string $bizType, string $bizId, array $plainTextData):bool;
}