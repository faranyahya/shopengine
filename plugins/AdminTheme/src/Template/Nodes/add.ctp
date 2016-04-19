<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Nodes</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?= $this->Form->create($node, ['class' => 'form-horizontal form-label-left', 'novalidate']) ?>
                <span class="section">Add New</span>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apps">Apps</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?= $this->Form->input('apps_id', [
                            'options' => $apps,
                            'label' => false,
                            'class' => "form-control col-md-7 col-xs-12"
                        ]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categories">Categories</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?= $this->Form->input('categories_id', [
                            'options' => $categories,
                            'empty' => 'Select Category',
                            'label' => false,
                            'class' => 'form-control col-md-7 col-xs-12'
                        ]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?= $this->Form->input('title', [
                            'label' => false,
                            'class' => 'form-control col-md-7 col-xs-12'
                        ]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity">Quantity</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?= $this->Form->input('quantity', [
                            'label' => false,
                            'class' => 'form-control col-md-7 col-xs-12'
                        ]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity">Status <span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?= $this->Form->input('status', [
                            'options' => ['1' => 'Published', '2' => 'UnPublished', '3' => 'Trash'],
                            'label' => false,
                            'class' => 'form-control col-md-7 col-xs-12'
                        ]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?= $this->Form->input('price', [
                            'label' => false,
                            'class' => 'form-control col-md-7 col-xs-12'
                        ]); ?>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?= $this->Form->input('image', [
                            'label' => false,
                            'class' => 'form-control col-md-7 col-xs-12'
                        ]); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success pull-right']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
