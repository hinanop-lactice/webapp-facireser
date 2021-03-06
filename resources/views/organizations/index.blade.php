@extends('layouts.app')

 @section('content')
  @foreach($errors->all() as $message)
  <div>{{ $message }}</div>
  @endforeach

  @if(Session::has('message'))
  <div>{{ Session::get('message') }}</div>
  @endif

  <form method="POST" action="http://localhost:8000/organizations">
    @csrf

登録団体
・硬式野球部
・軟式野球部
・陸上競技部
・サッカー部
・ラグビー部
・硬式テニス部
・ソフトテニス部
・バドミントン部
・男子バスケットボール部
・女子バスケットボール部
・男子バレーボール部
・女子バレーボール部
・柔道部
・空手部
・チアダンス部
・ストリートダンス同好会
・競技ダンス部
・水泳部
・女子ハンドボール部
・男子ハンドボール部
・女子ラクロス部
・卓球部
・合唱部
・吹奏楽部
・軽音楽部
・国際交流サークル