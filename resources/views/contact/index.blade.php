
@extends('layouts.master')

@section('content')
<!-- Contact Section -->
<section id="contact" class="container contact-content text-center">
    <h2>Contact Me</h2>
    <p>Feel free to get in touch with me. You can use the form below or send me an email at example@email.com.</p>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</section>
@endsection
