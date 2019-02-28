<?php

namespace app\components;

use Yii;
use yii\helpers\ArrayHelper;
use app\modules\leave\models\searchs\LeaveAnnualSearch;
use app\modules\remuneration\models\searchs\DemotionSearch;
use app\modules\remuneration\models\searchs\MutationSearch;
use app\modules\remuneration\models\searchs\PromotionSearch;
use app\modules\master\models\searchs\EmployeeNonactiveSearch;

/**
 * Extended yii\web\User
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class User extends \yii\web\User
{
    /**
     * @return string `username`
     */
    public function getUsername()
    {
        return $this->identity->username;
    }

    /**
     * @return string `role user`
     */
    public function getRolenames()
    {
        $roles = Yii::$app->authManager->getRolesByUser($this->getId());
        $names = [];
        foreach ($roles as $key => $role) {
            $names[] = $role->name;
        }
        return implode(", ", $names);
    }
}
