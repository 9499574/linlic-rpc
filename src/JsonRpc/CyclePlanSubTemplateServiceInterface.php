<?php

namespace linlic\JsonRpc;

/**
 * 轮转计划子模板服务接口
 */

interface CyclePlanSubTemplateServiceInterface
{
    /**
     * 1.2022国标-超声医学科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardUltrasonicMedicine(array $params): bool;

    /**
     * 2.2022国标-儿科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardPediatrics(array $params): bool;

    /**
     * 3.2022国标-儿外科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardPediatricSurgery(array $params): bool;

    /**
     * 4.2022国标-耳鼻咽喉科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOtolaryngology(array $params): bool;

    /**
     * 5.2022国标-放射科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardRadiology(array $params): bool;

    /**
     * 6.2022国标-放射肿瘤科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardRadiationOncology(array $params): bool;

    /**
     * 7.2022国标-妇产科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardObstetricsAndGynecology(array $params): bool;

    /**
     * 8.2022国标-骨科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOrthopedics(array $params): bool;

    /**
     * 9.2022国标-核医学科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardNuclearMedicine(array $params): bool;

    /**
     * 10.022国标-急诊科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardEmergency(array $params): bool;

    /**
     * 11.2022国标-检验医学科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardLaboratoryMedicine(array $params): bool;

    /**
     * 12.2022国标-精神科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardPsychiatry(array $params): bool;

    /**
     * 13.2022国标-康复医学科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardRehabilitationMedicine(array $params): bool;

    /**
     * 14.2022国标-口腔病理科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOralPathology(array $params): bool;

    /**
     * 15.2022国标-口腔颌面外科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOralAndMaxillofacialSurgery(array $params): bool;

    /**
     * 16.2022国标-口腔颌面影像科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOralAndMaxillofacialImaging(array $params): bool;

    /**
     * 17.2022国标-口腔内科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOralInternalMedicine(array $params): bool;

    /**
     * 18.2022国标-口腔全科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOralGeneralPractice(array $params): bool;

    /**
     * 19.2022国标-口腔修复科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOralProsthodontics(array $params): bool;

    /**
     * 20.2022国标-口腔正畸科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOralOrthodontics(array $params): bool;

    /**
     * 21.2022国标-临床病理科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardClinicalPathology(array $params): bool;

    /**
     * 22.2022国标-麻醉科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardAnesthesiology(array $params): bool;

    /**
     * 23.2022国标-内科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardInternalMedicine(array $params): bool;

    /**
     * 24.2022国标-皮肤科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardDermatology(array $params): bool;

    /**
     * 25.2022国标-神经内科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardNeurology(array $params): bool;

    /**
     * 26.2022国标-外科(泌尿外科方向)处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardSurgeryUrology(array $params): bool;

    /**
     * 27.2022国标-外科(神经外科方向)处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardSurgeryNeurosurgery(array $params): bool;

    /**
     * 28.2022国标-外科(胸心外科方向)处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardSurgeryThoracicCardiac(array $params): bool;

    /**
     * 29.2022国标-外科(整形外科方向)处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardSurgeryPlastic(array $params): bool;

    /**
     * 30.2022国标-外科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardSurgery(array $params): bool;

    /**
     * 31.2022国标-眼科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardOphthalmology(array $params): bool;

    /**
     * 32.2022国标-医学遗传科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardMedicalGenetics(array $params): bool;

    /**
     * 33.2022国标-重症医学科处理方法
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandardCriticalCareMedicine(array $params): bool;
}