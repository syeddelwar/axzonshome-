@section('title','CDPAP')
@include('header') 	

<section class="cdpap-herosection">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 p-0 herosection-left-img">
            <img src="./assets/img/servp-bg-5.jpg" class="img-fluid" alt="img">
            <div class="cdpap_bg_img homepad2 has_text_color" style="border-radius:5px;">
              <div class="wpb_wrapper" >
                <h2 style="color:#fff; font-weight: normal;">
                  <span style="color: #ff4338"
                    ><strong>Funded by Medicaid</strong></span
                  >
                  <p  style="line-height: 1.3; margin-top: ;">

                    Axzons allows New Yorkers to choose who provides their care –
                    the caregiver gets paid instantly after their shift.
                  </p>
                </h2>
              </div>
            </div>
          </div>
          <div class="col-md-5 herosection-form">
            <h1 class="text-center "><strong>You may be eligible!</strong></h1>

            <p style="text-align: center; font-size: 17px; color: #00375d">
              <strong>You are likely eligible if you have Medicaid.</strong>
              <br />
              Fill out the form below to see how fast you can get started with
              pay &amp; benefits.
            </p>

            <div class="hero-form px-5 mt-0">


            @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif
              <p>Contact Information:</p>
       <form class="row g-2"  method="POST" action="{{ route('cdpap-form.store') }}">
              {{ csrf_field() }}
                <div class="col-md-8 my-2">
                  <input
                    type="text"
                    placeholder="First Name*"
                    class="form-control"
                    id="inputEmail4"
                    name="first_name"
                  />
                </div>
                <div class="col-md-8 my-2">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="last Name"
                    id="inputPassword4"
                    name="last_name"
                  />
                </div>
                <div class="col-md-8 my-2">
                  <input
                    type="number"
                    class="form-control"
                    id="inputAddress"
                    placeholder="Phone Number"
                    name="phone"
                  />
                </div>
                <div class="col-md-8 my-2">
                  <input
                    type="email"
                    class="form-control"
                    id="inputAddress2"
                    placeholder="Email"
                    name="email"
                  />
                </div>
                <div class="py-0 border-bottom w-75">
                  <label class="optionchoose">Are you the patient?*</label>
                  <div class="d-flex">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inlineCheckbox1"
                        value="YES"
                        name="patient"
                      />
                      <label class="form-check-label" for="inlineCheckbox2"
                        >Yes</label
                      >
                    </div>

                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inlineCheckbox2"
                        value="NO"
                        name="patient"
                      />
                      <label class="form-check-label" for="inlineCheckbox2"
                        >No</label
                      >
                    </div>
                  </div>
                </div>

                <label class="optionchoose">
                  Does the patient have Medicaid?* (Medicare is NOT
                  enough)</label
                >

                <div class="d-flex gap-2">
                                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox1" name="medicaid">
                    <label class="form-check-label" for="checkbox1">
                      Yes
                    </label>
                  </div>
          
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="checkbox2" >
  <label class="form-check-label" for="checkbox2" >
    No
  </label>
</div>


<div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="I dont know" name="medicaid"/>
                    <label class="form-check-label" for="inlineCheckbox2"
                      >I don't know</label
                    >
     </div>
                          </div>

                          
<div class="" id="additionalCheckbox" style="display:none;">
    <label class="optionchoose">
        The patient needs Medicaid to join. (Medicare is NOT enough).
        Would you like help applying or determining eligibility?*
                          
                          </label
                                >
        <div class="d-flex gap-2 ">  
          <input class="form-check-input"  value="Yes" type="checkbox" id="checkbox3"  name="joinmedicate">
                      <label class="form-check-label" for="checkbox3" >
                      Yes
                      </label>

                      <br/>

                  <input class="form-check-input" value="No" type="checkbox" id="checkbox3"  name="joinmedicate">
                  <label class="form-check-label" for="checkbox3">
                  No
                  </label>
        </div>

