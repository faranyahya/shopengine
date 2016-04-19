<?php
use Migrations\AbstractMigration;

class ShopEngine extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('apps');
        $table
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('categories');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('lft', 'integer', [
                'default' => null,
                'null' => false,
            ])->addColumn('rght', 'integer', [
                'default' => null,
                'null' => false,
            ])
            ->create();

        //$table = $this->table('categories_relations');
        /*$table
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('parent_category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->create();*/

        $table = $this->table('customers');
        $table
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('registerd_date', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('last_seen', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('city', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('country', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('billing_address', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('phone', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('role', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('pic_url', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->create();

        $table = $this->table('fields');
        $table
            ->addColumn('fieldTypes_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('apps_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'apps_id',
                ]
            )
            ->addIndex(
                [
                    'fieldTypes_id',
                ]
            )
            ->create();

        $table = $this->table('fieldtypes');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->create();
        
        $table = $this->table('nodes');
        $table
            ->addColumn('apps_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('categories_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'null' => true,
            ])
            ->addColumn('quantity', 'string', [
                'default' => null,
                'null' => true,
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'null' => true,
            ])
            ->addColumn('price', 'string', [
                'default' => null,
                'null' => true,
            ])
            ->addColumn('thumb', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('image', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'apps_id',
                ]
            )
            ->create();
        $table = $this->table('orders');
        $table
            ->addColumn('nodes_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('customers_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('datetime', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('shipping_status', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('quantity', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('prod_total', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('modified', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'customers_id',
                ]
            )
            ->addIndex(
                [
                    'nodes_id',
                ]
            )
            ->create();

        $this->table('fields')
            ->addForeignKey(
                'apps_id',
                'apps',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'fieldTypes_id',
                'fieldtypes',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('nodes')
            ->addForeignKey(
                'apps_id',
                'apps',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('orders')
            ->addForeignKey(
                'customers_id',
                'customers',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'nodes_id',
                'nodes',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

    }

    public function down()
    {
        $this->table('fields')
            ->dropForeignKey(
                'apps_id'
            )
            ->dropForeignKey(
                'fieldTypes_id'
            );

        $this->table('nodes')
            ->dropForeignKey(
                'apps_id'
            );

        $this->table('orders')
            ->dropForeignKey(
                'customers_id'
            )
            ->dropForeignKey(
                'nodes_id'
            );

        $this->dropTable('apps');
        $this->dropTable('categories');
       /* $this->dropTable('categories_relations');*/
        $this->dropTable('customers');
        $this->dropTable('fields');
        $this->dropTable('fieldtypes');
        $this->dropTable('nodes');
        $this->dropTable('orders');
    }
}
