
@section('title','contact US')
@include('header')

<section>
    <div class="container-fluid inner-banner banner-contact">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <h1 class="bold">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cf-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 " id="main-form">
                
                <h2>Contact Us</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                <form class="bg-light p-4" method="POST" action="{{ route('contact-form.store') }}" class="form">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                    value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control" placeholder="Email"
                                    value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Subject:</strong>
                            <input type="text" name="subject" class="form-control" placeholder="Subject"
                                value="{{ old('subject') }}">
                            @if ($errors->has('subject'))
                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Message:</strong>
                            <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="clearfix">
				   <div>
					  <div class="sp-top20" style="margin:20px 0 0 0; text-align:right">
						<button type="submit" id="submit_btn" onclick="return validation()" class="btn btn-invert">Submit</button>
					  </div>
				   </div>
				</div>
                </form>
            </div>

            <div class="col-md-6">
                <h2>Locations We Service</h2>

                <iframe scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?q=Axzons%20home%20healthcare&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                    title="Axzons home healthcare" aria-label="Axzons home healthcare" frameborder="0"
                    class="map-frame"></iframe>

                <h2>Corporate Headquarters</h2>
                <div class="place-name">
                    <strong>Axzons Home Health Care</strong>
                    <p>70 East Sunrise Hwy #500, Valley Stream, NY 11581, United States</p>
                </div>

            </div>
        </div>

        <br><br><br>

    </div>
</section>



@include('footer')
