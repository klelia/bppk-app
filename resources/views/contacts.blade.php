@extends('layouts.app')
@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Get in touch</h1>
        <p class="fs-4">Questions? Get in touch we will get back in a jiffy</p>
    </div>
</div>

<div class="container my-5">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper" placeholder="Baby Yoda">
        <small id="nameHelper" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com">
        <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

@endsection
