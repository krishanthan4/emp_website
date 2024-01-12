
<?php require_once "views/partials/header.php";?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Contact Us</h2>
            <form action="#" method="post" role="form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Our Office</h2>
            <address>
                <strong>[Company Name]</strong><br>
                123 Main Street, City<br>
                Country, Zip Code<br>
                <abbr title="Phone">P:</abbr> +1 (555) 123-4567<br>
                <abbr title="Email">E:</abbr> info@example.com
            </address>
            <h2>Connect With Us</h2>
            <ul class="list-inline">
                <li><a href="#" target="_blank">Facebook</a></li>
                <li><a href="#" target="_blank">Twitter</a></li>
                <li><a href="#" target="_blank">Instagram</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>Visit Us</h2>
            <div id="map" class="map"></div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Google Maps API (Replace YOUR_API_KEY with your actual API key) -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

<script>
    function initMap() {
        var mapOptions = {
            center: {lat: 37.7749, lng: -122.4194}, // San Francisco coordinates (replace with your location)
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            title: 'Our Location'
        });
    }
</script>
		<?php require_once "views/partials/footer.php";?>