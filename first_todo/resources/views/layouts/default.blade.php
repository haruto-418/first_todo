<html>
  <head>
    <title>@yield('title')</title>
    <style>
      body{
        font-size:16pt;
        background-color:#99FFFF;
      }
      h1{
        padding:20px;
        font-size:20pt;
      }
      .card{
        background-color:#fff;
        height:50%;
        width:70%;
        border-radius:30px;
        position:relative;
        top:25vh;
        margin:0 auto;
      }
      .add_area{
        position:absolute;
        left:5%;
        width:70%;
        height:32px;
      }
      .add_btn{
        color:red;
        background-color:#fff;
        border:1px red solid;
        position:absolute;
        height:32px;
        width:16%;
        right:5%;
        cursor:pointer;
      }
    </style>
  </head>
  <body>
    @yield('content')
    <div class="card">
      <h1>Todo List</h1>
      <form action="/" method="post">
        <input class="add_area" type="text" name="">  
        <input class="add_btn" type="submit" value="追加" >
      </form>
    </div>
  </body>
</html>