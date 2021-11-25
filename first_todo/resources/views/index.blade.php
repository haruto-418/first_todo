@extends('layouts.default')
<style>
  tr{
    display:flex;
    justify-content:center;
  }
  th{
    display:block;
  }
</style>

@section('title','Index')

@section('content')
<table>
  @foreach($items as $item)
  <tr>
    <th>作成日</th>
    <td>{{$item->create_at}}</td>
  </tr>
  <tr>
    <th>タスク名</th>
    <td>{{$item->content}}</td>
  </tr>
  @endforeach
</table>
@endsection

