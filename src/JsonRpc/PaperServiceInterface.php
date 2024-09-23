<?php

namespace linlic\JsonRpc;

interface PaperServiceInterface
{
    /**
     * 考试管理-试卷列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 考试管理-试卷列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;

    /**
     * 考试管理-试卷列表-数据共享信息的接口
     * @param array $params
     * @return array
     */
    public function getShareFields(array $params):array;

    /*
    * 发布考试之后，同步试卷的引用信息【无返回值】
    * $paperIds：试卷ids
    * $examId：考试id
    */
    public function synPaperExamQuote($paperIds,$examId): void;

    /*
    * 根据试卷的id数组获取到试卷列表
    * $params里面的参数：paper_id_arr，表示试卷的id数组
    */
    public function getListByPaperId($params): array;


    /*
    * 根据试卷的id数组获取到下面的题型设计和题目分数汇总的相关信息【PC端阅卷的时候 有使用】
    * $params里面的参数：paper_id_arr，表示试卷的id数组
    */
    public function getQsTypeByPaperId($params): array;


    /*
    * 根据试卷的id数组获取到下面的题型设计和题目的相关信息
    * $params里面的参数：
    * show_answer：  是否显示答案 1显示2不显示
    * configShow：   1表示config不显示成 key=>val的形式  2表示需要进行处理 显示成key=>val的形式
    * paper_id_arr： 试卷列表的id，数组格式
    * is_option_shuffle： 是否选项乱序 1表示是     2表示否
    * is_question_shuffle：  是否题目乱序 1表示是   2表示否
    * $qsTypeArr:  数组格式， 表示需要展示的题型值。不传则默认为空数组，表示返回全部题型下的题目信息
    * deal_paper： 是否对试卷列表进行处理，加上额外信息。1表示是，0表示否，默认为0【额外信息主要是加上试卷的分类名称、状态名称、发布人】
    */
    public function getPaperQsList($params): array;


    /*
    * 获取到题型设计和题目的相关信息的公共方法【此方法像是上面getQsTypeByPaperId和getPaperQsList方法合并在一起的返回体】
    * 根据试卷的id数组和题型设计，获取到题型设计和题目的相关信息
    * $params['limit']：题目列表每页的数据量。如果为0，则不需要分页，读取全部的题目数据。如果不为0，则对题目数据进行分页。
    * $params['page']：limit不为0的时候，进行分页时，当前的页数。
    * $params['paper_id_arr']：需要展示的试卷的Id数组
    * $params['qs_type_arr']：需要展示的题型的数组。如果为空，则会读取试卷下的所有题型
    * $params['show_qs']：是否需要展示题目信息，默认为0，1表示展示题目信息，0表示不展示题目信息。如果为0，则返回的qs_info为空数组。
    * $params['configShow']：1表示config和答案  不显示成 key=>val的形式  2表示都显示成key=>val的形式
    */
    public function getQsInfoByPaperId($params): array;

    /*
     * 根据模块业务编号、题目集合生成组卷题目信息
     * $params['module_business_id'] 模块的业务编号
     * $params['module_name'] 模块名称
     * $params['title_name'] 主题名称|组卷名称（非必填项）
     * $params['qids_data'] 题库题目编号对应分值集合[['qid'=>'123456','ques_score'=>'2.0'],
     * ['qid'=>'456789','ques_score'=>'0']]无分值时value为0
     * $params['pass_score'] 组卷的合格分一位小数，不存在合格分时可不传
     * $params['org_id'] 机构编号
     * $params['system_id'] 系统编号
     * $params['menu_id'] 菜单编号
     * @return paper_id
     * */
    public function addModulePaperQuestion($params): string;
}