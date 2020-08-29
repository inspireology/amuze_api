<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Creator[]|\Cake\Collection\CollectionInterface $creators
 */
?>
<div class="creators index content">
    <?= $this->Html->link(__('New Creator'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Creators') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name_first') ?></th>
                    <th><?= $this->Paginator->sort('name_last') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($creators as $creator): ?>
                <tr>
                    <td><?= $this->Number->format($creator->id) ?></td>
                    <td><?= h($creator->name_first) ?></td>
                    <td><?= h($creator->name_last) ?></td>
                    <td><?= h($creator->created) ?></td>
                    <td><?= h($creator->updated) ?></td>
                    <td><?= h($creator->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $creator->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creator->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $creator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $creator->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
