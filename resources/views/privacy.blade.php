@extends('lay')
@section('content')
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav style="border-right:1px solid grey; background:white;color:black;" class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                    
                            @if(session('mob'))
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/mob')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            @endif
                             @if(!session('mob'))
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link"  style="color:black;"style="color:white;" href="{{url('/')}}">
                                <div class="sb-nav-link-icon" ><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            @endif
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

<div class="des" style="width:60%;margin-left:20%;border:1px solid grey;border-radius:30px;background-color:white;">
    
    <center><h1 style="font-size:60px;"> <u> Privacy Policy</u> </h1></center> 
    
    <h5 style="margin:30px;">
  
Last updated: February 16, 2022
<br>
This Privacy Policy describes jeemjam classifieds policies and procedures on the 
collection, use and disclosure of your information when you use the Service and tells 
you about your privacy rights and how the law protects you.
<br>
We use Your Personal data to provide and improve the Service. By using the Service, 
You agree to the collection and use of information in accordance with this Privacy 
Policy. This Privacy Policy has been created with the help of the Privacy Policy 
Template.
<br>
Interpretation and Definitions
<br>
<h3>Interpretation</h3>
<br>
The words in which the initial letter is capitalized have meanings defined under the 
following conditions. The following definitions shall have the same meaning 
regardless of whether they appear in singular or in the plural.
<h3>Definitions</h3>
For the purposes of this Privacy Policy:
Account means a unique account created for You to access our Service or 
parts of our Service.
Company (referred to as either "the Company", "We", "Us" or "Our" in this 
Agreement) refers to Jeemjam LLC, UAE.
Cookies are small files that are placed on Your computer, mobile device or 
any other device by a website, containing the details of Your browsing 
history on that website among its many uses.
Country refers to United Arab Emirates
Device means any device that can access the Service such as a computer, a 
cellphone or a digital tablet.
Personal Data is any information that relates to an identified or identifiable 
individual.
Service refers to the Website.
Service Provider means any natural or legal person who processes the data 
on behalf of the Company. It refers to third-party companies or individuals 
employed by the Company to facilitate the Service, to provide the Service on 
behalf of the Company, to perform services related to the Service, or to assist 
the Company in analyzing how the Service is used.
Third-party Social Media Service refers to any website or any social 
network website through which a user can log in or create an account to use 
the Service.
Usage Data refers to data collected automatically, either generated by the 
use of the Service or from the Service infrastructure itself (for example, the 
duration of a page visit).
Website refers to www.jeemjam.com, accessible from 
https://www.jeemjam.com
You mean the individual accessing or using the Service, or the company, or 
other legal entity on behalf of which such individual is accessing or using the 
Service, as applicable.
<h2>Collecting and Using Your Personal Data</h2>
<h3>Types of Data Collected</h3>
<h4>Personal Data</h4>
While using Our Service, We may ask You to provide Us with certain personally 
identifiable information that can be used to contact or identify You. Personally, 
identifiable information may include, but is not limited to:
Email address
First name and last name
Phone number
Address, State, Province, ZIP/Postal code, City
<h4>Usage Data</h4>

Usage Data has collected automatically when using the Service.
Usage Data may include information such as Your Device's Internet Protocol address 
(e.g. IP address), browser type, browser version, the pages of our Service that You 
visit, the time and date of Your visit, the time spent on those pages, unique device 
identifiers and other diagnostic data.
When You access the Service by or through a mobile device, We may collect certain 
information automatically, including, but not limited to, the type of mobile device 
You use, Your mobile device unique ID, the IP address of Your mobile device, Your 
mobile operating system, the type of mobile Internet browser You use, unique 
device identifiers and other diagnostic data.
We may also collect information that Your browser sends whenever You visit our 
Service or when You access the Service by or through a mobile device.
Information from Third-Party Social Media Services
The Company allows you to create an account and log in to use the Service through 
the following Third-party Social Media Services:
<ul>
    <li>Google</li>
    <li>Facebook</li>
    <li>Mobile number</li>
