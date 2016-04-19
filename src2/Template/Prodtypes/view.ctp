<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prodtype'), ['action' => 'edit', $prodtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prodtype'), ['action' => 'delete', $prodtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prodtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prodtypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prodtype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prodtypes view large-9 medium-8 columns content">
    <h3><?= h($prodtype->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($prodtype->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($prodtype->id) ?></td>
        </tr>
    </table>
</div>
