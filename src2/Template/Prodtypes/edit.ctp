<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prodtype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prodtype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prodtypes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prodtypes form large-9 medium-8 columns content">
    <?= $this->Form->create($prodtype) ?>
    <fieldset>
        <legend><?= __('Edit Prodtype') ?></legend>
        <?php
            echo $this->Form->input('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
