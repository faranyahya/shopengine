<?php $this->Html->docType(); ?>
<html lang="en">
<head>
    <?= $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?= $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->css([
        'bootstrap.min.css',
        '/fonts/css/font-awesome.min.css',
        'animate.min.css',
        'custom',
        'icheck/flat/green.css',
        'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/css/dataTables.bootstrap.min.css'
    ]);
    echo $this->Html->script(['jquery.min.js']);
    echo $this->fetch('meta');
    echo $this->fetch('css');
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php
        $currentUserName = "Subhan Ahmed";
        echo $this->element('sidebar', [
            'currentUserName' => $currentUserName
        ]);
        echo $this->element('topbar', [
            'currentUserName' => $currentUserName
        ]);
        ?>
        <div class="right_col" role="main">
            <?= $this->fetch('content'); ?>
        </div>

    </div>
</div>
<?php
echo $this->Html->script([
    'bootstrap.min.js',
    'progressbar/bootstrap-progressbar.min.js',
    'nicescroll/jquery.nicescroll.min.js',
    'icheck/icheck.min.js',
    'custom'
]);
echo $this->Html->script([
    '//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/js/dataTables.bootstrap.min.js',
    'DataTables.cakephp.dataTables.js',
], ['block' => true]);
echo $this->fetch('script');
?>
</body>

</html>