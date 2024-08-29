<?php

namespace linlic\JsonRpc;

interface QuestionServiceInterface
{

    /**
     * 题库-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function questionField($params):array;
    /**
     * 题库-创建机构题库表（按机构和类型分表）
     * @param $params ['org_id'=>'123']
     * @return array
     */
    public function createOrganQuestionTable($params):array;

    /**
     * 题库-菜单设置
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function questionConf(array $params):array;

    /**
     * 题库-根据指定分类、获取题目的题型集合
     * @param $params ['sc_ids']
     * @return array
     */
    public function getShowQuesType(array $params):array;

    /**
     * 题库-根据指定分类、获取题型对应的题目总数量
     * @param $params ['sc_ids'=>'681861910698086400','ques_types'=>[1,2,3]  ques_types不传时返回全部题型数量
     * @return array
     */
    public function getShowQuesTypeQidNum(array $params):array;

    /**
     * $params sc_ids  指定应用分类
     * $params ques_type 题目类型。string
     * $params is_special是否过滤暗示性题。1表示是  0表示否  ---目前未做限制
     * $params complexity array 困难度类型(优先按传来的困难度给，没有的话，就按设置的3个困难度 依次抽取)
     * $params draw_num 抽题数量
     * 根据指定分类、指定题型获取题目ID集合
     * return  [1=>['123','456','789'],2=>['123','456','789'],3=>['123','456','789']] 1,2,3 代表困难度，每种困哪度都会返回指定抽题数量的题目集合（共用题组的题目会放在相邻的位置）
     */
    public function getShowQuesTypeQids(array $params):array;

    /**
     * 根据题目编号获取题目信息
     * $params qid
     */
    public function getQuestionInfo($qid):array;

    /*脱离题库接口
      * 根据题库ID新增脱离题库题目数据
      * qids 必填 题库题目编号 （注意可能包含共用题组题目）
      * edit_get_data：编辑题目的时候 是否需要返回 新增后的数据。1表示是  0表示否
      * paper_id 必填生成的试卷编号
      * ques_score 题目得分
      * org_id 必填
      * arrat code 0 失败 1成功
    * */
    public function addNewQuestionBankToPaperQuestions($params):array;
}