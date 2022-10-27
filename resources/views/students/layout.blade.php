<!DOCTYPE html>
<html><head>
<style>
*{
    margin: 5px;
    padding: 0;
    font-family: sans-serif;
    margin-top: 20px;
}

tr{
    float: center;
    list-style-type: none;
    margin: auto;
}
button{
    text-decoration: none;
    color: black;
    padding: 5px 24px;
    border: 1px solid;
    transition: 0.6s ease;
    text-underline-position: alphabetic;
}
tr th{
    color: dimgray;
    padding-left: 10px;
    padding-right: 25px;
    padding-bottom: 10px;
}
tr td{
    color: black;
    padding-left: 10px;
    padding-right:  5px;
    padding-bottom: 10px;
}
.card-body{
    text-align: left;
}
button:hover{background-color:Skyblue;}{
    
}

    </style>

    <title>Students information</title>

</head>
<body >
  
<div class="container">
    @yield('content')
</div>
  
</body>
</html>