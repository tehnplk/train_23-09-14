<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    
    
    <div class="alert alert-danger">
        <h1><?= nl2br(Html::encode($message)) ?></h1>
    </div>

    

</div>
