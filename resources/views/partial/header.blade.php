<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>@yield('title','Home')</title>
    <style>
        body{
    /* display:flex; */
    }
    .header,.footer{
    background-color:blue;
    min-height:70px;
    text-align:center;
    color:white;
    border: solid 3px white;

    }
    .content{
        background:#8bc34a;
        text-align:center;
        color:white;
        min-height:185px;
    }
    h2{
        margin:0;
    }
    </style>
</head>
<body>
    <header class='header'>
        <h1>Header</h1>
    </header>