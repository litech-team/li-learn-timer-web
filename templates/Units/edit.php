<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unit $unit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $unit->serial_number],
                ['confirm' => __('Are you sure you want to delete # {0}?', $unit->serial_number), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Units'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="units form content">
            <?= $this->Form->create($unit) ?>
            <fieldset>
                <legend><?= __('Edit Unit') ?></legend>
                <?php
                    echo $this->Form->control('status');
                    echo $this->Form->control('manufactured');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
