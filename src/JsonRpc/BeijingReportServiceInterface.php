<?php
/**
 * User: zhangbaolong
 * Date: 2026/05/07
 * Time: 17:53
 * Created by IntelliJ IDEA.
 */

namespace linlic\JsonRpc;

interface BeijingReportServiceInterface
{
    public function uploadSeniorDoctor(string $orgId, array $doctorList, string $systemId): array;

    /**
     * 获取日志事件key
     * @param string $event_const
     * @return string
     */
    public function getEventKey(string $event_const):string;
}