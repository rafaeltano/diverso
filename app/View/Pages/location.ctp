<style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px;
        background-color: #f79c89;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
  var mapOptions = {
    zoom: 4,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
<div id="location-container">
	<div id="location-header">
    <div class="service-logo">
        <?php echo $this->Html->image('logo.png')?>
    </div>
    <div id="location-button-container">
        <div class="location-top-button">
            About Us
        </div>
        <div class="location-top-button">
            Services
        </div>
        <div class="location-top-button">
            Gallery
        </div>
        <div class="location-top-button">
            Location
        </div>
    </div>
</div>	
		<div class="location-container-image centered-background item-location">
	
		</div>
		<div class="location-container-details">
			<div id="location-container-details-text">
			 <h2>Lorem ipsum dolor sit amet</h2> 
			 Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis.
			</div>
			<div id="map">
				<div style="width:250px;height:250px"><iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=4013%2BSW%2B152%2BAVE.%2BMIAMI%2C%2BFL%2B33185&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe><br><table width="250" cellpadding="0" cellspacing="0" border="0"><tr><td align="left"><small><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=4013%2BSW%2B152%2BAVE.%2BMIAMI%2C%2BFL%2B33185&ie=UTF8&z=12&t=m&iwloc=near">View Larger Map</a></small></td></tr></table></div>
			</div>
			
			<div id="contact-form">
			</br>
			<address>
			  <strong>Diverso, LLC.</strong><br>
			  795 Folsom Ave, Suite 600<br>
			  San Francisco, CA 94107<br>
			  <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>

				<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Name :</label>
					<div class="controls">
					  <input type="text" placeholder="Name">
					</div>
				  </div>	
				  <div class="control-group">
					<label class="control-label">Email :</label>
					<div class="controls">
					  <input type="text" id="inputEmail" placeholder="Email">
					</div>
				  </div>
				  
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">Send</button>
					</div>
				  </div>
				</form>
			</div>
		</div>
</div>
