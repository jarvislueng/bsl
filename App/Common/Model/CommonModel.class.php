<?php
namespace Common\Model;
use Think\Model;

class CommonModel extends Model {
    CONST IDNAME = 'id';
    const MODELNAME = '';
    public function selectById($id, $profile = null) {
        if (is_array($profile))
            $profile = (object)$profile;
        elseif ($profile instanceof \ArrayObject) {
            $profile_ob = new \stdClass();
            foreach ($profile as $k=>$v)
                $profile_ob->{$k} = $v;
            $profile = $profile_ob;
        }
        
        if (array_key_exists($id, static::$instances)) {
            $instance = static::$instances[$id];
            if (isset($profile)) {
                // 变成成员变量
                foreach ($profile as $key=>$value)
                    $this->{$key} = $value;
            }
        } else {
            $resultset = $this->where([
                static::IDNAME => $id
            ])->select();
            $result = current($resultset);
            if (! $result) {
                throw new \Exception(static::MODELNAME . '未找到', 400);
            } else {
                // 变成成员变量
                foreach ($result as $key=>$value)
                    $this->{$key} = $value;
            }
            $instance = $this;
            static::$instances[$id] = $instance;
        }
        return $instance;
    }
}

