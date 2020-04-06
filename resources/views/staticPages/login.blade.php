@extends('layouts.default')
@section('title','主页')
@section('content')
  <h1>登录</h1>
  <form action="{{route('login')}}" method='POST'>
      账号:<input type="text" name="account"><br>
      密码:<input type="password" name="password"><br>
      token:<input type="text" name="api_token">
      {{csrf_field()}}
      <input type="submit" value="提交">
  </form>
@stop
