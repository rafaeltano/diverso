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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <div class="container-fluid">
            <?php echo $this->Session->flash(); ?>
            <div class="row-fluid">
                <div class="span12">
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>
</body>
</html>
