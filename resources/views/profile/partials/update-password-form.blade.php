<section>

    <header class="mb-4">
        <h2 class="h5 fw-semibold">Update Password</h2>
        <p class="text-muted small mb-0">Ensure your account is using a long, random password to stay secure.</p>
    </header>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="current_password" class="form-label">Current Password</label>

            <input
                type="password"
                id="current_password"
                name="current_password"
                class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                autocomplete="current-password"
            >
            @error('current_password', 'updatePassword')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>

            <input
                type="password"
                id="password"
                name="password"
                class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                autocomplete="new-password"
            >
            @error('password', 'updatePassword')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirm Password</label>

            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                autocomplete="new-password"
            >
            @error('password_confirmation', 'updatePassword')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">Save</button>

            @if (session('status') === 'password-updated')
                <span
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-success"
                >
                    Saved.
                </span>
            @endif
        </div>

    </form>
</section>