</ul>

If you decide to register through or otherwise grant us access to a Third-Party Social 
Media Service, We may collect Personal data that is already associated with Your 
Third-Party Social Media Service's account, such as your name, your email address, 
your activities or your contact list associated with that account.
You may also have the option of sharing additional information with the Company 
through Your Third-Party Social Media Service's account. If you choose to provide 
such information and Personal Data, during registration or otherwise, you are giving 
the Company permission to use, share, and store it in a manner consistent with this 
<h2>Privacy Policy.</h2>
<h3>Tracking Technologies and Cookies</h3>
We use cookies and similar tracking technologies to track the activity on Our Service 
and store certain information. Tracking technologies used are beacons, tags, and 
scripts to collect and track information and to improve and analyze Our Service. The 
technologies We use may include:
<ul>
    <li>Cookies or Browser Cookies. A cookie is a small file placed on Your Device. You 
can instruct your browser to refuse all Cookies or to indicate when a cookie is 
being sent. However, if you do not accept Cookies, You may not be able to use 
some parts of our Service. Unless you have adjusted your browser setting so that 
it will refuse cookies, our Service may use Cookies.</li>
<li>Flash Cookies. Certain features of our Service may use local stored objects (or 
Flash cookies) to collect and store information about your preferences or your
activity on our Service. Flash Cookies are not managed by the same browser 
settings as those used for Browser Cookies. For more information on how You 
can delete Flash Cookies, please read "Where can I change the settings for 
disabling, or deleting local shared objects?" available at
<a href="https://helpx.adobe.com/flash-player/kb/disable-local-shared-objectsflash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_lo">Here</a>
cal_shared_objects_</li>
<li>
    Web Beacons. Certain sections of our Service and our emails may contain small 
electronic files known as web beacons (also referred to as clear gifs, pixel tags, 
and single-pixel gifs) that permit the Company, for example, to count users who 
have visited those pages or opened an email and for other related website 
statistics (for example, recording the popularity of a certain section and 
verifying system and server integrity).
</li>
</ul>

Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your
personal computer or mobile device when you go offline, while Session Cookies are 
deleted as soon as you close your web browser. Learn more about cookies: Use of 
Cookies by Free Privacy Policy.
We use both Session and Persistent Cookies for the purposes set out below:
Necessary / Essential Cookies
<br>
Type: Session Cookies
<br>
Administered by: Us
<br>
Purpose: These cookies are essential to provide you with services available 
through the Website and to enable you to use some of its features. They help 
to authenticate users and prevent fraudulent use of user accounts. Without 
these Cookies, the services that you have asked for cannot be provided, and 
We only use these Cookies to provide You with those services.
Cookies Policy / Notice Acceptance Cookies
<br>
Type: Persistent Cookies
<br>
Administered by: Us
<br>
Purpose: These Cookies identify if users have accepted the use of cookies on 
the Website.
<br>
Functionality Cookies
<br>
Type: Persistent Cookies
<br>
Administered by: Us
<br>
Purpose: These cookies allow us to remember choices you make when you
use the Website, such as remembering your login details or language 
preference. The purpose of these cookies is to provide you with a more 
personal experience and to avoid you having to re-enter your preferences 
every time you use the Website.
For more information about the cookies we use and your choices regarding cookies, 
please visit our Cookies Policy or the Cookies section of our Privacy Policy.
Use of Your Personal Data
The Company may use Personal Data for the following purposes:
To provide and maintain our Service, including to monitor the usage of 
our Service.
<br>
To manage Your Account: to manage Your registration as a user of the 
Service. The Personal Data You provide can give You access to different 
functionalities of the Service that are available to You as a registered user.
For the performance of a contract: the development, compliance and 
undertaking of the purchase contract for the products, items or services you
have purchased or of any other contract with Us through the Service.
To contact You: To contact You by email, telephone calls, SMS, or other 
equivalent forms of electronic communication, such as a mobile application's 
push notifications regarding updates or informative communications related 
to the functionalities, products or contracted services, including the security 
updates, when necessary or reasonable for their implementation.
To provide You with news, special offers and general information about 
other goods, services and events which we offer that are similar to those that 
you have already purchased or enquired about unless You have opted not to 
receive such information.
<br>
To manage Your requests: To attend and manage Your requests to Us.
For business transfers: We may use Your information to evaluate or 
conduct a merger, divestiture, restructuring, reorganization, dissolution, or 
other sale or transfer of some or all of Our assets, whether as a going concern 
or as part of bankruptcy, liquidation, or similar proceeding, in which 
Personal Data held by Us about our Service users is among the assets 
transferred.
<br>
For other purposes: We may use Your information for other purposes, such 
as data analysis, identifying usage trends, determining the effectiveness of 
our promotional campaigns and evaluating and improving our Service, 
products, services, marketing and your experience.
We may share your personal information in the following situations:
    <ul>
        <li>With Service Providers: We may share your personal information with Service 
