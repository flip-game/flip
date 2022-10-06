<html prefix="og: http://ogp.me/ns#" lang="en"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><head>
<title>flip! | Upgrade</title>
<link rel="icon" type="image/png" href="../storage/img/flip_normal.png">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="flip! is an online interactive game platform.">
<meta name="keywords" value="flip, flip!, roblox, blox, game">
<meta name="author" content="flip! Limited">
<meta property="og:image" content="../../storage/img/flip_normal.png">

<meta name="csrf-token" content="a69c2c95a779b5bc651583e229170f6112047b4d">

<link rel="stylesheet" href="../storage/css/bpr.css?r=1998872949">
<link rel="stylesheet" href="../storage/css/foundation.css?r=1591871906">
<link rel="stylesheet" href="../storage/css/main.css?r=1658884917">

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
<link rel="stylesheet" href="../storage/css/dark-style.css?r=1980638098">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.1/js/foundation.min.js"></script><meta class="foundation-mq">
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
<button class="menu-icon sidebar-menu-icon" type="button" data-toggle="side-bar" aria-controls="side-bar" aria-expanded="true"></button>
</div>

<div class="auto cell no-margin">

<div class="search-dropdown-parent">
<div id="search-dropdown" class="search-dropdown fast" data-toggler="u32dn2-toggler" data-animate="fade-in fade-out" style="display:none;z-index: 100;" aria-expanded="false" data-n="95c3e1-n">
<div id="show-recent">
<div style="padding:5px 15px;">Search by username, games, store items, and communities</div>
</div>
<div id="search-dropdown-content"></div>
</div>
</div>
</div>
<div class="shrink cell">
<ul class="menu align-middle">
<li class="menu-login show-for-medium">
<div class="menu-log-in">
<a href="../">Main Page</a>
</div>
</li>

</ul>
</div>
</div>
</div>
</div>
<div class="top-bar-push"></div>
<div class="grid-x grid-margin-x">



<div class="auto cell no-margin">
<div class="grid-container site-container-margin">

<div class="main-site-push"></div>

<div id="app">
<div class="grid-container  site-container-margin">
<div class="main-site-push"></div>
	<div class="grid-x grid-margin-x">
		<div class="large-9 upgrade-offset cell">
			<div class="grid-x grid-margin-x">
				<div class="auto cell no-margin">
					<h4>Upgrades (More Upgrades at the <a href="https://discord.gg/7PD8vhRZFw">Discord</a>!) </h4> 
				</div>
				
				
				
			</div>
		</div>
	</div>
	<div class="push-25"></div>
	<div class="upgrade-title">MEMBERSHIPS</div>
	<div class="push-25"></div>
	<div class="grid-x grid-margin-x">
		
	<div class="large-3 medium-4 small-6 upgrade-offset cell" style="margin-left: 460px;">
			
		<div class="container border-r">
				<div class="push-15"></div>
				<div class="upgrade-card-image" style="background:url(../storage/img/platinum.png); background-size: 100px 100px;"></div>
				<div class="upgrade-card-title">Platinum</div>
				<div class="upgrade-card-price">$20 USD</div>
				<div class="upgrade-card-inner">
					<div class="upgrade-card-info"><strong>10,000</strong> Bits/week</div>
					<div class="upgrade-card-info">Get the new <strong>Platinum Crown</strong> avatar item</div>
					<div class="upgrade-card-info">This Membership is <strong>FOREVER</strong> permanent</div>
				</div>
				<div class="upgrade-card-divider"></div>
				<div class="upgrade-card-button">
					<form action="" method="POST">
						<button type="submit" class="button button-green" name="choose_1">Choose</button>
					</form>
				</div>
			</div></div></div>

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



<div class="reveal-overlay"><div class="reveal item-modal" id="globalModal" data-reveal="x9atrl-reveal" data-animation-in="fade-in" data-animation-out="fade-out" role="dialog" aria-hidden="true" data-yeti-box="globalModal" data-resize="globalModal" data-events="resize" style="top: 240px;" data-n="6jvg0b-n">
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
</div></div><div class="reveal-overlay"><div class="reveal error-modal" id="errorModal" data-reveal="befy58-reveal" data-animation-in="fade-in" data-animation-out="fade-out" role="dialog" aria-hidden="true" data-yeti-box="errorModal" data-resize="errorModal" data-events="resize" style="top: 240px;" data-n="okyjdf-n">
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
</div></div></div>
</div></div></body></html>
