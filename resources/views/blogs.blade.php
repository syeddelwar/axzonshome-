@include('header')
@section('title'){{'Blogs'}} @endsection
<section>
    <div class="container-fluid inner-banner banner-services">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <p class="text-center text-white">Welcome to Axzons Homecare</p>
                    <h1 class="bold"> HEALTH INFORMATION BLOGS</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="cf-8-blogs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="img">
                        <img src="assets/img/home-page/Looking-for-a-Career-img.png" alt="Image">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text">
                        <h3>Health and wellness </h3>
                        <p>In our healthcare world today, it’s all too common for clinicians to feel disconnected from the patients they serve. Our team of caring nurses and therapists are allowed to take the time and effort necessary to develop a heartfelt connection to our patients. As a team, we provide personalized support for each patient and use modern advances combined with the latest techniques and procedures. But it’s our caring heart that compels our team members to understand the individual needs of each patient and drives us to provide unmatched care.</p>
                        <div class="col-md-9">
                        
                        <a href="#" class="home-serv-btn">Read More</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section> -->


<section class="cf-4">
    <div class="container">
        <div class="row">
            
        </div>

        <div class="row rh-2">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-12">
                    
                

                    <div class="card blog-card">
                          <!-- <img src="{{asset('assets/storage/app/public/'.$blog->img)}}" alt="" srcset=""> -->

                        <!-- <img src="{{ '/storage/' . $blog->img }}" alt="Image"> -->

                        <img src="{{ asset('storage/'  . $blog->img) }}" alt="My Image">

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ Str::substr($blog->short_description, 0, 30) }}.....</p>

                            <a href="{{ route('single_blog', $blog->id) }}" class="home-serv-btn">Read More</a>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center my-5">{{ $blogs->links() }}</div>
    </div>

    </div>
</section>





<section class="cf-6 blogs-6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 cl-6">
                <h3>Healthcare commentary </h3>
                <p>Axzons Homecare is evidenced based home health care agency valley stream that has enabled the
                    delivery of comfortable home care services at patients’ homes. One on one, highly personalized,Under
                    supervision of physician and nurses, our home care services place the patient and their families
                    first, while improving treatment outcomes, reducing costs and reducing hospital visits. We are
                    committed to providing expert home care to patients so that they can recover fast in the security
                    and comfort of their homes rather than in a hospital or clinical environment. Axzons also provides
                    CDPAP in 47 counties in New York. Where your family can provide care for you and get paid by Axzons
                    at the best and rates an dbenefits. For CDPAP the patient must have Medicaid. We also provide
                    supplemental staffing services to healthcare organizations such as hospitals, nursing homes and
                    assisted living facilities.</p>

                <div class="col-md-9">

                    <a href="#" class="home-serv-btn">Read More</a>
                </div>
            </div>
            <div class="col-md-6 cl-5">
                <img src="assets/img/home-page/Discover-Homecare-at-Axzonsaxh-helping-3k-x-2k-scaled.jpg"
                    alt="Image">
            </div>
        </div>
    </div>
</section>
<!-- <section class="cf-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 cl-3">
                    <img class="img" src="assets/img/home-page/Expert-Care-of-the-Elderly-21-768x768.png" alt="Image">
                </div>
                <div class="col-md-6 cl-4">
                    <p class="heading">Value for Life</p>
                    <h3>Expert Care <span>of the Elderly</span></h3>
                    <p class="p-1">Axzons home health care is managed by physicians and nurses</p>
                    <ul>
                        <li><i class="fa-solid fa-heart"></i>Medication reminders</li>
                        <li><i class="fa-solid fa-heart"></i>Quality Medical Home Care</li>
                        <li><i class="fa-solid fa-heart"></i>Appointment assistance</li>
                        <li><i class="fa-solid fa-heart"></i>Safety supervision</li>
                        <li><i class="fa-solid fa-heart"></i>Companionship</li>
                    </ul>
                   <a href="#" class="exp-care-btn">Read more</a>
                </div>
            </div>
        </div>
    </section> -->



@include('footer')
