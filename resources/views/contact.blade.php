@extends('lay')
@section('content')
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav style="border-right:1px solid grey; background:white;color:black;" class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/post/create')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-ad"></i></div>
                                Post ad for free
                            </a>
                            <div class="sb-sidenav-menu-heading">Categories</div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                                Mobile
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                    @foreach($mobData as $data)
                                    <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.$data->sub_category.'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a> @endforeach
                                </nav>
                            </div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Service
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($serData as $data)
                                <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a>  @endforeach 
                                </nav>
                            </div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-help"></i></div>
                                Miscellaneous
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($misData as $data)
                                <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a> @endforeach    
                                </nav>
                            </div>
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Jobs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($jobData as $data)
                                <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a> @endforeach
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" style="color:black;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                               Cars
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" style="color:black;" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav  class="sb-sidenav-menu-nested nav">
                                @foreach($carData as $data)
                                <a  style="color:black;text-decoration:none;"  href="{{url('post/'.session('cat').'/'.str_replace('?','',$data->sub_category))}}" >
                                <div class="sb-nav-link-icon"><img style="float:left;width:50px;height:50px;" src="{{asset('Images/'.str_replace('?','',$data->sub_category).'.png')}}" alt="logo">
                               </div>
                               {{str_replace('?','',$data->sub_category)}}
                            
                            </a> @endforeach
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Pages</div>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/about')}}">
                                About Us
                            </a>
                            <a class="nav-link"  style="color:black;"style="color:white;"  href="{{url('/contact')}}">
                                Contact Us
                            </a>
                            <a class="nav-link"  style="color:black;"style="color:white;"  href="{{url('/disclaimer')}}">
                               Disclaimer
                            </a>
            
                            <a class="nav-link"  style="color:black;"style="color:white;"  href="{{url('/privacy')}}">
                                Privacy Policy
                            </a>
                            
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
<div class="des" style="width:60%;margin-left:20%;border:1px solid grey;border-radius:60px;background-color:white;">
    <center><h1 style="font-size:60px;"> <u>Disclaimer</u> </h1></center> 
    
    <div style="margin:30px;">
    If you have any questions about this Privacy Policy, You can contact us:
    <ul>
        <li>By visiting this page on our website: https://www.jeemjam.com/public/contact</li>
    </ul>
    <br>
<h2>Disclaimer for jeemjam Classifieds</h2>
If you require any more information or have any questions about our site's
disclaimer, please feel free to contact us by email at jeemjamdxb@gmail.com. Our
Disclaimer was generated with the help of the Disclaimer Generator.
<br>
<h2>Disclaimers for www.jeemjam.com</h2>
All the information on this website - https:/www.jeemjam.com - is published in
good faith and for general information purposes only. www.jeemjam.com does
not make any warranties about the completeness, reliability, and accuracy of this
information. Any action you take upon the information you find on this website
(www.jeemjam.com), is strictly at your own risk. www.jeemjam.com will not be
liable for any losses and/or damages in connection with the use of our website.
From our website, you can visit other websites by following hyperlinks to such
external sites. While we strive to provide only quality links to useful and ethical
websites, we have no control over the content and nature of these sites. These
links to other websites do not imply a recommendation for all the content found
on these sites. Site owners and content may change without notice and may
occur before we have the opportunity to remove a link that may have gone 'bad'.
Please be also aware that when you leave our website, other sites may have
different privacy policies and terms that are beyond our control. Please be sure to
check the Privacy Policies of these sites as well as their "Terms of Service"
before engaging in any business or uploading any information.
<br>
Consent
<br>
By using our website, you hereby consent to our disclaimer and agree to its
terms.
Update
<br>
Should we update, amend or make any changes to this document, those
changes will be prominently posted here.
</div>
</div>
<div class="mob" style="background-color:white;">
    <center><h1 style="font-size:60px;"> <u>Disclaimer</u> </h1></center> 
    
    <div style="margin:30px;">
    If you have any questions about this Privacy Policy, You can contact us:
    <ul>
        <li>By visiting this page on our website: https://www.jeemjam.com/contact</li>
    </ul>
    <br>
<h2>Disclaimer for jeemjam Classifieds</h2>
If you require any more information or have any questions about our site's
disclaimer, please feel free to contact us by email at jeemjamdxb@gmail.com. Our
Disclaimer was generated with the help of the Disclaimer Generator.
<br>
<h2>Disclaimers for www.jeemjam.com</h2>
All the information on this website - https:/www.jeemjam.com - is published in
good faith and for general information purposes only. www.jeemjam.com does
not make any warranties about the completeness, reliability, and accuracy of this
information. Any action you take upon the information you find on this website
(www.jeemjam.com), is strictly at your own risk. www.jeemjam.com will not be
liable for any losses and/or damages in connection with the use of our website.
From our website, you can visit other websites by following hyperlinks to such
external sites. While we strive to provide only quality links to useful and ethical
websites, we have no control over the content and nature of these sites. These
links to other websites do not imply a recommendation for all the content found
on these sites. Site owners and content may change without notice and may
occur before we have the opportunity to remove a link that may have gone 'bad'.
Please be also aware that when you leave our website, other sites may have
different privacy policies and terms that are beyond our control. Please be sure to
check the Privacy Policies of these sites as well as their "Terms of Service"
before engaging in any business or uploading any information.
<br>
Consent
<br>
By using our website, you hereby consent to our disclaimer and agree to its
terms.
Update
<br>
Should we update, amend or make any changes to this document, those
changes will be prominently posted here.
</div>
</div>
</main>
</div>
@endsection