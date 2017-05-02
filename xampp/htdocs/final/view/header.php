<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>My Todo list</title>
    
<link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet"> 

 <style>
          * {font-family: 'Sintony', sans-serif;
padding: 9px;
color: #111 ;
          margin: 7px;}
        
          
          body,form,html{
              padding: 0px;margin: 0px;
          }
          body{
              background:#fffef7;
          }
ul {
    list-style: none;
}

a {
    text-decoration: none;
    transition:0.2s;
}

input[type="submit"] {
    background: #f13c3c;
    color: white;
    border: none;
    border-radius: 5px;cursor:pointer;
}
input[disabled="disabled"]  {
    cursor: not-allowed;
}
input[type="submit",disabled="disabled"] {
    cursor: not-allowed;
}
h2 {
    font-weight: bold;
}

th {
    /* text-decoration: underline; */
    border-bottom: 3px double #565656;
}

tr:nth-child(1) {
    /* border-bottom: 1px solid black; */
}

header>h1 {
    color: #9e7b7b;
    text-align: center;
    font-size: -webkit-xxx-large;
    
}

h1 {
    text-align: center;
}

aside {
    float: left;
    margin: 0;
    margin-right: 6px;
    padding-left: 0;
    /* border: 1px solid; */
    text-align: left;
    margin-left: -2%;
}

li {
    text-align: -webkit-left;
    display: block;
    text-align: left;
    
    padding: 8px;
}
footer {
    margin-top: 190px;
}
section>h2 {
        /* font-weight: bold; */
    font-size: 25px;
    text-align: left;
    color: rgba(158, 123, 123, 0.37);
    margin-left: 17px;
    letter-spacing: 0.06em;
}
form input,form select {
    border: 5px double #9c7f7f;
    /* text-align: right; */
    /* float: right; */
    margin-top: 23px;
    outline: none;
    
    min-width: 170px;
}
form>section ,form label{
    color:white;
}
form input[type="text"]:nth-child(12){
    margin-left:69px
}
label + input[type="submit"] {
    background: #61b30a;
}
nav li
{
border-bottom:1px solid grey;
}
p.copyright {
    font-size: small;
    text-align: center;
    margin-top: 300px;
   
}
a:hover {
  color: black;
    transition: 0.2s;
}
#reg input[type="text"],#reg input[type="radio"],#reg input[type="password"],#reg input[type="email"],#reg input[type="tel"],#reg input[type="date"], #reg select {
    border: 5px double #9c7f7f;
    /* text-align: right; */
    /* float: right; */
    margin-top: 23px;
    outline: none;
min-width: 30px;}
    

          </style>
</head>

<!-- the body section -->
<body>
    
    
    

    
    
<header><h1>My To-Do List</h1></header>

