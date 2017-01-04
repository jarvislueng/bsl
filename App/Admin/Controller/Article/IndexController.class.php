<?php
namespace Admin\Controller\Article;
use Admin\Controller\CommonController;

class IndexController extends CommonController {
    public function index() {
        $this->renderTableParam('articles');
        $this->renderToolbarParam('articles');
        $this->display();
    }
    public function getArticles() {
        $search = I('get.search');
        $offset = $_GET['offset'] ?: 0;
        $limit = $_GET['limit'] ?: 20;
        $articles = D('articles');
        $count = 0;
        $data = [];
        foreach ($articles->selectBySearchAndPage($search, $count, $offset + 1, $limit) as $article)
            $data[] = [
                'id' => $article->id,
                'title' => $article->title,
                'keyword' => $article->keyword,
            ];
        echo json_encode([
            'rows' => $data,
            'total' => $count
        ]);
    }
}