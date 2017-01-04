<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model {
    protected $_map = array(
        'pkey' => 'user_id',
        'password' => 'password',
        'username' => 'name',
        'class' => 'class_id',
        'status' => 'identify'
    );
    public function addUser($data) {
        $user = M('user');
        $result = $user->add($data);
        return $result;
    }
    public function modifyUser($data) {
        $user = M('user');
        $uid = $data['uid'];
        unset($data['uid']);
        $result = $user->where(array(
            'uid' => $uid
        ))->save($data);
        return $result;
    }
}