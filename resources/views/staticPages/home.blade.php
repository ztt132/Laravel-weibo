@extends('layouts.default')
@section('title','主页')
@section('content')
  <h1>主页</h1>
  <form action="{{route('add')}}">
      <input type="text" name="id">
      <input type="submit" value="提交">
  </form>
@stop
