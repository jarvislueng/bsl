<?php
namespace Admin\Model;
use Common\Model\CommonModel;

class ArticlesModel extends CommonModel {
    protected static $instances;
    CONST MODELNAME = 'Articles';
    public function selectBySearchAndPage($search, &$count, $pc, $pn = 20) {
        $where = "keyword like '%{$search}%'";
        $articles = M('articles');
        foreach ($articles->where($where)->page("$pc, $pn")->select() as $article) {
            yield $this->selectById($article['id'], $article);
        }
        $count = $articles->where($where)->count();
    }
}