<html lang="en"><head><meta charset="UTF-8"/><title>URL Shortener Microservice</title><!--Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><meta name="description" content="URL Shortener Microservice"/><meta name="author" content="Gagan_Suneja"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
</head>
</html>
<body>
<div class="container-fluid">
<img width="283px" height="206px"src="https://avatars3.githubusercontent.com/u/9746527?v=3&s=460" alt="My Face"/>
<p><a href="mailto:cr7sunejagagan@gmail.com">
 <i class="fa fa-envelope fa-fw"></i>
 </a>
 <a href="https://github.com/GaganSuneja" target="_blank">
  <a href="http://codepen.io/GaganSuneja" target="_blank">
   <i class="fa fa-codepen"></i></a>
   <a href="http://www.freecodecamp.com/GaganSuneja" target="_blank">
   <i class="fa fa-fire fa-fw"></i></a></p>
   <p>Gagan Suneja.</p>
   <h1 class="header">FreeCodeCamp API Basejump: URL Shortener Microservice</h1>
   <blockquote>
   <p>User stories:</p>
   <ul><li>I can pass a URL as a parameter and I will receive a shortened URL in the JSON response.</ul>
   </li><li>When I visit that shortened URL, it will redirect me to my original link.</ul></li>
   </ul>
   </blockquote>
   <h3>Example creation usage:</h3>
   <code>https://little-url.herokuapp.com/new/https://www.google.com</code>
   <br/>
   <code>https://little-url.herokuapp.com/new/http://foo.com:80</code>
   <h3>Example creation output</h3>
   <code>{
"original_url":"http://foo.com:80",
"short_url":"https://little-url.herokuapp.com/8170"
}</code>
<h3>Usage:</h3>
<code>https://little-url.herokuapp.com/2871</code>
<h3>Will redirect to:</h3>
<code>https://www.google.com/</code>
</div>
</body>