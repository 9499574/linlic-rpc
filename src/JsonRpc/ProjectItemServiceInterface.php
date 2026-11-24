<?php

namespace linlic\JsonRpc;

interface ProjectItemServiceInterface
{
    /**
     * 项目立项功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 项目立项菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 项目立项流程回调
     * @param array $params
     * @return bool
     */
    public function projectItemFlowCallback(array $params): bool;

    /**
     * 机构设置
     * @param array $params
     * @return array
     */
    public function orgSet(array $params): array;

    /**
     * 项目立项审核流程参数
     * @param array $params
     * @return array
     */
    public function projectItemFlowParams(array $params): array;

    /**
     * 下载中心反向调用回调：接收整个 businessParams 数组，返回 [business_id => templateVars] 结构。
     * 取数复用 ProjectItemServiceImpl::getTemplateForm，变量契约对齐下载中心模板
     * storage/view/template_view/project_proposal.blade.php（moduleKey: project_proposal）：
     * cover/toc/base/partners/leader_info/team_in/team_out/team_stat/expect/fund/
     * abstract/keywords/section1/section2/yearly/budget/budget_total/budget_notes。
     * 选项只渲染已选中的中文标签，表格保留二维行结构，富文本原样返回 HTML。
     * @param array $params
     * @return array
     */
    public function getWordExportData(array $params): array;
}