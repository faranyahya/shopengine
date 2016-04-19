<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-adjust"></i> <span>Shop Engine</span></a>
        </div>
        <div class="clearfix"></div>
        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home</a></li>

                    <li><a><i class="fa fa-newspaper-o"></i>Apps<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">New App</a>
                            </li>
                            <li><a href="#">All Apps</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i>Pages<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">New Page</a>
                            </li>
                            <li><a href="#">All Pages</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-ticket"></i>Categories<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">New Category</a>
                            </li>
                            <li><a href="#">All Categories</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-ticket"></i>Nodes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><?= $this->Html->Link(__('Add New'), ['controller' => 'Nodes', 'action' => 'add', '#' => 'node']) ?></li>
                            <li><?= $this->Html->Link(__('All Nodes'), ['controller' => 'Nodes', 'action' => 'add', '#' => 'nodes']) ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Extras</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Online Store</a></li>
                    <li><a href="#settings"><i class="fa fa-windows"></i> Settings</a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->


        <!--<div class="sidebar-footer hidden-small">
            <div class="profile">
                <div class="profile_pic">
                    <?/*= $this->Html->image('/images/img.jpg', ['alt' => 'Profile Image', 'class' => "img-circle profile_img"]); */?>
                </div>
                <div class="profile_info">
                    <span>Howdy,</span>
                    <h2><?/*= $currentUserName */?></h2>
                </div>
            </div>
        </div>-->

    </div>
</div>


<!--
<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu" style="display: none">
        <li><a href="form.html">General Form</a>
        </li>
        <li><a href="form_advanced.html">Advanced Components</a>
        </li>
        <li><a href="form_validation.html">Form Validation</a>
        </li>
        <li><a href="form_wizards.html">Form Wizard</a>
        </li>
        <li><a href="form_upload.html">Form Upload</a>
        </li>
        <li><a href="form_buttons.html">Form Buttons</a>
        </li>
    </ul>
</li>-->