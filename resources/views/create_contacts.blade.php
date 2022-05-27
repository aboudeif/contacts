@extends('layouts.app')
@section('content')
<div class="container">
    <form action="" method="GET">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="addressHelp" placeholder="address">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="phone">
        </div>
        <button type="submit" name="submit" class="btn btn-primary mb-3">Create contact</button>
    </form>
</div>
@endsection