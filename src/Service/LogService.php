<?php
/**
 * Created by PhpStorm.
 * User: chenbo
 * Date: 18-3-27
 * Time: 上午10:02
 */

namespace Monkey\Service;


class LogService extends Service
{
    public function info(){
        $log = $this->log;
        return env('DEBUG');
    }
}