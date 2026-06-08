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
    /**
     * 师资相关信息批量上报
     *
     * @param string $orgId 机构ID（必填）
     * @param array $teacherData 师资数据数组，包含以下键：
     *   - teacher_info: 师资基本信息列表（可选）
     *   - teacher_education: 师资教育信息列表（可选）
     *   - teacher_work: 师资工作信息列表（可选）
     *   - teacher_apply: 师资报名聘任列表（可选）
     * @param string $systemId 系统ID（可选）
     * @return array {
     *     array $results 各类型上报结果
     *     int $total_success 总成功数
     *     int $total_failed 总失败数
     * }
     */
    public function uploadTeacherData(string $orgId, array $teacherData, string $systemId): array;


    /**
     * 学员其他轮转信息（活动信息）批量上报
     *
     * @param string $orgId 机构ID（必填）
     * @param array $activityList 活动信息列表（必填）
     * @param string $systemId 系统ID（可选）
     * @return array {
     *     int $success_batches 成功批次
     *     int $failed_batches 失败批次
     *     array $errors 错误详情
     * }
     */
    public function uploadLzPlanActivity(string $orgId, array $activityList, string $systemId): array;


    /**
     * 学员其他轮转信息（教学记录）批量上报
     *
     * @param string $orgId 机构ID（必填）
     * @param array $teachingList 教学记录列表（必填）
     * @param string $systemId 系统ID（可选）
     * @return array {
     *     int $success_batches 成功批次
     *     int $failed_batches 失败批次
     *     array $errors 错误详情
     * }
     */
    public function uploadLzPlanTeaching(string $orgId, array $teachingList, string $systemId): array;
}