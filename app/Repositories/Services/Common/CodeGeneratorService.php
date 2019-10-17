<?php
namespace Repositories\Services\Common;
/**
 * Class CodeGenerator
 */
class CodeGenerator
{
    public function generateUserCode($type)
    {
        $sparator = "-";
        return substr($type,0,3).$sparator.date("Ymd").$sparator.rand(100,999);
    }
}
