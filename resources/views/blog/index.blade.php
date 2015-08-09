@extends('template')

@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $idp => $post)
            <div class="post-preview">
                <a href="post/{{ $idp }}">
                    <h2 class="post-title">
                        {{ $post['titulo'] }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post['subtitulo'] }}
                    </h3>
                </a>
                <p class="post-meta">Postado por <a href="/sobre">Luiz</a> em {{ $post['criado'] }}</p>
            </div>
            <hr>
            @endforeach

            <!-- Pager -->
            <!--<ul class="pager">
                <li class="next">
                    <a href="#">Anteriores &rarr;</a>
                </li>
            </ul>-->
        </div>
    </div>
    @stop