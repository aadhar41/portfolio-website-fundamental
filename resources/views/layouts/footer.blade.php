<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna eget dolor semper posuere.</p>
            </div>
            <div class="col-md-4">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Contact Us</h4>
                <address>
                    <p>123 Main Street</p>
                    <p>City, Country</p>
                    <p>Email: <a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a></p>
                </address>
            </div>
            <div class="col-md-12 text-center">
                <p>&copy; <?= date("Y"); ?> {{ env('APP_NAME') }}. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>