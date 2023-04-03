<section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 c1">
                    <div class="footer-logo">
                        <a href="{{url('/')}}"> <img src="assets/img/footer-logo.png" alt="logo"></a>
                       
                    </div>
                    <div class="text">
                        <p>A society that cares for its senior citizens is a civilized and enlightened society. The aging happens on its own without any prompting from our side! It is an issue of mind over matter…if you don’t mind, it doesn’t matter!</p>
                    </div>
                    <div class="icons-f">
                        <a href="https://www.facebook.com/axzonscare" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/axzonshomecare" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/axzons-homecare-71190015a" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/axzonshomecare/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                      

                </div>
				<div class="col-md-1 c2"></div>
				
                <div class="col-sm-6 col-md-3 c2">
                   <h5>Our locations</h5>
                   <ul>
                    <li>Nassau county</li>
                    <li>Suffolk County</li>
                    <li>Queens County</li>
                    <li>Westchester County</li>
                    <li>Upstate NY</li>
                   </ul>
                   <div class="footer-call">
                    <p><i class="fa-solid fa-phone"></i>
                    &nbsp;&nbsp;Phone: <a href="tel:+18664299667" class="text-white"> +1-(866)-429-9667</a>
                    </p>
                   </div>
                </div>
                <div class=" col-md-3 c3">
                    <h5>Services CDPAP</h5>
                    <div class="serv-link">
						<ul>
						  <li><a href="{{url('home-care-services')}}">Home Care Services</a></li>
						  <li><a href="{{url('live-in-care')}}">Live-in Care</a></li>
                          <li><a href="{{url('cardiological-care')}}">Cardiological Care</a></li>
                          <li><a href="{{url('respite-care')}}">Respite Care</a></li>
                         
                          <li><a href="{{url('companion-care')}}"> companion care</li>
                          <li><a href="{{url('specialized-care')}}">Specialized Care</a></li>
                          <li><a href="{{url('nutritional-counselling')}}">Nutritional Counselling</a></li>
						
						  <li><a href="{{url('nursing-service')}}">Nursing Service</a></li>
						</ul>
					 </div>
                </div>
                <div class="col-md-2 c4">
                    <h5>Quick Links</h5>
					 <div class="serv-link">
						<ul>
						  <li><a href="{{url('cdpap')}}">CDPAP</a></li>
						  <li><a href="{{url('services')}}">Services</a></li>
                          <li><a href="{{url('blogs')}}">Blog</a></li>
						  <li><a href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=b3b5bd15-e2b6-4663-8129-5e7aad60f916&ccId=19000101_000001&lang=en_US" target="_blank">Caregivers</a></li>
						  <li><a href="{{url('/contact')}}">Contact</a></li>
						</ul>
					 </div>
                </div>
            </div>
        </div>        
    </section>

<section class="footer-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Copyright © Axzonshomecare® New York</span>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    $(function() {
        $("#contactForm").on('submit', function(e) {
            e.preventDefault();
            //  var html;
            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    console.log(response);
                    if(response.status == 'success') {
						$("#contactForm")[0].reset();
                        //$("#StuName").value('');
						$('#query_error').html('');
						$('#email_error').html('');
						$('#subject_error').html('');
						$('#contact_error').html('');
						$('#name_error').html('');
						$("#message").html(response.message);
                        
                        //response.result.forEach(function(key,val) {
  //html += key +" : "+ val+"<br>"
//});
                            // html += "Name: "+response.result.name."<br>";
                            // html += "Email: "+response.result.email;
                        // $("#fetch").html(html);
                        //$("#fetch").html(response.result.name);
                    }

					if(response.name_error!=" "){
						$("#name_error").html(response.name_error);
					}
					else{
						$('#name_error').html('');
					}


                    if(response.contact_error!=" "){
						$("#contact_error").html(response.contact_error);
					}
					else{
						$('#contact_error').html('');
					}


                    if(response.subject_error!=" "){
						$("#subject_error").html(response.subject_error);
					}
					else{
						$('#subject_error').html('');
					}
                    if(response.email_error!=" "){
						$("#email_error").html(response.email_error);
					}
					else{
						$('#email_error').html('');
					}
                    if(response.query_error!=" "){
						$("#query_error").html(response.query_error);
					}
					else{
						$('#query_error').html('');
					}

                   

					
					
                //    $("#contact_error").html(response.contact_error);
                //    $("#message_error").html(response.message_error);
                //    $("#email_error").html(response.email_error);
                //    $("#query_error").html(response.query_error);

                }
            });
        });
    });


    $('#checkbox1').change(function() {
  if ($(this).is(':checked')) {
    $('#additionalCheckbox').hide();
    $('.data-to-hide').hide();
  } else {
    $('.data-to-hide').show();
  }
});

$('#checkbox2').change(function() {
  if ($(this).is(':checked')) {
    $('#additionalCheckbox').show();
  } else {
    $('#additionalCheckbox').hide();
    $('.data-to-hide').hide();
  }
});
</script>

     
</body>
</html>