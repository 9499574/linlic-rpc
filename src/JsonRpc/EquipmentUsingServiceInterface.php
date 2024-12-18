<?php

namespace linlic\JsonRpc;

interface EquipmentUsingServiceInterface
{
    /**
     * 设备使用功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function usingField(array $params):array;

    /**
     * 设备使用功能配置
     * @param array $params
     * @return array
     */
    public function usingConf(array $params):array;

    /**
     * 设备使用确认
     * @param int $type 1:设备外借 2:课程使用 3:空间预约
     * @param string $requestForm 使用模块名称，如 'skill-center'
     * @param string $businessId 业务ID
     * @param array $usingInfo ['start_time' => '2024-01-01 00:00:00', 'end_time' => '2024-02-01 00:00:00', 'location' => '使用地点', 'description' => '用途']
     * @param array $equipmentDetail [['equipment_id' => '717698815025336321', 'use_num' => 1, 'room_id' => '712979151396208640'], ['equipment_id' => '713064705249107968', 'use_num' => 2, 'room_id' => '714805298250108928']]
     * @param bool $randomRoom true：库存点数量不满足时，是否随机选择其余库存点，false：不可更换库存点
     * @return array  code:1失败，0成功；msg:失败信息；data：recordIds 使用记录ID数组，equipmentDetail 使用设备明细
     * [
     *  'code' => 0,
     *  'msg' => '',
     *  'data' => [
     *      'recordIds'=>['711952656657465344', '711952656661659648', '711952656670048256'],
     *      'equipmentDetail'=>[
     *          ['equipment_room_id' => '717698815025336321_712979151396208640', 'equipment_id' => '717698815025336321', 'use_num' => 1, 'room_id' => '712979151396208640'],
     *          ['equipment_room_id' => '717698815025336321_712979151396208640', 'equipment_id' => '717698815025336321', 'use_num' => 1, 'room_id' => '712979151396208640']
     *      ]
     *  ]
     * ];
     */
    public function useConfirm(int $type, string $requestForm, string $businessId, array $usingInfo, array $equipmentDetail, bool $randomRoom = false): array;

    /**
     * 取消使用
     * @param string $businessId 使用记录关联业务ID
     * @param array $useRecordIds 使用记录ID数组
     * @return bool
     */
    public function cancelUse(string $businessId,  array $useRecordIds): bool;
}