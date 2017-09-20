<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 20.09.2017
 * Time: 22:06
 */

namespace app\lib\game;

/**
 * Interface LampInterface
 * @package lib\game
 */
interface LampInterface
{
    /**
     * Включить лампу
     */
    public function on();

    /**
     * Выключить лампу
     */
    public function off();
}
