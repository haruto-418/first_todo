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
      .add_todo{
        position:absolute;
        left:5%;
        width:70%;
        height:32px;
      }
    </style>
  </head>
  <body>
    @yield('content')
    <div class="card">
      <h1>Todo List</h1>
      <input class="add_todo" type="text" name="">
    </div>
  </body>
</html>