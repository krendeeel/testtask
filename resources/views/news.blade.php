@extends('layout')

@section('title')
    Новости
@endsection

@section('content')
    <h1>Новости</h1>
    <hr />
    <section>
        @foreach ($news as $new)
            <article>
                <div>
                    <span class="date">{{date('d.m.Y', $new->idate)}}</span>
                    <a href="/view?id={{$new->id}}" >{{htmlspecialchars_decode($new->title)}}</a>
                </div>
                    <p>
                        {{htmlspecialchars_decode($new->announce)}}
                    </p>
            </article>
         @endforeach
    </section>
    <hr />
    <section>
        <h3>Страницы:</h3>
        <div class="pagination">
            @foreach (range(1, $news->lastPage()) as $page)
                <div class={{$currentPage == $page ? "activepage" : "page" }}>
                    <a style="text-decoration: none; color: inherit" href="/news?page={{$page}}" >
                        {{$page}}
                    </a>   
                </div>
            @endforeach
        </div>
    </section>
@endsection
