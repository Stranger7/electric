<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 20.09.2017
 * Time: 22:08
 */

namespace app\lib\game;

use app\lib\AbstractDto;
use app\lib\Transferable;

/**
 * Class Lamp
 * @package lib\game
 */
class Lamp implements LampInterface, Transferable
{
    /**
     * @var int
     */
    private $row;

    /**
     * @var int
     */
    private $col;

    /**
     * @var bool
     */
    private $lighted = false;

    /**
     * Включить лампу
     */
    public function on()
    {
        $this->setLighted(true);
    }

    /**
     * Выключить лампу
     */
    public function off()
    {
        $this->setLighted(false);
    }

    /**
     * @return AbstractDto
     */
    public function asDto()
    {
        return new LampDto($this);
    }

    /**
     * @param int $row
     * @return Lamp
     */
    public function setRow($row)
    {
        $this->row = $row;
        return $this;
    }

    /**
     * @return int
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param int $col
     * @return Lamp
     */
    public function setCol($col)
    {
        $this->col = $col;
        return $this;
    }

    /**
     * @return int
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * @param bool $lighted
     * @return Lamp
     */
    public function setLighted($lighted)
    {
        $this->lighted = $lighted;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLighted()
    {
        return $this->lighted;
    }
}
