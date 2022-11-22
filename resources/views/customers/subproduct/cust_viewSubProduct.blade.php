@extends ('frontend.main_master')
@section('content')

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

   

   
	
	<style>
	
	/******************************************************************
  Template Name: Ashion
  Description: Ashion ecommerce template
  Author: Colorib
  Author URI: https://colorlib.com/
  Version: 1.0
  Created: Colorib
******************************************************************/

/*------------------------------------------------------------------
[Table of contents]

1.  Template default CSS
	1.1	Variables
	1.2	Mixins
	1.3	Flexbox
	1.4	Reset
2.  Helper Css
3.  Header Section
4.  Categories Section
5.  Product Section
6.  Banner Section
7.  Countdown Section
8.  Instagram
9.  Contact
10.  Footer Style
-------------------------------------------------------------------*/

/*----------------------------------------*/

/* Template default CSS
/*----------------------------------------*/

html,
body {
	height: 100%;
	font-family: "Montserrat", sans-serif;
	-webkit-font-smoothing: antialiased;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 0;
	color: #111111;
	font-weight: 400;
	font-family: "Montserrat", sans-serif;
}

h1 {
	font-size: 70px;
}

h2 {
	font-size: 36px;
}

h3 {
	font-size: 30px;
}

h4 {
	font-size: 24px;
}

h5 {
	font-size: 18px;
}

h6 {
	font-size: 16px;
}

p {
	font-size: 14px;
	font-family: "Montserrat", sans-serif;
	color: #666666;
	font-weight: 400;
	line-height: 24px;
	margin: 0 0 15px 0;
}

img {
	max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
	outline: none;
}

a:hover,
a:focus {
	text-decoration: none;
	outline: none;
}

ul,
ol {
	padding: 0;
	margin: 0;
}

/*---------------------
  Helper CSS
-----------------------*/

.section-title {
	margin-bottom: 45px;
}

.section-title h4 {
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	position: relative;
	display: inline-block;
}

.section-title h4:after {
	position: absolute;
	left: 0;
	bottom: -4px;
	height: 2px;
	width: 70px;
	background: #ca1515;
	content: "";
}

.set-bg {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: top center;
}

.spad {
	padding-top: 100px;
	padding-bottom: 100px;
}

.text-white h1,
.text-white h2,
.text-white h3,
.text-white h4,
.text-white h5,
.text-white h6,
.text-white p,
.text-white span,
.text-white li,
.text-white a {
	color: #fff;
}

/* buttons */

.primary-btn {
	display: inline-block;
	font-size: 14px;
	text-transform: uppercase;
	font-weight: 600;
	padding: 12px 30px 10px;
	color: #ffffff;
	background: #ca1515;
}

.site-btn {
	font-size: 14px;
	color: #ffffff;
	background: #ca1515;
	font-weight: 600;
	border: none;
	text-transform: uppercase;
	display: inline-block;
	padding: 12px 30px;
	border-radius: 50px;
}

/* Preloder */

#preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #ffffff;
}

.loader {
	width: 40px;
	height: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -13px;
	margin-left: -13px;
	border-radius: 60px;
	animation: loader 0.8s linear infinite;
	-webkit-animation: loader 0.8s linear infinite;
}

@keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

.spacial-controls {
	position: fixed;
	width: 111px;
	height: 91px;
	top: 0;
	right: 0;
	z-index: 999;
}

.spacial-controls .search-switch {
	display: block;
	height: 100%;
	padding-top: 30px;
	background: #323232;
	text-align: center;
	cursor: pointer;
}

.search-model {
	display: none;
	position: fixed;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #ffffff;
	z-index: 99999;
}

.search-model-form {
	padding: 0 15px;
}

.search-model-form input {
	width: 500px;
	font-size: 40px;
	border: none;
	border-bottom: 2px solid #dddddd;
	background: 0 0;
	color: #999;
}

