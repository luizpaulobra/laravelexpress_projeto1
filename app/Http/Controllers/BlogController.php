<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    // Geração de posts do blog temporário
    public $meus_posts = array(
    array("titulo"=>"Meu Primeiro Blog no Laravel","subtitulo"=>"Uma forma interessante e diferente","criado"=>"07/08/2015","conteudo"=>"Este &eacute; um blog com o &uacute;nico e exclusivo objetivo de mostrar a evolu&ccedil;&atilde;o do curso de Laravel Express da Code.Education, muito legal por sinal! Aproveite para vistar e conhecer!"),
    array("titulo"=>"Como Fazer uma View","subtitulo"=>"Exibindo os conte&uacute;dos das p&aacute;ginas","criado"=>"05/08/2015","conteudo"=>"Fazer as views &eacute; um processo simples utilizando o Blade, uma ferramenta que facilita varios processos."),
    );

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("blog.index",['titulo'=>'Inicial','posts'=>$this->meus_posts]);
    }

    /**
     * Exibe um post do blog
     **/
    public function post($id)
    {
        return view("blog.post",['titulo'=>$this->meus_posts[$id]['titulo'],'post'=>$this->meus_posts[$id]]);
    }

    /**
     * Exibe página Sobre
     */
    public function sobre() {
        return view("blog.sobre",["titulo"=>"Sobre Eu"]);
    }
}
