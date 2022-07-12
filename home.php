<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {  ?>

<!DOCTYPE html>
<html>
<head>
<title style="font-size:50px;">Home</title>
<link rel="shortcut icon" href="img/test.png" style="height:20px;">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="free1.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.css"/>
    <link rel="stylesheet" href="css/theme1.css"/>
	 <script src="script.js"></script>
   <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
   <style>
   body {
    overflow-x:hidden;
   }
 </style>
</head>
<body style="background-color: #F0F1F6;">
      	<?php if ($_SESSION['role'] == 'teacher') {?>
      		<!--teacherlogin-->
          
			     <svg style="display:none;">
  <symbol id="logo" viewBox="0 0 140 59">
    <g>
      <path d="M6.8 57c0 .4-.1.7-.2.9-.1.2-.3.4-.4.5-.1.1-.4.199-.5.3-.2 0-.3.1-.5.1-.1 0-.3 0-.5-.1-.2 0-.4-.101-.5-.3-.2 0-.4-.2-.5-.4-.1-.2-.2-.5-.2-.9V44.7h-2c-.3 0-.6-.101-.8-.2-.2-.1-.3-.2-.5-.4s-.2-.3-.2-.4v-.4c0-.1 0-.2.1-.399 0-.2.1-.301.2-.4.1-.1.3-.3.5-.4.1 0 .4-.1.7-.1h2.1v-3.5c0-1 .1-1.9.3-2.7C4.1 35 4.5 34.3 5 33.7c.5-.6 1.1-1.1 1.9-1.4.8-.3 1.7-.5 2.7-.5.9 0 1.5.101 1.8.4.3.3.5.6.5 1.1 0 .3-.1.601-.3.9-.2.3-.6.4-1.2.4h-.6c-.6 0-1.1.101-1.5.301-.4.199-.7.5-.9.8C7.2 36 7 36.5 7 37c-.1.5-.1 1-.1 1.6V42h2.7c.3 0 .6.1.8.2.2.1.3.2.5.399.1.101.2.301.2.401 0 .2.1.3.1.4 0 .1 0 .3-.1.399 0 .2-.1.3-.2.4-.1.1-.3.3-.5.399-.2.101-.5.2-.8.2H6.8V57z" />
      <path d="M30.4 50.2c0 1.3-.2 2.5-.7 3.5-.5 1.1-1.1 2-1.9 2.8-.8.8-1.8 1.4-2.8 1.8-1.1.4-2.3.601-3.5.601-1.3 0-2.4-.2-3.5-.601-1.1-.399-2-1-2.8-1.8-.8-.8-1.4-1.7-1.9-2.8-.5-1.101-.7-2.2-.7-3.5s.2-2.4.7-3.5c.5-1.101 1.1-2 1.9-2.7.8-.8 1.7-1.4 2.8-1.8 1.1-.4 2.3-.601 3.5-.601 1.3 0 2.4.2 3.5.601 1.1.399 2 1 2.8 1.8.8.8 1.4 1.7 1.9 2.7.5 1.1.7 2.3.7 3.5zm-3.4 0c0-.8-.1-1.5-.4-2.3-.2-.7-.6-1.4-1.1-1.9s-1-1-1.7-1.3c-.7-.3-1.5-.5-2.4-.5s-1.7.2-2.4.5-1.3.8-1.7 1.3c-.5.5-.8 1.2-1.1 1.9-.2.699-.4 1.5-.4 2.3s.1 1.5.4 2.3c.2.7.6 1.4 1.1 1.9.5.6 1 1 1.7 1.3s1.5.5 2.4.5 1.7-.2 2.4-.5 1.3-.8 1.7-1.3c.5-.601.8-1.2 1.1-1.9.3-.7.4-1.5.4-2.3z" />
      <path d="M38.1 44.8h.1c.4-.899 1-1.7 1.9-2.3s1.8-.9 2.9-.9c.5 0 1 .101 1.3.301.4.199.6.6.6 1.1 0 .6-.2 1-.6 1.2-.4.2-.8.3-1.4.3h-.2c-1.3 0-2.4.5-3.2 1.4-.8.899-1.3 2.3-1.3 4.1v7c0 .4-.1.7-.2.9-.1.199-.3.399-.4.5-.2.1-.4.199-.5.3-.2 0-.3.1-.5.1-.1 0-.3 0-.5-.1-.2 0-.4-.101-.5-.3-.1-.2-.3-.301-.4-.5C35 57.7 35 57.4 35 57V43.5c0-.4.1-.7.2-.9.1-.199.3-.399.4-.5.2-.1.3-.199.5-.199s.3-.101.5-.101c.1 0 .3 0 .4.101.2 0 .3.1.5.199.2.101.3.301.4.5.1.2.2.5.2.9v1.3z" />
      <path d="M49.2 51.3c0 .7.2 1.4.5 2 .3.601.7 1.2 1.2 1.601.5.5 1.1.8 1.7 1.1s1.3.4 2 .4c1 0 1.8-.2 2.5-.5.7-.4 1.2-.801 1.8-1.2.2-.2.4-.3.6-.4.2-.301.3-.301.5-.301.4 0 .7.1 1 .4.3.199.4.6.4 1 0 .1 0 .3-.1.5s-.2.4-.4.7c-1.6 1.7-3.7 2.5-6.3 2.5-1.3 0-2.4-.199-3.5-.6s-2-1-2.8-1.8c-.8-.8-1.4-1.7-1.8-2.7-.4-1.1-.7-2.3-.7-3.6 0-1.301.2-2.5.6-3.5.4-1.101 1-2 1.8-2.801.8-.8 1.7-1.399 2.7-1.8 1-.399 2.2-.6 3.4-.6 2.1 0 3.8.6 5.2 1.8s2.3 2.9 2.6 5.2c0 .3.1.5.1.6v.5c0 1.101-.6 1.7-1.7 1.7H49.2V51.3zm9.9-2.5c0-.7-.1-1.3-.3-1.8-.2-.6-.5-1.1-.9-1.5s-.9-.7-1.4-1c-.6-.2-1.2-.4-2-.4-.7 0-1.4.101-2 .4-.6.2-1.2.6-1.6 1-.5.4-.8.9-1.1 1.5-.3.6-.5 1.2-.5 1.8h9.8z" />
      <path d="M77.9 55.1c.399-.3.8-.5 1.199-.5.4 0 .7.101 1 .4.2.3.4.6.4.9 0 .199 0 .5-.1.699a1.856 1.856 0 01-.599.701c-.7.5-1.399.9-2.3 1.2s-1.8.4-2.7.4c-1.3 0-2.5-.2-3.5-.601-1.1-.399-2-1-2.8-1.8s-1.4-1.7-1.8-2.7c-.4-1.1-.7-2.3-.7-3.6s.2-2.5.7-3.601c.4-1.1 1.1-2 1.8-2.8.8-.8 1.7-1.399 2.8-1.8 1.101-.4 2.2-.6 3.5-.6.9 0 1.7.1 2.601.399C78.2 42 79 42.4 79.6 43l.7.7c.101.2.2.5.2.7 0 .399-.1.8-.4 1-.3.3-.6.399-1 .399-.199 0-.399 0-.5-.1-.2-.099-.4-.199-.7-.499-.301-.3-.7-.5-1.2-.7s-1-.3-1.7-.3c-.9 0-1.6.2-2.3.5s-1.2.8-1.7 1.3-.8 1.2-1.1 1.9c-.2.699-.4 1.5-.4 2.3s.1 1.5.3 2.2c.2.699.6 1.3 1 1.899.5.5 1 1 1.7 1.3.7.301 1.4.5 2.3.5.7 0 1.3-.1 1.8-.3.4-.099.9-.299 1.3-.699z" />
      <path d="M94.6 56.2h-.1c-.6.899-1.4 1.6-2.3 2.1-.9.5-2 .7-3.3.7-.7 0-1.301-.1-2-.3-.7-.2-1.4-.5-1.9-.9-.6-.399-1.1-.899-1.4-1.6-.4-.7-.6-1.5-.6-2.4 0-1.3.3-2.2 1-3 .7-.7 1.6-1.3 2.7-1.7 1.1-.399 2.3-.6 3.7-.699 1.399-.101 2.8-.2 4.199-.2v-.5c0-1.2-.399-2.101-1.1-2.7s-1.7-.9-3-.9c-.7 0-1.4.101-2 .301-.6.199-1.3.5-1.9 1-.3.199-.699.3-1 .3-.3 0-.6-.101-.899-.4-.2-.2-.4-.6-.4-.899 0-.2.101-.5.2-.7s.3-.4.6-.601c.7-.5 1.601-1 2.5-1.3 1-.3 2-.5 3.2-.5s2.2.2 3.101.5c.899.3 1.6.8 2.199 1.4.601.6 1 1.3 1.301 2.1.3.8.399 1.601.399 2.5V56.9c0 .3-.1.6-.2.899-.1.201-.2.401-.4.501-.2.101-.3.2-.5.2s-.3.1-.4.1c-.1 0-.3 0-.399-.1-.2 0-.301-.1-.5-.2-.201-.1-.301-.3-.401-.5s-.2-.5-.2-.899v-.7h-.2zm-.9-5.5c-.8 0-1.7 0-2.5.1-.9.101-1.7.2-2.4.4s-1.3.5-1.8.9-.7 1-.7 1.7c0 .5.101.9.3 1.2.2.3.5.6.801.8.3.2.699.4 1.1.4.4.1.8.1 1.2.1 1.5 0 2.7-.5 3.5-1.399.8-.9 1.2-2.101 1.2-3.5v-.9h-.7v.199z" />
      <path d="M111.4 45.4c-.5-.5-1-.801-1.5-1-.5-.2-1.101-.301-1.601-.301-.399 0-.7 0-1.1.101-.4.1-.7.2-1 .399-.3.2-.5.4-.7.7s-.3.601-.3 1c0 .7.3 1.2.899 1.601.601.3 1.601.6 2.801.899.8.2 1.5.4 2.199.7.7.3 1.301.6 1.801 1s.899.8 1.199 1.4c.301.5.4 1.199.4 1.899 0 1-.2 1.8-.6 2.5-.4.7-.9 1.2-1.5 1.7-.601.4-1.301.7-2.101.9-.8.199-1.6.3-2.399.3-1 0-2-.2-2.9-.5-1-.3-1.8-.8-2.5-1.4-.3-.3-.5-.5-.6-.7-.098-.198-.098-.398-.098-.598 0-.4.101-.8.4-1 .3-.3.6-.4 1-.4.399 0 .8.2 1.2.5.5.5 1.1.801 1.699 1.101.601.3 1.2.399 1.9.399.4 0 .8 0 1.2-.1.399-.1.7-.2 1-.4.3-.199.6-.399.8-.699.2-.301.3-.7.3-1.2 0-.8-.399-1.3-1.1-1.7s-1.8-.7-3.2-1c-.6-.1-1.1-.3-1.7-.5-.6-.2-1.1-.5-1.6-.8s-.8-.8-1.101-1.3c-.3-.5-.399-1.2-.399-2 0-.9.2-1.601.5-2.301.401-.6.801-1.2 1.401-1.6.601-.4 1.2-.7 2-.9.7-.199 1.5-.3 2.301-.3.899 0 1.699.101 2.6.4.8.3 1.6.7 2.2 1.2.3.3.5.5.6.699.101.2.101.4.101.601 0 .399-.101.7-.4 1s-.6.399-1 .399c-.402-.199-.802-.399-1.102-.699z" />
      <path d="M126 58.4c-.6.3-1.3.399-2.1.399-1.601 0-2.801-.399-3.601-1.3s-1.2-2.2-1.2-3.9v-9H117.2c-.3 0-.601 0-.8-.1-.2-.1-.4-.2-.5-.3-.101-.101-.2-.3-.2-.4 0-.2-.101-.3-.101-.399 0-.101 0-.2.101-.4 0-.2.1-.3.2-.4.1-.1.3-.3.5-.399.199-.101.5-.2.8-.2h1.899v-3.2c0-.399.101-.7.2-.899.101-.2.3-.4.4-.601.2-.1.399-.2.5-.3.2 0 .3-.1.5-.1.1 0 .3 0 .5.1.2 0 .3.1.5.3.2.101.3.3.399.601.101.199.2.6.2.899V42h3.2c.3 0 .6.1.8.2.2.1.3.2.5.399.102.101.202.301.202.401 0 .2.1.3.1.4 0 .1 0 .3-.1.399 0 .2-.1.3-.2.4-.1.1-.3.3-.5.3-.2.1-.5.1-.8.1h-3.2V53.2c0 1 .2 1.7.5 2.1.4.4.8.601 1.4.601.2 0 .5 0 .7-.101.199-.1.399-.1.6-.1.4 0 .7.1.9.399.199.301.3.601.3.9s-.101.5-.2.7c0 .401-.2.601-.5.701z" />
      <path d="M133.2 44.8h.1c.4-.899 1-1.7 1.9-2.3.899-.6 1.8-.9 2.899-.9.5 0 1 .101 1.301.301.4.199.6.599.6 1.099 0 .6-.2 1-.6 1.2-.4.2-.801.3-1.4.3h-.2c-1.3 0-2.399.5-3.2 1.4-.8.899-1.3 2.3-1.3 4.1v7c0 .4-.1.7-.2.9-.1.199-.3.399-.399.5-.101.1-.4.199-.5.3-.2 0-.3.1-.5.1-.101 0-.3 0-.5-.1-.2 0-.4-.101-.5-.3-.2-.101-.3-.301-.4-.5-.1-.2-.2-.5-.2-.9V43.5c0-.4.101-.7.2-.9.101-.199.3-.399.4-.5.2-.1.3-.199.5-.199s.3-.101.5-.101c.1 0 .3 0 .399.101.2 0 .301.1.5.199.2.101.301.301.4.5.1.2.2.5.2.9v1.3z" />
    </g>
    <g>
      <g>
        <path fill="#08A6DF" d="M70 32.9c-9.1 0-16.5-7.4-16.5-16.5 0-4.8 2.1-9.3 5.7-12.4.5-.4 1.2-.4 1.6.1.4.5.4 1.2-.1 1.6-3.1 2.7-4.9 6.6-4.9 10.7 0 7.8 6.4 14.2 14.2 14.2s14.2-6.4 14.2-14.2c0-7.8-6.4-14.1-14.2-14.1-1.9 0-3.7.4-5.4 1.1-.6.2-1.3 0-1.5-.6-.2-.6 0-1.3.6-1.5C65.7.4 67.8 0 70 0c9.1 0 16.5 7.4 16.5 16.5S79.1 32.9 70 32.9z" />
      </g>
      <g>
        <path fill="#7C2A8A" d="M70 28.4c-6.6 0-11.9-5.4-11.9-11.9 0-6.6 5.4-11.9 11.9-11.9 5 0 9.5 3.2 11.2 7.9.5 1.3.7 2.6.7 4 0 .6-.5 1.1-1.101 1.1-.6 0-1.1-.5-1.1-1.1 0-1.1-.2-2.2-.601-3.3-1.399-3.8-5-6.4-9.1-6.4-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6c.6 0 1.1.5 1.1 1.1.002.8-.498 1.3-1.098 1.3z" />
      </g>
      <g>
        <path fill="#EC1848" d="M70 23.9c-4.1 0-7.4-3.3-7.4-7.4s3.3-7.4 7.4-7.4c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-2.8 0-5.1 2.3-5.1 5.1s2.3 5.1 5.1 5.1 5.1-2.3 5.1-5.1c0-.6.5-1.1 1.101-1.1.6 0 1.1.5 1.1 1.1.099 4.2-3.201 7.5-7.301 7.5z" />
      </g>
    </g>
  </symbol>
  <symbol id="down" viewBox="0 0 16 16">
    <polygon points="3.81 4.38 8 8.57 12.19 4.38 13.71 5.91 8 11.62 2.29 5.91 3.81 4.38" />
  </symbol>
  <symbol id="users" viewBox="0 0 16 16">
    <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,15a7,7,0,0,1-5.19-2.32,2.71,2.71,0,0,1,1.7-1,13.11,13.11,0,0,0,1.29-.28,2.32,2.32,0,0,0,.94-.34,1.17,1.17,0,0,0-.27-.7h0A3.61,3.61,0,0,1,5.15,7.49,3.18,3.18,0,0,1,8,4.07a3.18,3.18,0,0,1,2.86,3.42,3.6,3.6,0,0,1-1.32,2.88h0a1.13,1.13,0,0,0-.27.69,2.68,2.68,0,0,0,.93.31,10.81,10.81,0,0,0,1.28.23,2.63,2.63,0,0,1,1.78,1A7,7,0,0,1,8,15Z" />
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
   <rect width="9" height="7" />
    <rect y="9" width="7" height="7" />
    <rect x="9" width="7" height="7" />
    <rect x="9" y="9" width="7" height="7" />
  </symbol>
  <symbol id="charts" viewBox="0 0 16 16">
    <polygon points="0.64 7.38 -0.02 6.63 2.55 4.38 4.57 5.93 9.25 0.78 12.97 4.37 15.37 2.31 16.02 3.07 12.94 5.72 9.29 2.21 4.69 7.29 2.59 5.67 0.64 7.38" />
    <rect y="9" width="2" height="7" />
    <rect x="12" y="8" width="2" height="8" />
    <rect x="8" y="6" width="2" height="10" />
    <rect x="4" y="11" width="2" height="5" />
  </symbol>
  <symbol id="comments" viewBox="0 0 16 16">
    <path d="M0,16.13V2H15V13H5.24ZM1,3V14.37L5,12h9V3Z" />
    <rect x="3" y="5" width="9" height="1" />
    <rect x="3" y="7" width="7" height="1" />
    <rect x="3" y="9" width="5" height="1" />
  </symbol>
  <symbol id="pages" viewBox="0 0 16 16">
    <rect x="4" width="12" height="12" transform="translate(20 12) rotate(-180)" />
    <polygon points="2 14 2 2 0 2 0 14 0 16 2 16 14 16 14 14 2 14" />
  </symbol>
  <symbol id="appearance" viewBox="0 0 16 16">
    <path d="M3,0V7A2,2,0,0,0,5,9H6v5a2,2,0,0,0,4,0V9h1a2,2,0,0,0,2-2V0Zm9,7a1,1,0,0,1-1,1H9v6a1,1,0,0,1-2,0V8H5A1,1,0,0,1,4,7V6h8ZM4,5V1H6V4H7V1H9V4h1V1h2V5Z" />
  </symbol>
  <symbol id="trends" viewBox="0 0 16 16">
    <polygon points="0.64 11.85 -0.02 11.1 2.55 8.85 4.57 10.4 9.25 5.25 12.97 8.84 15.37 6.79 16.02 7.54 12.94 10.2 9.29 6.68 4.69 11.76 2.59 10.14 0.64 11.85" />
  </symbol>
  <symbol id="settings" viewBox="0 0 16 16">
    <rect x="9.78" y="5.34" width="1" height="7.97" />
    <polygon points="7.79 6.07 10.28 1.75 12.77 6.07 7.79 6.07" />
    <rect x="4.16" y="1.75" width="1" height="7.97" />
    <polygon points="7.15 8.99 4.66 13.31 2.16 8.99 7.15 8.99" />
    <rect x="1.28" width="1" height="4.97" />
    <polygon points="3.28 4.53 1.78 7.13 0.28 4.53 3.28 4.53" />
    <rect x="12.84" y="11.03" width="1" height="4.97" />
    <polygon points="11.85 11.47 13.34 8.88 14.84 11.47 11.85 11.47" />
  </symbol>
  <symbol id="options" viewBox="0 0 16 16">
    <path d="M8,11a3,3,0,1,1,3-3A3,3,0,0,1,8,11ZM8,6a2,2,0,1,0,2,2A2,2,0,0,0,8,6Z" />
    <path d="M8.5,16h-1A1.5,1.5,0,0,1,6,14.5v-.85a5.91,5.91,0,0,1-.58-.24l-.6.6A1.54,1.54,0,0,1,2.7,14L2,13.3a1.5,1.5,0,0,1,0-2.12l.6-.6A5.91,5.91,0,0,1,2.35,10H1.5A1.5,1.5,0,0,1,0,8.5v-1A1.5,1.5,0,0,1,1.5,6h.85a5.91,5.91,0,0,1,.24-.58L2,4.82A1.5,1.5,0,0,1,2,2.7L2.7,2A1.54,1.54,0,0,1,4.82,2l.6.6A5.91,5.91,0,0,1,6,2.35V1.5A1.5,1.5,0,0,1,7.5,0h1A1.5,1.5,0,0,1,10,1.5v.85a5.91,5.91,0,0,1,.58.24l.6-.6A1.54,1.54,0,0,1,13.3,2L14,2.7a1.5,1.5,0,0,1,0,2.12l-.6.6a5.91,5.91,0,0,1,.24.58h.85A1.5,1.5,0,0,1,16,7.5v1A1.5,1.5,0,0,1,14.5,10h-.85a5.91,5.91,0,0,1-.24.58l.6.6a1.5,1.5,0,0,1,0,2.12L13.3,14a1.54,1.54,0,0,1-2.12,0l-.6-.6a5.91,5.91,0,0,1-.58.24v.85A1.5,1.5,0,0,1,8.5,16ZM5.23,12.18l.33.18a4.94,4.94,0,0,0,1.07.44l.36.1V14.5a.5.5,0,0,0,.5.5h1a.5.5,0,0,0,.5-.5V12.91l.36-.1a4.94,4.94,0,0,0,1.07-.44l.33-.18,1.12,1.12a.51.51,0,0,0,.71,0l.71-.71a.5.5,0,0,0,0-.71l-1.12-1.12.18-.33a4.94,4.94,0,0,0,.44-1.07l.1-.36H14.5a.5.5,0,0,0,.5-.5v-1a.5.5,0,0,0-.5-.5H12.91l-.1-.36a4.94,4.94,0,0,0-.44-1.07l-.18-.33L13.3,4.11a.5.5,0,0,0,0-.71L12.6,2.7a.51.51,0,0,0-.71,0L10.77,3.82l-.33-.18a4.94,4.94,0,0,0-1.07-.44L9,3.09V1.5A.5.5,0,0,0,8.5,1h-1a.5.5,0,0,0-.5.5V3.09l-.36.1a4.94,4.94,0,0,0-1.07.44l-.33.18L4.11,2.7a.51.51,0,0,0-.71,0L2.7,3.4a.5.5,0,0,0,0,.71L3.82,5.23l-.18.33a4.94,4.94,0,0,0-.44,1.07L3.09,7H1.5a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5H3.09l.1.36a4.94,4.94,0,0,0,.44,1.07l.18.33L2.7,11.89a.5.5,0,0,0,0,.71l.71.71a.51.51,0,0,0,.71,0Z" />
  </symbol>
  <symbol id="collapse" viewBox="0 0 16 16">
    <polygon points="11.62 3.81 7.43 8 11.62 12.19 10.09 13.71 4.38 8 10.09 2.29 11.62 3.81" />
  </symbol>
  <symbol id="search" viewBox="0 0 16 16">
    <path d="M6.57,1A5.57,5.57,0,1,1,1,6.57,5.57,5.57,0,0,1,6.57,1m0-1a6.57,6.57,0,1,0,6.57,6.57A6.57,6.57,0,0,0,6.57,0Z" />
    <rect x="11.84" y="9.87" width="2" height="5.93" transform="translate(-5.32 12.84) rotate(-45)" />
  </symbol>
</svg>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-md-6" style="width:1500px;position: relative;height: 80px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <a class="navbar-brand" href="#home" style="font-size:30px; margin-left: 300px; font-weight: 900; color: white;text-shadow: 2px 2px black;">Dashboard</a>
      <li class="nav-item" style="margin-left:0px">  
      </li>
      <li>
        <a class="nav-link" href="" style="margin-left:850px;"><img src="img/icons/gmail.png" style="height:30px;width: 30px;"></a>
      </li>
       <li class="nav-item-dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons"><img src="img/notification.png" style="height:30px;width: 30px;"></i>
                  
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="margin-left:600px">
                  <h5 style="margin-left:10px;margin-top: 10px;">Notification</h5><hr>

                  <!--1-->
                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" class="svg-inline--fa fa-paper-plane fa-w-16" role="img"  viewBox="0 0 512 512"><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg>Groups & Messages</a>

                  <!--2-->

                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clipboard-list" class="svg-inline--fa fa-clipboard-list fa-w-12" role="img" viewBox="0 0 384 512"><path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"></path></svg>Salary-Details</a>


                  <!--3-->

                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" class="svg-inline--fa fa-wallet fa-w-16" role="img"  viewBox="0 0 512 512"><path fill="currentColor" d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path></svg>Bill Desk</a>

                  <!--4-->

                  <a class="dropdown-item btn-warning" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="images" class="svg-inline--fa fa-images fa-w-18" role="img" viewBox="0 0 576 512"><path fill="currentColor" d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v208c0 44.112 35.888 80 80 80h336zm96-80V80c0-26.51-21.49-48-48-48H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48h384c26.51 0 48-21.49 48-48zM256 128c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-96 144l55.515-55.515c4.686-4.686 12.284-4.686 16.971 0L272 256l135.515-135.515c4.686-4.686 12.284-4.686 16.971 0L512 208v112H160v-48z"></path></svg>Gallery</a><hr>

                  <!--5-->

                  <a class="dropdown-item bg-light" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-clock" class="svg-inline--fa fa-user-clock fa-w-20" role="img"  viewBox="0 0 640 512"><path fill="currentColor" d="M496 224c-79.6 0-144 64.4-144 144s64.4 144 144 144 144-64.4 144-144-64.4-144-144-144zm64 150.3c0 5.3-4.4 9.7-9.7 9.7h-60.6c-5.3 0-9.7-4.4-9.7-9.7v-76.6c0-5.3 4.4-9.7 9.7-9.7h12.6c5.3 0 9.7 4.4 9.7 9.7V352h38.3c5.3 0 9.7 4.4 9.7 9.7v12.6zM320 368c0-27.8 6.7-54.1 18.2-77.5-8-1.5-16.2-2.5-24.6-2.5h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h347.1c-45.3-31.9-75.1-84.5-75.1-144zm-96-112c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128z"></path></svg><div onload=display_ct();>
<span id='ct' style="margin-top:70px;"></span>
 <div onload=display_ct();>
<span id='ct' ></span>
<script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1=month + "/" + dt + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()
</script>
<h5 style="color:black">Time / <span style="color: #9C27B0;">Calender</span></h5>
<span id='ct7' style="color: black; font-size: 23px; font-weight: 900;padding-bottom: 40px;"></span></a>
                </div>
              </li>
      <li class="nav-item1-dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons"><img src="img/user (1).png" style="height: 30ox;width: 30px;"></i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">

                  <!--teacher-->

                  <a class="dropdown-item" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>Teacher</a>
                  <!--setting-->
                   <a class="dropdown-item" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" class="svg-inline--fa fa-cog fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg> Settings</a>

                   <!--logout-->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php" class="btn btn-primary"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg> Logout</button></a>
                </div>
              </li>  
        </div>
      </li>
    </ul>
  </div>
</nav>
    

<header class="page-header" style="width: 250px;overflow-y: scroll; background-color: #343434;margin-top: px; margin-top:0px;">
  <nav>
      <a href="home.php" aria-label="Teacher" class="logo" style="margin-right: 34px;">
      <svg width="10" height="10">
        <img src="img/teacher.png" style="height:50px;margin-left:70px">
       <h3 style="margin-left: 55px;font-weight: 900;text-shadow: 3px 3px black;font-size: 25px;">Teacher</h3>
      </svg>
    </a>
     <hr style="width: 190px;margin-left: 20px;">
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Teachers</h3>
      </li>
      <li>
        <a href="home.php">
          <img src="img/icons/home.png" style="height:30px;">
          <span style="margin-left: 10px;font-weight: 600;">Dashboard<img src="img/icons/right-arrow.png" style="height:25px;margin-left: 50px;"></span>
        </a>
      </li>
      <li>
        <a href="student.php">
          <img src="img/icons/graduated.png" style="height:30px;">
          <span style="margin-left: 10px;">Student</span>
        </a>
      </li>
      <li>
        <a href="teacher.php">
          <img src="img/icons/teacher.png" style="height: 40px;">
          <span style="margin-left: 5px;">Teacher</span>
        </a>
      </li>
      <li>
        <a href="attendence.php">
          <img src="img/icons/approve.png" style="height:30px;width: 35px;">
          <span style="margin-left: 10px;">Attendence</span>
        </a>
      </li>
      <li>
        <a href="event.php">
          <img src="img/icons/calendar.png" style="height:30px">
          <span style="margin-left: 10px;">Events</span>
        </a>
      </li>
      <li>
        <a href="attendancereport.php">
          <img src="img/icons/document.png" style="height:30px;">
          <span style="margin-left: 10px;">Attendence Report</span>
        </a>
      </li>
      <li>
        <a href="eventreport.php">
          <img src="img/icons/verify.png" style="height:30px;">
          <span style="margin-left: 10px;">Event Report</span>
        </a>
      </li>
      <li class="menu-heading">
        <h3>List</h3>
      </li>
      <li>
        <a href="studentlist.php">
          <img src="img/icons/clipboard.png" style="height:30px;">
          <span style="margin-left: 10px;">Students List</span>
        </a>
      </li>
      <li>
        <a href="teacherlist.php">     
            <img src="img/icons/list.png" style="height:30px">
          <span style="margin-left: 10px;">Teachers List</span>
        </a>
      </li>
      <li>
        
          <svg>
            <use xlink:href=></use>
          </svg>
          <span></span>
        </a>
      </li>
    </ul>
  </nav>
</header>
<section class="page-content" style="margin-left: 30px; width: 1250px; position:absolute;">
  <section>
    <button class="btn btn-primary" style="background-image: url('img/student-with-graduation-cap.png');background-size: 125px 115px;background-repeat: no-repeat;width:280px;height: 180px;background-color: #578EBE;border: none;">
      <h1 id="result" style="color: white;text-align: right;"></h1>
  <h1 style="font-size:30px; text-align: right;">STUDENT</h1><hr style="margin-top: 20px;padding: 1px;">
  <h5 style="text-align: right;opacity: 0.7;">IN THIS SYSTEM</h5>
</button>
  </div>
  <script>
  $.ajax({
     url: "count.php",
     cache: false,
     success: function(html){
         $("#result").html(html);
     }
 });
</script>
<button class="btn btn-primary" style="background-image: url('img/user-group.png');background-size: 125px 125px;background-repeat: no-repeat;width:270px;height: 180px;background-color: #E35B5A;border: none;margin-left: 15px;">
      <h1 id="result1" style="color: white;text-align: right;"></h1>
  <h1 style="font-size:30px; text-align: right;">TEACHER </h1><hr style="margin-top: 20px;padding: 1px;">
  <h5 style="text-align: right; opacity: 0.7;">IN THIS SYSTEM</h5>
</button>
  </div>
<script>
  $.ajax({
     url: "count2.php",
     cache: false,
     success: function(html){
         $("#result1").html(html);
     }
 });
</script>
  <button class="btn btn-primary" style="background-image: url('img/line-chart.png');background-size: 125px 115px;background-repeat: no-repeat;width:270px;height: 180px;background-color: #44B6AE;border: none;margin-left: 15px;">
      <h1 id="result3" style="color: white;text-align: right;"></h1>
  <h1 style="font-size:30px; text-align: right;">Attendance</h1><hr style="margin-top: 20px;padding: 1px;">
  <h5 style="text-align: right; opacity: 0.7;">Today Attends student Total</h5>
</button>
  </div>
  <script>
  $.ajax({
     url: "count3.php",
     cache: false,
     success: function(html){
         $("#result3").html(html);
     }
 });
</script>
<button class="btn btn-primary" style="background-image: url('img/event.png');background-size: 125px 115px;background-repeat: no-repeat;width:280px;height: 180px;background-color: #8775A7;border: none;margin-right: 5px;margin-left: 15px;">
      <h1 id="result4" style="color: white;text-align: right;"></h1>
  <h1 style="font-size:30px; text-align: right;">Events</h1><hr style="margin-top: 20px;padding: 1px;">
  <h5 style="text-align:right;opacity: 0.7; ">Event Approved-Principal</h5>
</button>
  </div>
  <script>
  $.ajax({
     url: "count4.php",
     cache: false,
     success: function(html){
         $("#result4").html(html);
     }
 });
</script>
</section><hr style="width: 1150px;">
<section >
<a href="home.php"><button type="button" class="btn btn-primary btn-rounded" style= " width: 220px;height: 150px;"><img src="img/home.png" style="width:80px;height: 90px;"><h4>Dashboard</h4></button></a>
<a href="student.php" style="margin-left: 10px;"><button type="button"  class="btn btn-secondary btn-rounded" style= " width: 220px;height: 150px;"><img src="img/user-shape.png" style="width: 80px;height: 90px;"><h4>Student</h4></button></a>
<a href="teacher.php" style="margin-left: 10px;"><button type="button" class="btn btn-success btn-rounded" style= " width: 220px;height: 150px;"><img src="img/female-silhouette.png" style="width: 80px;height: 90px;"><h4>Teacher</h4></button></a>
<a href="attendence.php" style="margin-left: 10px;"><button type="button" class="btn btn-info btn-rounded" style= " width: 220px;height: 150px;"><img src="img/reorder-option.png" style="width: 80px;height: 90px;"><h4>Attendence</h4></button></a>
<a href="event.php" style="margin-left: 10px;"><button type="button" class="btn btn-warning btn-rounded" style= " width: 220px;height: 150px;"><img src="img/puzzle-piece-silhouette.png" style="width: 80px;height: 90px;"><h4>Event</h4></button></a></section>
<section style="margin-top: 10px;">
<a href="eventreport.php" style="margin-top: 10px;"><button type="button" class="btn btn-danger btn-rounded" style= " width: 220px;height: 150px;"><img src="img/flag-black-shape.png" style="width: 80px;height: 90px;"><h4>Event Report</h4></button></a>
<a href="studentlist.php" style="margin: 10px;"><button type="button" class="btn btn-warning btn-rounded" style="width: 220px;height: 150px;"><img src="img/text-file.png" style="width: 80px;height: 90px;"> <h4>Student List<h4></button></a>
<a href="teacherlist.php"><button type="button" class="btn btn-primary btn-rounded" style="width: 220px;height: 150px;"><img src="img/paste-from-clipboard.png" style="width: 80px;height: 90px;"><h4>Teacher List</h4></button></a>
<a href="timetable.php" style="margin-left: 10px;"></a><button type="button" class="btn btn-secondary btn-rounded" style="width: 220px;height: 150px;"><img src="img/list-on-window.png" style="width: 80px;height: 90px;"><h4>Time Table</h4></button>
<a href="attendancereport.php" style="margin-left: 10px;"><button type="button" class="btn btn-success btn-rounded" style="width: 220px;height: 150px;"><img src="img/shopping-list.png" style="width: 80px;height: 90px;"><h4>attendance Report</h4></button></a>
   </section>
   <!--Notificationpanel-->
  <section>
   <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 1150px;margin-top: 30px;">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" style="color:white;">
        <img src="img/notification.png" style="height: 30px;width: 30px;">Notification
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body" style="background-color:#F0F1F6;">
        <h3>Notification</h3>
        <hr>
        <div>
       <h4><img src="img/admission.png" style="height:40px;width: 40px;padding-bottom: 5px;">School-Admission
       (Admission Form Here!)<span class="badge bg-dark" style="border-radius: 40px;">New</span></h4>
       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Apply Here
</button>
<hr>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black;font-weight: 900;">New Admission Apply <span style="color:blue;">Here</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form class="row g-3" method="post" action="student.php" onsubmit="return validateForm()" name="Form"> 
  <div class="col-md-6">
    <label for="name" class="form-label" style="font-weight: bold;font-size: px;color: black;">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="col-md-3">
    <label for="age" class="form-label" style="font-weight: bold;font-size: px;color: black;">Age</label>
    <input type="age" class="form-control" id="age" name="age">
  </div>
  <div class="col-md-3">
    <label for="class" class="form-label" style="font-weight: bold;font-size: px;color: black;">Class</label>
    <input type="text" class="form-control" id="class" placeholder="" name="class">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label" style="font-weight: bold;font-size: px;color: black;">Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="col-md-6">
  <label for="example-date-input" class="col-2 col-form-label" style="font-weight: bold;font-size: px;color: black;">Date of Birth</label>
  <div class="col-6">
    <input class="form-control" type="date" value="" id="example-date-input" name="dateofbirth">
  </div>
  </div>
  <div class="col-md-3">
    <label for="gender" class="form-label" style="font-weight: bold;font-size: ;color: black;">Gender</label>
     <select class="form-select" id="gender" name="gender">
      <option> Select</option>
      <option value="male"> Male</option>
      <option value="female"> Female</option>
     </select>
  </div>
  <div class="col-md-4">
    <label for="father" class="form-label" style="font-weight: bold;font-size: ;color: black;">Father Name</label>
    <input type="text" class="form-control" id="fname" placeholder="" name="fname">
  </div>
  <div class="col-md-4">
    <label for="mother" class="form-label" style="font-weight: bold;font-size: ;color: black;">Mother Name</label>
    <input type="text" class="form-control" id="mname" placeholder="" name="mname">
  </div>
  <div class="col-8">
    <label for="inputAddress2" class="form-label" style="font-weight: bold;font-size: ;color: black;">Address</label>
    <input type="text" class="form-control" id="address" placeholder="" name="address">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label" style="font-weight: bold;font-size: ;color: black;">City</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label" style="font-weight: bold;font-size: ;color: black;">State</label>
    <select id="inputState" class="form-select" name="state">
      <option selected>Choose...</option>
      <option value="andhrapradesh">Andhra Pradesh</option>
      <option value="arunachalpradesh"> Arunachal Pradesh  </option>
      <option value="assam">  Assam </option>
      <option value="bihar">  Bihar </option>
      <option value="chhattisgarh"> Chhattisgarh  </option>
      <option value="goa"> Goa  </option>
      <option value="gujarat"> Gujarat  </option>
      <option value="haryana">  Haryana </option>
      <option value="himachalpradesh"> Himachal Pradesh </option>
      <option value="jharkhand"> Jharkhand  </option>
      <option value="karnataka"> Karnataka  </option>
      <option value="kerala"> Kerala  </option>
      <option value="madhyapradesh"> Madhya Pradesh  </option>
      <option value="maharashtra"> Maharashtra  </option>
      <option value="manipur"> Manipur  </option>
      <option value="megalaya"> Meghalaya  </option>
      <option value="mizoram"> Mizoram  </option>
      <option value="nagaland"> Nagaland    </option>
      <option value="odisha"> Odisha  </option>
      <option value="punjab"> Punjab  </option>
      <option value="rajasthan"> Rajasthan</option>
      <option value="sikkim"> Sikkim </option>
      <option value="tamilnadu"> Tamil Nadu </option>
      <option value="telugana"> Telangana  </option>
      <option value="tripura"> Tripura </option>
      <option value="utterpradesh"> Uttar Pradesh </option>
      <option value="utterkandh"> Uttarakhand  </option>
      <option  value="westbangal">  West Bengal </option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label" style="font-weight: bold;font-size: ;color: black;">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="zip">
  </div>
  <div class="col-md-3">
    <label for="contact" class="form-label" style="font-weight: bold;font-size: ;color: black;">Contact</label>
    <input type="number"  class ="form-control" name="contact" id="contact">
  </div>
  <div class="col-12">
     <a class="btn btn-primary" href="PDFLINK" download>
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
          <div>
            <h4><img src="img/survey.png" style="height:40px;width: 40px;">Student Mark-List<span class="badge bg-dark" style="border-radius: 40px;">New</span></h4>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Apply Mark
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:black;">Update <span style="color:blue;">Result</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" method="post" action="student.php" onsubmit="return validateForm()" name="Form"> 
  <div class="col-md-6">
    <label for="name" class="form-label" style="font-weight: bold;font-size: px;color: black;">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="col-md-3">
    <label for="class" class="form-label" style="font-weight: bold;font-size: ;color: black;">Class</label>
     <select class="form-select" id="class" name="class">
      <option> Select Class</option>
      <option value="class1"> class1</option>
      <option value="class2"> class2</option>
      <option value="class3"> class3</option>
      <option value="class4"> class4</option>
      <option value="class5"> class5</option>
     </select>
  </div>
    <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Registor No</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Tamil</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">English</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Maths</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Science</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Social-Science</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update Mark!</button>
      </div>
    </div>
  </div>
</div>
          </div>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="color:white;">
        <img src="img/reminder.png" style="height:30px;width: 30px;">Event Approved
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <?php  
$user = 'root';
$password = ''; 
$database = 'school1'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
// SQL query to select data from database
$sql = "SELECT * FROM event_approval ORDER BY id asc ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<table class="table" style="background-color: #F0F1F6">
            <tr class="table-bordered">
                <th></th>
                <th>Event Title</th>
                <th>Discription</th>
                <th>Event Date</th>
                <th>Event Approval</th>
                <th>Place</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td></td>
                <td><?php echo $rows['EventTitle'];?></td>
                <td><?php echo $rows['Discription'];?></td>
                <td><?php echo $rows['EventDate'];?></td>
                 <td><button class="btn btn-danger"><?php echo $rows['EventApproval'];?></button></td>
                <td><?php echo $rows['Place'];?></td>
            </tr>
            <?php
                }
             ?>
        </table> </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" style="color:white">
        <img src="img/calendar.png" style="height:30px;width: 30px;">Calender
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body bg-light">
        <a href="#home"> <div class="container col-sm-4 col-md-7 col-lg-10 mt-6" style="margin-left: px;">
    <div class="card" style="margin-right:458px;">
        <h3 class="card-header" id="monthAndYear"></h3>
        <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            </thead>
            <tbody id="calendar-body">
            </tbody>
        </table>
        <div class="form-inline">

            <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button>

            <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Next</button>
        </div>
        <br/>
            <label class="lead mr-2 ml-2" for="month">Jump To: </label>
            <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                <option value=0>Jan</option>
                <option value=1>Feb</option>
                <option value=2>Mar</option>
                <option value=3>Apr</option>
                <option value=4>May</option>
                <option value=5>Jun</option>
                <option value=6>Jul</option>
                <option value=7>Aug</option>
                <option value=8>Sep</option>
                <option value=9>Oct</option>
                <option value=10>Nov</option>
                <option value=11>Dec</option>
            </select>
            <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
            <option value=1990>1990</option>
            <option value=1991>1991</option>
            <option value=1992>1992</option>
            <option value=1993>1993</option>
            <option value=1994>1994</option>
            <option value=1995>1995</option>
            <option value=1996>1996</option>
            <option value=1997>1997</option>
            <option value=1998>1998</option>
            <option value=1999>1999</option>
            <option value=2000>2000</option>
            <option value=2001>2001</option>
            <option value=2002>2002</option>
            <option value=2003>2003</option>
            <option value=2004>2004</option>
            <option value=2005>2005</option>
            <option value=2006>2006</option>
            <option value=2007>2007</option>
            <option value=2008>2008</option>
            <option value=2009>2009</option>
            <option value=2010>2010</option>
            <option value=2011>2011</option>
            <option value=2012>2012</option>
            <option value=2013>2013</option>
            <option value=2014>2014</option>
            <option value=2015>2015</option>
            <option value=2016>2016</option>
            <option value=2017>2017</option>
            <option value=2018>2018</option>
            <option value=2019>2019</option>
            <option value=2020>2020</option>
            <option value=2021>2021</option>
            <option value=2022>2022</option>
            <option value=2023>2023</option>
            <option value=2024>2024</option>
            <option value=2025>2025</option>
            <option value=2026>2026</option>
            <option value=2027>2027</option>
            <option value=2028>2028</option>
            <option value=2029>2029</option>
            <option value=2030>2030</option>
        </select></form>
    </div>
</div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--<button name="jump" onclick="jump()">Go</button>-->
<script src="js/scripts.js"></script>

<!-- Optional JavaScript for bootstrap -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script></a>
      </section>
      </section>

      	<?php }else {?>
      		<!--Pricipal login--> 












      <svg style="display:none;">
  <symbol id="logo" viewBox="0 0 140 59">
    <g>
      <path d="M6.8 57c0 .4-.1.7-.2.9-.1.2-.3.4-.4.5-.1.1-.4.199-.5.3-.2 0-.3.1-.5.1-.1 0-.3 0-.5-.1-.2 0-.4-.101-.5-.3-.2 0-.4-.2-.5-.4-.1-.2-.2-.5-.2-.9V44.7h-2c-.3 0-.6-.101-.8-.2-.2-.1-.3-.2-.5-.4s-.2-.3-.2-.4v-.4c0-.1 0-.2.1-.399 0-.2.1-.301.2-.4.1-.1.3-.3.5-.4.1 0 .4-.1.7-.1h2.1v-3.5c0-1 .1-1.9.3-2.7C4.1 35 4.5 34.3 5 33.7c.5-.6 1.1-1.1 1.9-1.4.8-.3 1.7-.5 2.7-.5.9 0 1.5.101 1.8.4.3.3.5.6.5 1.1 0 .3-.1.601-.3.9-.2.3-.6.4-1.2.4h-.6c-.6 0-1.1.101-1.5.301-.4.199-.7.5-.9.8C7.2 36 7 36.5 7 37c-.1.5-.1 1-.1 1.6V42h2.7c.3 0 .6.1.8.2.2.1.3.2.5.399.1.101.2.301.2.401 0 .2.1.3.1.4 0 .1 0 .3-.1.399 0 .2-.1.3-.2.4-.1.1-.3.3-.5.399-.2.101-.5.2-.8.2H6.8V57z" />
      <path d="M30.4 50.2c0 1.3-.2 2.5-.7 3.5-.5 1.1-1.1 2-1.9 2.8-.8.8-1.8 1.4-2.8 1.8-1.1.4-2.3.601-3.5.601-1.3 0-2.4-.2-3.5-.601-1.1-.399-2-1-2.8-1.8-.8-.8-1.4-1.7-1.9-2.8-.5-1.101-.7-2.2-.7-3.5s.2-2.4.7-3.5c.5-1.101 1.1-2 1.9-2.7.8-.8 1.7-1.4 2.8-1.8 1.1-.4 2.3-.601 3.5-.601 1.3 0 2.4.2 3.5.601 1.1.399 2 1 2.8 1.8.8.8 1.4 1.7 1.9 2.7.5 1.1.7 2.3.7 3.5zm-3.4 0c0-.8-.1-1.5-.4-2.3-.2-.7-.6-1.4-1.1-1.9s-1-1-1.7-1.3c-.7-.3-1.5-.5-2.4-.5s-1.7.2-2.4.5-1.3.8-1.7 1.3c-.5.5-.8 1.2-1.1 1.9-.2.699-.4 1.5-.4 2.3s.1 1.5.4 2.3c.2.7.6 1.4 1.1 1.9.5.6 1 1 1.7 1.3s1.5.5 2.4.5 1.7-.2 2.4-.5 1.3-.8 1.7-1.3c.5-.601.8-1.2 1.1-1.9.3-.7.4-1.5.4-2.3z" />
      <path d="M38.1 44.8h.1c.4-.899 1-1.7 1.9-2.3s1.8-.9 2.9-.9c.5 0 1 .101 1.3.301.4.199.6.6.6 1.1 0 .6-.2 1-.6 1.2-.4.2-.8.3-1.4.3h-.2c-1.3 0-2.4.5-3.2 1.4-.8.899-1.3 2.3-1.3 4.1v7c0 .4-.1.7-.2.9-.1.199-.3.399-.4.5-.2.1-.4.199-.5.3-.2 0-.3.1-.5.1-.1 0-.3 0-.5-.1-.2 0-.4-.101-.5-.3-.1-.2-.3-.301-.4-.5C35 57.7 35 57.4 35 57V43.5c0-.4.1-.7.2-.9.1-.199.3-.399.4-.5.2-.1.3-.199.5-.199s.3-.101.5-.101c.1 0 .3 0 .4.101.2 0 .3.1.5.199.2.101.3.301.4.5.1.2.2.5.2.9v1.3z" />
      <path d="M49.2 51.3c0 .7.2 1.4.5 2 .3.601.7 1.2 1.2 1.601.5.5 1.1.8 1.7 1.1s1.3.4 2 .4c1 0 1.8-.2 2.5-.5.7-.4 1.2-.801 1.8-1.2.2-.2.4-.3.6-.4.2-.301.3-.301.5-.301.4 0 .7.1 1 .4.3.199.4.6.4 1 0 .1 0 .3-.1.5s-.2.4-.4.7c-1.6 1.7-3.7 2.5-6.3 2.5-1.3 0-2.4-.199-3.5-.6s-2-1-2.8-1.8c-.8-.8-1.4-1.7-1.8-2.7-.4-1.1-.7-2.3-.7-3.6 0-1.301.2-2.5.6-3.5.4-1.101 1-2 1.8-2.801.8-.8 1.7-1.399 2.7-1.8 1-.399 2.2-.6 3.4-.6 2.1 0 3.8.6 5.2 1.8s2.3 2.9 2.6 5.2c0 .3.1.5.1.6v.5c0 1.101-.6 1.7-1.7 1.7H49.2V51.3zm9.9-2.5c0-.7-.1-1.3-.3-1.8-.2-.6-.5-1.1-.9-1.5s-.9-.7-1.4-1c-.6-.2-1.2-.4-2-.4-.7 0-1.4.101-2 .4-.6.2-1.2.6-1.6 1-.5.4-.8.9-1.1 1.5-.3.6-.5 1.2-.5 1.8h9.8z" />
      <path d="M77.9 55.1c.399-.3.8-.5 1.199-.5.4 0 .7.101 1 .4.2.3.4.6.4.9 0 .199 0 .5-.1.699a1.856 1.856 0 01-.599.701c-.7.5-1.399.9-2.3 1.2s-1.8.4-2.7.4c-1.3 0-2.5-.2-3.5-.601-1.1-.399-2-1-2.8-1.8s-1.4-1.7-1.8-2.7c-.4-1.1-.7-2.3-.7-3.6s.2-2.5.7-3.601c.4-1.1 1.1-2 1.8-2.8.8-.8 1.7-1.399 2.8-1.8 1.101-.4 2.2-.6 3.5-.6.9 0 1.7.1 2.601.399C78.2 42 79 42.4 79.6 43l.7.7c.101.2.2.5.2.7 0 .399-.1.8-.4 1-.3.3-.6.399-1 .399-.199 0-.399 0-.5-.1-.2-.099-.4-.199-.7-.499-.301-.3-.7-.5-1.2-.7s-1-.3-1.7-.3c-.9 0-1.6.2-2.3.5s-1.2.8-1.7 1.3-.8 1.2-1.1 1.9c-.2.699-.4 1.5-.4 2.3s.1 1.5.3 2.2c.2.699.6 1.3 1 1.899.5.5 1 1 1.7 1.3.7.301 1.4.5 2.3.5.7 0 1.3-.1 1.8-.3.4-.099.9-.299 1.3-.699z" />
      <path d="M94.6 56.2h-.1c-.6.899-1.4 1.6-2.3 2.1-.9.5-2 .7-3.3.7-.7 0-1.301-.1-2-.3-.7-.2-1.4-.5-1.9-.9-.6-.399-1.1-.899-1.4-1.6-.4-.7-.6-1.5-.6-2.4 0-1.3.3-2.2 1-3 .7-.7 1.6-1.3 2.7-1.7 1.1-.399 2.3-.6 3.7-.699 1.399-.101 2.8-.2 4.199-.2v-.5c0-1.2-.399-2.101-1.1-2.7s-1.7-.9-3-.9c-.7 0-1.4.101-2 .301-.6.199-1.3.5-1.9 1-.3.199-.699.3-1 .3-.3 0-.6-.101-.899-.4-.2-.2-.4-.6-.4-.899 0-.2.101-.5.2-.7s.3-.4.6-.601c.7-.5 1.601-1 2.5-1.3 1-.3 2-.5 3.2-.5s2.2.2 3.101.5c.899.3 1.6.8 2.199 1.4.601.6 1 1.3 1.301 2.1.3.8.399 1.601.399 2.5V56.9c0 .3-.1.6-.2.899-.1.201-.2.401-.4.501-.2.101-.3.2-.5.2s-.3.1-.4.1c-.1 0-.3 0-.399-.1-.2 0-.301-.1-.5-.2-.201-.1-.301-.3-.401-.5s-.2-.5-.2-.899v-.7h-.2zm-.9-5.5c-.8 0-1.7 0-2.5.1-.9.101-1.7.2-2.4.4s-1.3.5-1.8.9-.7 1-.7 1.7c0 .5.101.9.3 1.2.2.3.5.6.801.8.3.2.699.4 1.1.4.4.1.8.1 1.2.1 1.5 0 2.7-.5 3.5-1.399.8-.9 1.2-2.101 1.2-3.5v-.9h-.7v.199z" />
      <path d="M111.4 45.4c-.5-.5-1-.801-1.5-1-.5-.2-1.101-.301-1.601-.301-.399 0-.7 0-1.1.101-.4.1-.7.2-1 .399-.3.2-.5.4-.7.7s-.3.601-.3 1c0 .7.3 1.2.899 1.601.601.3 1.601.6 2.801.899.8.2 1.5.4 2.199.7.7.3 1.301.6 1.801 1s.899.8 1.199 1.4c.301.5.4 1.199.4 1.899 0 1-.2 1.8-.6 2.5-.4.7-.9 1.2-1.5 1.7-.601.4-1.301.7-2.101.9-.8.199-1.6.3-2.399.3-1 0-2-.2-2.9-.5-1-.3-1.8-.8-2.5-1.4-.3-.3-.5-.5-.6-.7-.098-.198-.098-.398-.098-.598 0-.4.101-.8.4-1 .3-.3.6-.4 1-.4.399 0 .8.2 1.2.5.5.5 1.1.801 1.699 1.101.601.3 1.2.399 1.9.399.4 0 .8 0 1.2-.1.399-.1.7-.2 1-.4.3-.199.6-.399.8-.699.2-.301.3-.7.3-1.2 0-.8-.399-1.3-1.1-1.7s-1.8-.7-3.2-1c-.6-.1-1.1-.3-1.7-.5-.6-.2-1.1-.5-1.6-.8s-.8-.8-1.101-1.3c-.3-.5-.399-1.2-.399-2 0-.9.2-1.601.5-2.301.401-.6.801-1.2 1.401-1.6.601-.4 1.2-.7 2-.9.7-.199 1.5-.3 2.301-.3.899 0 1.699.101 2.6.4.8.3 1.6.7 2.2 1.2.3.3.5.5.6.699.101.2.101.4.101.601 0 .399-.101.7-.4 1s-.6.399-1 .399c-.402-.199-.802-.399-1.102-.699z" />
      <path d="M126 58.4c-.6.3-1.3.399-2.1.399-1.601 0-2.801-.399-3.601-1.3s-1.2-2.2-1.2-3.9v-9H117.2c-.3 0-.601 0-.8-.1-.2-.1-.4-.2-.5-.3-.101-.101-.2-.3-.2-.4 0-.2-.101-.3-.101-.399 0-.101 0-.2.101-.4 0-.2.1-.3.2-.4.1-.1.3-.3.5-.399.199-.101.5-.2.8-.2h1.899v-3.2c0-.399.101-.7.2-.899.101-.2.3-.4.4-.601.2-.1.399-.2.5-.3.2 0 .3-.1.5-.1.1 0 .3 0 .5.1.2 0 .3.1.5.3.2.101.3.3.399.601.101.199.2.6.2.899V42h3.2c.3 0 .6.1.8.2.2.1.3.2.5.399.102.101.202.301.202.401 0 .2.1.3.1.4 0 .1 0 .3-.1.399 0 .2-.1.3-.2.4-.1.1-.3.3-.5.3-.2.1-.5.1-.8.1h-3.2V53.2c0 1 .2 1.7.5 2.1.4.4.8.601 1.4.601.2 0 .5 0 .7-.101.199-.1.399-.1.6-.1.4 0 .7.1.9.399.199.301.3.601.3.9s-.101.5-.2.7c0 .401-.2.601-.5.701z" />
      <path d="M133.2 44.8h.1c.4-.899 1-1.7 1.9-2.3.899-.6 1.8-.9 2.899-.9.5 0 1 .101 1.301.301.4.199.6.599.6 1.099 0 .6-.2 1-.6 1.2-.4.2-.801.3-1.4.3h-.2c-1.3 0-2.399.5-3.2 1.4-.8.899-1.3 2.3-1.3 4.1v7c0 .4-.1.7-.2.9-.1.199-.3.399-.399.5-.101.1-.4.199-.5.3-.2 0-.3.1-.5.1-.101 0-.3 0-.5-.1-.2 0-.4-.101-.5-.3-.2-.101-.3-.301-.4-.5-.1-.2-.2-.5-.2-.9V43.5c0-.4.101-.7.2-.9.101-.199.3-.399.4-.5.2-.1.3-.199.5-.199s.3-.101.5-.101c.1 0 .3 0 .399.101.2 0 .301.1.5.199.2.101.301.301.4.5.1.2.2.5.2.9v1.3z" />
    </g>
    <g>
      <g>
        <path fill="#08A6DF" d="M70 32.9c-9.1 0-16.5-7.4-16.5-16.5 0-4.8 2.1-9.3 5.7-12.4.5-.4 1.2-.4 1.6.1.4.5.4 1.2-.1 1.6-3.1 2.7-4.9 6.6-4.9 10.7 0 7.8 6.4 14.2 14.2 14.2s14.2-6.4 14.2-14.2c0-7.8-6.4-14.1-14.2-14.1-1.9 0-3.7.4-5.4 1.1-.6.2-1.3 0-1.5-.6-.2-.6 0-1.3.6-1.5C65.7.4 67.8 0 70 0c9.1 0 16.5 7.4 16.5 16.5S79.1 32.9 70 32.9z" />
      </g>
      <g>
        <path fill="#7C2A8A" d="M70 28.4c-6.6 0-11.9-5.4-11.9-11.9 0-6.6 5.4-11.9 11.9-11.9 5 0 9.5 3.2 11.2 7.9.5 1.3.7 2.6.7 4 0 .6-.5 1.1-1.101 1.1-.6 0-1.1-.5-1.1-1.1 0-1.1-.2-2.2-.601-3.3-1.399-3.8-5-6.4-9.1-6.4-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6c.6 0 1.1.5 1.1 1.1.002.8-.498 1.3-1.098 1.3z" />
      </g>
      <g>
        <path fill="#EC1848" d="M70 23.9c-4.1 0-7.4-3.3-7.4-7.4s3.3-7.4 7.4-7.4c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-2.8 0-5.1 2.3-5.1 5.1s2.3 5.1 5.1 5.1 5.1-2.3 5.1-5.1c0-.6.5-1.1 1.101-1.1.6 0 1.1.5 1.1 1.1.099 4.2-3.201 7.5-7.301 7.5z" />
      </g>
    </g>
  </symbol>
  <symbol id="down" viewBox="0 0 16 16">
    <polygon points="3.81 4.38 8 8.57 12.19 4.38 13.71 5.91 8 11.62 2.29 5.91 3.81 4.38" />
  </symbol>
  <symbol id="users" viewBox="0 0 16 16">
    <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,15a7,7,0,0,1-5.19-2.32,2.71,2.71,0,0,1,1.7-1,13.11,13.11,0,0,0,1.29-.28,2.32,2.32,0,0,0,.94-.34,1.17,1.17,0,0,0-.27-.7h0A3.61,3.61,0,0,1,5.15,7.49,3.18,3.18,0,0,1,8,4.07a3.18,3.18,0,0,1,2.86,3.42,3.6,3.6,0,0,1-1.32,2.88h0a1.13,1.13,0,0,0-.27.69,2.68,2.68,0,0,0,.93.31,10.81,10.81,0,0,0,1.28.23,2.63,2.63,0,0,1,1.78,1A7,7,0,0,1,8,15Z" />
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
   <rect width="9" height="7" />
    <rect y="9" width="7" height="7" />
    <rect x="9" width="7" height="7" />
    <rect x="9" y="9" width="7" height="7" />
  </symbol>
  <symbol id="charts" viewBox="0 0 16 16">
    <polygon points="0.64 7.38 -0.02 6.63 2.55 4.38 4.57 5.93 9.25 0.78 12.97 4.37 15.37 2.31 16.02 3.07 12.94 5.72 9.29 2.21 4.69 7.29 2.59 5.67 0.64 7.38" />
    <rect y="9" width="2" height="7" />
    <rect x="12" y="8" width="2" height="8" />
    <rect x="8" y="6" width="2" height="10" />
    <rect x="4" y="11" width="2" height="5" />
  </symbol>
  <symbol id="comments" viewBox="0 0 16 16">
    <path d="M0,16.13V2H15V13H5.24ZM1,3V14.37L5,12h9V3Z" />
    <rect x="3" y="5" width="9" height="1" />
    <rect x="3" y="7" width="7" height="1" />
    <rect x="3" y="9" width="5" height="1" />
  </symbol>
  <symbol id="pages" viewBox="0 0 16 16">
    <rect x="4" width="12" height="12" transform="translate(20 12) rotate(-180)" />
    <polygon points="2 14 2 2 0 2 0 14 0 16 2 16 14 16 14 14 2 14" />
  </symbol>
  <symbol id="appearance" viewBox="0 0 16 16">
    <path d="M3,0V7A2,2,0,0,0,5,9H6v5a2,2,0,0,0,4,0V9h1a2,2,0,0,0,2-2V0Zm9,7a1,1,0,0,1-1,1H9v6a1,1,0,0,1-2,0V8H5A1,1,0,0,1,4,7V6h8ZM4,5V1H6V4H7V1H9V4h1V1h2V5Z" />
  </symbol>
  <symbol id="trends" viewBox="0 0 16 16">
    <polygon points="0.64 11.85 -0.02 11.1 2.55 8.85 4.57 10.4 9.25 5.25 12.97 8.84 15.37 6.79 16.02 7.54 12.94 10.2 9.29 6.68 4.69 11.76 2.59 10.14 0.64 11.85" />
  </symbol>
  <symbol id="settings" viewBox="0 0 16 16">
    <rect x="9.78" y="5.34" width="1" height="7.97" />
    <polygon points="7.79 6.07 10.28 1.75 12.77 6.07 7.79 6.07" />
    <rect x="4.16" y="1.75" width="1" height="7.97" />
    <polygon points="7.15 8.99 4.66 13.31 2.16 8.99 7.15 8.99" />
    <rect x="1.28" width="1" height="4.97" />
    <polygon points="3.28 4.53 1.78 7.13 0.28 4.53 3.28 4.53" />
    <rect x="12.84" y="11.03" width="1" height="4.97" />
    <polygon points="11.85 11.47 13.34 8.88 14.84 11.47 11.85 11.47" />
  </symbol>
  <symbol id="options" viewBox="0 0 16 16">
    <path d="M8,11a3,3,0,1,1,3-3A3,3,0,0,1,8,11ZM8,6a2,2,0,1,0,2,2A2,2,0,0,0,8,6Z" />
    <path d="M8.5,16h-1A1.5,1.5,0,0,1,6,14.5v-.85a5.91,5.91,0,0,1-.58-.24l-.6.6A1.54,1.54,0,0,1,2.7,14L2,13.3a1.5,1.5,0,0,1,0-2.12l.6-.6A5.91,5.91,0,0,1,2.35,10H1.5A1.5,1.5,0,0,1,0,8.5v-1A1.5,1.5,0,0,1,1.5,6h.85a5.91,5.91,0,0,1,.24-.58L2,4.82A1.5,1.5,0,0,1,2,2.7L2.7,2A1.54,1.54,0,0,1,4.82,2l.6.6A5.91,5.91,0,0,1,6,2.35V1.5A1.5,1.5,0,0,1,7.5,0h1A1.5,1.5,0,0,1,10,1.5v.85a5.91,5.91,0,0,1,.58.24l.6-.6A1.54,1.54,0,0,1,13.3,2L14,2.7a1.5,1.5,0,0,1,0,2.12l-.6.6a5.91,5.91,0,0,1,.24.58h.85A1.5,1.5,0,0,1,16,7.5v1A1.5,1.5,0,0,1,14.5,10h-.85a5.91,5.91,0,0,1-.24.58l.6.6a1.5,1.5,0,0,1,0,2.12L13.3,14a1.54,1.54,0,0,1-2.12,0l-.6-.6a5.91,5.91,0,0,1-.58.24v.85A1.5,1.5,0,0,1,8.5,16ZM5.23,12.18l.33.18a4.94,4.94,0,0,0,1.07.44l.36.1V14.5a.5.5,0,0,0,.5.5h1a.5.5,0,0,0,.5-.5V12.91l.36-.1a4.94,4.94,0,0,0,1.07-.44l.33-.18,1.12,1.12a.51.51,0,0,0,.71,0l.71-.71a.5.5,0,0,0,0-.71l-1.12-1.12.18-.33a4.94,4.94,0,0,0,.44-1.07l.1-.36H14.5a.5.5,0,0,0,.5-.5v-1a.5.5,0,0,0-.5-.5H12.91l-.1-.36a4.94,4.94,0,0,0-.44-1.07l-.18-.33L13.3,4.11a.5.5,0,0,0,0-.71L12.6,2.7a.51.51,0,0,0-.71,0L10.77,3.82l-.33-.18a4.94,4.94,0,0,0-1.07-.44L9,3.09V1.5A.5.5,0,0,0,8.5,1h-1a.5.5,0,0,0-.5.5V3.09l-.36.1a4.94,4.94,0,0,0-1.07.44l-.33.18L4.11,2.7a.51.51,0,0,0-.71,0L2.7,3.4a.5.5,0,0,0,0,.71L3.82,5.23l-.18.33a4.94,4.94,0,0,0-.44,1.07L3.09,7H1.5a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5H3.09l.1.36a4.94,4.94,0,0,0,.44,1.07l.18.33L2.7,11.89a.5.5,0,0,0,0,.71l.71.71a.51.51,0,0,0,.71,0Z" />
  </symbol>
  <symbol id="collapse" viewBox="0 0 16 16">
    <polygon points="11.62 3.81 7.43 8 11.62 12.19 10.09 13.71 4.38 8 10.09 2.29 11.62 3.81" />
  </symbol>
  <symbol id="search" viewBox="0 0 16 16">
    <path d="M6.57,1A5.57,5.57,0,1,1,1,6.57,5.57,5.57,0,0,1,6.57,1m0-1a6.57,6.57,0,1,0,6.57,6.57A6.57,6.57,0,0,0,6.57,0Z" />
    <rect x="11.84" y="9.87" width="2" height="5.93" transform="translate(-5.32 12.84) rotate(-45)" />
  </symbol>
</svg>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-md-6" style="width:1500px;position: relative;height: 80px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <a class="navbar-brand" href="#home" style="font-size:30px; margin-left: 300px; font-weight: 900; color: white;text-shadow: 2px 2px black;">Dashboard</a>
      <li class="nav-item" style="margin-left:0px">  
      </li>
      <li>
        <a class="nav-link" href="" style="margin-left:850px;"><img src="img/icons/gmail.png" style="height:30px;width: 30px;"></a>
      </li>
       <li class="nav-item-dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons"><img src="img/notification.png" style="height:30px;width: 30px;"></i>
                  
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="margin-left:600px">
                  <h5 style="margin-left:10px;margin-top: 10px;">Notification</h5><hr>

                  <!--1-->
                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" class="svg-inline--fa fa-paper-plane fa-w-16" role="img"  viewBox="0 0 512 512"><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg>Groups & Messages</a>

                  <!--2-->

                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clipboard-list" class="svg-inline--fa fa-clipboard-list fa-w-12" role="img" viewBox="0 0 384 512"><path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"></path></svg>Salary-Details</a>


                  <!--3-->

                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" class="svg-inline--fa fa-wallet fa-w-16" role="img"  viewBox="0 0 512 512"><path fill="currentColor" d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path></svg>Bill Desk</a>

                  <!--4-->

                  <a class="dropdown-item btn-warning" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="images" class="svg-inline--fa fa-images fa-w-18" role="img" viewBox="0 0 576 512"><path fill="currentColor" d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v208c0 44.112 35.888 80 80 80h336zm96-80V80c0-26.51-21.49-48-48-48H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48h384c26.51 0 48-21.49 48-48zM256 128c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-96 144l55.515-55.515c4.686-4.686 12.284-4.686 16.971 0L272 256l135.515-135.515c4.686-4.686 12.284-4.686 16.971 0L512 208v112H160v-48z"></path></svg>Gallery</a><hr>

                  <!--5-->

                  <a class="dropdown-item bg-light" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-clock" class="svg-inline--fa fa-user-clock fa-w-20" role="img"  viewBox="0 0 640 512"><path fill="currentColor" d="M496 224c-79.6 0-144 64.4-144 144s64.4 144 144 144 144-64.4 144-144-64.4-144-144-144zm64 150.3c0 5.3-4.4 9.7-9.7 9.7h-60.6c-5.3 0-9.7-4.4-9.7-9.7v-76.6c0-5.3 4.4-9.7 9.7-9.7h12.6c5.3 0 9.7 4.4 9.7 9.7V352h38.3c5.3 0 9.7 4.4 9.7 9.7v12.6zM320 368c0-27.8 6.7-54.1 18.2-77.5-8-1.5-16.2-2.5-24.6-2.5h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h347.1c-45.3-31.9-75.1-84.5-75.1-144zm-96-112c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128z"></path></svg><div onload=display_ct();>
<span id='ct' style="margin-top:70px;"></span>
 <div onload=display_ct();>
<span id='ct' ></span>
<script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1=month + "/" + dt + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()
</script>
<h5 style="color:black">Time / <span style="color: #9C27B0;">Calender</span></h5>
<span id='ct7' style="color: black; font-size: 23px; font-weight: 900;padding-bottom: 40px;"></span></a>
                </div>
              </li>
      <li class="nav-item1-dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons"><img src="img/user (1).png" style="height: 30ox;width: 30px;"></i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">

                  <!--teacher-->

                  <a class="dropdown-item" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>Principal</a>
                  <!--setting-->
                   <a class="dropdown-item" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" class="svg-inline--fa fa-cog fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg> Settings</a>

                   <!--logout-->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php" class="btn btn-primary"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg> Logout</button></a>
                </div>
              </li>  
        </div>
      </li>
    </ul>
  </div>
</nav>


<header class="page-header" style="width: 250px;overflow-y: scroll; background-color: #343434;margin-top: px; margin-top:0px;">
  <nav>
      <a href="home.php" aria-label="Teacher" class="logo" style="margin-right: 30px;">
      <svg width="10" height="10">
        <img src="img/—Pngtree—vector edit profile icon_3773558.png" href="#logo" style="margin-left: 10px;height: 60px;width: 60px;margin-left: 60px;">
       <h3 style="margin-left: 45px;">Principal</h3>
      </svg>
    </a>
    <hr style="width: 200px;margin-left: 20px;">
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Principal</h3>
      </li>
      <li>
        <a href="home.php">
          <img src="img/icons/home.png" style="height:30px;">
          <span style="margin-left: 10px;font-weight: 600;">Dashboard<img src="img/icons/right-arrow.png" style="height:25px;margin-left: 50px;"></span>
        </a>
      </li>
      <li>
        <a href="studentlist.php">
          <img src="img/icons/clipboard.png" style="height:30px;">
          <span style="margin-left: 10px;">Students List</span>
        </a>
      </li>
      <li>
        <a href="teacherlist.php">
          <img src="img/icons/list.png" style="height:30px">
          <span style="margin-left: 10px;">Teachers List</span>
        </a>
      </li>
      <li>
        <a href="attendence.php">
          <img src="img/icons/approve.png" style="height:30px;width: 35px;">
          <span style="margin-left: 10px;">Attendence</span>
        </a>
      </li>
      <li>
        <a href="eventapproval.php">
          <img src="img/icons/calendar.png" style="height:30px">
          <span style="margin-left: 10px;">Event Approval</span>
        </a>
      </li>
      <li>
        <a href="attendancereport.php">
          <img src="img/icons/document.png" style="height:30px;">
          <span style="margin-left: 10px;">Attendence Report</span>
        </a>
      </li>
      <li>
      </li>
      <li class="menu-heading">
        <h3></h3>
      </li>
    </ul>
  </nav>
</header>
<section class="page-content" style="display: inline-blocks; margin-left: 30px;width: 1250px;">
  <section>
    <button class="btn btn-primary" style="background-image: url('img/student-with-graduation-cap.png');background-size: 125px 115px;background-repeat: no-repeat;width:280px;height: 180px;background-color: #578EBE;border: none;">
      <h1 id="result" style="color: white;text-align: right;"></h1>
  <h1 style="font-size:30px; text-align: right;">STUDENT</h1><hr style="margin-top: 20px;padding: 1px;">
  <h5 style="text-align: right;opacity: 0.7;">IN THIS SYSTEM</h5>
</button>
  </div>
  <script>
  $.ajax({
     url: "count.php",
     cache: false,
     success: function(html){
         $("#result").html(html);
     }
 });
</script>
<button class="btn btn-primary" style="background-image: url('img/user-group.png');background-size: 125px 125px;background-repeat: no-repeat;width:270px;height: 180px;background-color: #E35B5A;border: none;margin-left: 15px;">
      <h1 id="result1" style="color: white;text-align: right;"></h1>
  <h1 style="font-size:30px; text-align: right;">TEACHER </h1><hr style="margin-top: 20px;padding: 1px;">
  <h5 style="text-align: right; opacity: 0.7;">IN THIS SYSTEM</h5>
</button>
  </div>
<script>
  $.ajax({
     url: "count2.php",
     cache: false,
     success: function(html){
         $("#result1").html(html);
     }
 });
</script>
  <button class="btn btn-primary" style="background-image: url('img/line-chart.png');background-size: 125px 115px;background-repeat: no-repeat;width:270px;height: 180px;background-color: #44B6AE;border: none;margin-left: 15px;">
      <h1 id="result3" style="color: white;text-align: right;"></h1>
  <h1 style="font-size:30px; text-align: right;">Attendance</h1><hr style="margin-top: 20px;padding: 1px;">
  <h5 style="text-align: right; opacity: 0.7;">Today Attends student Total</h5>
</button>
  </div>
  <script>
  $.ajax({
     url: "count3.php",
     cache: false,
     success: function(html){
         $("#result3").html(html);
     }
 });
</script>
<button class="btn btn-primary" style="background-image: url('img/event.png');background-size: 125px 115px;background-repeat: no-repeat;width:280px;height: 180px;background-color: #8775A7;border: none;margin-right: 5px;margin-left: 15px;">
      <h1 id="result4" style="color: white;text-align: right;"></h1>
  <h1 style="font-size:30px; text-align: right;">Events</h1><hr style="margin-top: 20px;padding: 1px;">
  <h5 style="text-align:right;opacity: 0.7; ">Event Approved-Principal</h5>
</button>
  </div>
  <script>
  $.ajax({
     url: "count4.php",
     cache: false,
     success: function(html){
         $("#result4").html(html);
     }
 });
</script>
</section><hr style="width: 1150px;">
  <section>
<a href="home.php"><button type="button" class="btn btn-primary btn-rounded" style= " width: 220px;height: 150px;"><img src="img/home.png" style="width:80px;height: 90px;"><h4>Dashboard</h4></button></a>
<a href="student.php" style="margin-left: 10px;"><button type="button"  class="btn btn-secondary btn-rounded" style= " width: 220px;height: 150px;"><img src="img/user-shape.png" style="width: 80px;height: 90px;"><h4>Student</h4></button></a>
<a href="teacher.php" style="margin-left: 10px;"><button type="button" class="btn btn-success btn-rounded" style= " width: 220px;height: 150px;"><img src="img/female-silhouette.png" style="width: 80px;height: 90px;"><h4>Teacher</h4></button></a>
<a href="attendence.php" style="margin-left: 10px;"><button type="button" class="btn btn-info btn-rounded" style= " width: 220px;height: 150px;"><img src="img/reorder-option.png" style="width: 80px;height: 90px;"><h4>Attendence</h4></button></a>
<a href="event.php" style="margin-left: 10px;"><button type="button" class="btn btn-warning btn-rounded" style= " width: 220px;height: 150px;"><img src="img/puzzle-piece-silhouette.png" style="width: 80px;height: 90px;"><h4>Event</h4></button></a></section>
<section style="margin-top: 10px;">
<a href="eventreport.php" style="margin-top: 10px;"><button type="button" class="btn btn-danger btn-rounded" style= " width: 220px;height: 150px;"><img src="img/flag-black-shape.png" style="width: 80px;height: 90px;"><h4>Event Report</h4></button></a>
<a href="studentlist.php" style="margin: 10px;"><button type="button" class="btn btn-warning btn-rounded" style="width: 220px;height: 150px;"><img src="img/text-file.png" style="width: 80px;height: 90px;"> <h4>Student List<h4></button></a>
<a href="teacherlist.php"><button type="button" class="btn btn-primary btn-rounded" style="width: 220px;height: 150px;"><img src="img/paste-from-clipboard.png" style="width: 80px;height: 90px;"><h4>Teacher List</h4></button></a>
<a href="timetable.php" style="margin-left: 10px;"></a><button type="button" class="btn btn-secondary btn-rounded" style="width: 220px;height: 150px;"><img src="img/list-on-window.png" style="width: 80px;height: 90px;"><h4>Time Table</h4></button>
<a href="attendancereport.php" style="margin-left: 10px;"><button type="button" class="btn btn-success btn-rounded" style="width: 220px;height: 150px;"><img src="img/shopping-list.png" style="width: 80px;height: 90px;"><h4>attendance Report</h4></button></a>
   </section>
  <section>
   <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 1150px;margin-top: 30px;">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" style="color:white;">
        <img src="img/notification.png" style="height: 30px;width: 30px;">Notification
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body" style="background-color:#F0F1F6;">
        <h3>Notification</h3>
        <hr>
        <div>
       <h4><img src="img/admission.png" style="height:40px;width: 40px;padding-bottom: 5px;">School-Admission
       (Admission Form Here!)<span class="badge bg-dark" style="border-radius: 40px;">New</span></h4>
       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Apply Here
</button>
<hr>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black;font-weight: 900;">New Admission Apply <span style="color:blue;">Here</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form class="row g-3" method="post" action="student.php" onsubmit="return validateForm()" name="Form"> 
  <div class="col-md-6">
    <label for="name" class="form-label" style="font-weight: bold;font-size: px;color: black;">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="col-md-3">
    <label for="age" class="form-label" style="font-weight: bold;font-size: px;color: black;">Age</label>
    <input type="age" class="form-control" id="age" name="age">
  </div>
  <div class="col-md-3">
    <label for="class" class="form-label" style="font-weight: bold;font-size: px;color: black;">Class</label>
    <input type="text" class="form-control" id="class" placeholder="" name="class">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label" style="font-weight: bold;font-size: px;color: black;">Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="col-md-6">
  <label for="example-date-input" class="col-2 col-form-label" style="font-weight: bold;font-size: px;color: black;">Date of Birth</label>
  <div class="col-6">
    <input class="form-control" type="date" value="" id="example-date-input" name="dateofbirth">
  </div>
  </div>
  <div class="col-md-3">
    <label for="gender" class="form-label" style="font-weight: bold;font-size: ;color: black;">Gender</label>
     <select class="form-select" id="gender" name="gender">
      <option> Select</option>
      <option value="male"> Male</option>
      <option value="female"> Female</option>
     </select>
  </div>
  <div class="col-md-4">
    <label for="father" class="form-label" style="font-weight: bold;font-size: ;color: black;">Father Name</label>
    <input type="text" class="form-control" id="fname" placeholder="" name="fname">
  </div>
  <div class="col-md-4">
    <label for="mother" class="form-label" style="font-weight: bold;font-size: ;color: black;">Mother Name</label>
    <input type="text" class="form-control" id="mname" placeholder="" name="mname">
  </div>
  <div class="col-8">
    <label for="inputAddress2" class="form-label" style="font-weight: bold;font-size: ;color: black;">Address</label>
    <input type="text" class="form-control" id="address" placeholder="" name="address">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label" style="font-weight: bold;font-size: ;color: black;">City</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label" style="font-weight: bold;font-size: ;color: black;">State</label>
    <select id="inputState" class="form-select" name="state">
      <option selected>Choose...</option>
      <option value="andhrapradesh">Andhra Pradesh</option>
      <option value="arunachalpradesh"> Arunachal Pradesh  </option>
      <option value="assam">  Assam </option>
      <option value="bihar">  Bihar </option>
      <option value="chhattisgarh"> Chhattisgarh  </option>
      <option value="goa"> Goa  </option>
      <option value="gujarat"> Gujarat  </option>
      <option value="haryana">  Haryana </option>
      <option value="himachalpradesh"> Himachal Pradesh </option>
      <option value="jharkhand"> Jharkhand  </option>
      <option value="karnataka"> Karnataka  </option>
      <option value="kerala"> Kerala  </option>
      <option value="madhyapradesh"> Madhya Pradesh  </option>
      <option value="maharashtra"> Maharashtra  </option>
      <option value="manipur"> Manipur  </option>
      <option value="megalaya"> Meghalaya  </option>
      <option value="mizoram"> Mizoram  </option>
      <option value="nagaland"> Nagaland    </option>
      <option value="odisha"> Odisha  </option>
      <option value="punjab"> Punjab  </option>
      <option value="rajasthan"> Rajasthan</option>
      <option value="sikkim"> Sikkim </option>
      <option value="tamilnadu"> Tamil Nadu </option>
      <option value="telugana"> Telangana  </option>
      <option value="tripura"> Tripura </option>
      <option value="utterpradesh"> Uttar Pradesh </option>
      <option value="utterkandh"> Uttarakhand  </option>
      <option  value="westbangal">  West Bengal </option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label" style="font-weight: bold;font-size: ;color: black;">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="zip">
  </div>
  <div class="col-md-3">
    <label for="contact" class="form-label" style="font-weight: bold;font-size: ;color: black;">Contact</label>
    <input type="number"  class ="form-control" name="contact" id="contact">
  </div>
  <div class="col-12">
     <a class="btn btn-primary" href="PDFLINK" download>
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
          <div>
            <h4><img src="img/survey.png" style="height:40px;width: 40px;">Student Mark-List<span class="badge bg-dark" style="border-radius: 40px;">New</span></h4>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Apply Mark
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:black;">Update <span style="color:blue;">Result</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" method="post" action="student.php" onsubmit="return validateForm()" name="Form"> 
  <div class="col-md-6">
    <label for="name" class="form-label" style="font-weight: bold;font-size: px;color: black;">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="col-md-3">
    <label for="class" class="form-label" style="font-weight: bold;font-size: ;color: black;">Class</label>
     <select class="form-select" id="class" name="class">
      <option> Select Class</option>
      <option value="class1"> class1</option>
      <option value="class2"> class2</option>
      <option value="class3"> class3</option>
      <option value="class4"> class4</option>
      <option value="class5"> class5</option>
     </select>
  </div>
    <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Registor No</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Tamil</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">English</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Maths</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Science</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
  <div class="col-md-6">
    <label for="regno" class="form-label" style="font-weight: bold;font-size: px;color: black;color: black;">Social-Science</label>
    <input type="number" class="form-control" id="regno" name="regno" placeholder="12 1234">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update Mark!</button>
      </div>
    </div>
  </div>
</div>
          </div>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="color:white;">
        <img src="img/reminder.png" style="height:30px;width: 30px;">Event Approved
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <?php  
$user = 'root';
$password = ''; 
$database = 'school1'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
// SQL query to select data from database
$sql = "SELECT * FROM event_approval ORDER BY id asc ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<table class="table" style="background-color: #F0F1F6">
            <tr class="table-bordered">
                <th></th>
                <th>Event Title</th>
                <th>Discription</th>
                <th>Event Date</th>
                <th>Event Approval</th>
                <th>Place</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td></td>
                <td><?php echo $rows['EventTitle'];?></td>
                <td><?php echo $rows['Discription'];?></td>
                <td><?php echo $rows['EventDate'];?></td>
                 <td><button class="btn btn-danger"><?php echo $rows['EventApproval'];?></button></td>
                <td><?php echo $rows['Place'];?></td>
            </tr>
            <?php
                }
             ?>
        </table> </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" style="color:white">
        <img src="img/calendar.png" style="height:30px;width: 30px;">Calender
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body bg-light">
        <a href="#home"> <div class="container col-sm-4 col-md-7 col-lg-10 mt-6" style="margin-left: px;">
    <div class="card" style="margin-right:458px;">
        <h3 class="card-header" id="monthAndYear"></h3>
        <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            </thead>
            <tbody id="calendar-body">
            </tbody>
        </table>
        <div class="form-inline">

            <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button>

            <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Next</button>
        </div>
        <br/>
            <label class="lead mr-2 ml-2" for="month">Jump To: </label>
            <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                <option value=0>Jan</option>
                <option value=1>Feb</option>
                <option value=2>Mar</option>
                <option value=3>Apr</option>
                <option value=4>May</option>
                <option value=5>Jun</option>
                <option value=6>Jul</option>
                <option value=7>Aug</option>
                <option value=8>Sep</option>
                <option value=9>Oct</option>
                <option value=10>Nov</option>
                <option value=11>Dec</option>
            </select>
            <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
            <option value=1990>1990</option>
            <option value=1991>1991</option>
            <option value=1992>1992</option>
            <option value=1993>1993</option>
            <option value=1994>1994</option>
            <option value=1995>1995</option>
            <option value=1996>1996</option>
            <option value=1997>1997</option>
            <option value=1998>1998</option>
            <option value=1999>1999</option>
            <option value=2000>2000</option>
            <option value=2001>2001</option>
            <option value=2002>2002</option>
            <option value=2003>2003</option>
            <option value=2004>2004</option>
            <option value=2005>2005</option>
            <option value=2006>2006</option>
            <option value=2007>2007</option>
            <option value=2008>2008</option>
            <option value=2009>2009</option>
            <option value=2010>2010</option>
            <option value=2011>2011</option>
            <option value=2012>2012</option>
            <option value=2013>2013</option>
            <option value=2014>2014</option>
            <option value=2015>2015</option>
            <option value=2016>2016</option>
            <option value=2017>2017</option>
            <option value=2018>2018</option>
            <option value=2019>2019</option>
            <option value=2020>2020</option>
            <option value=2021>2021</option>
            <option value=2022>2022</option>
            <option value=2023>2023</option>
            <option value=2024>2024</option>
            <option value=2025>2025</option>
            <option value=2026>2026</option>
            <option value=2027>2027</option>
            <option value=2028>2028</option>
            <option value=2029>2029</option>
            <option value=2030>2030</option>
        </select></form>
    </div>
</div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--<button name="jump" onclick="jump()">Go</button>-->
<script src="js/scripts.js"></script>

<!-- Optional JavaScript for bootstrap -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script></a>

      </section>
      </section>
      	<?php } ?>
      </div>
      
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>