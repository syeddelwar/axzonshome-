@include('header')

<section>
    <div class="container-fluid inner-banner banner-live-in-care">
        <div class="container">
            <div class="row ">


                {{-- {{ dd(Auth::user()) }} --}}
                <div class="col-md-4 login-form">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example1" name="email" class="form-control"
                                placeholder="Email address" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" name="password" class="form-control"
                                placeholder="Password" />

                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                        checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>


                    </form>
                </div>

            </div>
        </div>
    </div>
</section>




@include('footer')
