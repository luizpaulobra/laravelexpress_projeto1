@extends('template')

@section('conteudo')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <h2 class="section-heading">{{$post['titulo']}}</h2>
                    <h3>{{$post['subtitulo']}}</h3>

                    <p>{{$post['conteudo']}}</p>

                    <blockquote>Postado por <a href="/sobre">Luiz</a> em {{$post['criado']}} </blockquote>

                </div>
            </div>
        </div>
    </article>
@stop