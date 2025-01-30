<?php
use yii\helpers\Html;
use yii\bootstrap5\LinkPager;

/** @var app\models\Country $model */
/** @var yii\bootstrap5\LinkPager $form */

/** @var yii\web\View $this */

?>
<h1>Countries</h1>
<ul>
<?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->code} ({$country->name})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>