<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign in to Listings</h5>
            </div>
            <div class="form-content">
                <form class="form form-validate" action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="hidden" name="url_current" value="{{ request()->url() }}">
                    <div class="form-list">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-list">
                        <input type="password" name="password" required placeholder="Password">
                    </div>
                    <div class="tip"><a class="tip-right" href="{{ route('page.forgot') }}">Forgot password?</a></div>
                    <div class="group-btn">
                        <button class="btn-custom" type="submit">Sign in</button>
                    </div>
                    <p class="tip signup-tip">
                        <span>Don't have an account? &nbsp;</span>
                        <a href="{{ route('page.signup') }}">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
