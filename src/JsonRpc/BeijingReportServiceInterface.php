<?php
/**
 * User: zhangbaolong
 * Date: 2026/05/07
 * Time: 17:53
 * Created by IntelliJ IDEA.
 */

namespace App\JsonRpc;

interface BeijingReportServiceInterface
{
    public function uploadSeniorDoctor(string $orgId, array $doctorList, string $systemId): array;
}