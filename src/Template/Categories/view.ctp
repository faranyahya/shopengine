<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <!--<tr>
            <th><?/*= __('Id') */?></th>
            <td><?/*= $this->Number->format($category->id) */?></td>
        </tr>-->
        <tr>
            <th><?= __('Parent Id') ?></th>
            <td><?= $this->Number->format($category->parent_id) ?></td>
        </tr>
    </table>
</div>

<div class="categories view large-9 medium-8 columns content">
    <h3><?= __('Related Fields') ?></h3>
    <table>
        <thead>
            <th><?= __('Title') ?></th>
            <th><?= __('Type') ?></th>
        </thead>
        <?php foreach ($related_fields as $related_field): ?>
        <tr>
            <td><?= h($related_field['title']) ?></td>
            <td><?= h($related_field['type']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

