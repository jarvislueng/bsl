<?php
namespace Admin\Controller\Login;
header("Content-Type:text/html;charset=utf8");
use Think\Controller;

class LoginController extends Controller {
    /**
     * 登录
     */
    public function login($err = null) {
        $user = session('user_info');
        if (! $user) {
            layout(false);
            $verify_code = $this->codeGenerate();
            $this->assign('code', $verify_code['random_code']);
            $this->assign('stamp', $verify_code['timestamp']);
            $this->assign('errMsg', $err);
            $this->display('Login/Login/login');
        } else {
            $this->redirect('Admin/Settings/Index/index');
        }
    }
    
    /**
     * 登录验证
     */
    public function checkLogin() {
        if (I('post.sub')) {
            $account = I('post.account');
            $password = I('post.password');
            if (empty($account)) {
                $this->error("帐号不能为空");
            } elseif (empty($password)) {
                $this->error("密码不能为空");
            } else {
                $db = M('user');
                $res = $db->where(array(
                    'user_id' => $account
                ))->find();
                $true_pwd = $res['password'];
                $verify_code = session('verify_code.random_code');
                $v_timestamp = session('verify_code.timestamp');
                var_dump(session('verify_code'));
                $pwd = sha1($verify_code . $true_pwd . $v_timestamp); // 正确密码
                if (strcmp($pwd, $password) === 0) {
                    session(null);
                    session('user_info', $res);
                    $this->redirect('Admin/Settings/Index/index');
                } else {
                    $this->login("帐号或密码错误！");
                }
            }
        } else {
            $this->error("非法登录");
        }
    }
    
    /**
     * 生成盐值和时间戳
     */
    private function codeGenerate() {
        $random_code = "";
        for($i = 0; $i < 10; $i ++) {
            $random_code .= chr(rand(65, 90));
        }
        $timestamp = time();
        $verify_code = array(
            'random_code' => $random_code,
            'timestamp' => $timestamp
        );
        session('verify_code', $verify_code);
        return $verify_code;
    }
    
    /**
     * 修改密码
     */
    public function changePwd($err = null) {
        layout(false);
        $passport = session('user_info.passport');
        if ($err != null) {
            $this->assign('$errMsg', $err);
        }
        $this->assign('account', $passport);
        $this->display();
    }
    
    /**
     * 修改密码验证
     */
    public function checkChangePwd() {
        $passport = session('user_info.passport');
        $old_pwd = I('post.opw', null);
        $new_pwd = I('post.npw', null);
        
        if ($old_pwd == null || $new_pwd == null) {
            $this->changePwd("密码不能为空");
            exit();
        }
        $db = M('user');
        $where = array(
            'passport' => $passport
        );
        $res = $db->where($where)->find();
        $true_pwd = $res['password'];
        if (strcmp($true_pwd, $old_pwd) === 0) {
            $db->where($where)->save(array(
                'password' => $new_pwd
            ));
            $this->success('修改成功', U('Admin/Settings/Index/index'));
        } else {
            $this->changePwd("密码错误");
        }
    }
    
    /**
     * 退出系统
     */
    public function loginOut() {
        session(null);
        $this->redirect('Admin/Login/Login/login');
    }
}
?>