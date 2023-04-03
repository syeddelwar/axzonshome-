@section('title','CDPAP')
@include('header') 	
    <section>
        <div class="container-fluid inner-banner banner-abt">
		  <div class="container">
		    <div class="row ">
                <div class="col-md-12">
                  <h1><span>Axzons is a contracted provider of CDPAP NY</span></h1>

                </div>
            </div>
		  </div>
        </div>
    </section>
    <section class="p-tb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-2">                    
                 
                    <p>
                    Axzons is a contracted provider of CDPAP NY, a Consumer-Directed Personal Assistance Program (CDPAP) that allows people to hire and manage their own caregivers. </p>                  
                  <p>CDPAP is a great program that allows home-care consumers to hire the caregiver of their choice, including most family members and friends. If you’re looking into the CDPAP program for the first time, you have may a lot of questions. We at Axzons have developed this guide to help you understand how the program works, answer your questions, and give you the tools you’ll need to enroll. </p>
                </div>				
            </div>
        </div>
    </section>
    
    
    
    
    <section class="cf-9-cdp">
       <div class="container">
          <div class="row">
              <div class="col-md-6 ">
                <div class="img">
                    <img src="assets/img/eligibility-img.jpg"  width="600" alt="Image">
                </div>
               </div>
            
            <div class="col-md-6 cf-9-eligible">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif
                
                <p class="heading-eligible">You may be eligible!</p>
                <h3><span>Fill out this form to find out.</span></h3>

               
 
                <p>We’ll check to see if you’re eligible to apply — then Medicaid and your health plan will determine your final eligibility..</p>
                
                <h5>Contact Information:</h5>
                <form method="POST" action="{{ route('cdpap-form.store') }}">
                  {{ csrf_field() }}
                  
                <div class="row">
                       <div class="col-md-6 mb-4">
                         <input type="text" placeholder="First Name" class="form-control border-bottom" id="exampleInputEmail1" name="first_name" aria-describedby="emailHelp">
                       </div>
                       
                    <div class="col-md-6 mb-4">
                        <input type="text"  placeholder="Last Name" class="form-control border-bottom" id="exampleInputPassword1" name="last_name">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <input type="number"  placeholder="Phone Number" class="form-control border-bottom" id="exampleInputEmail1" name="phone" >
                        
                    </div>
                    <div class="col-md-6 mb-3">
                        
                        <input type="email" placeholder="Email Address" class="form-control border-bottom" id="exampleInputPassword1" name="email" >
                    </div>
                    </div>
                    
                    <div class="mb-3 ">
                    <h5>Are you the patient?*</h5>
                    <div class="form-check form-check-inline">
                       
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  name="patient" value="yes">
                        <label class="form-check-label" for="inlineCheckbox1">YES</label>
                    </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="patient" value="no">
                        <label class="form-check-label" for="inlineCheckbox2">NO</label>
                        </div>
                        


                    </div>

                    <div class="mb-3 ">
                    <h5>Does the patient have Medicaid?*</h5>
                    <div class="form-check form-check-inline">
                       
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="yes" name="medicaid">
                        <label class="form-check-label" for="inlineCheckbox1">YES</label>
                    </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="no" name="medicaid">
                        <label class="form-check-label" for="inlineCheckbox2">NO</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="not sure" name="medicaid">
                        <label class="form-check-label" for="inlineCheckbox2">I don't know</label>
                    </div>
                           


</div>


                    <button type="submit" class="btn btn-eligible">AM I ELIGIBLE?</button>
                    </form>


            </div>
        </div>
    </div>
</section>












