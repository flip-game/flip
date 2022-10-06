<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include($_SERVER['DOCUMENT_ROOT']."/backend/functions.php"); ?>
<html prefix="og: http://ogp.me/ns#" lang="en"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><head>
<title>flip! | Register</title>
<link rel="icon" type="image/png" href="../../storage/img/flip_normal.png">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="flip! is an online interactive game platform.">
<meta name="keywords" value="flip, flip!, roblox, blox, game">
<meta name="author" content="flip! Limited">
<meta property="og:image" content="../../storage/img/flip_normal.png">

<meta name="csrf-token" content="a69c2c95a779b5bc651583e229170f6112047b4d">

<link rel="stylesheet" href="../../storage/css/bpr.css?r=1925095563">
<link rel="stylesheet" href="../../storage/css/foundation.css?r=1023900208">
<link rel="stylesheet" href="../../storage/css/main.css?r=1834174416">

<style>
/* Core BPR styles */


body{
    /*overflow-x: hidden !important;*/
}
:root{
        --primary-txt-color: #E1E4EB;
      --main-background-color: #232529;
      --main-sidebar-color: #25272b;
      --sidebar-active: #1e2023;
      --main-top-color: #25272b;
      --top-bar-search: #33363c;
      --top-bar-search-focus: #40434a;
      --shadow-primary: #131313;
      --container-bg: #2c3038;
      --footer-bg: #2c3038b3;
      --astro-txt: #ae73e4;
}
/*img::before { content: "loading…" }*/

[v-cloak] > * { display:none }
[v-cloak]::before { content: "loading…" }

  </style>
<link rel="stylesheet" href="../../storage/css/dark-style.css?r=2062899602">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.1/js/foundation.min.js"></script><meta class="foundation-mq">
<script src="../../storage/js/new.js"></script>

<meta class="foundation-mq">

<!-- VueJS -->
<!--dev-->
<!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>-->
<!--production-->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>

<div class="site-wrap">
<div class="top-bar">
<div class="top-bar-left">
<div class="grid-x align-middle grid-margin-x">
<div class="shrink cell hide-for-large">
<button class="menu-icon sidebar-menu-icon" type="button" data-toggle="side-bar" aria-controls="side-bar" aria-expanded="true"></button>
</div>
<div class="shrink cell menu-logo">
<a href="/">
<img src="../../storage/img/flip_normal.png" class="show-for-large" width="45" height="18">
<img src="../../storage/img/flip_normal.png" class="hide-for-large" style="height:32px;">
</a>
</div>

<div class="shrink cell">
<ul class="menu align-middle">
<li class="menu-login show-for-medium">
<div class="menu-log-in">
<a href="/account/login">Log In</a>
</div>
</li>
<li class="menu-createaccount show-for-medium">
<div class="menu-create-account">
<a href="/account/register">Join Now</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="top-bar-push"></div>
<div class="grid-x grid-margin-x">
<div class="sidebar-shrink shrink cell no-margin">
<div class="side-bar" data-toggler="ox1nso-toggler" data-animate="fade-in fade-out" id="side-bar" aria-expanded="true" data-n="evo8u8-n">
<div class="side-bar-inner">
<ul class="hide-for-medium">
<li>
<a href="/account/login">
<i class="material-icons">person</i>
<span>Log In</span>
</a>
</li>
<li>
<a href="/account/register">
<i class="material-icons">person_add</i>
<span>Create Account</span>
</a>
</li>
</ul>
<div class="sbdivider hide-for-medium"></div>
<ul>
<li>
<a href="/">
<i class="material-icons">home</i>
<span>Home</span>
</a>
</li>
<li>
<a href="/games">
<i class="material-icons">public</i>
<span>Games</span>
</a>
</li>
<li>
<a href="/catalog">
<i class="material-icons">store</i>
<span>Catalog</span>
</a>
</li>





<li>
<a href="/upgrade">
<i class="material-icons">add_circle</i>
<span>Upgrade</span>
</a>
</li>



</ul>
</div>
</div>
</div>


<div class="auto cell no-margin">
<div class="grid-container site-container-margin">

<div class="main-site-push"></div>

<div id="app"><style>
.custom-input{
    width: 100%;
    display: block;
    margin-bottom: 15px;
    outline: none;
    padding: 10px 20px;
    background: #0f0f12;
    border: 0;
    color: #f5f5f5;
    line-height: 1.5;
    font-size: 16px;
    border-radius: 4px;
}
.login-form input[type="email"]{
    width: 100%;
    display: block;
    margin-bottom: 15px;
    outline: none;
    padding: 10px 20px;
    background: #0f0f12;
    border: 0;
    color: #f5f5f5;
    line-height: 1.5;
    font-size: 16px;
    border-radius: 4px;
}
input[type="email"]{
    width: 100%;
    display: block;
    margin-bottom: 15px;
    outline: none;
    padding: 10px 20px;
    background: #0f0f12;
    border: 0;
    color: #f5f5f5;
    line-height: 1.5;
    font-size: 16px;
    border-radius: 4px;
}
</style>
<!--<script src='https://www.hCaptcha.com/1/api.js' async defer></script>-->
 <div class="grid-x grid-margin-x">
