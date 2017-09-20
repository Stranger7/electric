<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 20.09.2017
 * Time: 22:10
 */

namespace app\lib;

/**
 * Interface Transferable
 * @package lib
 */
interface Transferable
{
    /**
     * @return AbstractDto
     */
    public function asDto();
}
