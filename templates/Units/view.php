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
            <?= $this->Html->link(__('Edit Unit'), ['action' => 'edit', $unit->serial_number], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Unit'), ['action' => 'delete', $unit->serial_number], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->serial_number), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Units'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Unit'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="units view content">
            <h3><?= h($unit->serial_number) ?></h3>
            <table>
                <tr>
                    <th><?= __('Serial Number') ?></th>
                    <td><?= h($unit->serial_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($unit->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufactured') ?></th>
                    <td><?= h($unit->manufactured) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
