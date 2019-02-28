<?php

namespace app\components\enums;

use Yii;

/**
 * Enum class
 *
* @author Hendi Andriansah <coldweaker@gmail.com>
 */
class Enum
{
    public $enum = [];

    /**
     * set enum property
     */
    protected function setList()
    {
        $this->enum = [];
    }

    /**
     * @return array value property enum
     */
    public function getList()
    {
        $this->setList();
        return $this->enum;
    }
}
