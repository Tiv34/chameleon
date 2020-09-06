<?php

use yii\helpers\Html;

$this->title = 'Support';

/** @var \ricco\ticket\models\TicketBody $newTicket */
/** @var \ricco\ticket\models\TicketBody $thisTicket */
/** @var \ricco\ticket\models\TicketFile $fileTicket */

?>
<div class="full-chat">
    <div class="chat-block">
        <?php foreach ($thisTicket as $ticket) : ?>
            <?php
            if ($ticket['client'] == 1) {
                $client_block = 'sotrud_block';
                $massages = 'sotrud-massages';
            } else {
                $client_block = 'client_block';
                $massages = 'client-massages';
            }
            ?>
            <div class="row row_massages">
                <div class="<?= $massages ?>">
                    <div class="<?= $client_block ?>">
                        <?= nl2br(Html::encode($ticket['text'])) ?>
                        <?php if (!empty($ticket['file'])) : ?>
                            <hr>
                            <?php foreach ($ticket['file'] as $file) : ?>
                                <a href="/fileTicket/<?= $file['fileName'] ?>" target="_blank"><img
                                            src="/fileTicket/reduced/<?= $file['fileName'] ?> " alt="..."
                                            class="img-thumbnail"></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php
                    $date = new DateTime($ticket['date']);
                    ?>
                    <div class="clv-message_block_text_n"><?= ($ticket['client'] == 1) ? 'Сотрудник' : $ticket['name_user'] ?>
                        - <?= $date->format('d.m.Y H:i:s') ?></div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>

<div class="">
    <?php $form = \yii\widgets\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($newTicket,
        'text')->textarea(['style' => 'height: 100px; resize: none;'])->label('Сообщение')->error() ?>
    <?= $form->field($fileTicket, 'fileName[]')->fileInput([
        'multiple' => true,
        'accept'   => 'image/*',
    ])->label(false); ?>
    <div class="text-center">
        <button class='btn btn-primary'>Отправить</button>
    </div>
    <?= $form->errorSummary($newTicket) ?>
    <?php $form->end() ?>
</div>




