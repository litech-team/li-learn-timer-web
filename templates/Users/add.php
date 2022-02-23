<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->assign('title', $title);
?>
<div class="users form">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('serial_number', ['required' => true, 'label' => 'シリアル番号']);
            echo $this->Form->control('password', ['required' => true, 'label' => 'パスワード']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