<div class="large-6 large-offset-3 medium-12 small-12 cell">
<h4>Sign up for an account</h4>
<div class="error-message" style="display:none;"></div>
<div class="container lg-padding border-r login-form">
    
<form action="/account/register" method="POST">
<?php echo display_error(); ?>
<input type="hidden" name="_token" value="eQnbkjR1TSoWst2z5yn77f2yEsZ8TevHAhrjiMvW">

<div class="grid-x grid-margin-x">
<div class="auto cell">
<input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
<input type="password" name="password" placeholder="Password">
<input type="password" name="password_confirmation" placeholder="Confirm Password">
<!--<div class="h-captcha" data-sitekey="d7807756-162d-4709-9acf-7217c903680b"></div>-->
</div>
</div>
<!--
<div class="grid-x grid-margin-x align-mdidle">
<div class="auto cell">
<strong>Birthdate:</strong>
</div>
</div>
<div class="push-5"></div>
<div class="grid-x grid-margin-x align-mdidle">
<div class="large-6 medium-auto small-auto cell">
<select class="normal-input" id="dobMonth">
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
</div>
<div class="large-3 medium-auto small-auto cell">
<select class="normal-input" id="dobDay">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</div>
<div class="large-3 medium-auto small-auto cell">
<select class="normal-input" id="dobYear">
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
 <option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
</select>
</div>
</div>
<div class="push-25"></div>
-->



<div class="push-25"></div>

<div class="grid-x grid-margin-x">
<div class="auto cell">
<div class="push-10"></div>
<button type="submit" class="btn button-green button i" name="register_btn">Sign Up</button>
</div>
</div>
</form>
<div class="grid-x grid-margin-x">
<div class="auto cell">
</div>
</div>
</div>
</div>
</div>

</div>
</div>

</div>
<!-- VueJS Scripts -->
<script>
var userCurrency = new Vue({
  el: '#userCurrency',
  data: {
      credits: '', bits: ''
  }
})

var user = new Vue({
  el: '#user',
  data: {
      username: '', credits: '', bits: ''
  }
})

var name = new Vue({
  el: '#name',
  data: {
      name: ''
  }
})

var app = new Vue({
  el: '#app',
  
  data: {
    user: [
      { username: '', email: '', credits: '', bits: '', power: '' }
    ],

    subforum: [
      { name: 'Hello world!' }
    ]

  }

    
})
</script>
<!--End Scripts-->
</div>
<div style="height:125px;"></div>
</div>

<div class="site-footer">
<div class="grid-x grid-margin-x">
<div class="sidebar-shrink shrink cell no-margin">
&nbsp;
</div>
<div class="auto cell no-margin">
<div class="grid-container">
<div class="grid-x grid-margin-x">



<div class="large-2 large-offset-1 medium-3 medium-offset-0 small-4 small-offset-2 cell">
<div class="footer-title">Community</div>
<ul class="footer-links social-media">
<li><a href="https://discord.gg/k8y8uw5UMy" target="_blank"><i class="fab fa-discord"></i><span>Discord</span></a></li>



</ul>
</div>
</div>
<div class="footer-divider"></div>
<div class="footer-text">© Copyright 2021-2022 <span style="font-weight: bold;">flip! Limited</span> All rights reserved.</div>
<!--
<div class="footer-text" style="height: 0px !important; margin-top: 5px !important;">bricked.tk</div>
-->
</div>
</div>
</div>
</div>

<div class="reveal-overlay"></div><div class="reveal-overlay">
</div>



<div class="reveal-overlay"><div class="reveal item-modal" id="globalModal" data-reveal="x9atrl-reveal" data-animation-in="fade-in" data-animation-out="fade-out" role="dialog" aria-hidden="true" data-yeti-box="globalModal" data-resize="globalModal" data-events="resize" style="top: 240px;" data-n="xu476s-n">
<div class="grid-x grid-margin-x align-middle">
<div class="auto cell no-margin">
<div class="modal-title" id="globalModalTitle"></div>
</div>
<div class="shrink cell no-margin">
<button class="close-button" data-close="" aria-label="Close modal" type="button"><span aria-hidden="true">×</span></button>
</div>
</div>
<div class="push-15"></div>
<div id="globalModalMessage"></div>
</div></div><div class="reveal-overlay"><div class="reveal error-modal" id="errorModal" data-reveal="befy58-reveal" data-animation-in="fade-in" data-animation-out="fade-out" role="dialog" aria-hidden="true" data-yeti-box="errorModal" data-resize="errorModal" data-events="resize" style="top: 240px;" data-n="1tsfje-n">
<div class="grid-x grid-margin-x align-middle">
<div class="auto cell no-margin">
<div class="modal-title" id="errorTitle"></div>
</div>
<div class="shrink cell no-margin">
<button class="close-button" data-close="" aria-label="Close modal" type="button"><span aria-hidden="true"></span></button>
</div>
</div>
<div class="push-15"></div>
<div id="errorMessage"></div>
<div class="push-15"></div>
<div id="errModalFooter" class="text-center">
<a class="button button-grey store-button inline-block" data-close="">Close</a>
</div>
</div></div></body></html>
