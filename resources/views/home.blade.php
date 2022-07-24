@extends('layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div id="containerbackground">
                <div class="post_home_container">
                    <div class="firstsquare leftdivide" style="text-align: center;">
                        <table style="text-align: center; align-content: center; margin: auto; ">
                            <tr>
                                <td>
                                    <img class="first_img" src="{{ asset('/img/logos/genus.png') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h1 class="first_key">Genus</h1>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="rightdivide">
                        <h2 class="textnormal">Conoce tu pasado, para transformar tu futuro</h2>
                        <p id="infomaintext">
                            Genus es un servicio profesional experto, que brinda el conocimiento de si mismo en varias dimensiones, a través del análisis de diferentes factores, que proviniendo desde el pasado lejano determinan nuestro presente y nuestro futuro. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="home_container" style="background-color: #F1F1F1;">
            <div style="position: relative;">
                <div id='departments_cont'>
                    
                    <div class="leftdivide" id="dep_info_cnt">
                        <h4>Las dimensiones que evalúa Genus son:</h4>
                        <p>
                        <b>Nous</b><br>
                        Es un procedimiento que permite el conocimiento de la mentalidad personal y de la mentalidad familiar, a través del método del “Genograma de mentalidad generacional”.<br><br>
                        <b>Dendro</b><br>
                        Es un procedimiento que permite el conocimiento de las líneas genealógicas que conectan a una persona o a su familia, con sus antepasados, a través de varias generaciones, de manera documentada, a través del método “intuitu personae”<br><br>
                        <b>Genea</b><br>
                        Es un procedimiento que demuestra el desarrollo, a través de varias generaciones,  de la estructura genética de una persona o de su familia por medio del estudio genético personal y familiar
                        </p>
                    </div>
                    <div class="rightdivide row" id="btns_cnt_dept">
                        <a class="subtext col-6 col-md-3" href="{{route('nous.home')}}">
                            <img class="first_img" src="{{ asset('/img/logos/genus.png') }}">
                            <h2 class="marger">Nous</h2>
                        </a><br><br><br>

                        <a class="subtext col-6 col-md-3" href="{{route('dendro.home')}}">
                            <img class="first_img" src="{{ asset('/img/logos/genus.png') }}">
                            <h2 class="marger">Dendro</h2>
                        </a><br><br><br>

                        <a class="subtext col-6 col-md-3" href="{{route('genea.home')}}">
                            <img class="first_img" src="{{ asset('/img/logos/genus.png') }}">
                            <h2 class="marger">Genea</h2>
                        </a>
                    </div>
                    <!-- Parte Responsiva -->
                </div>
            </div>
        </div>
    </div>

@endsection