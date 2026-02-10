<section>

    <header class="mb-4">
        <h2 class="h5 fw-semibold"> Delete Account </h2>
        <p class="text-muted small">
            Once your account is deleted, all of its resources and data will be permanently deleted.
            Before deleting your account, please download any data or information that you wish to retain.
        </p>
    </header>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletion">
        Delete Account
    </button>

    <div class="modal fade {{ $errors->userDeletion->isNotEmpty() ? 'show' : '' }}"
        id="confirmUserDeletion"
        tabindex="-1"
        aria-hidden="true"
        @if($errors->userDeletion->isNotEmpty())
            style="display: block;"
        @endif
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <form method="POST" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('DELETE')

                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure you want to delete your account?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <p class="text-muted small">
                            Once your account is deleted, all of its resources and data will be permanently deleted.
                            Please enter your password to confirm you would like to permanently delete your account.
                        </p>

                        <div class="mt-3">
                            <label for="delete_password" class="form-label visually-hidden"> Password </label>

                            <input
                                type="password"
                                id="delete_password"
                                name="password"
                                class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                                placeholder="Password"
                            >
                            @error('password', 'userDeletion')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete Account</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</section>
