<?php

namespace shishkov;


use core\LogAbstract;
use core\LogInterface;


class MyLog extends LogAbstract implements LogInterface
{

    public function _write(){

        foreach($this->log as $res){
            echo $res."\n";
        }

    }

    public function _log($str){
        $this->log[]=$str;
    }

    public static function log($str){
        self::Instance()->_log($str);
	}

    public static function write(){
        self::Instance()->_write();
    }

}