Providers to monitor and analyze the use of our Service, to contact you.</li>
<li>For business transfers: We may share or transfer Your personal information in 
connection with, or during negotiations of, any merger, sale of company assets, 
financing, or acquisition of all or a portion of Our business to another company.</li>
<li>With Affiliates: We may share Your information with Our affiliates, in which 
case we will require those affiliates to honor this Privacy Policy. Affiliates 
include Our parent company and any other subsidiaries, joint venture partners 
or other companies that We control or that are under common control with Us.</li>
<li>With business partners: We may share Your information with Our business 
partners to offer You certain products, services or promotions.</li>
<li>With other users: when You share personal information or otherwise interact 
in the public areas with other users, such information may be viewed by all users 
and may be publicly distributed outside. If You interact with other users or 
register through a Third-Party Social Media Service, Your contacts on the ThirdParty Social Media Service may see Your name, profile, pictures and description 
of Your activity. Similarly, other users will be able to view descriptions of Your 
activity, communicate with You and view Your profile.</li>
<li>With Your Consent: We may disclose Your personal information for any other 
purpose with Your consent.</li>
    </ul>
<h3>Retention of Your Personal Data</h3>
The Company will retain Your Personal Data only for as long as is necessary for the 
purposes set out in this Privacy Policy. We will retain and use Your Personal Data to 
the extent necessary to comply with our legal obligations (for example, if we are 
required to retain your data to comply with applicable laws), resolve disputes, and 
enforce our legal agreements and policies.
The Company will also retain Usage Data for internal analysis purposes. Usage Data 
is generally retained for a shorter period of time, except when this data is used to 
strengthen the security or to improve the functionality of Our Service, or We are 
legally obligated to retain this data for longer time periods.
Transfer of Your Personal Data
<br>
Your information, including Personal Data, is processed at the Company's operating 
offices and in any other places where the parties involved in the processing are 
located. It means that this information may be transferred to — and maintained on 
— computers located outside of Your state, province, country or other 
governmental jurisdiction where the data protection laws may differ than those 
from Your jurisdiction.
<br>
Your consent to this Privacy Policy followed by Your submission of such information 
represents Your agreement to that transfer.
The Company will take all steps reasonably necessary to ensure that Your data is 
treated securely and in accordance with this Privacy Policy and no transfer of Your 
Personal Data will take place to an organization or a country unless there are 
adequate controls in place including the security of Your data and other personal 
information.
<br>
Disclosure of Your Personal Data
<br>
Business Transactions
<br>
If the Company is involved in a merger, acquisition, or asset sale, Your Personal Data 
may be transferred. We will provide notice before Your Personal Data is transferred 
and becomes subject to a different Privacy Policy.
Law enforcement
<br>
Under certain circumstances, the Company may be required to disclose Your 
Personal Data if required to do so by law or in response to valid requests by public 
authorities (e.g. a court or a government agency).
<br>
Other legal requirements
<br>
The Company may disclose Your Personal Data in the good faith belief that such 
action is necessary to:<br>
<ul>
    <li>Comply with a legal obligation</li>
    <li>Protect and defend the rights or property of the Company</li>
    <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
    <li>Protect the personal safety of users of the Service or the public</li>
    <li>Protect against legal liability</li>