</div>

            <div id="data" class="data-to-hide" style="display:none;">
            <!-- Data to hide -->
            </div>

        <div class="d-grid col-6 mt-2 mx-auto">
                  <button class="btn btn-color" type="submit"   >
                    Check My Eligibility
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cf-6">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 cl-6">
            <h3>Discover Homecare at <span>Axzons</span></h3>
            <p>
              Axzons Homecare is evidenced based home health care agency valley
              stream that has enabled the delivery of comfortable home care
              services at patients’ homes. One on one, highly personalized,Under
              supervision of physician and nurses, our home care services place
              the patient and their families first, while improving treatment
              outcomes, reducing costs and reducing hospital visits. We are
              committed to providing expert home care to patients so that they
              can recover fast in the security and comfort of their homes rather
              than in a hospital or clinical environment. Axzons also provides
              CDPAP in 47 counties in New York. Where your family can provide
              care for you and get paid by Axzons at the best and rates an
              dbenefits. For CDPAP the patient must have Medicaid. We also
              provide supplemental staffing services to healthcare organizations
              such as hospitals, nursing homes and assisted living facilities.
            </p>
          </div>
          <div class="col-md-6 cl-5">
            <img
              class="cf-6-img"
              src="assets/img/home-page/Discover-Homecare-at-Axzonsaxh-helping-3k-x-2k-scaled.jpg"
              alt="Image"
            />
          </div>
        </div>
      </div>
    </section>

    <section class="getting-cere" style="padding: 5rem 0">
      <div class="container">
        <h3 class="getting-cere__heading text-center text-md">
          Getting cere you trust is simple as 1-2-3.
        </h3>

        <div class="getting-cere__content row" style="margin-top: 3rem">
          <div class="getting-cere__img col-sm-12 col-md-6">
            <img
              src="./assets/img/servp-bg-5.jpg"
              class="img-fluid"
              alt="img"
            />
          </div>

          <div class="getting-cere__text-content col-sm-12 col-md-6">
            <div style="margin: 1rem 0">
              <h6
                class="getting-cere__text-heading"
                style="color: #000; font-weight: bold"
              >
                1. Get Assessed
              </h6>
              <p class="getting-cere__text-des text-sm">
                Lorem ipsum
                <span style="color: #ff4338">dolor sit amet</span> consectetur
                adipisicing elit. Eligendi ducimus porro soluta quibusdam quis
                rem, numquam
              </p>
            </div>
            <div style="margin: 1rem 0">
              <h6
                class="getting-cere__text-heading"
                style="color: #000; font-weight: bold"
              >
                2. Get Assessed
              </h6>
              <p class="getting-cere__text-des text-sm">
                Lorem ipsum
                <span style="color: #ff4338">dolor sit amet</span> consectetur
                adipisicing elit. Eligendi ducimus porro soluta quibusdam quis
                rem, numquam
              </p>
            </div>
            <div style="margin: 1rem 0; margin-bottom: 1rem">
              <h6
                class="getting-cere__text-heading"
                style="color: #000; font-weight: bold"
              >
                3. Get Assessed
              </h6>
              <p class="getting-cere__text-des text-sm">
                Lorem ipsum
                <span style="color: #ff4338">dolor sit amet</span> consectetur
                adipisicing elit. Eligendi ducimus porro soluta quibusdam quis
                rem, numquam
              </p>
            </div>
            <a href="#"
              style="
                background-color: #ff4338;
                padding: 15px 30px;
                font-weight: bold;
                color: #fff;
                border: none;
                cursor: pointer;
                border-radius: 5rem;
              "
              >Am i Fligible</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="us_custom_edddf27a">
      <div class="container">
        <div class="row">
          <h2 class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque !
          </h2>
          <div class="col-md-6 mb-4 md-mb-0">
            <div class="card">
              <div class="ratio ratio-16x9">
                <iframe
                  src="https://www.youtube.com/embed/4aAn51H0dh4"
                  title="YouTube video"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  .
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="ratio ratio-16x9">
                <iframe
                  src="https://www.youtube.com/embed/5j9dCW5ciag"
                  title="YouTube video"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  .
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-tb-60 info-bg">
      <div class="container">
        <div class="row">
          <div class="col-12 text-white text-center">
            <p class="bold" style="color: #fff !important; font-size: 18px">
              To learn more about our companion care services, give Axzons
              Homecare a call today at 1-866-429-9667 or fill out an appointment
              form at our website.
            </p>
          </div>
        </div>
      </div>
    </section>



	

    @include('footer') 	


