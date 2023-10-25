
@extends('layouts.master')

@section('content')
<!-- Contact Section -->
<section id="contact" class="container contact-content">
    <h2>Contact Me</h2>
    <p>Feel free to get in touch with me. You can use the form below or send me an email at example@email.com.</p>
    <form action="" method="post">
        <x-forms.input-field :smallClass="'form-text text-muted'" :smallId="'helpId'" :placeholder="'name'" :class="'form-control'" :name="'name'" :id="'name'" />
        <x-forms.input-field :smallClass="'form-text text-muted'" :smallId="'emailHelpId'" :placeholder="'Enter EMail'" :class="'form-control'" :name="'email'" :id="'email'" />
        <x-forms.input-textarea :placeholder="'name'" :class="'form-control'" :name="'name'" :id="'name'" :rows="'3'" />
        <x-forms.submit-button> <i class="fa fa-paper-plane mr-2" aria-hidden="true"></i> Submit </x-forms.submit-button>
    </form>
</section>
@endsection
