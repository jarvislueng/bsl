<?php
namespace Admin\Controller\Settings;
use Admin\Controller\CommonController;

class IndexController extends CommonController {
    public function index() {
        $this->display('index');
    }
    public function testExample() {
        $tablename = 'table';
        $this->renderTableParam($tablename);
        $op = array(
            'id' => array(
                0 => array(
                    'key' => 'asd',
                    'value' => 'asdss'
                ),
                1 => array(
                    'key' => 222,
                    'value' => 'asdfff'
                )
            )
        );
        $this->renderToolbarParam($tablename, null);
        
        $this->display();
    }
    public function test() {
        
        // 服务端分页json格式
        $server_json = '{ 
        "total":2,
        "rows":[{
            "id":1,
            "test2": 123
        },
        {
            "id":2,
            "test2": "sdsd"
        }]}';
        
        // 客户端分页json格式
        $client_json = '[{
            "id":1,
            "test2": 123
        },
        {
            "id":2,
            "test2": "sdsd"
        }]';
        exit($client_json);
    }
}