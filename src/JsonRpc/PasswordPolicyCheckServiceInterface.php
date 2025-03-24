<?php

namespace linlic\JsonRpc;

interface PasswordPolicyCheckServiceInterface
{
    public function checkPassword(int $orgId,string $password): array;
}