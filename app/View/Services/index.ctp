<?php
/**
 * Created by PhpStorm.
 * User: melheffe
 * Date: 10/24/13
 * Time: 1:02 PM
 */
?>

<div id="service-header">
    <div class="service-logo">
        <?php echo $this->Html->image('logo.png')?>
    </div>
    <div id="service-button-container">
        <div class="service-top-button">
            About Us
        </div>
        <div class="service-top-button">
            Services
        </div>
        <div class="service-top-button">
            Gallery
        </div>
        <div class="service-top-button">
            Location
        </div>
    </div>
</div>
<div id="service-item-container">
    <div id="service-item-container-top">
        <div class="service-item-top centered-background item-1">
            <div class="service-item-top service-item-description">
                <div class="description-format">
                    Nails
                </div>
                <a href="#myModal1" data-toggle="modal" class="modal-link">
                <div class="description-button">
                    Service Button
                </div>
                </a>
            </div>
        </div>
        <div class="service-item-top centered-background item-2">
            <div class="service-item-top service-item-description">
                <div class="description-format">
                    Makeup
                </div>
                <a href="#myModal2" data-toggle="modal" class="modal-link">
                <div class="description-button">
                    Service Button
                </div>
                </a>
            </div>
        </div>
        <div class="service-item-top centered-background item-3">
            <div class="service-item-top service-item-description">
                <div class="description-format">
                    Waxing
                </div>
                <a href="#myModal3" data-toggle="modal" class="modal-link">
                <div class="description-button">
                    Service Button
                </div>
                </a>
            </div>
        </div>
    </div>
    <div id="service-item-container-bottom">
        <div class="service-item-bottom centered-background item-4">
            <div class="service-item-bottom service-item-description">
                <div class="description-format">
                    Color
                </div>
                <a href="#myModal4" data-toggle="modal" class="modal-link">
                <div class="description-button">
                    Service Button
                </div>
                </a>
            </div>
        </div>
        <div class="service-item-bottom centered-background item-5">
            <div class="service-item-bottom service-item-description">
                <div class="description-format">
                    Extensions
                </div>
                <a href="#myModal5" data-toggle="modal" class="modal-link">
                	<div class="description-button">
                    	Service Button
                	</div>
                </a>
            </div>
        </div>
    </div>
</div>
<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
 
<!-- Modals -->
<div id="myModal1" class="modal hide fade full-screen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-info"> 
  		<div class="modal-info-title"> 
  		<h1> Demo Demo </h1>
  		</div>
  		<div class="modal-info-content"> 
  		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctu. </br>
		</div>	
	</div>
  <div class="modal-image centered-background item-1"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
</div>

<div id="myModal2" class="modal hide fade full-screen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-info"> 
  		<div class="modal-info-title"> 
  		<h1> Demo Demo </h1>
  		</div>
  		<div class="modal-info-content"> 
  		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctu. </br>
		</div>	
	</div>
  <div class="modal-image centered-background item-2"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
</div>

<div id="myModal3" class="modal hide fade full-screen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-info"> 
  		<div class="modal-info-title"> 
  		<h1> Demo Demo </h1>
  		</div>
  		<div class="modal-info-content"> 
  		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctu. </br>
		</div>	
	</div>
  <div class="modal-image centered-background item-3"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
</div>

<div id="myModal4" class="modal hide fade full-screen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-info"> 
  		<div class="modal-info-title"> 
  		<h1> Demo Demo </h1>
  		</div>
  		<div class="modal-info-content"> 
  		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctu. </br>
		</div>	
	</div>
  <div class="modal-image centered-background item-4"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
</div>

<div id="myModal5" class="modal hide fade full-screen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-info"> 
  		<div class="modal-info-title"> 
  		<h1> Demo Demo </h1>
  		</div>
  		<div class="modal-info-content"> 
  		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctu. </br>
		</div>	
	</div>
  <div class="modal-image centered-background item-5"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
</div>