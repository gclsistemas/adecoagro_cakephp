<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        AdecoAgro
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('/fontawesome/css/all.min.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'display'], ['class' => 'navbar-brand']) ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="<?= __('Toggle navigation') ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <?= $this->Html->link(__('Proveedores'), ['controller' => 'Proveedores', 'action' => 'index'], ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Compras'), ['controller' => 'Compras', 'action' => 'index'], ['class' => 'nav-link']) ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Content -->
<main class="py-4">
    <div class="container-fluid">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>
<div class="container-fluid">
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-right">Copyright &copy; GCL</p>
            </div>
        </div>
    </footer>
</div>
<?= $this->Html->script('jquery.3.3.1.js') ?>
<?= $this->Html->script('bootstrap.js') ?>
<?= $this->fetch('script') ?>
</body>
</html>
