<?php

/* @var $this yii\web\View */

$this->title = 'Electric game';
?>
<style type="text/css">
    .cell {
        margin: 3px;
        width: 50px;
        height: 50px;
    }
    .on {
        background-color: #ff7d7d
    }
    .off {
        background-color: #7d7d7d
    }
    .counter {
        margin: 3px;
        height: 50px;
        width: 274px;
    }
</style>
<h2>
    Game "Electric"
    <button type="button" class="btn btn-primary">New</button>
</h2>

<div class="container">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="row">
        <?php for ($j = 1; $j <= 5; $j++): ?>
            <div id="<?= $i . '_' . $j ?>" class="col-sm-1 alert cell off"></div>
        <?php endfor; ?>
        </div>
    <?php endfor; ?>
    <div class="row">
        <div class="alert alert-info counter">
            Steps: <span class="badge">0</span>
        </div>
    </div>
</div>