</ul>
Security of Your Personal Data
<br>
The security of Your Personal Data is important to us, but remember that no method 
of transmission over the Internet, or method of electronic storage is 100% secure. 
While we strive to use commercially acceptable means to protect Your Personal 
Data, We cannot guarantee its absolute security.
Children's Privacy
<br>
Our Service does not address anyone under the age of 13. We do not knowingly collect 
personally identifiable information from anyone under the age of 13. If You are a parent or
guardian and You are aware that Your child has provided Us with Personal Data, please 
Contact Us. If We become aware that We have collected Personal Data from anyone under 
the age of 13 without verification of parental consent, We take steps to remove that 
information from Our servers.
If We need to rely on consent as a legal basis for processing Your information and Your 
country requires consent from a parent, We may require Your parent's consent before We 
collect and use that information.
<br>
Links to Other Websites
<br>
Our Service may contain links to other websites that are not operated by Us. If you click on a 
third-party link, you will be directed to that third party's site. We strongly advise You to 
review the Privacy Policy of every site You visit.
We have no control over and assume no responsibility for the content, privacy policies or 
practices of any third-party sites or services.
<br>
Changes to this Privacy Policy
<br>
We may update Our Privacy Policy from time to time. We will notify You of any changes by 
posting the new Privacy Policy on this page.
We will let You know via email and/or a prominent notice on Our Service, prior to the 
change becoming effective and update the "Last Updated" date at the top of this Privacy 
Policy.
You are advised to review this Privacy Policy periodically for any changes. Changes to this 
Privacy Policy are effective when they are posted on this page
    </h5>
</div>
<div class="mob" style="background-color:white;">
    
    <center><h1 style="font-size:60px;"> <u> Privacy Policy</u> </h1></center> 
    
    <h5 style="margin:30px;">
  
Last updated: February 16, 2022
<br>
This Privacy Policy describes jeemjam classifieds policies and procedures on the 
collection, use and disclosure of your information when you use the Service and tells 
you about your privacy rights and how the law protects you.
<br>
We use Your Personal data to provide and improve the Service. By using the Service, 
You agree to the collection and use of information in accordance with this Privacy 
Policy. This Privacy Policy has been created with the help of the Privacy Policy 
Template.
<br>
Interpretation and Definitions
<br>
<h3>Interpretation</h3>
<br>
The words in which the initial letter is capitalized have meanings defined under the 
following conditions. The following definitions shall have the same meaning 
regardless of whether they appear in singular or in the plural.
<h3>Definitions</h3>
For the purposes of this Privacy Policy:
Account means a unique account created for You to access our Service or 
parts of our Service.
Company (referred to as either "the Company", "We", "Us" or "Our" in this 
Agreement) refers to Jeemjam LLC, UAE.
Cookies are small files that are placed on Your computer, mobile device or 
any other device by a website, containing the details of Your browsing 
history on that website among its many uses.
Country refers to United Arab Emirates
Device means any device that can access the Service such as a computer, a 
cellphone or a digital tablet.
Personal Data is any information that relates to an identified or identifiable 
individual.
Service refers to the Website.
Service Provider means any natural or legal person who processes the data 
on behalf of the Company. It refers to third-party companies or individuals 
employed by the Company to facilitate the Service, to provide the Service on 
behalf of the Company, to perform services related to the Service, or to assist 
the Company in analyzing how the Service is used.
Third-party Social Media Service refers to any website or any social 
network website through which a user can log in or create an account to use 
the Service.
Usage Data refers to data collected automatically, either generated by the 
use of the Service or from the Service infrastructure itself (for example, the 
duration of a page visit).
Website refers to www.jeemjam.com, accessible from 
https://www.jeemjam.com
You mean the individual accessing or using the Service, or the company, or 
other legal entity on behalf of which such individual is accessing or using the 
Service, as applicable.
<h2>Collecting and Using Your Personal Data</h2>
<h3>Types of Data Collected</h3>
<h4>Personal Data</h4>
While using Our Service, We may ask You to provide Us with certain personally 
identifiable information that can be used to contact or identify You. Personally, 
identifiable information may include, but is not limited to:
Email address
First name and last name
Phone number
Address, State, Province, ZIP/Postal code, City
<h4>Usage Data</h4>

