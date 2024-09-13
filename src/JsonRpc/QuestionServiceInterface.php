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
     * 题库-根据指定条件获取应用分类集合
     * @columnArr
     * @param $where
     * @return array
     */
    public function getShowCateData(array $columnArr,$where):array;

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

    /*
      * 按照分类返回各题型的题目集合
      * $params sc_ids  指定应用分类
      * $params ques_types 题目类型。array
      * $params is_special是否过滤暗示性题。1表示是  0表示否  ---目前未做限制
      * $params draw_num 抽题数量
      * 根据指定分类、指定题型获取题目ID集合
      *  return  [1=>['123','456','789'],2=>['123','456','789'],3=>['123','456','789']] 1,2,3 代表题型，每种题型都会返回指定抽题数量的题目集合 （共用题组的题目会放在相邻的位置）
     * */
    public function getShowQuesTypeQids(array $params):array;

    /* 按照指定分类、指定题型返回所有困难度下的题目编号集合
     * $params sc_ids  指定应用分类
     * $params ques_type 题目类型。string
     * $params is_special是否过滤暗示性题。1表示是  0表示否  ---目前未做限制
     * $params complexity array 困难度类型(优先按传来的困难度给，没有的话，就按设置的3个困难度 依次抽取)
     * $params draw_num 抽题数量
     * 根据指定分类、指定题型获取题目ID集合
     *  return  [1=>['123','456','789'],2=>['123','456','789'],3=>['123','456','789']] 1,2,3 代表困难度，每种困哪度都会返回指定抽题数量的题目集合 （共用题组的题目会放在相邻的位置）
     * */
    public function getShowQuesTypeComplexityQids(array $params):array;
    /*
     * 根据条件获取题库的数据
     * type:1表示未脱离(即未选) **仅存在type为1的情况
     * qids 题目集合。type为1的时候 就是原始题库的qid,type为2的时候 就是paper_questions表里的ques_id。
     * showAnswer  是否显示答案 1显示2不显示
     * configShow：1表示config不显示成 key=>val的形式  2表示需要进行处理 显示成key=>val的形式
     * is_option_shuffle 是否选项乱序 1 是 2 否
     * is_question_shuffle 是否题目乱序 1 是2 否
     * search_key  未选题目增加关键词搜索
     * 最终返回的数据格式为：['qid1'=>[],'qid2'=>[]]
     */
    public function getDealQuestionData($params):array;
    /**
     * 根据题目编号获取题目信息
     * $params qid
     */
    public function getQuestionInfo($qid):array;

    /*
    * 根据关键词获取一批题目编号
     * $keyword -搜索关键词
    */
    public function getEsSearchKeyQids($keyword):array;

    /*
     * 获取一批题目全部基本信息
    */
    public function getQuestionData($qids):array;
}