<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prodtype'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prodtypes index large-9 medium-8 columns content">
    <h3><?= __('Prodtypes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prodtypes as $prodtype): ?>
            <tr>
                <td><?= $this->Number->format($prodtype->id) ?></td>
                <td><?= h($prodtype->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prodtype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prodtype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prodtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prodtype->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
