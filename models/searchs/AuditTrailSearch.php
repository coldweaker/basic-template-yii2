<?php

namespace app\models\searchs;

use yii\data\SqlDataProvider;
use app\models\activerecords\AuditTrail;

/**
 * AuditTrailSearch class is the model for searching purpose.
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class AuditTrailSearch extends AuditTrail
{
    public $username;
    public $happened_date;

    /**
     * @return array rules
     */
    public function rules()
    {
        return [
            [['model_type', 'foreign_pk', 'username', 'type', 'data', 'happened_date'], 'safe']
        ];
    }

    /**
    * Creates data provider instance with search query applied
    *
    * @param array $params
    * @return SqlDataProvider
    */
    public function search($params)
    {
        $query = (new \yii\db\Query())
                ->select(['t.*', 'u.username'])
                ->from(['t' => self::tableName()])
                ->innerJoin(['u' => UserSearch::tableName()], 'u.id = t.user_id');

        if ($this->load($params) && $this->validate()) {
            $query->andFilterWhere(['like', 'model_type', $this->model_type])
                  ->andFilterWhere(['like', 'foreign_pk', $this->foreign_pk])
                  ->andFilterWhere(['username' => $this->username])
                  ->andFilterWhere(['type' => $this->type]);

            if (!empty($this->happened_date)) {
                $query->andFilterWhere([
                    'between',
                    'happened_at',
                    strtotime($this->happened_date . ' 00:00:00'),
                    strtotime($this->happened_date . ' 23:59:59')
                ]);
            }

            if (!empty($this->data)) {
                $query->andFilterWhere(['like', 'data', $this->data]);
            }
        }

        $cmd = $query->createCommand();
        $dataProvider = new SqlDataProvider([
            'sql' => $cmd->sql,
            'params' => $cmd->params,
            'key' => 'id',
            'pagination' => [
                'pageSize' => 20
            ],
            'sort' => [
                'attributes' => [
                    'model_type' => [
                        'asc' => ['model_type' => SORT_ASC],
                        'desc' => ['model_type' => SORT_DESC],
                        'default' => SORT_ASC
                    ],
                    'happened_date' => [
                        'asc' => ['happened_at' => SORT_ASC],
                        'desc' => ['happened_at' => SORT_DESC],
                        'default' => SORT_ASC
                    ],
                ]
            ],
        ]);

        return $dataProvider;
    }
}