Usage Data has collected automatically when using the Service.
Usage Data may include information such as Your Device's Internet Protocol address 
(e.g. IP address), browser type, browser version, the pages of our Service that You 
visit, the time and date of Your visit, the time spent on those pages, unique device 
identifiers and other diagnostic data.
When You access the Service by or through a mobile device, We may collect certain 
information automatically, including, but not limited to, the type of mobile device 
You use, Your mobile device unique ID, the IP address of Your mobile device, Your 
mobile operating system, the type of mobile Internet browser You use, unique 
device identifiers and other diagnostic data.
We may also collect information that Your browser sends whenever You visit our 
Service or when You access the Service by or through a mobile device.
Information from Third-Party Social Media Services
The Company allows you to create an account and log in to use the Service through 
the following Third-party Social Media Services:
<ul>
    <li>Google</li>
    <li>Facebook</li>
    <li>Mobile number</li>
</ul>

If you decide to register through or otherwise grant us access to a Third-Party Social 
Media Service, We may collect Personal data that is already associated with Your 
Third-Party Social Media Service's account, such as your name, your email address, 
your activities or your contact list associated with that account.
You may also have the option of sharing additional information with the Company 
through Your Third-Party Social Media Service's account. If you choose to provide 
such information and Personal Data, during registration or otherwise, you are giving 
the Company permission to use, share, and store it in a manner consistent with this 
<h2>Privacy Policy.</h2>
<h3>Tracking Technologies and Cookies</h3>
We use cookies and similar tracking technologies to track the activity on Our Service 
and store certain information. Tracking technologies used are beacons, tags, and 
scripts to collect and track information and to improve and analyze Our Service. The 
technologies We use may include:
<ul>
    <li>Cookies or Browser Cookies. A cookie is a small file placed on Your Device. You 
can instruct your browser to refuse all Cookies or to indicate when a cookie is 
being sent. However, if you do not accept Cookies, You may not be able to use 
some parts of our Service. Unless you have adjusted your browser setting so that 
it will refuse cookies, our Service may use Cookies.</li>
<li>Flash Cookies. Certain features of our Service may use local stored objects (or 
Flash cookies) to collect and store information about your preferences or your
activity on our Service. Flash Cookies are not managed by the same browser 
settings as those used for Browser Cookies. For more information on how You 
can delete Flash Cookies, please read "Where can I change the settings for 
disabling, or deleting local shared objects?" available at
<a href="https://helpx.adobe.com/flash-player/kb/disable-local-shared-objectsflash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_lo">Here</a>
cal_shared_objects_</li>
<li>
    Web Beacons. Certain sections of our Service and our emails may contain small 
