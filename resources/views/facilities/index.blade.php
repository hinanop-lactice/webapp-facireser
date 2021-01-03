@extends('layouts.app')

 @section('content')
 @foreach ($facilities as $facility)
 <a href="{{ route('facilities.show, ['id' => $facility->id]) }}"><li>{{$facility->name}}</li></a>
@endforeach

  @if(Session::has('message'))
  <div>{{ Session::get('message') }}</div>
  @endif

  <form method="POST" action="http://localhost:8000/facilities">
    @csrf

    <title>利用可能施設一覧</title>
  <h1>利用可能施設一覧</h1>
  <select>
  <a href=“{{ route(’facility.detail, [‘id’ => facility->id]) }}“><li>第一体育館</li></a>  
   <li>第一体育館</li>
   <li>第二体育館</li>
   <li>野球場</li>
   <li>サッカー・ラグビー場
   <li>陸上競技場</li>
   <li>第一テニスコート</li>
   <li>第二テニスコート</li>
   <li>屋外バレーコート</li>
   <li>卓球場</li> 
   <li>柔道場</li>
   <li>剣道場</li>
   <li>音楽室</li>
   <li>小会議室</li>
   <li>大会議室</li>
   <li>トレーニングルーム</li>
   <li>合宿所</li>
   <li>ラーニングルーム１</li>
   <li>ラーニングルーム２</li>
   <li>ラーニングルーム３</li>
   <li>ラーニングルーム４</li>
  </ul>
</body>
</html>

