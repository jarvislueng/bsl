<?php
namespace Admin\Controller;
header("Content-Type:text/html;charset=utf8");
use Think\Controller;

class CommonController extends Controller {
    
    /**
     * 后台控制器初始化
     * 权限管理
     */
    protected function _initialize() {
        // 获取当前用户ID
        $user = session('user_info');
        if ($user == false) {
            $this->error('您尚未登录！正在跳转登录页面', U('Login/login'));
        }
    }
    
    /**
     * curl获取网页数据并返回
     * 
     * @param string $url            
     */
    public function curl_file_get_contents($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // 获得结果赋值给变量,不显示在页面
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    
    /**
     * 分页管理
     * 
     * @param integer $count            
     * @param integer $page_size            
     * @return string
     */
    public function pageManager($count, $page_size) {
        $page = new \Think\Page($count, $page_size);
        $page->lastSuffix = false;
        $page->setConfig('header', '共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>' . $page_size .
             '</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', 
            "<div class='text-center'><ul class=\"pagination\"><li>%FIRST%</li> <li>%UP_PAGE% </li> <li>%LINK_PAGE% </li> <li>%DOWN_PAGE% </li> <li>%END% </li> </ul><p class='rows text-muted'>%HEADER%</p></div>");
        return $page->show();
    }
    public function getCurrentUser() {
        $session = session('user_info');
        return $session['passport'];
    }
    
    /**
     * 获取toolbar
     * 
     * @param string $tablename            
     * @param array[][][] $options            
     * @return array
     */
    public function renderToolbarParam($tablename, $options = null) {
        $toolbar = M('toolbar');
        $dictionary = M('dictionary');
        $where = array(
            'tablename' => $tablename,
            'type' => array(
                'in',
                '1,2,3,4'
            ),
            'status' => 1
        );
        
        $toolbar_form_param = $toolbar->field('id,order_num,limit', true)->where($where)->order('order_num asc')->select();
        $where['type'] = '5';
        $toolbar_btn_param = $toolbar->field('id,order_num,limit', true)->where($where)->order('order_num asc')->select();
        foreach ($toolbar_form_param as $k=>$v) {
            if ($v['type'] == 2) {
                $where['field'] = $v['field_name'];
                $option = array();
                if ($options != null) {
                    $option = $options[$v['field_name']];
                } else {
                    unset($where['type']);
                    $option = $dictionary->field('key,value')->where($where)->order('order_num asc')->select();
                }
                $toolbar_form_param[$k]['option'] = $option;
            }
        }
        $this->assign('toolbar_form_param', $toolbar_form_param);
        $this->assign('toolbar_btn_param', $toolbar_btn_param);
    }
    
    /**
     * 获取表格参数
     * 
     * @param string $tablename            
     * @return jsonString
     */
    public function renderTableParam($tablename) {
        $table = M('table');
        $column = M('column');
        $where = array(
            'tablename' => $tablename,
            'status' => 1
        );
        
        $res_table = $table->field('id,tablename', true)->where($where)->find();
        $res_table['url'] = U($res_table['url']);
        $res_table = $this->removeNull($res_table);
        $res_table = $this->convertStr2Num($res_table);
        
        $res_column = $column->field('id,tablename,order_num,limit', true)->where($where)->order('order_num asc')->select();
        $res_column = $this->removeNull($res_column);
        $res_column = $this->convertStr2Num($res_column);
        // $res_table['columns'] = $res_column;
        
        $json_table = json_encode($res_table);
        $json_table = str_replace('datatype', 'dataType', $json_table);
        $json_table = str_replace('pagesize', 'pageSize', $json_table);
        $json_table = str_replace('singleselect', 'singleSelect', $json_table);
        $json_table = str_replace('showrefresh', 'showRefresh', $json_table);
        $json_table = str_replace('showtoggle', 'showToggle', $json_table);
        $json_table = str_replace('sidepagination', 'sidePagination', $json_table);
        $json_table = str_replace('uniqueid', 'uniqueId', $json_table);
        $json_table = str_replace('showcolumns', 'showColumns', $json_table);
        $json_table = str_replace('clicktoselect', 'clickToSelect', $json_table);
        $json_table = str_replace('sortorder', 'sortOrder', $json_table);
        
        $res_table = json_decode($json_table, true);
        $res_table['columns'] = $res_column;
        
        $this->assign('tablename', $tablename);
        $this->assign('table_url', $res_table['url']);
        $this->assign('table_param', json_encode($res_table));
    }
    
    /**
     * 去除数据为null的数组
     * 
     * @param array $array            
     * @return array
     */
    public function removeNull($array) {
        if (! is_array($array)) {
            return $array;
        }
        foreach ($array as $k=>$v) {
            if (is_array($v)) {
                foreach ($v as $kk=>$kv) {
                    if ($kv == null) {
                        unset($array[$k][$kk]);
                    }
                }
            } else 
                if ($v == null) {
                    unset($array[$k]);
                }
        }
        return $array;
    }
    
    /**
     * 将字符型数字转换成number型数字
     * 
     * @param array $array            
     * @return array
     */
    public function convertStr2Num($array) {
        if (! is_array($array)) {
            return $array;
        }
        foreach ($array as $k=>$v) {
            if (is_array($v)) {
                foreach ($v as $kk=>$kv) {
                    if (is_numeric($kv)) {
                        $array[$k][$kk] = floatval($kv);
                    }
                }
            } else 
                if (is_numeric($v)) {
                    $array[$k] = floatval($v);
                }
        }
        return $array;
    }
    
    /**
     * 字段翻译
     * 
     * @param array $array            
     * @param string $tablename            
     * @return array
     */
    public function fieldTranslate($array, $tablename) {
        if (! is_array($array)) {
            return $array;
        }
        $dictionary = M('dictionary');
        $result = $dictionary->field('field, key, value')->where(array(
            'tablename' => $tablename,
            'status' => 1
        ))->select();
        
        $dict = array();
        foreach ($result as $k=>$v) {
            $dict[$v['field']][] = array(
                'key' => $v['key'],
                'value' => $v['value']
            );
        }
        
        $flag = true;
        $tmp_arr = array();
        
        if (! empty($dict)) {
            foreach ($array as $k=>$v) {
                
                if ($flag) {
                    foreach ($v as $kk=>$kv) {
                        if (isset($dict[$kk])) {
                            $tmp_arr[] = $kk;
                        }
                    }
                    $flag = false;
                }
                foreach ($tmp_arr as $kk=>$kv) {
                    foreach ($dict[$kv] as $kkv) {
                        if ($kkv['key'] == $v[$kv]) {
                            $array[$k][$kv] = $kkv['value'];
                            break;
                        }
                    }
                }
            }
        }
        return $array;
    }
}