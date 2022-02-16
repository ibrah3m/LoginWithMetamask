
<div class="row justify-content-center">
    <div class="col-md-9 col-lg-12 col-xl-10">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row d-xl-flex justify-content-xl-start align-items-xl-center">
                    <div class="col-lg-6 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-login-image"
                            style="background: url({{ asset('ibrah3m/loginwithmetamsk/svg/metamask-fox.svg') }}) center / auto no-repeat;height: 500px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Welcome Back!</h4>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user"
                                onClick="metamasklogin()" style="background: rgb(246,133,27);">MetaMask</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">