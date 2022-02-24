<?php $this->assign('title', $title); ?>
<div class="users form">
    <?= $this->Flash->render() ?>
    <?=
      $this->Form->create(null, [
      'url' => $this->Url->build(['controller' => 'Users',  'action' => 'login'])
      ])
    ?>
    <fieldset>
      <legend><?= __('Login') ?></legend>
      <?= $this->Form->control('serial_number', ['required' => true, 'label' => 'シリアル番号']) ?>
      <?= $this->Form->control('password', ['required' => true, 'label' => 'パスワード']) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Add User", ['action' => 'add']) ?>
</div>