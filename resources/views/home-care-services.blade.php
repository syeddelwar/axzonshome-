@include('header') 	
    <section>
        <div class="container-fluid inner-banner banner-services">
		  <div class="container">
		    <div class="row ">
                <div class="col-md-12 text-center">
                  <h1 class="bold">AXZONS HOME CARE SERVICES</h1>
                </div>
            </div>
		  </div>
        </div>
    </section>
   
    <section class="p-tb-60" style="background:#721BE30D">
      <div class="container">
		<div class="row ">
		<div class="col-md-6">
		 <h2>PROFESSIONAL HOME CARE SERVICES TO FIT YOUR NEEDS</h2>
		 <p>
		  Axzons provides both skilled and aide services to patients living in their own homes or assisted living facilities. 
		  The purpose of Home Care is to promote, maintain or restore health, or minimize the effects of illness and disability. 
		  Our goal is to enable the physically challenged, the elderly in need, the patient recovering from an illness or accident, and others confined to their homes to maintain their  independence. 
		  Every elder is unique and every case of aging is unique, showing in different ways and progressing at different rates. 
		  We understand that, so we select the best, most qualified caregivers in advance to provide the care you want, when you need it.
		 </p>
		</div>
		
		<div class="col-md-6">
		 <div class="cnt-tab">
		       <h2>Contact Us</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif

			<form  id="main-form" method="post" class="form" action="{{route('home-care-form.store') }}">
			{{ csrf_field() }}
				<div class="clearfix">
				   <div>
					  <div class="form-group">						 
						 <input type="text" placeholder="Name" class="full_width" id="name1" name="name" style="" value="">
						 <small id="emailHelp" class="form-text text-danger"></small>
						 @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                         @endif
					  </div>
					  
					  <div class="form-group">
						 <input type="number" placeholder="Phone" class="full_width" id=" " name="phone" style="" value="">
						 <small id="contNo" class="form-text text-danger"></small>

						 @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
					  </div>
					  
					  <div class="form-group">
						 <input type="email" placeholder="Email" class="full_width" id=" " name="email" style="" value="">
						 <small id="contNo" class="form-text text-danger"></small>
						 @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
					  </div>
					  
					  <div class="form-group">
						 <input type="text" placeholder="Subject" class="full_width" id=" " name="Subject" style="" value="">
						 <small id="contNo" class="form-text text-danger"></small>
						 @if ($errors->has('Subject'))
                                    <span class="text-danger">{{ $errors->first('Subject') }}</span>
                                @endif
					  </div>
					  
					  <div class="form-group">
						
						<textarea placeholder="Comments" rows="6" style="height:100px" name="Comments" value="Comments"></textarea>
						<small id="emailHelp" class="form-text text-danger"></small>
						@if ($errors->has('Comments'))
                                    <span class="text-danger">{{ $errors->first('Comments') }}</span>
                                @endif

					  </div>
				   </div>
				</div>
				<div class="clearfix">
				   <div>
					  <div class="sp-top20" style="margin:20px 0 0 0; text-align:right">
						<button type="submit" id="submit_btn" onclick="return validation()" class="btn btn-invert">Submit</button>
					  </div>
				   </div>
				</div>
				<div id="result"></div>
			</form>
		  </div>
		</div>
		</div>
	  </div>	
		
    </section>
	
	<section class="p-tb-60">
	 <div class="container">
	  <div class="row">
	   <div class="col-md-12 text-center mb-5">	
        <h2>Frequently Asked Question's</h2>	   
	   </div>
	   <div class="col-md-6">
	    <div class="faq">
		  <div class="faq-header">
		   <h3>Home care result in loss of independence?</h3>
		  </div>
          <p>No. Our belief is that independence is being in control of your decisions. Having in home care services means being in control of your activities and retaining as much independence as each situation allows. Many of our clients just need a little help to continue living a safe and productive life while some might be recovering from a fall or surgery, or other condition. Regardless of your situation, our goal is to enable you the best possible outcome while being in control of your care and daily decisions.</p>	
		</div>
		
		<div class="faq">
		  <div class="faq-header">
		   <h3>Can I trust Axzons caregivers in my home?</h3>
		  </div>
          <p>Just like nurses and doctors, Professional Caregivers have chosen a career in compassionate care of those in need. Axzons’s caregivers go through a rigorous Screening System which includes a comprehensive background check and screening for compassion, identity, integrity, and competence. cs </p>	
		</div>
		
		<div class="faq">
		  <div class="faq-header">
		   <h3>How does Axzons attract the best caregivers?</h3>
		  </div>
          <p>The foundation of Axzons Homecare philosophy is Hippocratic Oath, which is regarded as the highest form of ethics in healthcare. Similar to any working professional, caregivers are attracted to organizations that have trust, compassion, stability, and ethics. Our caregivers are attracted to similar mindset professionals and maintain the ethical and compassionate work culture of Axzons. </p>	
		</div>		 	
	   </div>
	   
	   <div class="col-md-6">
	    <div class="faq">
		  <div class="faq-header faq-header2">
		   <h3>Will we have flexibility in changing our caregivers?</h3>
		  </div>
          <p>We are flexible in changing the caregivers to your satisfaction and we will go to any lengths to make sure you get the best care by the best caregiver. </p>	
		</div>
		
		<div class="faq">
		  <div class="faq-header faq-header2 ">
		   <h3>What is the process of finding a caregiver?</h3>
		  </div>
          <p>Give us a call and we’ll have a brief phone discussion to understand your needs. We then can meet anyone involved in selecting and paying for care at your home for an in-home needs consultation. Within 24 hours of that visit we are usually able to refer a professional caregiver to your home. Our team continuously screens caregivers beyond current demand to give you quick access to the best caregivers. </p>	
		</div>
	   </div>
	  </div>
	 </div>
	</section>
	
	

	
	@include('footer') 	