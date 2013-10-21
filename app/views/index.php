<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta name="description" content=" " />
    <meta name="keywords" content=" " />

    <title></title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="" />
    <link rel="shortcut icon" type="image/x-icon" href="" />

    <!-- Style sheets -->
    <link rel="stylesheet" href="./css/libs/ember-animated-outlet.css" />
    <link rel="stylesheet" href="./css/libs/ratchet.css" /><!-- Ratchet App CSS -->
    <link rel="stylesheet" href="./css/libs/dropzone.css" />
    <link rel="stylesheet" href="./css/general.css" /><!-- come after to over-write Ratchet -->
    <link rel="stylesheet" href="./js/libs/todc-select/select2.css" />
    <!-- <link rel="stylesheet" href="./css/normalize.css"> -->
    <script src="./js/libs/modernizr-2.6.2.min.js"></script>

     <!-- App UI/UX flow helpers -->
    <style>
     @import url(//fonts.googleapis.com/css?family=Lato:300,400,700);
    </style>



</head>

<body>

<div class="notificationbar">
    <p>Please ensure that you have all the field with the correct information!</p>
</div>

<script type="text/x-handlebars">
    <div class="app-content">
        <table class="nav">
            <tr>
                <td class="nav-side-bar">
                    <div class="nav-bar">
                        <ul>
                            <li {{action introduction}}>Home</li>
                            <li {{action aboutus}}>About Us</li>
                            <li {{action ourservices}}>Our Services</li>
                            <li class="blue-bg white small-padding" {{action myorder}}>Order Now</li>
                            <li {{action faq}}>FAQS</li>
                            <li {{action contactus}}>Contact Us</li>
                        </ul>
                    </div>
                    <div class="auth">
                        <br />
                            <h5>Welcome Back. <span style="color: dodgerblue">Sign In.</span></h5>
                            <form class="content-padded" action="login" method="POST">
                                <div class="input-group">
                                    <input type="email"
                                           data-bind="value: emailaddress"
                                           placeholder="Email Address">
                                    <input type="password"
                                           data-bind="value: password" 
                                           placeholder="Password">
                                </div>
                                <a class="button-block button-main">Log In</a>
                            </form>
                            Or <span style="color: dodgerblue" {{action signup}}>sign up?</span>

                        <br />
                    </div>
                </td>
                <td class="template-engine">
                    {{animatedOutlet name="main"}}
                </td>
            </tr>
        </table>
    </div>
</script>
<script type="text/x-handlebars" data-template-name="sign-in">
     <h5>Welcome Back. <span style="color: dodgerblue">Sign In.</span></h5>
        <form class="content-padded">
            <div class="input-group">
                <input type="email"
                       data-bind="value: emailaddress"
                       placeholder="Email Address">
                <input type="password"
                       data-bind="value: password" 
                       placeholder="Password">
            </div>
            <a class="button-block button-main">Log In</a>
        </form>
        Or <span style="color: dodgerblue">{{#link-to "sign-up"}}sign up?{{/link-to}}</span>
</script>

<script type="text/x-handlebars" data-template-name="faq">
    <div class="app-content">
      <h5>FAQ </h5>
           {{#each model}}
                {{topic}}
           {{/each}}
    </div>
</script>


<script type="text/x-handlebars" data-template-name="sign-up">
    <div class="contact-us">
        <h1 class="white small-padding align-center">Sign up page:</h1>
        <div class="contact-form" id="signup-form">

            <form class="content-padded" action="users" method="post">
                <div class="input-group">
                    <input type="email" data-bind="value: emailaddress" placeholder="Email Address">
                    <input type="password" data-bind="value: password" placeholder="Password">
                    <input type="password" placeholder="Repeat password">
                    <!-- <input type="password" data-bind="value: passwordconfirm" placeholder="Repeat password"> -->
                </div>
                
                <a class="button-block button-positive">Sign Up</a>
            </form>
        </div>
            
    </div>
</script>

<script type="text/x-handlebars" data-template-name="services">
    <div class="services">  
        {{#each model}}
            <div class="span6">

                <h3>{{title}}</h3>
                <ul>
                    {{#each sub}}
                      <li {{action "popst" this}}>{{ st }}</li>
                    {{/each}}
                </ul>

            </div>
        {{/each}}
    </div>
</script>

<script type="text/x-handlebars" data-template-name="popup">
  <div class="popup">
    <button class="popup-dismiss">x</button>
    <div class="popup-content">
        {{#view App.PopupView}}
          <p> Thank you for signing up! </p>
        {{/view}}
        hahahahh
    </div>
  </div>
</script>

<script type="text/x-handlebars" data-template-name="modal">
    
    <div class="modal-overlay"></div>
    <div class="modal soft">
    <span class="header">
        <button class="popup-dismiss" {{action "closeModal" target="view"}}>x</button>
        <h3>{{categorydata.st}}</h3>
    </span>
        {{categorydata.desc}}
      <button class="btn space-big soft" {{action "closeModal" target="view"}}>Back</button>
    </div>
</script>

<script type="text/x-handlebars" data-template-name="introduction">
    <div class="intro">
        <div class="intro-content">
            <h2> Hi, We are the academic writing Gurus!</h2>
            <p>and we are happy to do any kind of writing for you</p>

            <br />
            {{#linkTo "my-order"}}
            <h3 class="blue-bg white small-padding">Make an order now!</h3>
            {{/linkTo}}
        </div>
        <img src="images/PIC-001.jpg">

    </div>
</script>

<script type="text/x-handlebars" data-template-name="about-us">
        <div class="introduction">
            <div class="padding">

                <h2>Who we are</h2>

                <p>We are a company specializing in providing excellent writing services to students 
                and professionals across the globe. Need an excellent writing service? Then you are 
                home. We have qualified and experienced team of writers who just can’t wait to get 
                a hand on your project. They are not only enthusiastic about custom writing but 
                have the desire to give others knowledge and wisdom contained in the custom writing 
                services.</p>

                <h2>Why we are the best</h2>

                <p>Because we care about you being the best in your school. 
                Because of our integrity, because of our character, assuring you of receiving 
                non-plagiarized work in time, no delays, not a single second. And lastly because we 
                are reasonable in our prices. 
                </br></br>
                Do you have a writing project? Make an order now.</p>

            </div>
        </div>
</script>

<script type="text/x-handlebars" data-template-name="my-order">
<div class="myorder">
    <h1>Order Form</h1>
    <form id="order_form">
    <h4>Title or Topic</h4>
    <div class="options">
    </div>
    <input data-type="input" id="ordertitle" type="text" placeholder="eg. Knight in Glaring Darkness">

        <table>
        <tr>
            <td>
                <div class="options">
                    <h4>Type of Subject: </h4>
                    <select name="subject_area" id="subject" title="Subject area" 
                    onchange="javascript:doOrderFormCalculation();">
                       
                        <option value="10" >Art</option>
                        <option value="12" >&nbsp;&nbsp;Architecture</option>
                        <option value="15" >&nbsp;&nbsp;Dance</option>
                        <option value="17" >&nbsp;&nbsp;Design Analysis</option>
                        <option value="13" >&nbsp;&nbsp;Drama</option>
                        <option value="16" >&nbsp;&nbsp;Movies</option>

                        <option value="18" >&nbsp;&nbsp;Music</option>
                        <option value="11" >&nbsp;&nbsp;Paintings</option>
                        <option value="14" >&nbsp;&nbsp;Theatre</option>
                        <option value="112" >Biology</option>
                        <option value="52" >Business</option>
                        <option value="111" >Chemistry</option>

                        <option value="102" >Communications and Media</option>
                        <option value="105" >&nbsp;&nbsp;Advertising</option>
                        <option value="107" >&nbsp;&nbsp;Communication Strategies</option>
                        <option value="103" >&nbsp;&nbsp;Journalism</option>
                        <option value="104" >&nbsp;&nbsp;Public Relations</option>
                        <option value="115" >Creative writing</option>

                        <option value="53" >Economics</option>
                        <option value="60" >&nbsp;&nbsp;Accounting</option>
                        <option value="61" >&nbsp;&nbsp;Case Study</option>
                        <option value="58" >&nbsp;&nbsp;Company Analysis</option>
                        <option value="62" >&nbsp;&nbsp;E-Commerce</option>
                        <option value="59" >&nbsp;&nbsp;Finance</option>

                        <option value="57" >&nbsp;&nbsp;Investment</option>
                        <option value="63" >&nbsp;&nbsp;Logistics</option>
                        <option value="64" >&nbsp;&nbsp;Trade</option>
                        <option value="87" >Education</option>
                        <option value="93" >&nbsp;&nbsp;Application Essay</option>
                        <option value="89" >&nbsp;&nbsp;Education Theories</option>

                        <option value="88" >&nbsp;&nbsp;Pedagogy</option>
                        <option value="90" >&nbsp;&nbsp;Teacher`s Career</option>
                        <option value="67" >Engineering</option>
                        <option value="9" >English</option>
                        <option value="24" >Ethics</option>
                        <option value="36" >History</option>

                        <option value="38" >&nbsp;&nbsp;African-American Studies</option>
                        <option value="37" >&nbsp;&nbsp;American History</option>
                        <option value="42" >&nbsp;&nbsp;Asian Studies</option>
                        <option value="41" >&nbsp;&nbsp;Canadian Studies</option>
                        <option value="44" >&nbsp;&nbsp;East European Studies</option>
                        <option value="45" >&nbsp;&nbsp;Holocaust</option>

                        <option value="40" >&nbsp;&nbsp;Latin-American Studies</option>
                        <option value="39" >&nbsp;&nbsp;Native-American Studies</option>
                        <option value="43" >&nbsp;&nbsp;West European Studies</option>
                        <option value="47" >Law</option>
                        <option value="49" >&nbsp;&nbsp;Criminology</option>
                        <option value="48" >&nbsp;&nbsp;Legal Issues</option>

                        <option value="7" >Linguistics</option>
                        <option value="2" >Literature</option>
                        <option value="4" >&nbsp;&nbsp;American Literature</option>
                        <option value="5" >&nbsp;&nbsp;Antique Literature</option>
                        <option value="6" >&nbsp;&nbsp;Asian Literature</option>
                        <option value="3" >&nbsp;&nbsp;English Literature</option>

                        <option value="116" >&nbsp;&nbsp;Shakespeare Studies</option>
                        <option value="54" >Management</option>
                        <option value="56" >Marketing</option>
                        <option value="51" >Mathematics</option>
                        <option value="94" >Medicine and Health</option>
                        <option value="99" >&nbsp;&nbsp;Alternative Medicine</option>

                        <option value="97" >&nbsp;&nbsp;Healthcare</option>
                        <option value="101" >&nbsp;&nbsp;Nursing</option>
                        <option value="95" >&nbsp;&nbsp;Nutrition</option>
                        <option value="100" >&nbsp;&nbsp;Pharmacology</option>
                        <option value="96" >&nbsp;&nbsp;Sport</option>
                        <option value="78" >Nature</option>

                        <option value="85" >&nbsp;&nbsp;Agricultural Studies</option>
                        <option value="113" >&nbsp;&nbsp;Anthropology</option>
                        <option value="86" >&nbsp;&nbsp;Astronomy</option>
                        <option value="83" >&nbsp;&nbsp;Environmental Issues</option>
                        <option value="79" >&nbsp;&nbsp;Geography</option>
                        <option value="80" >&nbsp;&nbsp;Geology</option>

                        <option value="28" >Philosophy</option>
                        <option value="110" >Physics</option>
                        <option value="29" >Political Science</option>
                        <option value="21" >Psychology</option>
                        <option value="108" >Religion and Theology</option>
                        <option value="22" >Sociology</option>

                        <option value="65" >Technology</option>
                        <option value="71" >&nbsp;&nbsp;Aeronautics</option>
                        <option value="70" >&nbsp;&nbsp;Aviation</option>
                        <option value="72" >&nbsp;&nbsp;Computer Science</option>
                        <option value="73" >&nbsp;&nbsp;Internet</option>
                        <option value="75" >&nbsp;&nbsp;IT Management</option>

                        <option value="77" >&nbsp;&nbsp;Web Design</option>
                        <option value="114" >Tourism</option>
                    </select>
                </div>

                <div class="options">
                    <h4>Type of Document</h4>
                    <select name="document_type" id="document" title="type of document" 
                     onchange="javascript:doOrderFormCalculation();" >
                        <option value="1">Essay</option>
                        <option value="2">Term Paper</option>
                        <option value="3">Research Paper</option>
                        <option value="4">Coursework</option>
                        <option value="5">Book Report</option>
                        <option value="6">Book Review</option>
                        <option value="7">Movie Review</option>
                        <option value="8">Dissertation</option>
                        <option value="9">Thesis</option>
                        <option value="10">Thesis Proposal</option>
                        <option value="11">Research Proposal</option>
                        <option value="12">Dissertation Chapter - Abstract</option>
                        <option value="13">Dissertation Chapter - Introduction Chapter</option>
                        <option value="14">Dissertation Chapter - Literature Review</option>
                        <option value="15">Dissertation Chapter - Methodology</option>
                        <option value="16">Dissertation Chapter - Results</option>
                        <option value="17">Dissertation Chapter - Discussion</option>
                        <option value="18">Dissertation Services - Editing</option>
                        <option value="19">Dissertation Services - Proofreading</option>
                        <option value="20">Formatting</option>
                        <option value="21">Admission Services - Admission Essay</option>
                        <option value="22">Admission Services - Scholarship Essay</option>
                        <option value="23">Admission Services - Personal Statement</option>
                        <option value="24">Admission Services - Editing</option>
                        <option value="25">Editing</option>
                        <option value="26">Proofreading</option>
                        <option value="27">Case Study</option>
                        <option value="28">Lab Report</option>
                        <option value="29">Speech Presentation</option>
                        <option value="30">Math Problem</option>
                        <option value="31">Article</option>
                        <option value="32">Article Critique</option>
                        <option value="33">Annotated Bibliography</option>
                        <option value="34">Reaction Paper</option>
                        <option value="35">PowerPoint Presentation</option>
                        <option value="36">Statistics Project</option>
                        <option value="37">Multiple Choice Questions (None-Time-Framed)</option>
                        <option value="38">Other (Not listed)</option>
                    </select>
                </div>

                <div class="options">
                    <h4>Academic level</h4>
                    <select name="academic_level" id="academiclvl" title="Academic Level" 
                    onchange="javascript:doOrderFormCalculation();">
                        <option value="1">High School</option>
                        <option value="2">Undergraduate</option>
                        <option value="3">Master</option>
                        <option value="4">Ph. D.</option>
                    </select>
                </div>

                <div class="options">
                    <h4>How soon do you want it?</h4>
                    <select name="urgency" id="urgency" title="Paper Urgency"
                    onchange="javascript:doOrderFormCalculation();">

                        <option value="15" >30 days</option>
                        <option value="16" >6 hours</option>
                        <option value="6" >12 hours</option>
                        <option value="7" >24 hours</option>
                        <option value="8" >48 hours</option>
                        <option value="9" >3 days</option>
                        <option value="10" >4 days</option>
                        <option value="11" >5 days</option>
                        <option value="12" >7 days</option>
                        <option value="13" >10 days</option>
                        <option value="14" >20 days</option>
                    </select>
                </div>

                <div class="options">
                    <h4>Writting Style: </h4>
                    <select name="writing_style" id="writtingstyle" title="Writting Style">
                        <option value="APA">APA</option>
                        <option value="MLA">MLA</option>
                        <option value="Turabian">Turabian</option>
                        <option value="Chicago">Chicago</option>
                        <option value="Harvard">Harvard</option>
                        <option value="Oxford">Oxford</option>
                        <option value="Vancouver">Vancouver</option>
                        <option value="CBE">CBE</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="options">
                    <h4>Instructions</h4>
                    <textarea id="instructions" rows="5" data-type="textarea"  rows="5"></textarea>
                </div>
            </td>
            <td>
                <div class="options">
                    <h4>Prefered language: </h4>
                    <select name="langstyle" id="langstyle">
                        <option value="English (U.S.)">English (U.S.)</option>
                        <option value="English (U.K.)">English (U.K.)</option>
                    </select>
                </div>

                <div class="options">
                    <h4>Total pages required or words:</h4>
                    <select id="pgwdnumber" title="Number of pages" style="width: 170px;" class="big" name="numpages" 
                    onchange="javascript:doOrderFormCalculation();">

                        <option value="1">1 page/275 words</option>
                        
                        <option value="2">2 pages/550 words</option>

                        
                        <option value="3">3 pages/825 words</option>
                        
                        <option value="4">4 pages/1100 words</option>
                        
                        <option value="5">5 pages/1375 words</option>
                        
                        <option value="6">6 pages/1650 words</option>
                        
                        <option value="7">7 pages/1925 words</option>
                        
                        <option value="8">8 pages/2200 words</option>

                        
                        <option value="9">9 pages/2475 words</option>
                        
                        <option value="10">10 pages/2750 words</option>
                        
                        <option value="11">11 pages/3025 words</option>
                        
                        <option value="12">12 pages/3300 words</option>
                        
                        <option value="13">13 pages/3575 words</option>
                        
                        <option value="14">14 pages/3850 words</option>

                        
                        <option value="15">15 pages/4125 words</option>
                        
                        <option value="16">16 pages/4400 words</option>
                        
                        <option value="17">17 pages/4675 words</option>
                        
                        <option value="18">18 pages/4950 words</option>
                        
                        <option value="19">19 pages/5225 words</option>
                        
                        <option value="20">20 pages/5500 words</option>

                        
                        <option value="21">21 pages/5775 words</option>
                        
                        <option value="22">22 pages/6050 words</option>
                        
                        <option value="23">23 pages/6325 words</option>
                        
                        <option value="24">24 pages/6600 words</option>
                        
                        <option value="25">25 pages/6875 words</option>
                        
                        <option value="26">26 pages/7150 words</option>

                        
                        <option value="27">27 pages/7425 words</option>
                        
                        <option value="28">28 pages/7700 words</option>
                        
                        <option value="29">29 pages/7975 words</option>
                        
                        <option value="30">30 pages/8250 words</option>
                        
                        <option value="31">31 pages/8525 words</option>
                        
                        <option value="32">32 pages/8800 words</option>

                        
                        <option value="33">33 pages/9075 words</option>
                        
                        <option value="34">34 pages/9350 words</option>
                        
                        <option value="35">35 pages/9625 words</option>
                        
                        <option value="36">36 pages/9900 words</option>
                        
                        <option value="37">37 pages/10175 words</option>
                        
                        <option value="38">38 pages/10450 words</option>

                        
                        <option value="39">39 pages/10725 words</option>
                        
                        <option value="40">40 pages/11000 words</option>
                        
                        <option value="41">41 pages/11275 words</option>
                        
                        <option value="42">42 pages/11550 words</option>
                        
                        <option value="43">43 pages/11825 words</option>
                        
                        <option value="44">44 pages/12100 words</option>

                        
                        <option value="45">45 pages/12375 words</option>
                        
                        <option value="46">46 pages/12650 words</option>
                        
                        <option value="47">47 pages/12925 words</option>
                        
                        <option value="48">48 pages/13200 words</option>
                        
                        <option value="49">49 pages/13475 words</option>
                        
                        <option value="50">50 pages/13750 words</option>

                        
                        <option value="51">51 pages/14025 words</option>
                        
                        <option value="52">52 pages/14300 words</option>
                        
                        <option value="53">53 pages/14575 words</option>
                        
                        <option value="54">54 pages/14850 words</option>
                        
                        <option value="55">55 pages/15125 words</option>
                        
                        <option value="56">56 pages/15400 words</option>

                        
                        <option value="57">57 pages/15675 words</option>
                        
                        <option value="58">58 pages/15950 words</option>
                        
                        <option value="59">59 pages/16225 words</option>
                        
                        <option value="60">60 pages/16500 words</option>
                        
                        <option value="61">61 pages/16775 words</option>
                        
                        <option value="62">62 pages/17050 words</option>

                        
                        <option value="63">63 pages/17325 words</option>
                        
                        <option value="64">64 pages/17600 words</option>
                        
                        <option value="65">65 pages/17875 words</option>
                        
                        <option value="66">66 pages/18150 words</option>
                        
                        <option value="67">67 pages/18425 words</option>
                        
                        <option value="68">68 pages/18700 words</option>

                        
                        <option value="69">69 pages/18975 words</option>
                        
                        <option value="70">70 pages/19250 words</option>
                        
                        <option value="71">71 pages/19525 words</option>
                        
                        <option value="72">72 pages/19800 words</option>
                        
                        <option value="73">73 pages/20075 words</option>
                        
                        <option value="74">74 pages/20350 words</option>

                        
                        <option value="75">75 pages/20625 words</option>
                        
                        <option value="76">76 pages/20900 words</option>
                        
                        <option value="77">77 pages/21175 words</option>
                        
                        <option value="78">78 pages/21450 words</option>
                        
                        <option value="79">79 pages/21725 words</option>
                        
                        <option value="80">80 pages/22000 words</option>

                        
                        <option value="81">81 pages/22275 words</option>
                        
                        <option value="82">82 pages/22550 words</option>
                        
                        <option value="83">83 pages/22825 words</option>
                        
                        <option value="84">84 pages/23100 words</option>
                        
                        <option value="85">85 pages/23375 words</option>
                        
                        <option value="86">86 pages/23650 words</option>

                        
                        <option value="87">87 pages/23925 words</option>
                        
                        <option value="88">88 pages/24200 words</option>
                        
                        <option value="89">89 pages/24475 words</option>
                        
                        <option value="90">90 pages/24750 words</option>
                        
                        <option value="91">91 pages/25025 words</option>
                        
                        <option value="92">92 pages/25300 words</option>

                        
                        <option value="93">93 pages/25575 words</option>
                        
                        <option value="94">94 pages/25850 words</option>
                        
                        <option value="95">95 pages/26125 words</option>
                        
                        <option value="96">96 pages/26400 words</option>
                        
                        <option value="97">97 pages/26675 words</option>
                        
                        <option value="98">98 pages/26950 words</option>

                        
                        <option value="99">99 pages/27225 words</option>
                        
                        <option value="100">100 pages/27500 words</option>
                        
                        <option value="101">101 pages/27775 words</option>
                        
                        <option value="102">102 pages/28050 words</option>
                        
                        <option value="103">103 pages/28325 words</option>
                        
                        <option value="104">104 pages/28600 words</option>

                        
                        <option value="105">105 pages/28875 words</option>
                        
                        <option value="106">106 pages/29150 words</option>
                        
                        <option value="107">107 pages/29425 words</option>
                        
                        <option value="108">108 pages/29700 words</option>
                        
                        <option value="109">109 pages/29975 words</option>
                        
                        <option value="110">110 pages/30250 words</option>

                        
                        <option value="111">111 pages/30525 words</option>
                        
                        <option value="112">112 pages/30800 words</option>
                        
                        <option value="113">113 pages/31075 words</option>
                        
                        <option value="114">114 pages/31350 words</option>
                        
                        <option value="115">115 pages/31625 words</option>
                        
                        <option value="116">116 pages/31900 words</option>

                        
                        <option value="117">117 pages/32175 words</option>
                        
                        <option value="118">118 pages/32450 words</option>
                        
                        <option value="119">119 pages/32725 words</option>
                        
                        <option value="120">120 pages/33000 words</option>
                        
                        <option value="121">121 pages/33275 words</option>
                        
                        <option value="122">122 pages/33550 words</option>

                        
                        <option value="123">123 pages/33825 words</option>
                        
                        <option value="124">124 pages/34100 words</option>
                        
                        <option value="125">125 pages/34375 words</option>
                        
                        <option value="126">126 pages/34650 words</option>
                        
                        <option value="127">127 pages/34925 words</option>
                        
                        <option value="128">128 pages/35200 words</option>

                        
                        <option value="129">129 pages/35475 words</option>
                        
                        <option value="130">130 pages/35750 words</option>
                        
                        <option value="131">131 pages/36025 words</option>
                        
                        <option value="132">132 pages/36300 words</option>
                        
                        <option value="133">133 pages/36575 words</option>
                        
                        <option value="134">134 pages/36850 words</option>

                        
                        <option value="135">135 pages/37125 words</option>
                        
                        <option value="136">136 pages/37400 words</option>
                        
                        <option value="137">137 pages/37675 words</option>
                        
                        <option value="138">138 pages/37950 words</option>
                        
                        <option value="139">139 pages/38225 words</option>
                        
                        <option value="140">140 pages/38500 words</option>

                        
                        <option value="141">141 pages/38775 words</option>
                        
                        <option value="142">142 pages/39050 words</option>
                        
                        <option value="143">143 pages/39325 words</option>
                        
                        <option value="144">144 pages/39600 words</option>
                        
                        <option value="145">145 pages/39875 words</option>
                        
                        <option value="146">146 pages/40150 words</option>

                        
                        <option value="147">147 pages/40425 words</option>
                        
                        <option value="148">148 pages/40700 words</option>
                        
                        <option value="149">149 pages/40975 words</option>
                        
                        <option value="150">150 pages/41250 words</option>
                        
                        <option value="151">151 pages/41525 words</option>
                        
                        <option value="152">152 pages/41800 words</option>

                        
                        <option value="153">153 pages/42075 words</option>
                        
                        <option value="154">154 pages/42350 words</option>
                        
                        <option value="155">155 pages/42625 words</option>
                        
                        <option value="156">156 pages/42900 words</option>
                        
                        <option value="157">157 pages/43175 words</option>
                        
                        <option value="158">158 pages/43450 words</option>

                        
                        <option value="159">159 pages/43725 words</option>
                        
                        <option value="160">160 pages/44000 words</option>
                        
                        <option value="161">161 pages/44275 words</option>
                        
                        <option value="162">162 pages/44550 words</option>
                        
                        <option value="163">163 pages/44825 words</option>
                        
                        <option value="164">164 pages/45100 words</option>

                        
                        <option value="165">165 pages/45375 words</option>
                        
                        <option value="166">166 pages/45650 words</option>
                        
                        <option value="167">167 pages/45925 words</option>
                        
                        <option value="168">168 pages/46200 words</option>
                        
                        <option value="169">169 pages/46475 words</option>
                        
                        <option value="170">170 pages/46750 words</option>

                        
                        <option value="171">171 pages/47025 words</option>
                        
                        <option value="172">172 pages/47300 words</option>
                        
                        <option value="173">173 pages/47575 words</option>
                        
                        <option value="174">174 pages/47850 words</option>
                        
                        <option value="175">175 pages/48125 words</option>
                        
                        <option value="176">176 pages/48400 words</option>

                        
                        <option value="177">177 pages/48675 words</option>
                        
                        <option value="178">178 pages/48950 words</option>
                        
                        <option value="179">179 pages/49225 words</option>
                        
                        <option value="180">180 pages/49500 words</option>
                        
                        <option value="181">181 pages/49775 words</option>
                        
                        <option value="182">182 pages/50050 words</option>

                        
                        <option value="183">183 pages/50325 words</option>
                        
                        <option value="184">184 pages/50600 words</option>
                        
                        <option value="185">185 pages/50875 words</option>
                        
                        <option value="186">186 pages/51150 words</option>
                        
                        <option value="187">187 pages/51425 words</option>
                        
                        <option value="188">188 pages/51700 words</option>

                        
                        <option value="189">189 pages/51975 words</option>
                        
                        <option value="190">190 pages/52250 words</option>
                        
                        <option value="191">191 pages/52525 words</option>
                        
                        <option value="192">192 pages/52800 words</option>
                        
                        <option value="193">193 pages/53075 words</option>
                        
                        <option value="194">194 pages/53350 words</option>

                        
                        <option value="195">195 pages/53625 words</option>
                        
                        <option value="196">196 pages/53900 words</option>
                        
                        <option value="197">197 pages/54175 words</option>
                        
                        <option value="198">198 pages/54450 words</option>
                        
                        <option value="199">199 pages/54725 words</option>
                        
                        <option value="200">200 pages/55000 words</option>
                    </select>
                    <div id="num_pg_ord" class="num_pg"></div>
                </div>

                <div class="_spacing">
                    <input type="checkbox" name="o_interval" value="1" onchange="javascript:doOrderFormCalculation();"/>
                    &nbsp;<b>Single spaced</b>
                </div>

                <div class="options">
                    <h4>Choise of currency</h4>
                    <select name="curr" style="width: 100px;" 
                    onchange="javascript:doOrderFormCalculation();">
                        <option value="1">USD</option>
                        <option value="2">GBP</option>
                        <option value="3">CAD</option>
                        <option value="4">AUD</option>
                        <option value="5">EUR</option>
                    </select>
                </div>
                <div class="options">
                    <label for="cost_per_page">Cost per page:</label>                       
                    <span id="cost_per_page" class="order_input3"></span>

                    <div class="totalcost">
                        <h1><span id="key">Total: </span>
                        <span id="tcost">10.10</span></h1>
                    </div>
                    <br />
                    <hr />
                    <a id="submitAttach" class="button-block button-positive">Upload Attachments &amp; Submit</a>
                </div>
            </td>
        </tr>
        </table>

        <input type="hidden" name="discount_percent_h" class="discount_percent_h" value="" />
        <input type="hidden" name="discount_h" value="" />                      
        <input type="hidden" name="lblCustomerSavings" value="" /> 

        <!--<label for="promo">Discount code:</label>!-->

        <input type="hidden" class="discount_code" name="discount_code" />
        <input type="hidden" name="0bb6c36d0203642ba42e79df168efa3a" value="MGJiNmMzNmQwMjAzNjQyYmE0MmU3OWRmMTY4ZWZhM2E=" />
        <input type="hidden" name="29cece43ba2d4bcaea8c78eb02aea395" value="MjljZWNlNDNiYTJkNGJjYWVhOGM3OGViMDJhZWEzOTU=" />
        <input type="hidden" name="ee52948c809e658a2e2bfd66f90aef6b" value="ZWU1Mjk0OGM4MDllNjU4YTJlMmJmZDY2ZjkwYWVmNmI=" />
        <input type="hidden" name="MTIuOTUYGREXGHNMKJGT23467GGFDSSSbbbbbIOK" value="" />
        <input type="hidden" name="MMNBGFREWQASCXZSOPJHGVNMTIuOTU" class="MMNBGFREWQASCXZSOPJHGVNMTIuOTU" value="" />
        <input type="hidden"  id="total" name="total" />
    </form>

        <div class="uploadAttachment">
            <div class="dropithere">
                <h3>Attach any required files</h3>
                <form action="./xfiles" enctype="multipart/form-data" class="dropzone dz-clickable" id="my-dropzone">
                    <div class="dz-default dz-message">
                        <span>Click here or drag and drop files here to upload</span>
                    </div>
                </form>
                <br />
                <a id="submitOrder"
                   data-processing="Uploading files..."
                   data-complete="Order submitted successfully."
                   class="button-block button-main">Submit Order</a>
            </div>
        </div>

        <div class="overlay"></div>
    </div>
</script>

<script type="text/x-handlebars" data-template-name="contact-us">
    <div class="contact-us">
        <h1 class="white small-padding align-center">Write to us:</h1>
        <div class="contact-form">
            <form>
                <input type="text" placeholder="Full names">
                <input type="text" placeholder="Email address">
                <textarea rows="6" placeholder="So tell us something interesting..."></textarea>
                <a class="button-block button-main">Send Message</a>
            </form>
        </div>
    </div>
</script>

 <script type="text/x-handlebars" data-template-name="contacts">
    <div class="contacts">
        <h1 class="white small-padding align-center">Write to us:</h1>
        <div class="contact-form">
            <form>
                <input type="text" placeholder="Full names">
                <input type="text" placeholder="Email address">
                <textarea rows="6" placeholder="So tell us something interesting..."></textarea>
                <a class="button-block button-main">Send Message</a>
            </form>
        </div>
    </div>
</script>

    <!-- basic necessities -->
    <script type="text/javascript" src="./js/libs/jquery.min.js"></script>
    <script type="text/javascript" src="./js/libs/jquery.cookie.js"></script>
    <script type="text/javascript" src="./js/libs/ratchet.min.js"></script>

    <!-- Its an Ember Application -->
    <script type="text/javascript" src="./js/libs/handlebars.min.js"></script>
    <script type="text/javascript" src="./js/libs/ember.prod.js"></script>
    <script type="text/javascript" src="./js/libs/ember-data.prod.js"></script>
    <script type="text/javascript" src="./js/libs/ember-animated-outlet.js"></script>

    <!-- dependencies -->
    <!-- // <script type="text/javascript" src="./js/libs/knockout-2.2.1.js"></script> -->
    <!-- // <script type="text/javascript" src="./js/libs/ko-rules.js"></script> -->
    <!-- // <script type="text/javascript" src="./js/libs/knockout.validation.js"></script> -->

    <script type="text/javascript" src="./js/libs/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="./js/libs/todc-select/select2.min.js"></script>

    <!-- Takes care of file uploads -->
    <script type="text/javascript" src="./js/libs/dropzone.min.js"></script>

    <!-- Apps initialisation requirements -->
    <script type="text/javascript" src="./js/application.js"></script>
    <script type="text/javascript" src="./js/models.js"></script>
    <script type="text/javascript" src="./js/elements.js"></script>
    <script type="text/javascript" src="./js/controllers.js"></script>
    <script type="text/javascript" src="./js/writting_charges.js"></script>

        <script type="text/javascript">
        //make this global
        Dropzone.autoDiscover = false; //disable autodiscovery of formfield for uploading files
        $(function() {
            //Instantiate KO order input bindings
            // ko.applyBindings(sideBarModel, document.querySelector('.auth'));

            $('.nav').css('height', window.innerHeight);
            // $('.services div').css('width', function() {
            //     // $(this).height(window.innerHeight/3)
            //     var width = $('.template-engine').width()/($(this).parent().children().length);
            //     // $(this).parent().masonry({columnWidth: width, itemSelector: '.span6'})
            //     return width;
            // });

            //Mozilla and other height correction for myorder page
            $('.myorder').height(window.innerHeight);
        })

    </script>
</body>
</html>
