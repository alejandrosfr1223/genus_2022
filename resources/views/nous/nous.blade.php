@extends('/layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container" style="padding-bottom: 30px;">
            <div id="containerbackground">
                <div class="subpost_home_container">
                    <table style="margin:auto;">
                        <tr>
                            <td style="width:65%;">

                            </td>
                            <td>
                                <table style="text-align: center; align-content: center; margin: 0 0 0 auto; ">
                                    <tr>
                                        <td>
                                            <img style="width:4rem; margin:auto;" src="{{ asset('/img/logos/genus.png') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h1 style="font-size:1.3rem; margin:0;">Genus</h1>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><h1 style="font-size: 5.3rem; margin: -22px 0px;">Nous</h1></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="home_container notmain" id="whitebg">
            <div id='departments_cont'>
                <div class="leftdivide" id="dep_info_cnt">
                    <p>
                    Nous Es un procedimiento que permite el conocimiento de la mentalidad personal y de la mentalidad familiar, a través del método del “Genograma de mentalidad generacional”, está basado en el método científico a nivel profesional, validado y comprobado en su capacidad y resultados, para lograr el autoconocimiento de la mentalidad transgeneracional, la cual determina el modo de pensar, sentir y decidir de cada persona.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <table style="margin:auto;">
                                <tr>
                                    <td style="width:65%;">

                                    </td>
                                    <td>
                                        <table style="text-align: center; align-content: center; margin: 0 0 0 auto; ">
                                            <tr>
                                                <td>
                                                    <img style="width:4rem; margin:auto;" src="{{ asset('/img/logos/genus.png') }}">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h1 style="font-size:1.3rem; margin:0;">Genus</h1>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><h1 style="font-size: 5.3rem; margin: -22px 0px;">Nous</h1></td>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
            </div>
            <p style="width:80%; text-align:center; margin:auto; padding:30px 0 15px 0;">
            A través del método del Genograma de mentalidad generacional, se desarrolla un análisis integral de su personalidad y entorno relacional, que facilite la comprensión y el autoconocimiento de sus actitudes, emociones, y acciones para consigo mismo y sus relaciones; este autoconocimiento, genera y desarrolla una nueva mentalidad personal, familiar, de pareja, profesional y empresarial; proporciona una salud integral, mejora la armonía en las relaciones, fomenta el éxito personal y profesional, aumenta la autoestima, la innovación y la capacidad de emprendimiento, así como la mejora consigo mismo, con su pareja y amigos, ayudando a alcanzar mayor paz y felicidad. 
            </p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 cont-rows">
                <a href="">
                    <div class="col sub-elements-serv">
                        <img class="pagelogo" src="{{ asset('/img/logos/genus.png') }}">
                        <h4 class="text-servsub">Mentalidad Personal</h4>
                    </div>
                </a>
                <a href="">
                    <div class="col sub-elements-serv">
                        <img class="pagelogo" src="{{ asset('/img/logos/genus.png') }}">
                        <h4 class="text-servsub">Mentalidad Profesional</h4>
                    </div>
                </a>
                <a href="">
                    <div class="col sub-elements-serv">
                        <img class="pagelogo" src="{{ asset('/img/logos/genus.png') }}">
                        <h4 class="text-servsub">Mentalidad de Pareja</h4>
                    </div>
                </a>
                <a href="">
                    <div class="col sub-elements-serv">
                        <img class="pagelogo" src="{{ asset('/img/logos/genus.png') }}">
                        <h4 class="text-servsub">Mentalidad de Familia</h4>
                    </div>
                </a>
                <a href="">
                    <div class="col sub-elements-serv">
                        <img class="pagelogo" src="{{ asset('/img/logos/genus.png') }}">
                        <h4 class="text-servsub">Mentalidad Empresa Familiar</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection