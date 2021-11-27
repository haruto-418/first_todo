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
</style>

@section('title','Index')

@section('content')
<table>
  @foreach($items as $item)
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>削除</th>
  </tr>
  <tr>
    <td>{{$item->create_at}}</td>
    <td>{{$item->content}}</td>
    <td>
      <form action="/" method="post">
        <input type="submit" value="削除">
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection

