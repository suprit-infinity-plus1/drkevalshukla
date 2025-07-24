@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')

    @if (auth()->check())
        <div class="bg-white rounded-3 shadow p-4 mb-5">
            <h4>
                Profile Information
            </h4>
            <p class="mb-0">
                Update your account's profile information and email address.
            </p>
            <form action="" class="col-md-6 p-0">
                @csrf
                <div class="mt-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}">
                </div>
                <div class="mt-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" value="{{ auth()->user()->email }}">
                </div>
            </form>
        </div>
    @endif

    <div class="bg-white rounded-3 shadow p-4 mb-5">
        <h4>
            Update Password
        </h4>
        <p class="mb-0">
            Ensure your account is using a long, random password to stay secure.
        </p>
        <form action="" class="col-md-6 p-0">
            @csrf
            <div class="mt-4">
                <label for="current-password" class="form-label">Current Password</label>
                <input type="password" class="form-control" id="current-password">
            </div>
            <div class="mt-4">
                <label for="new-password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="new-password">
            </div>
            <div class="mt-4">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password">
            </div>
        </form>
    </div>

    <div class="bg-white rounded-3 shadow p-4">
        <h4>
            Delete Account
        </h4>
        <p class="mb-0 col-md-6 p-0">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting
            your
            account, please download any data or information that you wish to retain.
        </p>
        <form action="" class="col-md-6 p-0">
            @csrf
            <button class="btn btn-danger mt-4 text-uppercase" type="submit">
                Delete Account
            </button>
        </form>
    </div>
@endsection
