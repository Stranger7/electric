<?php

namespace app\lib;

use yii\helpers\Inflector;

/**
 * Class AbstractDto
 *
 * @package app\lib
 */
abstract class AbstractDto
{
    /**
     * @param array|object|null $data
     */
    public function __construct($data = null)
    {
        if ($data) {
            $this->specify($data);
        }
    }

    /**
     * Fill DTO model properties
     *
     * @param array|\stdClass $data
     *
     * @return $this
     */
    public function specify($data)
    {
        if (is_array($data) || is_object($data)) {
            $object = is_object($data) ? $data : (object)$data;
            foreach (array_keys($this->getProperties()) as $property) {
                if ($incomingField = $this->searchCorrespondingIncomingField($property, $object)) {
                    $this->specifyProperty($property, $object->$incomingField);
                }
            }
        }
        return $this;
    }

    /**
     * @param bool $isNotNullOnly
     *
     * @return array
     */
    public function asUnderscoreArray($isNotNullOnly = false)
    {
        $array = [];
        foreach ($this->getProperties() as $property => $value) {
            if (!$isNotNullOnly || !is_null($value)) {
                $array[Inflector::underscore($property)] = $value;
            }
        }
        return $array;
    }

    /**
     * @return array
     */
    protected function getProperties()
    {
        $properties = get_object_vars($this);
        foreach (array_keys(get_class_vars(__CLASS__)) as $property) {
            unset($properties[$property]);
        }
        return $properties;
    }

    /**
     * @param string $property
     * @param object $data
     *
     * @return string|false
     */
    private function searchCorrespondingIncomingField($property, &$data)
    {
        if (isset($data->$property)) {
            return $property;
        } else {
            $underscored = Inflector::underscore($property);
            if (isset($data->$underscored)) {
                return $underscored;
            }
        }
        return false;
    }

    /**
     * @param string $name
     * @param mixed  $value
     */
    private function specifyProperty($name, $value)
    {
        if ($value !== null) {
            $setterName = 'set' . Inflector::camelize($name);
            if (method_exists(get_class($this), $setterName)) {
                $this->$setterName($value);
            } else {
                $this->$name = $value;
            }
        }
    }
}