<!---CDPAP FORMS----->

   <section class="CDPAP-Forms">
      <div class="container">
        <h2>CDPAP Forms	</h2>
        <p>


            Provided below are the necessary forms for consumers to get started with CDPAP. Please print out and complete the forms following the order suggested below.

            If you need help with anything, please call us at 1-866-429-9667
            </p>
       <div class="row  justify-content-between align-items-center">
         <div class="col-sm-12 col-md-4 doh   border  border-2 border-primary  rounded-4 ">
            <div class="">


                <h3>Getting Started</h3>

                
                    <a href="">DOH Form – Physician’s Order (for Consumer)</a>
                    <ul>
                    <li>
                    Your Doctor must confirm that you, the consumer, are authorized to receive services.

                    </li>
                    <li> This form is 100% Mandatory – Your doctor MUST fill out this form.</li>
                    </ul>

            </div>

            <div class="pdf-icon ">
                  <a href="https://cdpapny.org/wp-content/uploads/2016/08/DOH-Form_Physicians-Order.pdf" > <img class="pdf-img" src="assets/img/pdf.png" alt="logo">
                  </a>

            </div> 
         </div>
         <div class=" col-sm-12 col-md-4 doh   border   border-2 border-primary  rounded-4 ">
            <div class="">


                <h3>Changing Health Plans</h3>

               
                    <a href="">DOH Form – Physician’s Order (for Consumer)</a>
                    <ul>
                    <li>
                    Your Doctor must confirm that you, the consumer, are authorized to receive services.

                    </li>
                    <li> This form is 100% Mandatory – Your doctor MUST fill out this form.</li>
                    </ul>

            </div>

            <div class="pdf-icon ">
                  <a href="https://cdpapny.org/wp-content/uploads/2016/08/DOH-Form_Physicians-Order.pdf" ><img class="pdf-img" src="assets/img/pdf.png" alt="logo">
                  </a>

            </div> 
         </div>
         <div class="col-sm-12 col-md-4 doh   border   border-2 border-primary  rounded-4 ">
            <div class="">


                <h3>Referral Information</h3>

                  
                    <a href="">DOH Form – Physician’s Order (for Consumer)</a>
                    <ul>
                    <li>
                    Your Doctor must confirm that you, the consumer, are authorized to receive services.

                    </li>
                    <li> This form is 100% Mandatory – Your doctor MUST fill out this form.</li>
                    </ul>

            </div>

            <div class="pdf-icon ">
                  <a href="https://cdpapny.org/wp-content/uploads/2016/08/DOH-Form_Physicians-Order.pdf" > <img class="pdf-img" src="assets/img/pdf.png" alt="logo">
                  </a>

            </div> 
         
        
        </div>
     
    
    </div>

    <p>Axzons Homecare is being led by medical professionals including the doctors and the nurses who are at the very heart of quality of medical care. Our philosophy is to provide professional uncompromising compassionate care of an excellent quality in the comfort of your home by experts in the medical profession.</p>
      </div>
   </section>

	<!-- <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 bg-abt-1"> </div>
                <div class="col-md-6 bg-text-space">
				  <div class="text-box">
					 <h3 class="text-black">Who is eligible to participate in CDPAP?</h3>
					<p class="bold">To be eligible for CDPAP, an individual must:</p>					
                    <ul class="list-item">
						<li>Disease management</li>
						<li>Medication management, teaching and administration</li>
						<li>Illness assessment and instruction</li>
						<li>Post-surgical management</li>
						<li>Bathing and personal care assistance</li>
						<li>Assessments at each visit on your condition and risk for going to the hospital</li>
						<li>Measure blood pressure, pulse, respirations, lung sounds, blood glucose or pulse oximetry, as ordered by your doctor</li>
					</ul>
					
					<p class="bold">OUR EXPERT STAFF IS AVAILABLE 24 X 7 FOR YOUR CARE</p>
					<ul class="list-item">
						<li>Our mission is to provide the patients with service which is compassionate. We offer quality care that embraces dedication and professionalism of the highest standard.</li>
						<li>We pledge to honour all patient’s rights and work closely with their families to achieve the patient’s maximum functional independence in their home setting.</li>
						<li>Our expert and compassionate staff delivers the coordinated planned care between you, the caregiver and the physician to reduce re-hospitalizations.</li>
						<li><span class="NormalTextRun BCX0 SCXW162697441">York</span><span class="NormalTextRun BCX0 SCXW162697441">ers the ability to care for their loved ones by themselves and getting paid by Axzons.</span></li>
					</ul>					
				  </div>               
                </div>
            </div>
        </div>
    </section> -->
	


	
	<section class="full-bg abt-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
				  <div class="our-rates">
				   <h4>Enjoy Our Rates!</h4>
				   <p>
				   Contact us now to book a no-obligation phone assessment. Our in-home care service are available in New York
				   </p>
				  </div>
				</div>
            </div>
        </div>
    </section>

	

    @include('footer') 	


