@import 'https://fonts.googleapis.com/css?family=Roboto:400,500,700';
@import 'https://fonts.googleapis.com/css?family=Hind+Madurai:600,700';
/*
Template Name: Zircos Dashboard
Author: CoderThemes
Email: coderthemes@gmail.com
File: Core
*/
/* =============
  == Core List==

   - Common
   - Helper classes
   - Extra
   - Bootstrap Custom
   - Waves effect
   - Print (Invoice css)
   - Demo Css (Demo purpose only)
   - LOADER

============= */
/* =============
   Common
============= */
body {
  font-family: roboto;
  margin: 0;
  padding-bottom: 65px;
  overflow-x: hidden;
  background-color: #f3f3f3;
  color: #797979;
}
html {
  position: relative;
  min-height: 100%;
}
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
  color: #4c4c4c;
  font-family: 'Hind Madurai', sans-serif;
  margin: 10px 0;
}
h5 {
  font-size: 15px;
}
p {
  line-height: 1.6;
}
* {
  outline: none !important;
}
b,
strong {
  font-weight: 600;
  font-family: 'Hind Madurai', sans-serif;
}
a:hover {
  outline: 0;
  text-decoration: none;
}
a:active {
  outline: 0;
  text-decoration: none;
}
a:focus {
  outline: 0;
  text-decoration: none;
}
.container {
  width: auto;
}
.container-alt {
  margin-left: auto;
  margin-right: auto;
  padding-left: 15px;
  padding-right: 15px;
}
/* Footer */
.footer {
  border-top: 1px solid rgba(152, 152, 152, 0.2);
  bottom: 0;
  text-align: left !important;
  padding: 19px 30px 20px;
  position: absolute;
  right: 0;
  left: 250px;
}
#wrapper {
  height: 100%;
  overflow: hidden;
  width: 100%;
}
/* =============
   Helper classes
============= */
.p-0 {
  padding: 0 !important;
}
.p-20 {
  padding: 20px !important;
}
.p-30 {
  padding: 30px !important;
}
.p-l-0 {
  padding-left: 0 !important;
}
.p-r-0 {
  padding-right: 0 !important;
}
.p-t-0 {
  padding-top: 0 !important;
}
.p-b-0 {
  padding-bottom: 0 !important;
}
.p-t-10 {
  padding-top: 10px !important;
}
.p-b-10 {
  padding-bottom: 10px !important;
}
.p-l-r-10 {
  padding-left: 10px;
  padding-right: 10px;
}
.m-0 {
  margin: 0 !important;
}
.m-r-5 {
  margin-right: 5px !important;
}
.m-r-10 {
  margin-right: 10px !important;
}
.m-r-15 {
  margin-right: 15px !important;
}
.m-l-5 {
  margin-left: 5px !important;
}
.m-l-10 {
  margin-left: 10px !important;
}
.m-l-15 {
  margin-left: 15px !important;
}
.m-t-5 {
  margin-top: 5px !important;
}
.m-t-0 {
  margin-top: 0 !important;
}
.m-t-10 {
  margin-top: 10px !important;
}
.m-t-15 {
  margin-top: 15px !important;
}
.m-t-20 {
  margin-top: 20px !important;
}
.m-t-30 {
  margin-top: 30px !important;
}
.m-t-40 {
  margin-top: 40px !important;
}
.m-t-50 {
  margin-top: 50px !important;
}
.m-b-0 {
  margin-bottom: 0 !important;
}
.m-b-5 {
  margin-bottom: 5px !important;
}
.m-b-10 {
  margin-bottom: 10px !important;
}
.m-b-15 {
  margin-bottom: 15px !important;
}
.m-b-20 {
  margin-bottom: 20px !important;
}
.m-b-25 {
  margin-bottom: 25px !important;
}
.m-b-30 {
  margin-bottom: 30px !important;
}
.w-xs {
  min-width: 80px;
}
.w-sm {
  min-width: 95px;
}
.w-md {
  min-width: 110px;
}
.w-lg {
  min-width: 140px;
}
.center-page {
  float: none !important;
  margin: 0 auto !important;
}
.text-overflow {
  text-overflow: ellipsis;
  white-space: nowrap;
  display: block;
  width: 100%;
  overflow: hidden;
}
.font-secondary {
  font-family: 'Hind Madurai', sans-serif;
}
.font-600 {
  font-weight: 600;
}
.font-normal {
  font-weight: normal;
}
.font-light {
  font-weight: 300;
}
.font-13 {
  font-size: 13px !important;
}
.wrapper-md {
  padding: 20px;
}
.pull-in {
  margin-left: -20px;
  margin-right: -20px;
}
.b-0 {
  border: none !important;
}
.vertical-middle {
  vertical-align: middle;
}
.bx-shadow {
  -moz-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
}
.bx-shadow-none {
  box-shadow: none !important;
}
.mx-box {
  max-height: 380px;
  min-height: 380px;
}
.thumb-sm {
  height: 32px;
  width: 32px;
}
.thumb-md {
  height: 48px;
  width: 48px;
}
.thumb-lg {
  height: 88px;
  width: 88px;
}
.thumb-xl {
  height: 120px;
  width: 120px;
}
.bg-transparent {
  background-color: transparent !important;
}
.img-rounded,
.img-thumbnail,
.thumb-lg,
.thumb-md,
.thumb-sm,
.thumbnail {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16), 0 2px 10px rgba(0, 0, 0, 0.12);
}
.slimScrollDiv {
  height: auto !important;
}
/* =============
   Extras
============= */
/* Table type box */
.table-box {
  display: table;
  height: 100%;
  width: 100%;
}
.table-box .table-detail {
  display: table-cell;
  vertical-align: middle;
}
/* Card Box */
.card-box {
  padding: 20px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  background-clip: padding-box;
  margin-bottom: 20px;
  background-color: #ffffff;
}
/* Search box */
.search-box {
  position: relative;
}
.search-box .btn-search {
  position: absolute;
  top: 3px;
  right: 3px;
  background-color: transparent !important;
  border: none !important;
  font-size: 16px;
  box-shadow: none !important;
  outline: none !important;
  color: #989898;
}
.search-box .form-control {
  height: 38px;
  border-radius: 30px;
  padding: 8px 45px 8px 0;
}
/* =============
   Bootstrap-custom
============= */
.row {
  margin-right: -10px;
  margin-left: -10px;
}
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
  padding-left: 10px;
  padding-right: 10px;
}
.breadcrumb {
  background-color: transparent;
  margin-bottom: 15px;
  padding-top: 10px;
  padding-left: 0;
}
/* Dropdown */
.dropdown-menu {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  border: none;
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 0.6s;
  animation-duration: 0.6s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.dropdown-menu > li > a {
  padding: 7px 20px;
}
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover {
  background-color: #f3f3f3 !important;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  background-color: rgba(152, 152, 152, 0.1);
  color: #313a46;
}
.dropdown-lg {
  width: 260px;
}
.arrow-dropdown-menu.arrow-menu-right:before {
  left: auto;
  right: 11px;
}
.arrow-dropdown-menu.arrow-menu-right:after {
  left: auto;
  right: 12px;
}
/* Background colors */
.bg-custom {
  background-color: #00acc1 !important;
}
.bg-primary {
  background-color: #188ae2 !important;
}
.bg-success {
  background-color: #26a69a !important;
}
.bg-info {
  background-color: #3ac9d6 !important;
}
.bg-warning {
  background-color: #f9c851 !important;
}
.bg-danger {
  background-color: #f5707a !important;
}
.bg-muted {
  background-color: #797979 !important;
}
.bg-inverse {
  background-color: #3b3e47 !important;
}
.bg-purple {
  background-color: #6b5fb5 !important;
}
.bg-pink {
  background-color: #f06292 !important;
}
.bg-orange {
  background-color: #ff9800 !important;
}
.bg-brown {
  background-color: #8d6e63 !important;
}
.bg-teal {
  background-color: #4bd396 !important;
}
.bg-white {
  background-color: #ffffff !important;
}
.bg-dark {
  background-color: #313a46 !important;
}
/* Text colors */
.text-custom {
  color: #00acc1 !important;
}
.text-white {
  color: #ffffff !important;
}
.text-danger {
  color: #f5707a !important;
}
.text-muted {
  color: #989898 !important;
}
.text-primary {
  color: #188ae2 !important;
}
.text-warning {
  color: #f9c851 !important;
}
.text-success {
  color: #26a69a !important;
}
.text-info {
  color: #3ac9d6 !important;
}
.text-inverse {
  color: #3b3e47 !important;
}
.text-pink {
  color: #f06292 !important;
}
.text-purple {
  color: #6b5fb5 !important;
}
.text-orange {
  color: #ff9800 !important;
}
.text-brown {
  color: #8d6e63 !important;
}
.text-teal {
  color: #4bd396 !important;
}
.text-dark {
  color: #313a46 !important;
}
/* Labels */
.label {
  font-weight: 600;
  letter-spacing: 0.05em;
  padding: .3em .6em .2em;
  font-family: 'Hind Madurai', sans-serif;
}
.label-white {
  background-color: rgba(255, 255, 255, 0.7);
  color: #313a46 !important;
}
.label-default {
  background-color: #00acc1;
}
.label-primary {
  background-color: #188ae2;
}
.label-success {
  background-color: #26a69a;
}
.label-info {
  background-color: #3ac9d6;
}
.label-warning {
  background-color: #f9c851;
}
.label-danger {
  background-color: #f5707a;
}
.label-purple {
  background-color: #6b5fb5;
}
.label-pink {
  background-color: #f06292;
}
.label-orange {
  background-color: #ff9800;
}
.label-brown {
  background-color: #8d6e63;
}
.label-teal {
  background-color: #4bd396;
}
.label-inverse {
  background-color: #3b3e47;
}
/* Badge */
.badge {
  text-transform: uppercase;
  padding: 4px 7px;
  font-size: 11px;
  margin-top: 1px;
  background-color: #00acc1;
}
.badge-xs {
  font-size: 9px;
}
.badge-xs,
.badge-sm {
  -webkit-transform: translate(0, -2px);
  -ms-transform: translate(0, -2px);
  -o-transform: translate(0, -2px);
  transform: translate(0, -2px);
}
.badge-white {
  background-color: rgba(255, 255, 255, 0.7);
  color: #313a46 !important;
}
.badge-primary {
  background-color: #188ae2;
}
.badge-success {
  background-color: #26a69a;
}
.badge-info {
  background-color: #3ac9d6;
}
.badge-warning {
  background-color: #f9c851;
}
.badge-danger {
  background-color: #f5707a;
}
.badge-purple {
  background-color: #6b5fb5;
}
.badge-pink {
  background-color: #f06292;
}
.badge-orange {
  background-color: #ff9800;
}
.badge-brown {
  background-color: #8d6e63;
}
.badge-teal {
  background-color: #4bd396;
}
.badge-inverse {
  background-color: #3b3e47;
}
/* Pagination/ Pager */
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  border-radius: 3px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-radius: 3px;
}
.pagination > li > a,
.pagination > li > span {
  color: #313a46;
  margin-left: 5px;
  border-radius: 3px;
  display: inline-block;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  background-color: #f3f3f3;
}
.pagination-split li {
  border-radius: 0 !important;
}
.pagination-split li:first-child {
  margin-left: 0;
}
.pagination-split li a {
  border-radius: 0;
  font-weight: 500;
  border: 0;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background-color: #00acc1;
  border-color: #00acc1;
}
.pager li > a,
.pager li > span {
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  color: #313a46;
  background-color: #ffffff !important;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16), 0 2px 10px rgba(0, 0, 0, 0.12);
}
.list-group-item.active,
.list-group-item.active:focus,
.list-group-item.active:hover {
  background-color: #00acc1;
  border-color: #00acc1;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:focus .list-group-item-text,
.list-group-item.active:hover .list-group-item-text {
  color: rgba(255, 255, 255, 0.7);
}
/*!
 * Waves v0.6.0
 * http://fian.my.id/Waves
 *
 * Copyright 2014 Alfiana E. Sibuea and other contributors
 * Released under the MIT license
 * https://github.com/fians/Waves/blob/master/LICENSE
 */
.waves-effect {
  position: relative;
  cursor: pointer;
  display: inline-block;
  overflow: hidden;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  vertical-align: middle;
  z-index: 1;
  will-change: opacity, transform;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
.waves-effect .waves-ripple {
  position: absolute;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  margin-top: -10px;
  margin-left: -10px;
  opacity: 0;
  background: rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.7s ease-out;
  -moz-transition: all 0.7s ease-out;
  -o-transition: all 0.7s ease-out;
  -ms-transition: all 0.7s ease-out;
  transition: all 0.7s ease-out;
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -o-transition-property: -o-transform, opacity;
  transition-property: transform, opacity;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}
.waves-notransition {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -o-transition: none !important;
  -ms-transition: none !important;
  transition: none !important;
}
.waves-circle {
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  text-align: center;
  width: 2.5em;
  height: 2.5em;
  line-height: 2.5em;
  border-radius: 50%;
  -webkit-mask-image: none;
}
.waves-input-wrapper {
  border-radius: 0.2em;
  vertical-align: bottom;
}
.waves-input-wrapper .waves-button-input {
  position: relative;
  top: 0;
  left: 0;
  z-index: 1;
}
.waves-block {
  display: block;
}
.waves-effect.waves-light .waves-ripple {
  background-color: rgba(255, 255, 255, 0.4);
}
.waves-effect.waves-custom .waves-ripple {
  background-color: rgba(0, 172, 193, 0.4);
}
.waves-effect.waves-primary .waves-ripple {
  background-color: rgba(24, 138, 226, 0.4);
}
.waves-effect.waves-success .waves-ripple {
  background-color: rgba(38, 166, 154, 0.4);
}
.waves-effect.waves-info .waves-ripple {
  background-color: rgba(58, 201, 214, 0.4);
}
.waves-effect.waves-warning .waves-ripple {
  background-color: rgba(249, 200, 81, 0.4);
}
.waves-effect.waves-danger .waves-ripple {
  background-color: rgba(245, 112, 122, 0.4);
}
.waves-effect.waves-pink .waves-ripple {
  background-color: rgba(240, 98, 146, 0.4);
}
.waves-effect.purple .waves-ripple {
  background-color: rgba(107, 95, 181, 0.2);
}
.waves-effect.waves-inverse .waves-ripple {
  background-color: rgba(59, 62, 71, 0.4);
}
/* =============
   Print css
============= */
@media print {
  #topnav,
  .page-title,
  .breadcrumb,
  .page-title-box,
  .btn-default.dropdown-toggle {
    display: none !important;
    margin: 0 !important;
    padding: 0 !important;
  }
  .wrapper {
    padding-top: 0 !important;
  }
  .panel {
    border: 0 !important;
  }
  .panel .panel-body {
    padding: 0 !important;
  }
}
/* =============
   Demo Css
============= */
.demo-box {
  padding: 10px 15px;
}
/* Button demo */
.button-list {
  margin-left: -8px;
  margin-bottom: -12px;
}
.button-list .btn {
  margin-bottom: 12px;
  margin-left: 8px;
}
/* Popover */
.demo-popover .popover {
  position: relative;
  display: block;
  float: left;
  width: 260px;
  margin: 20px;
  z-index: 9;
}
/* Tooltips */
.demo-tooltip .tooltip {
  position: relative;
  display: inline-block;
  margin: 10px 20px;
  opacity: 1;
}
/* Grid page */
.grid-structure .grid-container {
  background-color: rgba(243, 243, 243, 0.5);
  margin-bottom: 10px;
  padding: 10px 20px;
}
/* Demo Animation */
.demo-animation {
  text-align: center;
}
.demo-animation img {
  position: relative;
  width: 120px;
  display: block;
  margin: 0 auto 40px auto;
  z-index: 1;
  border-radius: 2px;
}
/* Demo only */
.icon-list-demo div {
  cursor: pointer;
  line-height: 45px;
  white-space: nowrap;
  text-overflow: ellipsis;
  display: block;
  overflow: hidden;
}
.icon-list-demo div p {
  margin-bottom: 0;
  line-height: inherit;
}
.icon-list-demo i {
  text-align: center;
  vertical-align: middle;
  font-size: 24px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  margin-right: 12px;
  color: rgba(0, 0, 0, 0.6);
  border-radius: 3px;
  display: inline-block;
  transition: all 0.2s;
}
.icon-list-demo .col-md-4 {
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  background-clip: padding-box;
  margin-bottom: 10px;
}
.icon-list-demo .col-md-4:hover i {
  color: #00acc1;
}
/* Switchery demo */
.switchery-demo .switchery {
  margin-bottom: 10px;
  margin-right: 5px;
}
/* Icon colored demo */
.icon-colored {
  height: 48px;
  width: 48px;
  margin: 2rem;
}
/* === LOADER === */
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f3f3f3;
  z-index: 9999999;
}
#status {
  width: 56px;
  height: 56px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin: -23px 0 0 -23px;
}
.spinner-wrapper {
  position: relative;
  width: 4em;
  height: 4em;
  border-radius: 100%;
}
.spinner-wrapper::after {
  content: "";
  background: #f3f3f3;
  border-radius: 50%;
  width: 3em;
  height: 3em;
  position: absolute;
  top: 0.5em;
  left: 0.5em;
}
.rotator {
  position: relative;
  width: 4em;
  border-radius: 4em;
  overflow: hidden;
  -webkit-animation: rotate 2000ms infinite linear;
  animation: rotate 2000ms infinite linear;
}
.rotator:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #f5707a;
  border: 3px solid #f3f3f3;
  border-radius: 100%;
}
.inner-spin {
  background: #f3f3f3;
  height: 4em;
  width: 2em;
}
.inner-spin {
  -webkit-animation: rotate-left 2500ms infinite cubic-bezier(0.445, 0.05, 0.55, 0.95);
  animation: rotate-left 2500ms infinite cubic-bezier(0.445, 0.05, 0.55, 0.95);
  border-radius: 2em 0 0 2em;
  -webkit-transform-origin: 2em 2em;
  transform-origin: 2em 2em;
}
.inner-spin:last-child {
  -webkit-animation: rotate-right 2500ms infinite cubic-bezier(0.445, 0.05, 0.55, 0.95);
  animation: rotate-right 2500ms infinite cubic-bezier(0.445, 0.05, 0.55, 0.95);
  margin-top: -4em;
  border-radius: 0 2em 2em 0;
  float: right;
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
}
@-webkit-keyframes rotate-left {
  60%,
  75%,
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotate-left {
  60%,
  75%,
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes rotate {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotate {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes rotate-right {
  0%,
  25%,
  45% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotate-right {
  0%,
  25%,
  45% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
