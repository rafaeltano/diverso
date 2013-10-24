<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Diverso Nail Bar
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('custom');
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap-responsive');
    echo $this->Html->script('bootstrap.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');


    ?>
</head>
<body>
<?php echo $this->Session->flash(); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div id="content">
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
