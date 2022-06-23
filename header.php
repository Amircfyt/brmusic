<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php wp_head(); ?>
<div class="loader">
<?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80" height="80" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><g fill="#000000"><path id="path1" d="M23.573,19.682c1.026,9.668-6.165,11.171-6.165,11.171c-4.52,0.938-6.78-2.911-6.78-2.911   C21.724,30.853,23.573,19.682,23.573,19.682z M2.203,17.522c1.952,10.325,13.767,7.04,13.767,7.04   c-9.041,5.069-13.664-0.188-13.664-0.188C-0.571,20.995,2.203,17.522,2.203,17.522z M23.675,11.89   c9.453,4.412,6.986,10.796,6.986,10.796c-1.644,3.942-6.369,3.66-6.369,3.66C32.819,19.399,23.675,11.89,23.675,11.89z    M24.189,6.069c2.979,0,4.726,1.408,4.726,1.408c3.493,2.723,1.541,6.666,1.541,6.666c-4.109-9.763-14.897-4.318-14.897-4.318   C18.95,6.914,21.93,6.069,24.189,6.069z M7.443,5.788h0.512c-8.937,6.57,0,14.362,0,14.362C-1.29,15.363,1.484,9.167,1.484,9.167   C2.923,6.163,6.21,5.788,7.443,5.788z M16.175,1c3.494,0,5.343,3.098,5.343,3.098c-10.993-2.91-12.946,8.167-12.946,8.167   C7.546,2.596,14.737,1.094,14.737,1.094C15.251,1,15.661,1,16.175,1z"><animateTransform attributeName="transform" attributeType="XML" type="rotate" from="0, 16, 16" to="360, 16, 16" dur="1.5s" repeatCount="indefinite" /></path></g></svg></div>
    <style>
        
	@font-face {
    font-family: 'vazir';
    src:url('./fonts/vazir.ttf') format('truetype');

}

.loader{
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    background-color: #fff;
}

.loader.hidden{
    animation: fadeOut 2.5s;
    -webkit-animation: fadeOut 2.5s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut{
    100%{
        opacity: 0;
        visibility: hidden;
    }
}

.entry-title {

	font-size:50px;
}
*{
	font-family: 'vazir';
}
footer{
	font-size:25px;
}
p{
	
	font-size:25px;
}
		.entry-header{
			border-bottom:1px dashed gray;
		}
		.entry-title{
		text-align:center;
		}
		.allm{
		background:none;
		border-bottom:0px dashed #fff;
		margin-top:30px;
		}
		.navashu{
width:155px;
margin-top:8px;
	border-bottom:1px solid #000;
	margin-right:20px;
	text-align: center;
		}
		body{
		text-align:right;
		}
	.hjxwe{
		box-shadow:0px 0px 8px 0px gray;
	background:#000;
	color:#Fff;
	width:100%;
	height: 150px;
	border-bottom-right-radius:25px;
	border-bottom-left-radius:25px;
	padding:5px;
	}
	.mylogo{
	width:90px;
	margin-top:15px;
	box-shadow:0px 0px 12px 0px #FFF;
	border-radius:9px;

	}
	.hentry {
		width:95%;
        border-radius:9px;
margin-top:20px;
margin-right:2%;
padding:15px;
box-shadow:0px 0px 8px 0px gray;
	}
	.post{

width:95%;border-radius:9px;
margin-top:20px;
margin-right:2%;
padding:15px;
box-shadow:0px 0px 4px 0px gray;
}
.attachment-post-thumbnail{
box-shadow:0px 0px 8px 0px gray;
border-radius:5px;

}
.default-max-width a {
text-decoration: none;
}
.comments-area{
	border: 1px dashed gray;
width:90%;border-radius:9px;
margin-top:20px;
margin-right:3%;
padding:15px;
box-shadow:0px 0px 8px 0px gray;

}
.comment-body{
	border: 1px dashed gray;
width:90%;border-radius:9px;
margin-top:20px;
margin-right:3%;
padding:15px;
box-shadow:0px 0px 8px 0px gray;
}
.cuag{
background:#FFF;
outline:none;
}
.cuag:hover{
background: gray;
}
.site-footerr{
margin-bottom:30px;
box-shadow:0px 0px 8px 0px gray;
height: 50px;
padding:5px;
}
.fyilyif{
width:80%;
border-radius:100px;
background: #fFF;
margin-top:7px;
display: flex;
box-shadow:0px 0px 8px 0px gray;

margin-bottom:10px;
height:50px;
}
.EVQveq{

border:0px dashed #FFF;
outline: none;
width:50%;
}
input{
border:1px dashed grey;
}
.tiitle{
margin-top: 10px;
}
#submit{
border-radius:8px;
background: #FFF;
color:  gray;
box-shadow:0px 0px 8px 0px gray;
margin-right:20%;
}
.meta-nav svg{
color:gray;
}
@font-face {
    font-family: 'vazir';
    src: url('../fonts/vazir.eot') format('eot'),
     url('../fonts/vazir.ttf') format('truetype'),
    url('../fonts/vazir.woff') format('woff'),
    url('../fonts/vazir.woff2') format('woff2');
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
}
body{
    font-family: 'vazir';
    direction: rtl;
    height: 100vh;
    background: #e8eef3;
}


.container{
    width: 1170px;
    margin: auto;
}

.row{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: row-reverse;
    flex-wrap: wrap;
}



header ul{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 7vh;
}

header ul li{
    margin-left: 50px;
}

