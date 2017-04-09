<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>My Todo list</title>
    <link rel="stylesheet" type="text/css"
          href="/ex_starts/ch05_ex1/main.css">
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
    border-radius: 5px;
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
section>h2:first-child {
    font-weight: bold;
    font-size: xx-large;
    text-align: center;
    color: rgba(220, 167, 12, 0.96);
}
form input,form select {
    border: 5px double #9c7f7f;
    /* text-align: right; */
    /* float: right; */
    margin-top: 23px;
    outline: none;
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
          </style>
</head>

<!-- the body section -->
<body>
<header><h1>My To-Do List</h1></header>

