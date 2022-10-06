<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include($_SERVER['DOCUMENT_ROOT']."/backend/functions.php"); ?>


<html prefix="og: http://ogp.me/ns#" lang="en">
<head>
<title>flip! | Login</title>
<link rel="icon" type="image/png" href="../../storage/img/flip_normal.png">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="flip! is an online interactive game platform.">
<meta name="keywords" value="flip, flip!, roblox, blox, game">
<meta name="author" content="flip! Limited">
<meta property="og:image" content="../../storage/img/flip_normal.png">

<meta name="csrf-token" content="a69c2c95a779b5bc651583e229170f6112047b4d">

<link rel="stylesheet" href="../../storage/css/bpr.css?r=316090843">
<link rel="stylesheet" href="../../storage/css/foundation.css?r=2025666823">
<link rel="stylesheet" href="../../storage/css/main.css?r=1455368907">

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
<link rel="stylesheet" href="../../storage/css/dark-style.css?r=1066187534">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.1/js/foundation.min.js"></script>
<script src="/storage/js/new.js"></script>

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
<button class="menu-icon sidebar-menu-icon" type="button" data-toggle="side-bar" aria-controls="side-bar"></button>
</div>
<div class="shrink cell menu-logo">
<a href="/">
<img src="../../storage/img/flip_normal.png" class="show-for-large" width="45" height="18">
</a>
</div>
<div class="auto cell no-margin">
<div class="search-dropdown-parent">
<div id="search-dropdown" class="search-dropdown fast" data-toggler="u32dn2-toggler" data-animate="fade-in fade-out" style="display:none;z-index: 100;" aria-expanded="false">
<div id="show-recent">
</div>
<div id="search-dropdown-content"></div>
</div>
</div>
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
<div class="side-bar" data-toggler="ox1nso-toggler" data-animate="fade-in fade-out" id="side-bar" aria-expanded="true">
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
<a href="/store">
<i class="material-icons">store</i>
<span>Catalog</span>
</a>
</li>
<a href="/upgrade">
<li>
<i class="material-icons">add_circle</i>
<span>Upgrade</span>
</a>
</li>
<br>

</ul>
</div>
</div>
</div>


<div class="auto cell no-margin">
<div class="grid-container site-container-margin">

<div class="main-site-push"></div>

<div id="app">
 <div class="grid-x grid-margin-x">
<div class="large-6 large-offset-3 medium-12 small-12 cell">
<h4>Sign in to your account</h4>
<div class="error-message" style="display:none;"></div>
<div class="container lg-padding border-r login-form">
<form action="#" method="POST">
<div class="grid-x grid-margin-x">
<div class="auto cell">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
</div>
</div>

<div class="push-5"></div>
<div class="grid-x grid-margin-x">
<div class="auto cell">
<button type="submit" class="button-green button i" name="login_btn">Log In</button>
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
<div class="footer-divider"></div>
<div class="footer-text">&copy; Copyright 2021-2022 <span style="font-weight: bold;">flip! Limited</span> All rights reserved.</div>
<!--
<div class="footer-text" style="height: 0px !important; margin-top: 5px !important;">bricked.tk</div>
-->
</div>
</div>
</div>
</div>

<div class="reveal-overlay"><div class="reveal item-modal" id="globalModal" data-reveal="x9atrl-reveal" data-animation-in="fade-in" data-animation-out="fade-out" role="dialog" aria-hidden="true" data-yeti-box="globalModal" data-resize="globalModal" data-events="resize" style="top: 102px;">
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
</div></div><div class="reveal-overlay"><div class="reveal error-modal" id="errorModal" data-reveal="befy58-reveal" data-animation-in="fade-in" data-animation-out="fade-out" role="dialog" aria-hidden="true" data-yeti-box="errorModal" data-resize="errorModal" data-events="resize" style="top: 102px;">
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
</div>
</div>

</body>
</html>
