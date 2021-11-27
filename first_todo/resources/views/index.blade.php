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
<form action="/delete" method="post">
  <table>
    @csrf
    @foreach($items as $item)
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>削除</th>
    </tr>
    <tr>
      <td>{{$item->create_at}}</td>
      <td>
        <input type="text" value="{{$item->content}}">
      </td>
      <td>
        <input type="submit" name="{{$item->id}}" value="削除">
      </td>
      </tr>
      @endforeach
    </table>
  </form>
    @endsection
    
    