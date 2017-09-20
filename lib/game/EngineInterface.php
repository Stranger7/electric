<?php
/**
 * Created by PhpStorm.
 * Date: 20.09.2017
 * Time: 21:56
 */
namespace app\lib\game;

/**
 * Interface EngineInterface
 */
interface EngineInterface
{
    /**
     * @param string|null $id
     * -- If ID is specified, it tries to load the unfinished game from DB. Otherwise ID will be created
     * @return string ID of game
     */
    public function start($id = null);

    /**
     * @param Lamp $lamp
     * @return Lamp[]
     */
    public function step(Lamp $lamp);

    /**
     * Write result to DB
     */
    public function finish();
}
