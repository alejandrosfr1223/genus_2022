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
                            <td colspan="2"><h1 style="font-size: 5.3rem; margin: -22px 0px;">Dendro</h1></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="home_container notmain" id="whitebg">
            <div id='departments_cont'>
                <div class="leftdivide" id="dep_info_cnt">
                    <p>
                    Dendro Es un procedimiento que permite el conocimiento de las líneas genealógicas que conectan a una persona o a su familia, con sus antepasados, a través de varias generaciones, de manera documentada, a través del método “intuitu personae”.
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
                                    <td colspan="2"><h1 style="font-size: 5.3rem; margin: -22px 0px;">Dendro</h1></td>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
            </div>
            <p style="width:80%; text-align:center; margin:auto; padding:30px 0 15px 0;">
            Este servicio se presta a bajo tres versiones, según los requerimientos de profundización generacional y de documentación:
            </p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 cont-rows">
                <a href="">
                    <div class="col sub-elements-serv">
                        <img class="pagelogo" src="{{ asset('/img/logos/genus.png') }}">
                        <h4 class="text-servsub">Genealogía Familiar</h4>
                    </div>
                </a>
                <a href="">
                    <div class="col sub-elements-serv">
                        <img class="pagelogo" src="{{ asset('/img/logos/genus.png') }}">
                        <h4 class="text-servsub">Genealogía Personal</h4>
                    </div>
                </a>
                <a href="">
                    <div class="col sub-elements-serv">
                        <img class="pagelogo" src="{{ asset('/img/logos/genus.png') }}">
                        <h4 class="text-servsub">Árbol Heráldica Blasones Familiar</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection