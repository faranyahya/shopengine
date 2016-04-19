<?php
/**
 * Created by PhpStorm.
 * User: Subhan Ahmed
 * Date: 4/1/2016
 * Time: 10:02 PM
 */

$options = [
    'ajax' => [
        'url' => $this->Url->build() // current controller, action, params
    ],
    'data' => $nodes,
    'deferLoading' => $nodes->count(), // https://datatables.net/reference/option/deferLoading
    'columns' => [
        [
            'name' => 'Nodes.id',
            'data' => 'id',
            'visible' => true,
            'searchable' => false,
        ],
    ],
    'order' => [0, 'asc'] // order by username
];
echo $this->DataTables->table('Nodes', $options, ['class' => 'table table-striped']);