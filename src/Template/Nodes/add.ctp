<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nodes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Apps'), ['controller' => 'Apps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New App'), ['controller' => 'Apps', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nodes form large-9 medium-8 columns content">
    <?= $this->Form->create($node) ?>
    <fieldset>
        <legend><?= __('Add Node') ?></legend>
        <?php
        /*echo $this->Form->input('apps_id', ['options' => $apps]);
        echo $this->Form->input('categories_id', ['options' => $categories, 'empty' => true]);
        echo $this->Form->input('title');
        echo $this->Form->input('quantity');
        echo $this->Form->input('status', [
            'options' => ['1' => 'Published', '2' => 'UnPublished', '3' => 'Trash']
        ]);
        echo $this->Form->input('price');*/
        //echo $this->Form->input('thumb');
        //echo $this->Form->input('image');
        //echo $this->Form->input('first_name');

        $content = '';
        foreach ($fields as $field):
            if (is_string($field)) {
                if (strcasecmp($field, 'created') == 0 || strcasecmp($field, 'modified') == 0) {
                    // do nothing
                } else {
                    if (strcasecmp($field, 'status') == 0) {
                        $content .= $this->Form->input($field, [
                            'options' => ['1' => 'Published', '2' => 'UnPublished', '3' => 'Trash']
                        ]);
                    } else if (strpos($field, 'ud_') === false) {
                        $content .= $this->Form->input($field);
                    }
                }/*$field = $opts*/;
                /*$opts = array(
                    'class' => 'span10',
                    'label' => false,
                    'tooltip' => ucfirst($field),
                );*/
            }
        endforeach;
        // print all form data
        echo $content;
     //   dubug($content);

        //debug(Cake\Routing\Router::url(array("controller" => "nodes", "action" => "getColumns", 2)));
?>
    </fieldset>
    <hr>
    <div id="ud-fields">
    </div>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>
<?php echo $this->Html->script([
    'http://code.jquery.com/jquery.min.js']); ?>
<script>
    $(document).ready(function () {
        var categories = $('#categories-id');
        categories.on('change', function () {
            window.location.href = "<?php echo Cake\Routing\Router::url(array("action" => "add"));?>" + "/" + categories.val();

           /* $.ajax({
                type: "POST",
                url: "<?php echo Cake\Routing\Router::url(array("controller" => "nodes", "action" => "getColumns"));?>" + "/" + categories.val(),
                dataType: 'text',
                async: true,
                success: function (tab) {
                    $('#ud-fields').html(
                        ""
                    );

                },
                error: function (tab) {
                    alert('error');
                }
            });*/
        });
    });

</script>