.search-close-switch {
	position: absolute;
	width: 50px;
	height: 50px;
	background: #333;
	color: #fff;
	text-align: center;
	border-radius: 50%;
	font-size: 28px;
	line-height: 28px;
	top: 30px;
	cursor: pointer;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

/*---------------------
  Header
-----------------------*/

.header {
	background: #ffffff;
	-webkit-box-shadow: 0px 5px 10px rgba(91, 91, 91, 0.1);
	box-shadow: 0px 5px 10px rgba(91, 91, 91, 0.1);
}

.header__logo {
	padding: 26px 0;
}

.header__logo a {
	display: inline-block;
}

.header__menu {
	padding: 30px 0 27px;
}

.header__menu ul li {
	list-style: none;
	display: inline-block;
	margin-right: 40px;
	position: relative;
}

.header__menu ul li.active a:after {
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}

.header__menu ul li:hover a:after {
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}

.header__menu ul li:hover .dropdown {
	top: 27px;
	opacity: 1;
	visibility: visible;
}

.header__menu ul li:last-child {
	margin-right: 0;
}

.header__menu ul li .dropdown {
	position: absolute;
	left: 0;
	top: 56px;
	width: 150px;
	background: #111111;
	text-align: left;
	padding: 2px 0;
	z-index: 9;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.header__menu ul li .dropdown li {
	display: block;
	margin-right: 0;
}

.header__menu ul li .dropdown li a {
	font-size: 14px;
	color: #ffffff;
	font-weight: 400;
	padding: 8px 20px;
	text-transform: capitalize;
}

.header__menu ul li .dropdown li a:after {
	display: none;
}

.header__menu ul li a {
	font-size: 15px;
	text-transform: uppercase;
	color: #111111;
	font-weight: 500;
	display: block;
	padding: 2px 0;
	position: relative;
}

.header__menu ul li a:after {
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #ca1515;
	content: "";
	-webkit-transition: all, 0.5s;
	-o-transition: all, 0.5s;
	transition: all, 0.5s;
	-webkit-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);
}

.header__right {
	text-align: right;
	padding: 30px 0 27px;
}

.header__right__auth {
	display: inline-block;
	margin-right: 25px;
}

.header__right__auth a {
	font-size: 12px;
	color: #666666;
	position: relative;
	margin-right: 8px;
}

.header__right__auth a:last-child {
	margin-right: 0;
}

.header__right__auth a:last-child:after {
	display: none;
}

.header__right__auth a:after {
	position: absolute;
	right: -8px;
	top: -2px;
	content: "/";
	font-size: 13px;
}

.header__right__widget {
	display: inline-block;
}

.header__right__widget li {
	list-style: none;
	display: inline-block;
	font-size: 18px;
	color: #111111;
	margin-right: 20px;
	cursor: pointer;
}

.header__right__widget li:last-child {
	margin-right: 0;
}

.header__right__widget li a {
	font-size: 18px;
	color: #111111;
	position: relative;
}

.header__right__widget li a .tip {
	position: absolute;
	right: -12px;
	top: -11px;
	height: 18px;
	width: 18px;
	background: #111111;
	font-size: 10px;
	font-weight: 500;
	color: #ffffff;
	line-height: 18px;
	text-align: center;
	border-radius: 50%;
}

.offcanvas-menu-wrapper {
	display: none;
}

.canvas__open {
	display: none;
}

/*---------------------
  Banner
-----------------------*/

.banner {
	height: 500px;
}

.banner__text span {
	font-size: 18px;
	color: #ca1515;
	text-transform: uppercase;
}

.banner__text h1 {
	font-size: 80px;
	color: #111111;
	font-family: "Cookie", cursive;
	margin-bottom: 15px;
}

.banner__text a {
	font-size: 14px;
	color: #111111;
	text-transform: uppercase;
	font-weight: 700;
	position: relative;
	padding: 0 0 3px;
	display: inline-block;
}

.banner__text a:after {
	position: absolute;
	left: 0;
	bottom: 0;
	height: 2px;
	width: 100%;
	background: #ca1515;
	content: "";
}

.banner__slider {
	text-align: center;
	padding: 150px 0 0;
}

.banner__slider.owl-carousel .owl-dots {
	position: absolute;
	left: 0;
	top: 430px;
	width: 100%;
	text-align: center;
}

.banner__slider.owl-carousel .owl-dots button {
	height: 12px;
	width: 12px;
	background: #a1a1a1;
	border-radius: 50%;
	margin-right: 10px;
}

.banner__slider.owl-carousel .owl-dots button.active {
	background: #ca1515;
}

.banner__slider.owl-carousel .owl-dots button:last-child {
	margin-right: 0;
}

/*---------------------
  Trend
-----------------------*/

.trend {
	padding-top: 80px;
	padding-bottom: 50px;
}

.trend__content .section-title h4 {
	font-size: 20px;
}

.trend__content .section-title h4:after {
	bottom: -6px;
}

.trend__item {
	overflow: hidden;
	margin-bottom: 35px;
}

.trend__item__pic {
	float: left;
	margin-right: 25px;
}

.trend__item__text {
	overflow: hidden;
}

.trend__item__text h6 {
	font-size: 14px;
	color: #111111;
	margin-bottom: 5px;
}

.trend__item__text .rating {
	line-height: 18px;
	margin-bottom: 6px;
}

.trend__item__text .rating i {
	font-size: 10px;
	color: #e3c01c;
	margin-right: -4px;
}

.trend__item__text .rating i:last-child {
	margin-right: 0;
}

.trend__item__text .product__price {
	color: #111111;
	font-weight: 600;
}

.trend__item__text .product__price span {
	font-size: 14px;
	color: #b1b0b0;
	text-decoration: line-through;
	margin-left: 4px;
}

/*---------------------
  Discount
-----------------------*/

.discount__pic img {
	min-width: 100%;
	height: 100%;
}

.discount__text {
	background: #f4f4f4;
	height: 390px;
	padding: 75px 90px 50px;
	text-align: center;
}

.discount__text a {
	font-size: 14px;
	color: #111111;
	text-transform: uppercase;
	font-weight: 700;
	position: relative;
	padding: 0 0 3px;
	display: inline-block;
}

.discount__text a:after {
	position: absolute;
	left: 0;
	bottom: 0;
	height: 2px;
	width: 100%;
	background: #ca1515;
	content: "";
}

.discount__text__title {
	text-align: center;
	position: relative;
	z-index: 1;
	margin-bottom: 60px;
}

.discount__text__title:after {
	position: absolute;
	left: 50%;
	top: -38px;
	height: 183px;
	width: 183px;
	background: #ffffff;
	content: "";
	border-radius: 50%;
	z-index: -1;
	margin-left: -91.5px;
}

.discount__text__title span {
	font-size: 12px;
	color: #111111;
	font-weight: 500;
	text-transform: uppercase;
}

.discount__text__title h2 {
	font-size: 60px;
	color: #ca1515;
	font-family: "Cookie", cursive;
	line-height: 46px;
	margin-bottom: 10px;
}

.discount__text__title h5 {
	color: #ca1515;
	font-weight: 700;
}

.discount__text__title h5 span {
	font-size: 14px;
	color: #111111;
	margin-right: 4px;
}

.discount__countdown {
	text-align: center;
	margin-bottom: 10px;
}

.countdown__item {
	margin-bottom: 15px;
	float: left;
	width: 25%;
}

.countdown__item:last-child {
	margin-right: 0;
}

.countdown__item span {
	font-size: 30px;
	font-weight: 600;
	color: #111111;
	display: inline-block;
}

.countdown__item p {
	color: #111111;
	margin-bottom: 0;
	display: inline-block;
	font-weight: 500;
}

/*---------------------
  Services
-----------------------*/

.services {
	padding-top: 80px;
	padding-bottom: 50px;
}

.services__item {
	padding-left: 65px;
	position: relative;
	margin-bottom: 20px;
}

.services__item i {
	font-size: 36px;
	color: #ca1515;
	position: absolute;
	left: 0;
	top: 4px;
}

.services__item h6 {
	color: #111111;
	font-weight: 600;
	margin-bottom: 5px;
}

.services__item p {
	margin-bottom: 0;
}

/*---------------------
  Instagram
-----------------------*/

.instagram__item {
	height: 320px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	position: relative;
	z-index: 1;
}

.instagram__item:hover:after {
	opacity: 1;
}

.instagram__item:hover .instagram__text {
	opacity: 1;
	visibility: visible;
}

.instagram__item:after {
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background: rgba(255, 255, 255, 0.9);
	content: "";
	opacity: 0;
	z-index: -1;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.instagram__text {
	text-align: center;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.instagram__text i {
	font-size: 30px;
	color: #0d0d0d;
}

.instagram__text a {
	font-size: 16px;
	color: #0d0d0d;
	font-weight: 500;
	display: block;
	margin-top: 10px;
}

/*---------------------
  Footer
-----------------------*/

.footer {
	padding-top: 55px;
}

.footer__about {
	margin-bottom: 30px;
}

.footer__about p {
	margin-bottom: 20px;
}

.footer__logo {
	margin-bottom: 20px;
}

.footer__payment a {
	margin-right: 6px;
	margin-bottom: 10px;
	display: inline-block;
}

.footer__payment a:last-child {
	margin-right: 0;
}

.footer__widget {
	margin-bottom: 30px;
}

.footer__widget h6 {
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 12px;
}

.footer__widget ul li {
	list-style: none;
}

.footer__widget ul li a {
	font-size: 14px;
	color: #666666;
	line-height: 30px;
}

.footer__newslatter {
	margin-bottom: 30px;
}

.footer__newslatter h6 {
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 25px;
}

.footer__newslatter form {
	position: relative;
	margin-bottom: 30px;
}

.footer__newslatter form input {
	height: 52px;
	width: 100%;
	border: 1px solid #e1e1e1;
	border-radius: 50px;
	padding-left: 30px;
	font-size: 14px;
	color: #666666;
}

.footer__newslatter form input::-webkit-input-placeholder {
	color: #666666;
}

.footer__newslatter form input::-moz-placeholder {
	color: #666666;
}

.footer__newslatter form input:-ms-input-placeholder {
	color: #666666;
}

.footer__newslatter form input::-ms-input-placeholder {
	color: #666666;
}

.footer__newslatter form input::placeholder {
	color: #666666;
}

.footer__newslatter form button {
	position: absolute;
	right: 4px;
	top: 4px;
}

.footer__social a {
	display: inline-block;
	height: 40px;
	width: 40px;
	background: #e1e1e1;
	font-size: 15px;
	color: #111111;
	line-height: 40px;
	text-align: center;
	border-radius: 50%;
	margin-right: 6px;
	margin-bottom: 5px;
}

.footer__social a:last-child {
	margin-right: 0;
}

.footer__copyright__text {
	border-top: 1px solid #e1e1e1;
	padding: 18px 0 25px;
	text-align: center;
	margin-top: 35px;
}

.footer__copyright__text p {
	margin-bottom: 0;
}

.footer__copyright__text a {
	color: #5C5C5C;
}

.footer__copyright__text i {
	color: #ca1515;
}

.footer__copyright__text a:hover {
	color: #ca1515;
}

/*---------------------
  Breadcrumb
-----------------------*/

.breadcrumb-option {
	padding-top: 35px;
}

.breadcrumb__links a {
	font-size: 15px;
	font-weight: 500;
	color: #111111;
	margin-right: 18px;
	display: inline-block;
	position: relative;
}

.breadcrumb__links a:after {
	position: absolute;
	right: -14px;
	top: 0;
	content: "";
	font-family: "FontAwesome";
}

.breadcrumb__links a i {
	margin-right: 5px;
}

.breadcrumb__links span {
	font-size: 15px;
	font-weight: 500;
	color: #888888;
	display: inline-block;
}

/*---------------------
  Categories
-----------------------*/

.categories {
	overflow: hidden;
	margin-top: 10px;
}

.categories .container-fluid {
	padding-right: 5px;
}

.categories__item {
	height: 314px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	padding-left: 30px;
	margin-bottom: 10px;
	margin-right: 10px;
}

.categories__item.categories__large__item {
	height: 638px;
	padding-left: 70px;
}

.categories__item.categories__large__item .categories__text {
	max-width: 480px;
}

.categories__item.categories__large__item .categories__text p {
	margin-bottom: 15px;
}

.categories__text h1 {
	font-family: "Cookie", cursive;
	color: #111111;
	margin-bottom: 5px;
}

.categories__text h4 {
	color: #111111;
	font-weight: 700;
}

.categories__text p {
	margin-bottom: 10px;
}

.categories__text a {
	font-size: 14px;
	color: #111111;
	text-transform: uppercase;
	font-weight: 600;
	position: relative;
	padding: 0 0 3px;
	display: inline-block;
}

.categories__text a:after {
	position: absolute;
	left: 0;
	bottom: 0;
	height: 2px;
	width: 100%;
	background: #ca1515;
	content: "";
}

/*---------------------
  Product
-----------------------*/

.product {
	padding-top: 60px;
	padding-bottom: 50px;
}

.filter__controls {
	text-align: right;
	margin-bottom: 50px;
}

.filter__controls li {
	font-size: 14px;
	list-style: none;
	display: inline-block;
	color: #111111;
	margin-right: 35px;
	position: relative;
	cursor: pointer;
}

.filter__controls li.active:after {
	opacity: 1;
}

.filter__controls li:after {
	position: absolute;
	left: 0;
	bottom: -4px;
	height: 2px;
	width: 100%;
	background: #ca1515;
	content: "";
	opacity: 0;
}

.filter__controls li:last-child {
	margin-right: 0;
}

.product__item {
	margin-bottom: 35px;
}

.product__item:hover .product__hover li {
	opacity: 1;
	top: 0;
}

.product__item.sale .product__item__pic .label {
	background: #ca1515;
}

.product__item.sale .product__item__text .product__price {
	color: #ca1515;
}

.product__item__pic {
	height: 250px;
	position: relative;
	overflow: hidden;
}

.product__item__pic .label {
	font-size: 12px;
	color: #ffffff;
	font-weight: 500;
	display: inline-block;
	padding: 2px 8px;
	text-transform: uppercase;
	position: absolute;
	left: 10px;
	top: 10px;
}

.product__item__pic .label.new {
	background: #36a300;
}

.product__item__pic .label.stockout {
	background: #111111;
}

.product__item__pic .label.stockblue {
	background: #0066bd !important;
}

.product__item__pic .label.sale {
	background: #ca1515;
}

.product__hover {
	position: absolute;
	left: 0;
	width: 100%;
	bottom: 30px;
	text-align: center;
}

.product__hover li {
	list-style: none;
	display: inline-block;
	margin-right: 10px;
	position: relative;
	top: 100px;
	opacity: 0;
}

.product__hover li:nth-child(1) {
	-webkit-transition: all 0.4s ease 0.1s;
	-o-transition: all 0.4s ease 0.1s;
	transition: all 0.4s ease 0.1s;
}

.product__hover li:nth-child(2) {
	-webkit-transition: all 0.4s ease 0.15s;
	-o-transition: all 0.4s ease 0.15s;
	transition: all 0.4s ease 0.15s;
}

.product__hover li:nth-child(3) {
	-webkit-transition: all 0.4s ease 0.2s;
	-o-transition: all 0.4s ease 0.2s;
	transition: all 0.4s ease 0.2s;
}

.product__hover li:last-child {
	margin-right: 0;
}

.product__hover li:hover a {
	background: #ca1515;
}

.product__hover li:hover a span {
	color: #ffffff;
	-webkit-transform: rotate(360deg);
	-ms-transform: rotate(360deg);
	transform: rotate(360deg);
}

.product__hover li a {
	font-size: 18px;
	color: #111111;
	display: block;
	height: 45px;
	width: 45px;
	background: #ffffff;
	line-height: 48px;
	text-align: center;
	border-radius: 50%;
	-webkit-transition: all, 0.5s;
	-o-transition: all, 0.5s;
	transition: all, 0.5s;
}

.product__hover li a span {
	position: relative;
	-webkit-transform: rotate(0);
	-ms-transform: rotate(0);
	transform: rotate(0);
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
	display: inline-block;
}

.product__item__text {
	text-align: center;
	padding-top: 22px;
}

.product__item__text h6 a {
	font-size: 14px;
	color: #111111;
}

.product__item__text .rating {
	line-height: 18px;
	margin-bottom: 5px;
}

.product__item__text .rating i {
	font-size: 10px;
	color: #e3c01c;
	margin-right: -4px;
}

.product__item__text .rating i:last-child {
	margin-right: 0;
}

.product__item__text .product__price {
	color: #111111;
	font-weight: 600;
}

.product__item__text .product__price span {
	font-size: 14px;
	color: #b1b0b0;
	text-decoration: line-through;
	margin-left: 4px;
}

/*---------------------
  Shop
-----------------------*/

.shop {
	padding-top: 70px;
	padding-bottom: 80px;
}

.sidebar__categories {
	margin-bottom: 50px;
}

.sidebar__categories .section-title {
	margin-bottom: 35px;
}

.sidebar__categories .section-title h4 {
	font-size: 18px;
}

.categories__accordion .card {
	border: none;
	border-radius: 0;
	padding-bottom: 12px;
	border-bottom: 1px solid #f2f2f2 !important;
	margin-bottom: 12px;
}

.categories__accordion .card:last-child {
	padding-bottom: 0;
	margin-bottom: 0;
	border-bottom: none !important;
}

.categories__accordion .card-heading {
	cursor: pointer;
}

.categories__accordion .card-heading a {
	font-size: 14px;
	font-weight: 500;
	color: #111111;
	display: block;
}

.categories__accordion .card-body {
	padding-left: 0;
	padding-top: 6px;
	padding-bottom: 0;
}

.categories__accordion .card-body li {
	list-style: none;
	position: relative;
	padding-left: 16px;
}

.categories__accordion .card-body li:before {
	position: absolute;
	left: 4px;
	top: 14px;
	height: 1px;
	width: 4px;
	background: #666666;
	content: "";
}

.categories__accordion .card-body li a {
	font-size: 14px;
	color: #666666;
	line-height: 30px;
}

.categories__accordion .card-heading a:after,
.categories__accordion .card-heading>a.active[aria-expanded=false]:after {
	content: "";
	font-size: 14px;
	font-family: "FontAwesome";
	color: #666666;
	position: absolute;
	right: 30px;
	top: 0px;
}

.categories__accordion .card-heading.active a:after {
	content: "";
	font-size: 14px;
	font-family: "FontAwesome";
	color: #666666;
	position: absolute;
	right: 30px;
	top: -1px;
}

.categories__accordion .card-heading a[aria-expanded=true]:after,
.categories__accordion .card-heading>a.active:after {
	content: "";
	font-size: 14px;
	font-family: "FontAwesome";
	color: #666666;
	position: absolute;
	right: 30px;
	top: -1px;
}

.sidebar__filter {
	position: relative;
	margin-bottom: 60px;
}

.sidebar__filter .section-title {
	margin-bottom: 50px;
}

.sidebar__filter .section-title h4 {
	font-size: 18px;
}

.sidebar__filter a {
	font-size: 14px;
	color: #0d0d0d;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-weight: 700;
	display: inline-block;
	padding: 5px 16px 5px 24px;
	border: 2px solid #ff0000;
	position: absolute;
	right: 0;
	bottom: -5px;
	border-radius: 2px;
}

.filter-range-wrap .range-slider .price-input {
	position: relative;
}

.filter-range-wrap .range-slider .price-input p {
	font-size: 16px;
	color: #0d0d0d;
	font-weight: 500;
	display: inline-block;
	margin-bottom: 0;
}

.filter-range-wrap .range-slider .price-input:after {
	position: absolute;
	left: 81px;
	top: 12px;
	height: 1px;
	width: 5px;
	background: #0d0d0d;
	content: "";
}

.filter-range-wrap .range-slider .price-input input {
	font-size: 16px;
	color: #0d0d0d;
	max-width: 16%;
	border: none;
}

.filter-range-wrap .range-slider .price-input input:nth-child(1) {
	margin-right: 28px;
}

.filter-range-wrap .price-range {
	border-radius: 0;
	margin-bottom: 28px;
}

.filter-range-wrap .price-range.ui-widget-content {
	border: none;
	background: rgba(0, 0, 0, 0.1);
	height: 5px;
}

.filter-range-wrap .price-range.ui-widget-content .ui-slider-handle {
	height: 14px;
	width: 14px;
	border-radius: 50%;
	background: #ca1515;
	border: none;
	outline: none;
	cursor: pointer;
}

.filter-range-wrap .price-range .ui-slider-range {
	background: #ca1515;
	border-radius: 0;
}

.sidebar__sizes,
.sidebar__color {
	margin-bottom: 40px;
}

.sidebar__sizes .section-title,
.sidebar__color .section-title {
	margin-bottom: 35px;
}

.sidebar__sizes .section-title h4,
.sidebar__color .section-title h4 {
	font-size: 18px;
}

.sidebar__sizes .size__list label,
.sidebar__color .size__list label {
	display: block;
	padding-left: 20px;
	font-size: 14px;
	text-transform: uppercase;
	color: #444444;
	position: relative;
	cursor: pointer;
}

.sidebar__sizes .size__list label input,
.sidebar__color .size__list label input {
	position: absolute;
	visibility: hidden;
}

.sidebar__sizes .size__list label input:checked~.checkmark,
.sidebar__color .size__list label input:checked~.checkmark {
	border-color: #ca1515;
}

.sidebar__sizes .size__list label input:checked~.checkmark:after,
.sidebar__color .size__list label input:checked~.checkmark:after {
	border-color: #ca1515;
	opacity: 1;
}

.sidebar__sizes .size__list label .checkmark,
.sidebar__color .size__list label .checkmark {
	position: absolute;
	left: 0;
	top: 4px;
	height: 10px;
	width: 10px;
	border: 1px solid #444444;
	border-radius: 2px;
}

.sidebar__sizes .size__list label .checkmark:after,
.sidebar__color .size__list label .checkmark:after {
	position: absolute;
	left: 0px;
	top: -2px;
	width: 11px;
	height: 5px;
	border: solid #ffffff;
	border-width: 1.5px 1.5px 0px 0px;
	-webkit-transform: rotate(127deg);
	-ms-transform: rotate(127deg);
	transform: rotate(127deg);
	opacity: 0;
	content: "";
}

.sidebar__color .color__list label {
	text-transform: capitalize;
}

.pagination__option a {
	display: inline-block;
	height: 40px;
	width: 40px;
	border: 1px solid #f2f2f2;
	border-radius: 50%;
	font-size: 14px;
	color: #111111;
	font-weight: 600;
	line-height: 40px;
	text-align: center;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
	margin-right: 6px;
}

.pagination__option a:last-child {
	margin-right: 0;
}

.pagination__option a i {
	font-weight: 600;
}

.pagination__option a:hover {
	background: #0d0d0d;
	border-color: #0d0d0d;
	color: #ffffff;
}

/*---------------------
  Product Details
-----------------------*/

.product-details {
	padding-top: 70px;
	padding-bottom: 50px;
}

.product__details__pic {
	overflow: hidden;
}

.product__details__pic__left {
	width: 22%;
	max-height: 574px;
	float: left;
	overflow-y: auto;
}

.product__details__pic__left .pt {
	display: block;
	margin-bottom: 20px;
	cursor: pointer;
	position: relative;
}

.product__details__pic__left .pt::after {
	content: "";
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #000;
	opacity: 0;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.product__details__pic__left .pt.active::after {
	opacity: 0.3;
}

.product__details__pic__left .pt:last-child {
	margin-bottom: 0;
}

.product__details__pic__left .pt img {
	min-width: 100%;
}

.product__details__slider__content {
	width: calc(78% - 20px);
	float: left;
	margin-left: 20px;
}

.product__details__pic__slider.owl-carousel .owl-nav button {
	position: absolute;
	left: 10px;
	top: 50%;
	font-size: 22px;
	color: #111111;
	width: 40px;
	height: 40px;
	background: rgba(255, 255, 255, 0.7);
	border-radius: 50%;
	line-height: 44px;
	text-align: center;
	margin-top: -20px;
}

.product__details__pic__slider.owl-carousel .owl-nav button.owl-next {
	left: auto;
	right: 10px;
}

.product__details__text h3 {
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 12px;
}

.product__details__text h3 span {
	display: block;
	font-size: 14px;
	color: #444444;
	text-transform: none;
	font-weight: 400;
	margin-top: 5px;
}

.product__details__text .rating {
	margin-bottom: 16px;
}

.product__details__text .rating i {
	font-size: 12px;
	color: #e3c01c;
	margin-right: -4px;
}

.product__details__text .rating span {
	font-size: 12px;
	color: #666666;
	margin-left: 5px;
}

.product__details__text p {
	color: #444444;
	margin-bottom: 28px;
}

.product__details__price {
	font-size: 30px;
	font-weight: 600;
	color: #ca1515;
	margin-bottom: 30px;
}

.product__details__price span {
	font-size: 18px;
	color: #b1b0b0;
	text-decoration: line-through;
	margin-left: 10px;
	display: inline-block;
}

.quantity {
	float: left;
	margin-right: 10px;
	margin-bottom: 10px;
}

.quantity>span {
	font-size: 14px;
	color: #111111;
	font-weight: 600;
	float: left;
	margin-top: 14px;
	margin-right: 15px;
}

.pro-qty {
	height: 50px;
	width: 150px;
	border: 1px solid #ebebeb;
	border-radius: 50px;
	padding: 0 20px;
	overflow: hidden;
	display: inline-block;
}

.pro-qty .qtybtn {
	font-size: 14px;
	color: #666666;
	cursor: pointer;
	float: left;
	width: 12px;
	line-height: 46px;
}

.pro-qty input {
	font-size: 14px;
	color: #666666;
	font-weight: 500;
	border: none;
	float: left;
	width: 84px;
	text-align: center;
	height: 48px;
}

.product__details__button {
	overflow: hidden;
	margin-bottom: 25px;
}

.product__details__button .cart-btn {
	display: inline-block;
	font-size: 14px;
	color: #ffffff;
	background: #ca1515;
	font-weight: 600;
	text-transform: uppercase;
	padding: 14px 30px 15px;
	border-radius: 50px;
	float: left;
	margin-right: 10px;
	margin-bottom: 10px;
}

.product__details__button ul {
	float: left;
}

.product__details__button ul li {
	list-style: none;
	display: inline-block;
	margin-right: 5px;
}

.product__details__button ul li:last-child {
	margin-right: 0;
}

.product__details__button ul li a {
	display: inline-block;
	height: 50px;
	width: 50px;
	border: 1px solid #ebebeb;
	border-radius: 50%;
	line-height: 50px;
	text-align: center;
	padding-top: 1px;
}

.product__details__button ul li a span {
	font-size: 18px;
	color: #666666;
}

.product__details__widget {
	border-top: 1px solid #ebebeb;
	padding-top: 35px;
}

.product__details__widget ul li {
	list-style: none;
	margin-bottom: 10px;
}

.product__details__widget ul li:last-child {
	margin-bottom: 0;
}

.product__details__widget ul li span {
	display: inline-block;
	font-size: 14px;
	font-weight: 600;
	color: #111111;
	width: 150px;
	float: left;
}

.product__details__widget ul li .stock__checkbox {
	overflow: hidden;
}

.product__details__widget ul li .stock__checkbox label {
	display: block;
	padding-left: 20px;
	font-size: 14px;
	color: #666666;
	position: relative;
	cursor: pointer;
}

.product__details__widget ul li .stock__checkbox label input {
	position: absolute;
	visibility: hidden;
}

.product__details__widget ul li .stock__checkbox label input:checked~.checkmark {
	border-color: #ca1515;
}

.product__details__widget ul li .stock__checkbox label input:checked~.checkmark:after {
	border-color: #ca1515;
	opacity: 1;
}

.product__details__widget ul li .stock__checkbox label .checkmark {
	position: absolute;
	left: 0;
	top: 5px;
	height: 10px;
	width: 10px;
	border: 1px solid #444444;
	border-radius: 2px;
}

.product__details__widget ul li .stock__checkbox label .checkmark:after {
	position: absolute;
	left: 0px;
	top: -2px;
	width: 11px;
	height: 5px;
	border: solid #ffffff;
	border-width: 1.5px 1.5px 0px 0px;
	-webkit-transform: rotate(127deg);
	-ms-transform: rotate(127deg);
	transform: rotate(127deg);
	opacity: 0;
	content: "";
}

.product__details__widget ul li .color__checkbox label {
	display: inline-block;
	cursor: pointer;
	position: relative;
	margin-right: 20px;
}

.product__details__widget ul li .color__checkbox label.active input~.checkmark:after {
	border-color: #ffffff;
	opacity: 1;
}

.product__details__widget ul li .color__checkbox label:last-child {
	margin-right: 0;
}

.product__details__widget ul li .color__checkbox label input {
	position: absolute;
	visibility: hidden;
}

.product__details__widget ul li .color__checkbox label input:checked~.checkmark:after {
	border-color: #ffffff;
	opacity: 1;
}

.product__details__widget ul li .color__checkbox label .checkmark {
	position: absolute;
	left: 0;
	top: -10px;
	height: 20px;
	width: 20px;
	background: #e31e2f;
	border-radius: 50%;
	content: "";
}

.product__details__widget ul li .color__checkbox label .checkmark.black-bg {
	background: #111111;
}

.product__details__widget ul li .color__checkbox label .checkmark.grey-bg {
	background: #e4aa8b;
}

.product__details__widget ul li .color__checkbox label .checkmark:after {
	position: absolute;
	left: 3px;
	top: 5px;
	width: 13px;
	height: 6px;
	border: solid #ffffff;
	border-width: 1.5px 1.5px 0px 0px;
	-webkit-transform: rotate(127deg);
	-ms-transform: rotate(127deg);
	transform: rotate(127deg);
	opacity: 0;
	content: "";
}

.product__details__widget ul li .size__btn label {
	font-size: 14px;
	color: #666666;
	text-transform: uppercase;
	cursor: pointer;
	margin-right: 10px;
	display: inline-block;
	margin-bottom: 0;
}

.product__details__widget ul li .size__btn label:last-child {
	margin-right: 0;
}

.product__details__widget ul li .size__btn label.active {
	color: #ca1515;
}

.product__details__widget ul li .size__btn label input {
	position: absolute;
	visibility: hidden;
}

.product__details__widget ul li p {
	margin-bottom: 0;
	color: #666666;
}

.product__details__tab {
	padding-top: 80px;
	margin-bottom: 65px;
}

.nav {
	border-bottom: none;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	position: relative;
	margin-bottom: 40px;
}

.nav::before {
	position: absolute;
	left: 0;
	top: 13px;
	height: 1px;
	width: 335px;
	background: #e1e1e1;
	content: "";
}

.nav::after {
	position: absolute;
	right: 0;
	top: 13px;
	height: 1px;
	width: 335px;
	background: #e1e1e1;
	content: "";
}

.nav-item {
	margin-right: 46px;
}

.nav-item:last-child {
	margin-right: 0;
}

.nav-item .nav-link {
	font-size: 18px;
	color: #666666;
	font-weight: 600;
	border: none;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	padding: 0;
}

.nav-item .nav-link.active {
	color: #111111;
}

.tab-content .tab-pane h6 {
	color: #666666;
	font-weight: 600;
	margin-bottom: 24px;
}

.tab-content .tab-pane p:last-child {
	margin-bottom: 0;
}

.related__title h5 {
	font-size: 20px;
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 35px;
}

/*---------------------
  Shop Cart
-----------------------*/

.shop-cart {
	padding-top: 70px;
	padding-bottom: 90px;
}

.shop__cart__table {
	margin-bottom: 30px;
}

.shop__cart__table table {
	width: 100%;
}

.shop__cart__table thead {
	border-bottom: 1px solid #f2f2f2;
}

.shop__cart__table thead th {
	font-size: 18px;
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	padding-bottom: 20px;
}

.shop__cart__table tbody tr {
	border-bottom: 1px solid #f2f2f2;
}

.shop__cart__table tbody tr td {
	padding: 30px 0;
}

.shop__cart__table tbody tr .cart__product__item {
	overflow: hidden;
	width: 585px;
}

.shop__cart__table tbody tr .cart__product__item img {
	float: left;
	margin-right: 25px;
}

.shop__cart__table tbody tr .cart__product__item .cart__product__item__title {
	overflow: hidden;
	padding-top: 23px;
}

.shop__cart__table tbody tr .cart__product__item .cart__product__item__title h6 {
	color: #111111;
	font-weight: 600;
}

.shop__cart__table tbody tr .cart__product__item .cart__product__item__title .rating i {
	font-size: 10px;
	color: #e3c01c;
	margin-right: -4px;
}

.shop__cart__table tbody tr .cart__price {
	font-size: 16px;
	color: #ca1515;
	font-weight: 600;
	width: 190px;
}

.shop__cart__table tbody tr .cart__quantity {
	width: 190px;
}

.shop__cart__table tbody tr .cart__quantity .pro-qty {
	border: none;
	padding: 0;
	width: 110px;
	border-radius: 0;
}

.shop__cart__table tbody tr .cart__quantity .pro-qty input {
	color: #444444;
}

.shop__cart__table tbody tr .cart__quantity .pro-qty .qtybtn {
	font-size: 16px;
	color: #444444;
}

.shop__cart__table tbody tr .cart__total {
	font-size: 16px;
	color: #ca1515;
	font-weight: 600;
	width: 150px;
}

.shop__cart__table tbody tr .cart__close {
	text-align: right;
}

.shop__cart__table tbody tr .cart__close span {
	height: 45px;
	width: 45px;
	background: #f2f2f2;
	border-radius: 50%;
	font-size: 18px;
	color: #111111;
	line-height: 44px;
	text-align: center;
	display: inline-block;
	font-weight: 600;
	cursor: pointer;
}

.cart__btn {
	margin-bottom: 50px;
}

.cart__btn.update__btn {
	text-align: right;
}

.cart__btn a {
	font-size: 14px;
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	display: inline-block;
	padding: 14px 30px 12px;
	background: #f5f5f5;
}

.cart__btn a span {
	color: #ca1515;
	font-size: 14px;
	margin-right: 5px;
}

.discount__content h6 {
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	display: inline-block;
	margin-right: 30px;
}

.discount__content form {
	position: relative;
	width: 370px;
	display: inline-block;
}

.discount__content form input {
	height: 52px;
	width: 100%;
	border: 1px solid #444444;
	border-radius: 50px;
	padding-left: 30px;
	padding-right: 115px;
	font-size: 14px;
	color: #444444;
}

.discount__content form input::-webkit-input-placeholder {
	color: #444444;
}

.discount__content form input::-moz-placeholder {
	color: #444444;
}

.discount__content form input:-ms-input-placeholder {
	color: #444444;
}

.discount__content form input::-ms-input-placeholder {
	color: #444444;
}

.discount__content form input::placeholder {
	color: #444444;
}

.discount__content form button {
	position: absolute;
	right: 4px;
	top: 4px;
}

.cart__total__procced {
	background: #f5f5f5;
	padding: 40px;
}

.cart__total__procced h6 {
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 10px;
}

.cart__total__procced ul {
	margin-bottom: 25px;
}

.cart__total__procced ul li {
	list-style: none;
	font-size: 16px;
	color: #111111;
	font-weight: 600;
	overflow: hidden;
	line-height: 40px;
}

.cart__total__procced ul li span {
	color: #ca1515;
	float: right;
}

.cart__total__procced .primary-btn {
	display: block;
	border-radius: 50px;
	text-align: center;
	padding: 12px 0 10px;
}

/*---------------------
  Checkout
-----------------------*/

.checkout {
	padding-top: 80px;
	padding-bottom: 70px;
}

.coupon__link {
	font-size: 14px;
	color: #444444;
	padding: 14px 0;
	background: #f5f5f5;
	border-top: 2px solid #ca1515;
	text-align: center;
	margin-bottom: 50px;
}

.coupon__link a {
	font-size: 14px;
	color: #444444;
}

.coupon__link span {
	font-size: 14px;
	color: #ca1515;
}

.checkout__form h5 {
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	border-bottom: 1px solid #e1e1e1;
	padding-bottom: 20px;
	margin-bottom: 25px;
}

.checkout__form .checkout__form__input p {
	color: #444444;
	font-weight: 500;
	margin-bottom: 10px;
}

.checkout__form .checkout__form__input p span {
	color: #ca1515;
}

.checkout__form .checkout__form__input input {
	height: 50px;
	width: 100%;
	border: 1px solid #e1e1e1;
	border-radius: 2px;
	margin-bottom: 25px;
	font-size: 14px;
	padding-left: 20px;
	color: #666666;
}

.checkout__form .checkout__form__input input::-webkit-input-placeholder {
	color: #666666;
}

.checkout__form .checkout__form__input input::-moz-placeholder {
	color: #666666;
}

.checkout__form .checkout__form__input input:-ms-input-placeholder {
	color: #666666;
}

.checkout__form .checkout__form__input input::-ms-input-placeholder {
	color: #666666;
}

.checkout__form .checkout__form__input input::placeholder {
	color: #666666;
}

.checkout__form .checkout__form__checkbox {
	margin-bottom: 20px;
}

.checkout__form .checkout__form__checkbox label {
	display: block;
	padding-left: 24px;
	font-size: 14px;
	color: #444444;
	font-weight: 500;
	position: relative;
	cursor: pointer;
	margin-bottom: 16px;
}

.checkout__form .checkout__form__checkbox label input {
	position: absolute;
	visibility: hidden;
}

.checkout__form .checkout__form__checkbox label input:checked~.checkmark {
	border-color: #ca1515;
}

.checkout__form .checkout__form__checkbox label input:checked~.checkmark:after {
	border-color: #ca1515;
	opacity: 1;
}

.checkout__form .checkout__form__checkbox label .checkmark {
	position: absolute;
	left: 0;
	top: 4px;
	height: 10px;
	width: 10px;
	border: 1px solid #444444;
	border-radius: 2px;
}

.checkout__form .checkout__form__checkbox label .checkmark:after {
	position: absolute;
	left: 0px;
	top: -2px;
	width: 11px;
	height: 5px;
	border: solid #ffffff;
	border-width: 1.5px 1.5px 0px 0px;
	-webkit-transform: rotate(127deg);
	-ms-transform: rotate(127deg);
	transform: rotate(127deg);
	opacity: 0;
	content: "";
}

.checkout__form .checkout__form__checkbox p {
	margin-bottom: 0;
}

.checkout__order {
	background: #f5f5f5;
	padding: 30px;
}

.checkout__order h5 {
	border-bottom: 1px solid #d7d7d7;
	margin-bottom: 18px;
}

.checkout__order .site-btn {
	width: 100%;
}

.checkout__order__product {
	border-bottom: 1px solid #d7d7d7;
	padding-bottom: 22px;
}

.checkout__order__product ul li {
	list-style: none;
	font-size: 14px;
	color: #444444;
	font-weight: 500;
	overflow: hidden;
	margin-bottom: 14px;
	line-height: 24px;
}

.checkout__order__product ul li:last-child {
	margin-bottom: 0;
}

.checkout__order__product ul li span {
	font-size: 14px;
	color: #111111;
	font-weight: 600;
	float: right;
}

.checkout__order__product ul li .top__text {
	font-size: 16px;
	color: #111111;
	font-weight: 600;
	float: left;
}

.checkout__order__product ul li .top__text__right {
	font-size: 16px;
	color: #111111;
	font-weight: 600;
	float: right;
}

.checkout__order__total {
	padding-top: 12px;
	border-bottom: 1px solid #d7d7d7;
	padding-bottom: 10px;
	margin-bottom: 25px;
}

.checkout__order__total ul li {
	list-style: none;
	font-size: 16px;
	color: #111111;
	font-weight: 600;
	overflow: hidden;
	line-height: 40px;
}

.checkout__order__total ul li span {
	color: #ca1515;
	float: right;
}

.checkout__order__widget {
	padding-bottom: 10px;
}

.checkout__order__widget label {
	display: block;
	padding-left: 25px;
	font-size: 14px;
	font-weight: 500;
	color: #111111;
	position: relative;
	cursor: pointer;
	margin-bottom: 14px;
}

.checkout__order__widget label input {
	position: absolute;
	visibility: hidden;
}

.checkout__order__widget label input:checked~.checkmark {
	border-color: #ca1515;
}

.checkout__order__widget label input:checked~.checkmark:after {
	border-color: #ca1515;
	opacity: 1;
}

.checkout__order__widget label .checkmark {
	position: absolute;
	left: 0;
	top: 4px;
	height: 10px;
	width: 10px;
	border: 1px solid #444444;
	border-radius: 2px;
}

.checkout__order__widget label .checkmark:after {
	position: absolute;
	left: 0px;
	top: -2px;
	width: 11px;
	height: 5px;
	border: solid #ffffff;
	border-width: 1.5px 1.5px 0px 0px;
	-webkit-transform: rotate(127deg);
	-ms-transform: rotate(127deg);
	transform: rotate(127deg);
	opacity: 0;
	content: "";
}

/*---------------------
    Blog
-----------------------*/

.blog {
	padding-top: 70px;
	padding-bottom: 80px;
}

.blog__item {
	margin-bottom: 35px;
}

.blog__item__pic {
	height: 240px;
}

.blog__item__pic.large__item {
	height: 540px;
}

.blog__item__text {
	padding: 25px 20px 0 0;
	margin-right: 30px;
	background: #ffffff;
	margin-top: -54px;
}

.blog__item__text h6 {
	margin-bottom: 6px;
}

.blog__item__text h6 a {
	color: #111111;
	font-weight: 600;
	line-height: 21px;
}

.blog__item__text ul li {
	font-size: 12px;
	color: #888888;
	display: inline-block;
	list-style: none;
	margin-right: 25px;
	position: relative;
}

.blog__item__text ul li span {
	color: #111111;
}

.blog__item__text ul li:after {
	position: absolute;
	right: -17px;
	top: 0px;
	content: "|";
}

.blog__item__text ul li:last-child {
	margin-right: 0;
}

.blog__item__text ul li:last-child:after {
	display: none;
}

.primary-btn.load-btn {
	color: #111111;
	background: #f2f2f2;
	padding: 12px 85px 10px;
	border-radius: 50px;
}

/*---------------------
  Blog Sidebar
-----------------------*/

.blog__sidebar {
	padding-left: 40px;
}

.blog__sidebar__item {
	margin-bottom: 50px;
}

.blog__sidebar__item:last-child {
	margin-bottom: 0;
}

.blog__sidebar__item .section-title {
	margin-bottom: 40px;
}

.blog__sidebar__item .section-title h4 {
	font-size: 16px;
}

.blog__sidebar__item .section-title h4:after {
	bottom: -7px;
}

.blog__sidebar__item ul li {
	list-style: none;
	line-height: 30px;
}

.blog__sidebar__item ul li a {
	font-size: 14px;
	color: #111111;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.blog__sidebar__item ul li a:hover {
	color: #ca1515;
}

.blog__sidebar__item ul li a:hover span {
	color: #111111;
}

.blog__sidebar__item ul li a span {
	float: right;
	color: #888888;
}

.blog__feature__item {
	display: block;
	overflow: hidden;
	margin-bottom: 30px;
}

.blog__feature__item:last-child {
	margin-bottom: 0;
}

.blog__feature__item__pic {
	float: left;
	margin-right: 25px;
}

.blog__feature__item__text {
	overflow: hidden;
}

.blog__feature__item__text h6 {
	font-size: 14px;
	color: #111111;
	font-weight: 600;
	line-height: 21px;
	margin-bottom: 5px;
}

.blog__feature__item__text span {
	font-size: 12px;
	color: #888888;
	display: block;
}

.blog__sidebar__tags a {
	display: inline-block;
	font-size: 13px;
	color: #666666;
	border: 1px solid #f2f2f2;
	padding: 8px 14px 7px;
	margin-right: 6px;
	margin-bottom: 10px;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.blog__sidebar__tags a:hover {
	color: #111111;
}

.blog__sidebar__tags a:last-child {
	margin-right: 0;
}

/*---------------------
  Blog Details
-----------------------*/

.blog-details {
	padding-top: 80px;
	padding-bottom: 80px;
}

.blog__details__item {
	background: #ffffff;
	margin-bottom: 24px;
}

.blog__details__item__title {
	background: #ffffff;
	padding-top: 30px;
	padding-right: 30px;
	margin-top: -100px;
	position: relative;
	margin-right: 50px;
}

.blog__details__item__title .tip {
	font-size: 12px;
	color: #ffffff;
	background: #ca1515;
	text-transform: uppercase;
	font-weight: 500;
	display: inline-block;
	padding: 2px 11px 1px;
	border-radius: 5px;
}

.blog__details__item__title h4 {
	color: #111111;
	font-weight: 600;
	line-height: 39px;
	margin-top: 10px;
	margin-bottom: 5px;
}

.blog__details__item__title ul li {
	font-size: 12px;
	color: #888888;
	display: inline-block;
	list-style: none;
	margin-right: 25px;
	position: relative;
}

.blog__details__item__title ul li span {
	color: #111111;
}

.blog__details__item__title ul li:after {
	position: absolute;
	right: -17px;
	top: 0px;
	content: "|";
}

.blog__details__item__title ul li:last-child {
	margin-right: 0;
}

.blog__details__item__title ul li:last-child:after {
	display: none;
}

.blog__details__desc {
	margin-bottom: 40px;
}

.blog__details__desc p {
	font-size: 15px;
	color: #444444;
	line-height: 27px;
}

.blog__details__desc p:last-child {
	margin-bottom: 0;
}

.blog__details__quote {
	border-top: 2px solid #ca1515;
	position: relative;
	padding-top: 22px;
	margin-bottom: 20px;
}

.blog__details__quote .icon {
	height: 30px;
	width: 30px;
	font-size: 18px;
	color: #ca1515;
	background: #ffffff;
	position: absolute;
	left: 0;
	top: -11px;
}

.blog__details__quote p {
	font-size: 16px;
	color: #111111;
	font-weight: 600;
	font-style: italic;
	line-height: 30px;
	margin-bottom: 0;
}

.blog__details__tags {
	margin-bottom: 50px;
}

.blog__details__tags a {
	display: inline-block;
	font-size: 13px;
	color: #666666;
	border: 1px solid #f2f2f2;
	padding: 8px 14px 7px;
	margin-right: 6px;
	margin-bottom: 10px;
	-webkit-transition: all, 0.3s;
	-o-transition: all, 0.3s;
	transition: all, 0.3s;
}

.blog__details__tags a:hover {
	color: #111111;
}

.blog__details__tags a:last-child {
	margin-right: 0;
}

.blog__details__btns {
	background: #f5f5f5;
	padding: 14px 30px;
	margin-bottom: 55px;
}

.blog__details__btn__item.blog__details__btn__item--next {
	text-align: right;
}

.blog__details__btn__item.blog__details__btn__item--next h6 a i {
	margin-right: 0;
	margin-left: 5px;
}

.blog__details__btn__item h6 a {
	font-size: 15px;
	font-weight: 600;
	text-transform: uppercase;
	color: #111111;
}

.blog__details__btn__item h6 a i {
	font-size: 15px;
	font-weight: 600;
	position: relative;
	top: -2px;
	margin-right: 5px;
}

.blog__details__comment {
	position: relative;
}

.blog__details__comment h5 {
	color: #111111;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.blog__details__comment .leave-btn {
	font-size: 14px;
	font-weight: 700;
	color: #111111;
	text-transform: uppercase;
	position: absolute;
	right: 0;
	top: 0;
}

.blog__details__comment .leave-btn:after {
	position: absolute;
	left: 0;
	bottom: -5px;
	height: 1px;
	width: 100%;
	background: #ca1515;
	content: "";
}

.blog__comment__item {
	margin-bottom: 35px;
}

.blog__comment__item:last-child {
	margin-bottom: 0;
}

.blog__comment__item.blog__comment__item--reply {
	padding-left: 115px;
}

.blog__comment__item__pic {
	float: left;
	margin-right: 25px;
}

.blog__comment__item__pic img {
	border-radius: 50%;
}

.blog__comment__item__text {
	overflow: hidden;
}

.blog__comment__item__text h6 {
	color: #111111;
	font-weight: 600;
	margin-bottom: 14px;
}

.blog__comment__item__text p {
	font-size: 15px;
	color: #444444;
	line-height: 26px;
}

.blog__comment__item__text ul li {
	list-style: none;
	font-size: 12px;
	color: #888888;
	display: inline-block;
	margin-right: 25px;
}

.blog__comment__item__text ul li:last-child {
	margin-right: 0;
}

.blog__comment__item__text ul li i {
	font-size: 14px;
	color: #ca1515;
	margin-right: 5px;
}

/*---------------------
  Contact
-----------------------*/

.contact {
	padding-top: 80px;
	padding-bottom: 80px;
}

.contact__address {
	margin-bottom: 45px;
}

.contact__address h5 {
	color: #111111;
	font-size: 20px;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 20px;
}

.contact__address ul li {
	list-style: none;
	position: relative;
	margin-bottom: 20px;
}

.contact__address ul li:last-child {
	margin-bottom: 0;
}

.contact__address ul li h6 {
	color: #111111;
	font-weight: 600;
	margin-bottom: 10px;
}

.contact__address ul li h6 i {
	font-size: 16px;
	color: #ca1515;
	margin-right: 5px;
}

.contact__address ul li p {
	margin-bottom: 0;
	font-size: 15px;
	color: #444444;
}

.contact__address ul li span {
	font-size: 15px;
	color: #444444;
	display: inline-block;
	margin-right: 25px;
	position: relative;
}

.contact__address ul li span:after {
	position: absolute;
	right: -15px;
	top: 11px;
	content: "|";
	line-height: 0;
}

.contact__address ul li span:last-child {
	margin-right: 0;
}

.contact__address ul li span:last-child:after {
	display: none;
}

.contact__form h5 {
	color: #111111;
	font-size: 20px;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.contact__form form input {
	height: 50px;
	width: 100%;
	padding-left: 20px;
	font-size: 14px;
	color: #444444;
	border: 1px solid #e1e1e1;
	border-radius: 10px;
	margin-bottom: 20px;
}

.contact__form form input::-webkit-input-placeholder {
	color: #444444;
}

.contact__form form input::-moz-placeholder {
	color: #444444;
}

.contact__form form input:-ms-input-placeholder {
	color: #444444;
}

.contact__form form input::-ms-input-placeholder {
	color: #444444;
}

.contact__form form input::placeholder {
	color: #444444;
}

.contact__form form textarea {
	height: 130px;
	width: 100%;
	padding-left: 20px;
	padding-top: 12px;
	font-size: 14px;
	color: #444444;
	border: 1px solid #e1e1e1;
	border-radius: 10px;
	margin-bottom: 14px;
	resize: none;
}

.contact__form form textarea::-webkit-input-placeholder {
	color: #444444;
}

.contact__form form textarea::-moz-placeholder {
	color: #444444;
}

.contact__form form textarea:-ms-input-placeholder {
	color: #444444;
}

.contact__form form textarea::-ms-input-placeholder {
	color: #444444;
}

.contact__form form textarea::placeholder {
	color: #444444;
}

.contact__map {
	height: 780px;
}

.contact__map iframe {
	width: 100%;
}

/*--------------------------------- Responsive Media Quaries -----------------------------*/

@media only screen and (min-width: 1600px) and (max-width: 1900px) {
	.header {
		padding: 0 85px;
	}
}

@media only screen and (min-width: 1200px) and (max-width: 1599px) {
	.header__menu ul li {
		margin-right: 20px;
	}
	.header {
		padding: 0 30px;
	}
}

@media only screen and (min-width: 1200px) {
	.container {
		max-width: 1170px;
	}
}

/* Medium Device = 1200px */

@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.header__menu ul li {
		margin-right: 20px;
	}
	.header__right__auth {
		margin-right: 5px;
	}
	.sidebar__filter a {
		padding: 5px 15px 5px 15px;
	}
	.nav::before {
		width: 240px;
	}
	.nav::after {
		width: 240px;
	}
}

/* Tablet Device = 768px */

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.filter__controls li {
		margin-right: 15px;
	}
	.discount__pic img {
		height: auto;
	}
	.discount__text {
		height: auto;
	}
	.sidebar__filter a {
		position: relative;
		bottom: 0;
	}
	.filter-range-wrap .range-slider .price-input input {
		max-width: 27%;
	}
	.filter-range-wrap .range-slider .price-input {
		margin-bottom: 20px;
	}
	.product__details__pic {
		margin-bottom: 50px;
	}
	.nav::before {
		width: 125px;
	}
	.nav::after {
		width: 125px;
	}
	.discount__content {
		margin-bottom: 40px;
	}
	.checkout__order {
		margin-top: 20px;
	}
	.blog__sidebar {
		padding-left: 0;
	}
	.canvas__open {
		display: block;
		font-size: 22px;
		color: #222;
		height: 35px;
		width: 35px;
		line-height: 35px;
		text-align: center;
		border: 1px solid #323232;
		border-radius: 2px;
		cursor: pointer;
		position: absolute;
		right: 15px;
		top: 24px;
	}
	.offcanvas-menu-overlay {
		position: fixed;
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
		background: rgba(0, 0, 0, 0.7);
		content: "";
		z-index: 98;
		-webkit-transition: all, 0.5s;
		-o-transition: all, 0.5s;
		transition: all, 0.5s;
		visibility: hidden;
	}
	.offcanvas-menu-overlay.active {
		visibility: visible;
	}
	.offcanvas-menu-wrapper {
		position: fixed;
		left: -300px;
		width: 300px;
		height: 100%;
		background: #ffffff;
		padding: 90px 20px 30px 30px;
		display: block;
		z-index: 99;
		overflow-y: auto;
		-webkit-transition: all, 0.5s;
		-o-transition: all, 0.5s;
		transition: all, 0.5s;
		opacity: 0;
	}
	.offcanvas-menu-wrapper.active {
		opacity: 1;
		left: 0;
	}
	.offcanvas__close {
		position: absolute;
		width: 40px;
		height: 40px;
		right: 30px;
		top: 25px;
		border: 1px solid #ddd;
		border-radius: 50%;
		font-size: 26px;
		text-align: center;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
		cursor: pointer;
	}
	.offcanvas__menu {
		display: none;
	}
	.slicknav_btn {
		display: none;
	}
	.slicknav_menu {
		background: transparent;
		padding: 0;
		margin-bottom: 20px;
	}
	.slicknav_nav ul {
		margin: 0;
	}
	.slicknav_nav .slicknav_row,
	.slicknav_nav a {
		padding: 7px 0;
		margin: 0;
		color: #111111;
		font-weight: 600;
	}
	.slicknav_nav .slicknav_row:hover {
		border-radius: 0;
		background: transparent;
		color: #111111;
	}
	.slicknav_nav a:hover {
		border-radius: 0;
		background: transparent;
		color: #111111;
	}
	.slicknav_nav {
		display: block !important;
	}
	.offcanvas__logo {
		margin-bottom: 25px;
	}
	.offcanvas__widget {
		text-align: center;
		margin-bottom: 20px;
	}
	.offcanvas__widget li {
		list-style: none;
		display: inline-block;
		font-size: 18px;
		color: #111111;
		margin-right: 20px;
		cursor: pointer;
	}
	.offcanvas__widget li:last-child {
		margin-right: 0;
	}
	.offcanvas__widget li a {
		font-size: 18px;
		color: #111111;
		position: relative;
	}
	.offcanvas__widget li a .tip {
		position: absolute;
		right: -12px;
		top: -11px;
		height: 18px;
		width: 18px;
		background: #111111;
		font-size: 10px;
		font-weight: 500;
		color: #ffffff;
		line-height: 18px;
		text-align: center;
		border-radius: 50%;
	}
	.offcanvas__auth a {
		font-size: 15px;
		color: #111111;
		position: relative;
		margin-right: 8px;
		font-weight: 500;
	}
	.offcanvas__auth a:last-child {
		margin-right: 0;
	}
	.offcanvas__auth a:last-child:after {
		display: none;
	}
	.offcanvas__auth a:after {
		position: absolute;
		right: -8px;
		top: -2px;
		content: "/";
		font-size: 13px;
	}
	.header__menu {
		display: none;
	}
	.header__right {
		display: none;
	}
}

/* Wide Mobile = 480px */

@media only screen and (max-width: 767px) {
	.canvas__open {
		display: block;
		font-size: 22px;
		color: #222;
		height: 35px;
		width: 35px;
		line-height: 35px;
		text-align: center;
		border: 1px solid #323232;
		border-radius: 2px;
		cursor: pointer;
		position: absolute;
		right: 15px;
		top: 24px;
	}
	.offcanvas-menu-overlay {
		position: fixed;
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
		background: rgba(0, 0, 0, 0.7);
		content: "";
		z-index: 98;
		-webkit-transition: all, 0.5s;
		-o-transition: all, 0.5s;
		transition: all, 0.5s;
		visibility: hidden;
	}
	.offcanvas-menu-overlay.active {
		visibility: visible;
	}
	.offcanvas-menu-wrapper {
		position: fixed;
		left: -270px;
		width: 270px;
		height: 100%;
		background: #ffffff;
		padding: 90px 20px 30px 30px;
		display: block;
		z-index: 99;
		overflow-y: auto;
		-webkit-transition: all, 0.5s;
		-o-transition: all, 0.5s;
		transition: all, 0.5s;
		opacity: 0;
	}
	.offcanvas-menu-wrapper.active {
		opacity: 1;
		left: 0;
	}
	.offcanvas__close {
		position: absolute;
		width: 40px;
		height: 40px;
		right: 30px;
		top: 25px;
		border: 1px solid #ddd;
		border-radius: 50%;
		font-size: 26px;
		text-align: center;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
		cursor: pointer;
	}
	.offcanvas__menu {
		display: none;
	}
	.slicknav_btn {
		display: none;
	}
	.slicknav_menu {
		background: transparent;
		padding: 0;
		margin-bottom: 20px;
	}
	.slicknav_nav ul {
		margin: 0;
	}
	.slicknav_nav .slicknav_row,
	.slicknav_nav a {
		padding: 7px 0;
		margin: 0;
		color: #111111;
		font-weight: 600;
	}
	.slicknav_nav .slicknav_row:hover {
		border-radius: 0;
		background: transparent;
		color: #111111;
	}
	.slicknav_nav a:hover {
		border-radius: 0;
		background: transparent;
		color: #111111;
	}
	.slicknav_nav {
		display: block !important;
	}
	.offcanvas__logo {
		margin-bottom: 25px;
	}
	.offcanvas__widget {
		text-align: center;
		margin-bottom: 20px;
	}
	.offcanvas__widget li {
		list-style: none;
		display: inline-block;
		font-size: 18px;
		color: #111111;
		margin-right: 20px;
		cursor: pointer;
	}
	.offcanvas__widget li:last-child {
		margin-right: 0;
	}
	.offcanvas__widget li a {
		font-size: 18px;
		color: #111111;
		position: relative;
	}
	.offcanvas__widget li a .tip {
		position: absolute;
		right: -12px;
		top: -11px;
		height: 18px;
		width: 18px;
		background: #111111;
		font-size: 10px;
		font-weight: 500;
		color: #ffffff;
		line-height: 18px;
		text-align: center;
		border-radius: 50%;
	}
	.offcanvas__auth a {
		font-size: 15px;
		color: #111111;
		position: relative;
		margin-right: 8px;
		font-weight: 500;
	}
	.offcanvas__auth a:last-child {
		margin-right: 0;
	}
	.offcanvas__auth a:last-child:after {
		display: none;
	}
	.offcanvas__auth a:after {
		position: absolute;
		right: -8px;
		top: -2px;
		content: "/";
		font-size: 13px;
	}
	.header__menu {
		display: none;
	}
	.header__right {
		display: none;
	}
	.filter__controls {
		text-align: left;
		margin-bottom: 40px;
	}
	.filter__controls li {
		margin-right: 20px;
	}
	.discount__pic img {
		height: auto;
	}
	.discount__text {
		padding: 75px 40px 50px;
		height: auto;
	}
	.product__details__pic__left {
		height: auto;
	}
	.product__details__pic {
		margin-bottom: 30px;
	}
	.quantity {
		float: none;
		margin-right: 0;
	}
	.nav::before {
		display: none;
	}
	.nav::after {
		display: none;
	}
	.shop__cart__table {
		overflow-x: auto;
	}
	.shop__cart__table tbody tr .cart__product__item img {
		float: none;
		margin-right: 0;
	}
	.cart__btn {
		text-align: center;
		margin-bottom: 25px;
	}
	.cart__btn.update__btn {
		text-align: center;
	}
	.discount__content h6 {
		display: block;
		margin-right: 0;
		margin-bottom: 20px;
	}
	.discount__content {
		margin-bottom: 35px;
	}
	.blog__sidebar {
		padding-left: 0;
		padding-top: 40px;
	}
	.contact__content {
		margin-bottom: 40px;
	}
}

/* Small Device = 320px */

@media only screen and (max-width: 479px) {
	.categories__item.categories__large__item {
		padding-left: 30px;
	}
	.banner__text h1 {
		font-size: 45px;
	}
	.filter__controls li {
		margin-right: 5px;
		margin-bottom: 5px;
	}
	.discount__text {
		padding: 75px 0px 50px;
	}
	.footer__newslatter form {
		text-align: center;
	}
	.footer__newslatter form input {
		margin-bottom: 10px;
	}
	.footer__newslatter form button {
		position: relative;
		right: 0;
		top: 0;
	}
	.product__details__button .cart-btn {
		float: none;
		margin-right: 0;
	}
	.product__details__button ul {
		float: none;
	}
	.nav-item {
		margin-right: 20px;
	}
	.blog__details__item__title {
		margin-right: 30px;
	}
	.blog__comment__item.blog__comment__item--reply {
		padding-left: 0;
	}
	.blog__comment__item__text ul li {
		margin-right: 5px;
	}
	.primary-btn.load-btn {
		padding: 12px 50px 10px;
	}
	.blog__comment__item__pic {
		float: none;
		margin-bottom: 20px;
	}
	.discount__content form {
		width: 100%;
	}
	.search-model-form input {
		width: 100%;
		font-size: 24px;
	}
}
	</style>
</head>

<body>
    


    
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./index.html">Product</a>

                        <span>Sub Product</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#collapseOne">Sticker </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Sticker Sheet</a></li>
                                                    <li><a href="#">Sticker Die Cut</a></li>
                                                    <li><a href="#">Sticker Kiss Cut</a></li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseTwo">Banner</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseThree">Flyers</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Accessories</a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFive">Cosmetic</a>
                                        </div>
                                        <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="sidebar__color">
                            <div class="section-title">
                                <h4>Shop by size</h4>
                            </div>
                            <div class="size__list color__list">
                                <label for="black">
                                    Blacks
                                    <input type="checkbox" id="black">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="whites">
                                    Whites
                                    <input type="checkbox" id="whites">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="reds">
                                    Reds
                                    <input type="checkbox" id="reds">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="greys">
                                    Greys
                                    <input type="checkbox" id="greys">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="blues">
                                    Blues
                                    <input type="checkbox" id="blues">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="beige">
                                    Beige Tones
                                    <input type="checkbox" id="beige">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="greens">
                                    Greens
                                    <input type="checkbox" id="greens">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="yellows">
                                    Yellows
                                    <input type="checkbox" id="yellows">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-1">
                            <div class="product__item">
                                <a href="{{ route('createOrder')}}">
                                <div class="product__item__pic set-bg" style="background-image: url('{{asset('frontend/assets/img/product/stickerbiasa.png')}}')">
                                    <div class="label new">New</div>
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Sticker Sheet</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 59.0</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" style="background-image: url('{{asset('frontend/assets/img/product/stickerdiecut.png')}}')">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/shop-2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Sticker Die Cut</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 49.0</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div a href="{{ route('createOrder')}}" class="product__item__pic set-bg" style="background-image: url('{{asset('frontend/assets/img/product/stickercar.png')}}')">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/shop-3.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Sticker Kiss Cut</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 59.0</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" style="background-image: url('{{asset('frontend/assets/img/product/.png')}}')">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/shop-4.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Dark wash Xavi jeans</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 59.0</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/shop-5.jpg">
                                    <div class="label">Sale</div>
                                    <ul class="product__hover">
                                        <li><a href="img/shop/shop-5.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Ankle-cuff sandals</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/shop-6.jpg">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/shop-6.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Contrasting sunglasses</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 59.0</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/shop-7.jpg">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/shop-7.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Circular pendant earrings</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 59.0</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/shop-8.jpg">
                                    <div class="label stockout stockblue">Out Of Stock</div>
                                    <ul class="product__hover">
                                        <li><a href="img/shop/shop-8.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Cotton T-ooShirt</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 59.0</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/shop-9.jpg">
                                    <div class="label">Sale</div>
                                    <ul class="product__hover">
                                        <li><a href="img/shop/shop-9.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Water resistant zips backpack</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        cilisis.</p>
                        <div class="footer__payment">
                            <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                            <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                            <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                            <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                            <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget">
                        <h6>Quick links</h6>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">
                        <h6>NEWSLETTER</h6>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
@endsection