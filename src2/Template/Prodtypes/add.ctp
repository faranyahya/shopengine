<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prodtypes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prodtypes form large-9 medium-8 columns content">
    <?= $this->Form->create($prodtype) ?>
    <fieldset>
        <legend><?= __('Add Prodtype') ?></legend>
        <?php
            echo $this->Form->input('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
