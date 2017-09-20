<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 20.09.2017
 * Time: 22:13
 */

namespace app\lib\game;

use app\lib\AbstractDto;

/**
 * Class LampDto
 * @package lib\game
 */
class LampDto extends AbstractDto
{
    /**
     * @var int
     */
    public $row;

    /**
     * @var int
     */
    public $col;

    /**
     * @var bool
     */
    public $lighted;
}
