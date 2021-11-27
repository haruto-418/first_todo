@extends('layouts.default')
<style>
  tr{
    display:flex;
    justify-content:center;
  }
  th,td{
    width:200px;
  }
</style>

@section('title','Index')

@section('content')
<table>
  @foreach($items as $item)
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
  </tr>
  <tr>
    <td>{{$item->create_at}}</td>
    <td>{{$item->content}}</td>
  </tr>
  @endforeach
</table>
@endsection

