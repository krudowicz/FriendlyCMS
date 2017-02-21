<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
   <li><label>Name</label><?php Html::encode($model->name); ?></li>
   <li><label>Email</label><?php Html::encode($model->email); ?></li>
</ul>