header ul li a{
    color: #fff;
    font-size: 16px;
    transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -ms-transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    display: block;
}
header ul li a.active,
header ul li a:hover{
    color: #f3a93d;
}
header .nav{
    height: 7vh;
}
header .nav,
header .logo{
    padding: 0 15px;
}
header .logo a{
    color: #fff;
    font-size: 30px;
}

.navbar-toggler{
    width: 10px;
    height: 34px;
    background: #fff;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    display: none;
    outline: none;
}

.navbar-toggler span{
    width: 20px;
    height: 2px;
    background-color: #2f3240;
    display: block;
    margin: auto;
    position: relative;
    transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -ms-transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
}

.navbar-toggler span::before,
.navbar-toggler span::after{
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #2f3240;
    top: 0;
    right: 0;
    transition: all .3s ease-in;
}
.navbar-toggler.active span{
    background-color: transparent;
}

.navbar-toggler.active span::before{
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
}
.navbar-toggler.active span::after{
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    -moz-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    -o-transform: rotate(135deg);
}

.navbar-toggler span::before{
    transform: translateY(-6px);
    -webkit-transform: translateY(-6px);
    -moz-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    -o-transform: translateY(-6px);
}

.navbar-toggler span::after{
    transform: translateY(6px);
    -webkit-transform: translateY(6px);
    -moz-transform: translateY(6px);
    -ms-transform: translateY(6px);
    -o-transform: translateY(6px);
}

@media screen and (max-width: 992px){
    .container{
        width: 90%;
    }
    .navbar-toggler{
        display: block;
    }
    
    header .nav{
        width: 100%;
        padding:5px;
        z-index:1000;
        background-color: #2f3240;
        height: 0;
        visibility: hidden;
        overflow: hidden;
        transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
}
    header .nav.open{
        width: 100%;
        visibility: visible;
        margin-bottom:100px;
        z-index:1000;
        padding:5px;
        transition: all .3s ease-in;
        position:relative;
        border-bottom-left-radius:20px;
        border-bottom-right-radius:20px;
    }
    header{
        height: auto;
         padding: 12px 0;
    }

    header ul{
        display: block;
        margin-top: 12px;
        padding: 12px 15px 0;
        border-top: 1px solid rgba(255, 255, 255, .2);
        height: auto;
    }

    header ul li a{
        padding: px 0;
        
    }

}
.meta-nav{
color:gray;
}
#comment{
border:1px dashed gray;
border-radius:8px;
box-shadow:0px 0px 5px 0px gray;
width:90%;
margin-right:5%;
}
#comment:hover{
	border:1px dashed gray;
}
#author , #email , #url {
	border:1px dashed gray;
border-radius:8px;
box-shadow:0px 0px 5px 0px gray;
width:90%;
margin-right:5%;
}
#wp-comment-cookies-consent{
	border:1px dashed gray;
border-radius:8px;
box-shadow:0px 0px 5px 0px gray;

margin-right:5%;
}

.alignwide{
border-bottom:0px dashed #FFF;
}
.pagination{
	border-top:1px dashed gray;

}



#dark-mode-toggler{
border-radius:8px;
background:gray;background:none;
border:1px dashed gray;
}
#dark-mode-toggler:hover{
background:gray;
border:1px dashed gray;
}

.ams{
margin-top:100px;
}


.diss , .tiitle{
	font-family: 'vazir';
}

</style>
</head>

<body dir="rtl" <?php body_class(); ?>>
<?php wp_body_open(); ?>


    
    <header style=" background-color:#000;
    height: 12vh;
    display: flex;">
        <div class="container">
            <div class="row">
                <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?></a>
                     </div>

                <button   style="background-color:#000;outline:none;" onmousedown="oos()"   class="navbar-toggler">
                    <span></span>
                </button>

                <nav class="nav" >
                    <ul>
                    <form class="fyilyif" role="search"> 
<button style="background:none;color:#000;margin-top:-5px" class="cuag" type="submit"><svg width="25" height="25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.155 16.31a5.473 5.473 0 01-5.466-5.467 5.473 5.473 0 015.466-5.466 5.472 5.472 0 015.466 5.466 5.474 5.474 0 01-5.466 5.466zm0-14.31a8.855 8.855 0 00-8.845 8.845 8.855 8.855 0 008.845 8.845A8.856 8.856 0 0022 10.845 8.856 8.856 0 0013.155 2zM4.292 17.392a2.293 2.293 0 10.001 4.585 2.293 2.293 0 000-4.585z" fill="#939598"></path>
                </svg></button>
<input class="EVQveq"  name="s">
</form>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                    
                    </ul>
                </nav>
            </div>
        </div><br>
    </header>

    <script src="me/js/all.min.js"></script>
    <script src="me/js/script.js"></script>


<div class="hjxwe"><center><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/brmusic/brmusic/myimg/logo.jpg" class="mylogo" alt="logo"></a>
<div class="container">
        


</center></div>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>


<script>
function ook(){

}
function oos(){
document.getElementById("sstl").innerHTML="<style>.hjxwe{transition: all .3s ease-in;}</style>" ;
}
const navToggler = document.querySelector('.navbar-toggler');
console.log(navToggler)

navToggler.addEventListener('click', navToggle);


function navToggle(){
    navToggler.classList.toggle('active')
    const nav = document.querySelector('.nav');
    nav.classList.toggle('open');
    if(nav.classList.contains('open')){
        nav.style.height = nav.scrollHeight + "px";
      const ppx= nav.scrollHeight + "px" ;
    }else{
        nav.style.height = ""
    }
}
window.addEventListener('load', function(){
    const loader = document.querySelector('.loader');
    loader.classList += ' hidden';
})
</script>
<p id="sstl"></p>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