electronic files known as web beacons (also referred to as clear gifs, pixel tags, 
and single-pixel gifs) that permit the Company, for example, to count users who 
have visited those pages or opened an email and for other related website 
statistics (for example, recording the popularity of a certain section and 
verifying system and server integrity).
</li>
</ul>

Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your
personal computer or mobile device when you go offline, while Session Cookies are 
deleted as soon as you close your web browser. Learn more about cookies: Use of 
Cookies by Free Privacy Policy.
We use both Session and Persistent Cookies for the purposes set out below:
Necessary / Essential Cookies
<br>
Type: Session Cookies
<br>
Administered by: Us
<br>
Purpose: These cookies are essential to provide you with services available 
through the Website and to enable you to use some of its features. They help 
to authenticate users and prevent fraudulent use of user accounts. Without 
these Cookies, the services that you have asked for cannot be provided, and 
We only use these Cookies to provide You with those services.
Cookies Policy / Notice Acceptance Cookies
<br>
Type: Persistent Cookies
<br>
Administered by: Us
<br>
Purpose: These Cookies identify if users have accepted the use of cookies on 
the Website.
<br>
Functionality Cookies
<br>
Type: Persistent Cookies
<br>
Administered by: Us
<br>
Purpose: These cookies allow us to remember choices you make when you
use the Website, such as remembering your login details or language 
preference. The purpose of these cookies is to provide you with a more 
personal experience and to avoid you having to re-enter your preferences 
every time you use the Website.
For more information about the cookies we use and your choices regarding cookies, 
please visit our Cookies Policy or the Cookies section of our Privacy Policy.
Use of Your Personal Data
The Company may use Personal Data for the following purposes:
To provide and maintain our Service, including to monitor the usage of 
our Service.
<br>
To manage Your Account: to manage Your registration as a user of the 
Service. The Personal Data You provide can give You access to different 
functionalities of the Service that are available to You as a registered user.
For the performance of a contract: the development, compliance and 
undertaking of the purchase contract for the products, items or services you
have purchased or of any other contract with Us through the Service.
To contact You: To contact You by email, telephone calls, SMS, or other 
equivalent forms of electronic communication, such as a mobile application's 
push notifications regarding updates or informative communications related 
to the functionalities, products or contracted services, including the security 
updates, when necessary or reasonable for their implementation.
To provide You with news, special offers and general information about 
other goods, services and events which we offer that are similar to those that 
you have already purchased or enquired about unless You have opted not to 
receive such information.
<br>
To manage Your requests: To attend and manage Your requests to Us.
For business transfers: We may use Your information to evaluate or 
conduct a merger, divestiture, restructuring, reorganization, dissolution, or 
other sale or transfer of some or all of Our assets, whether as a going concern 
or as part of bankruptcy, liquidation, or similar proceeding, in which 
Personal Data held by Us about our Service users is among the assets 
transferred.
<br>
For other purposes: We may use Your information for other purposes, such 
as data analysis, identifying usage trends, determining the effectiveness of 
our promotional campaigns and evaluating and improving our Service, 
products, services, marketing and your experience.
We may share your personal information in the following situations:
    <ul>
        <li>With Service Providers: We may share your personal information with Service 
Providers to monitor and analyze the use of our Service, to contact you.</li>
<li>For business transfers: We may share or transfer Your personal information in 
connection with, or during negotiations of, any merger, sale of company assets, 
financing, or acquisition of all or a portion of Our business to another company.</li>
<li>With Affiliates: We may share Your information with Our affiliates, in which 
case we will require those affiliates to honor this Privacy Policy. Affiliates 
include Our parent company and any other subsidiaries, joint venture partners 
or other companies that We control or that are under common control with Us.</li>
<li>With business partners: We may share Your information with Our business 
partners to offer You certain products, services or promotions.</li>
<li>With other users: when You share personal information or otherwise interact 
in the public areas with other users, such information may be viewed by all users 
and may be publicly distributed outside. If You interact with other users or 
register through a Third-Party Social Media Service, Your contacts on the ThirdParty Social Media Service may see Your name, profile, pictures and description 
of Your activity. Similarly, other users will be able to view descriptions of Your 
activity, communicate with You and view Your profile.</li>
<li>With Your Consent: We may disclose Your personal information for any other 
purpose with Your consent.</li>
    </ul>
