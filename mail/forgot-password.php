<?php

use yii\helpers\Url;
use yii\helpers\Html;

/** @var $model \app\models\activerecords\User */

?>
<p>Pesan ini dikirim karena ada permintaan untuk mengatur ulang kata sandi. Jika permintaan ini benar dari Anda silhkan klik link dibawah ini.</p>
<?= Html::a(
        'Atur ulang kata sandi',
        Url::to(['/site/reset-password', 'id' => $model->password_reset_token], true)
) ?>