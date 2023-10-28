<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>{{__("frontend.About Us")}}</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna eget dolor semper posuere.</p>
            </div>
            <div class="col-md-4">
                <h4>{{__("frontend.Quick Links")}}</h4>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}">{{__("frontend.Home")}}</a></li>
                    <li><a href="{{ route('about') }}">{{__("frontend.About")}}</a></li>
                    <li><a href="#">{{__("frontend.Portfolio")}}</a></li>
                    <li><a href="{{ route('contact') }}">{{__("frontend.Contact")}}</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>{{__("frontend.Contact Us")}}</h4>
                <address>
                    <p>123 Main Street</p>
                    <p>City, Country</p>
                    <p>{{__("frontend.Email")}}: <a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a></p>
                </address>
            </div>
            <div class="col-md-12 text-center">
                <p>&copy; <?= date("Y"); ?> {{ env('APP_NAME') }}. {{__("frontend.All Rights Reserved.")}}</p>
            </div>
        </div>
    </div>
</footer>