<h3>Retention of Your Personal Data</h3>
The Company will retain Your Personal Data only for as long as is necessary for the 
purposes set out in this Privacy Policy. We will retain and use Your Personal Data to 
the extent necessary to comply with our legal obligations (for example, if we are 
required to retain your data to comply with applicable laws), resolve disputes, and 
enforce our legal agreements and policies.
The Company will also retain Usage Data for internal analysis purposes. Usage Data 
is generally retained for a shorter period of time, except when this data is used to 
strengthen the security or to improve the functionality of Our Service, or We are 
legally obligated to retain this data for longer time periods.
Transfer of Your Personal Data
<br>
Your information, including Personal Data, is processed at the Company's operating 
offices and in any other places where the parties involved in the processing are 
located. It means that this information may be transferred to — and maintained on 
— computers located outside of Your state, province, country or other 
governmental jurisdiction where the data protection laws may differ than those 
from Your jurisdiction.
<br>
Your consent to this Privacy Policy followed by Your submission of such information 
represents Your agreement to that transfer.
The Company will take all steps reasonably necessary to ensure that Your data is 
treated securely and in accordance with this Privacy Policy and no transfer of Your 
Personal Data will take place to an organization or a country unless there are 
adequate controls in place including the security of Your data and other personal 
information.
<br>
Disclosure of Your Personal Data
<br>
Business Transactions
<br>
If the Company is involved in a merger, acquisition, or asset sale, Your Personal Data 
may be transferred. We will provide notice before Your Personal Data is transferred 
and becomes subject to a different Privacy Policy.
Law enforcement
<br>
Under certain circumstances, the Company may be required to disclose Your 
Personal Data if required to do so by law or in response to valid requests by public 
authorities (e.g. a court or a government agency).
<br>
Other legal requirements
<br>
The Company may disclose Your Personal Data in the good faith belief that such 
action is necessary to:<br>
<ul>
    <li>Comply with a legal obligation</li>
    <li>Protect and defend the rights or property of the Company</li>
    <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
    <li>Protect the personal safety of users of the Service or the public</li>
    <li>Protect against legal liability</li>
</ul>
Security of Your Personal Data
<br>
The security of Your Personal Data is important to us, but remember that no method 
of transmission over the Internet, or method of electronic storage is 100% secure. 
While we strive to use commercially acceptable means to protect Your Personal 
Data, We cannot guarantee its absolute security.
Children's Privacy
<br>
Our Service does not address anyone under the age of 13. We do not knowingly collect 
personally identifiable information from anyone under the age of 13. If You are a parent or
guardian and You are aware that Your child has provided Us with Personal Data, please 
Contact Us. If We become aware that We have collected Personal Data from anyone under 
the age of 13 without verification of parental consent, We take steps to remove that 
information from Our servers.
If We need to rely on consent as a legal basis for processing Your information and Your 
country requires consent from a parent, We may require Your parent's consent before We 
collect and use that information.
<br>
Links to Other Websites
<br>
Our Service may contain links to other websites that are not operated by Us. If you click on a 
third-party link, you will be directed to that third party's site. We strongly advise You to 
review the Privacy Policy of every site You visit.
We have no control over and assume no responsibility for the content, privacy policies or 
practices of any third-party sites or services.
<br>
Changes to this Privacy Policy
<br>
We may update Our Privacy Policy from time to time. We will notify You of any changes by 
posting the new Privacy Policy on this page.
We will let You know via email and/or a prominent notice on Our Service, prior to the 
change becoming effective and update the "Last Updated" date at the top of this Privacy 
Policy.
You are advised to review this Privacy Policy periodically for any changes. Changes to this 
Privacy Policy are effective when they are posted on this page
    </h5>
    <h3>Privacy Policy Under the Age of 13</h3>

Our platform is not directed to children under the age of 13. We do not collect personally data or ask sensitive information from such children. If you get to know that a child has been provided the personal data through registration so kindly contact us through contact form and inform us as soon as possible so we can go ahead with the policy.
</div>
</main>
</div>
@endsection