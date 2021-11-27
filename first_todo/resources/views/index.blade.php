@extends('layouts.default')
<style>
  tr{
    display:flex;
    justify-content:center;
  }
  th,td{
    width:200px;
    text-align:center;
  }
  .update_btn{
    background-color:#fff;
    border:2px solid #0066FF;
    color:#0066FF ;
    width:64px;
    height:32px;
    border-radius:20px;
    cursor:pointer;
  }
  .update_btn:hover{
    background-color:#0066FF;
    color:#fff;
    transition:0.3s;
  }
  .delete_btn{
    background-color:#fff;
    border:2px solid #00AA00;
    color:#00AA00 ;
    width:64px;
    height:32px;
    border-radius:20px;
    cursor:pointer;
  }
  .delete_btn:hover{
    background-color:#00AA00;
    color:#fff;
    transition:0.3s;
  }
</style>

@section('title','Todo')

@section('content')
<table>
  @foreach($items as $item)
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  <tr>
    <td>{{$item->create_at}}</td>
    <td>{{$item->content}}</td>
    <form action="/update" method="post">
      @csrf
      <td>
        <input type="submit" class="update_btn" value="更新">
      </td>
    </form>
    <form action="/delete" method="post">
      @csrf
      <td>
        <input type="hidden" name="id" value="{{$item->id}}">
        <input type="submit" class="delete_btn" value="削除">
      </td>
    </form>
  </tr>
  @endforeach
</table>
@endsection


