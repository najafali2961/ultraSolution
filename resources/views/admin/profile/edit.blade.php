@extends('admin.layouts.app')

@section('content')
    <div class="p-0 container-fluid">
        <h1 class="mb-3 h3">Settings</h1>
        <div class="row">
            <div class="col-md-3 col-xl-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 card-title">Profile Settings</h5>
                    </div>
                    <div class="list-group list-group-flush" role="tablist">
                        <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account"
                            role="tab" aria-selected="true">
                            Account
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password"
                            role="tab" aria-selected="false" tabindex="-1">
                            Password
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#delete_account"
                            role="tab" aria-selected="false" tabindex="-1">
                            Delete Account
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-xl-10">
                <div class="tab-content">
                    <!-- Account Tab -->
                    <div class="tab-pane fade show active" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 card-title">Profile Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label class="form-label" for="name">{{ __('Name') }}</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ old('name', $user->name) }}" required autofocus
                                                    autocomplete="name">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="email">{{ __('Email') }}</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ old('email', $user->email) }}" required
                                                    autocomplete="username">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <img id="profile_picture_preview"
                                                    src="{{ auth()->user()->profile_picture
                                                        ? asset('storage/profile_pictures/' . auth()->user()->profile_picture)
                                                        : '/frontend/assets/src/img/team/image-2.jpg' }}"
                                                    alt="Profile Picture" class="mt-2 rounded-circle img-responsive"
                                                    width="128" height="128">

                                                <div class="mt-2">
                                                    <span class="btn btn-primary"
                                                        onclick="document.getElementById('profile_picture').click();">
                                                        <i class="fas fa-upload"></i> Upload
                                                    </span>
                                                    <input type="file" class="d-none" id="profile_picture"
                                                        name="profile_picture" accept="image/*"
                                                        onchange="previewImage(event)">
                                                </div>
                                            </div>
                                            @error('profile_picture')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <script>
                                            function previewImage(event) {
                                                const file = event.target.files[0];
                                                const reader = new FileReader();
                                                reader.onload = function(e) {
                                                    document.getElementById('profile_picture_preview').src = e.target.result;
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        </script>

                                    </div>





                                    <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- Password Tab -->
                    <div class="tab-pane fade" id="password" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 card-title">{{ __('Update Password') }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('password.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label class="form-label"
                                            for="update_password_current_password">{{ __('Current Password') }}</label>
                                        <input type="password" class="form-control" id="update_password_current_password"
                                            name="current_password" autocomplete="current-password">
                                        @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"
                                            for="update_password_password">{{ __('New Password') }}</label>
                                        <input type="password" class="form-control" id="update_password_password"
                                            name="password" autocomplete="new-password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"
                                            for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
                                        <input type="password" class="form-control"
                                            id="update_password_password_confirmation" name="password_confirmation"
                                            autocomplete="new-password">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Account Tab -->
                    <div class="tab-pane fade" id="delete_account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 card-title">{{ __('Delete Account') }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please download any data you wish to keep before proceeding.') }}
                                </p>

                                <form action="{{ route('profile.destroy') }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <div class="mb-3">
                                        <label class="form-label" for="password">{{ __('Password') }}</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="{{ __('Password') }}">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
