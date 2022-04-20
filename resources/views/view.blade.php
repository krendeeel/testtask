@extends('layout')

@section('title')
    {{htmlspecialchars_decode($oneNews->title)}}
@endsection

@section('content')
    <h1>{{htmlspecialchars_decode($oneNews->title)}}</h1>
    <hr />
    <section>
        <?php
            echo strval($oneNews->content); 
        ?>
    </section>
    <hr/>
    <div class="exit">
        <a href="/news?page=1">
            <h3>Все новости >></h3> 
        </a>
    </div>
@endsection








