<?php

namespace linlic\JsonRpc;

interface ExamJoinModulesServiceInterface
{

    /**
     * 创建考试
     * @param $params
     * 必传参数
     * system_id 字符串
     * menu_id 字符串
     * module_name 发布模块标识
     * module_business_id 发布模块业务id
     * paper_id 试卷id 目前支持单一试卷
     * exam_user_uids 考生人员的uid数组
     *
     * 非必传参数
     * exam_name 考试名称
     * exam_type 考试模式 1 正式 2 练习 3 补考 不传默认为 1 （目前只支持1）
     * exam_explain 考试说明 可不传
     * score_show 成绩显示 1 自动公布 2 手动公布 不传默认为 1
     * is_answer_card_show 答题记录 1 可查看 2 不可查看 不传默认为 1
     * useport 使用端口（1代表PC，2代表APP，3代表Wx） 传数组 不传默认都开通
     * exam_time 一次考试时长 单位：分钟 不传默认为 999
     * exam_number 考试次数 不传默认无限次
     * is_face_recognition 人脸识别 1 开启 2 关闭 不传默认为2
     * is_screen_monitor 屏幕监控 1 开启 2 关闭 不传默认为2
     * start_time 考试开始时间 不传默认为当前时间
     * end_time 考试结束时间 不传默认为开始时间+10年
     * is_option_shuffle 是否选项乱序 1 是 2 否 不传默认为2
     * is_question_shuffle 是否题目乱序 1 是2 否 不传默认为2
     * is_no_back 是否开启禁止回退 1 是 2 否 不传默认为2
     * no_back_question 禁止回退的题型
     * @return array
     * 返回code和data
     * code 0 正常 1 异常
     * msg 异常信息
     * data 中有 exam_id 考试id 使用模块自己存储
     */
    public function createModulesExam($params):array;

    /**
     * 添加考试人员
     * @param $params //二维数组
     * 必传参数
     * system_id 字符串
     * menu_id 字符串
     * module_name 发布模块标识
     * module_business_id 发布模块业务id
     * user_data  => [
     *      [
     *          'exam_id', 考试id
     *          'uid' = [] 需要添加的uid数组
     *      ]
     * ]
     * @return array
     */
    public function addModulesExamUser($params):array;

    /**
     * 去除考试人员
     * @param $params //二维数组
     * 必传参数
     * system_id 字符串
     * menu_id 字符串
     * module_name 发布模块标识
     * module_business_id 发布模块业务id
     * user_data  => [
     *      [
     *          'exam_id', 考试id
     *          'uid' = [] 需要添加的uid数组
     *      ]
     * ]
 * @return array
     */
    public function deleteModulesExamUser($params):array;

}