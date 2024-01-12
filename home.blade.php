@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
            <div class="card">
	            <div class="body  "><br>
	                <center><h3>BIENVENIDO AL SISTEMA</h3></center><br>
                    <center><h3>{{$e->nombre_empresa}}</h3></center><br>
                    <center><img class="img" src="{{url('uploads_files/'.$e->logo)}}"  style="height:80px; width:150px"/></center>
	                <div class="sparkline" data-type="line" data-spot-radius="12" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#fff" data-min-spot-color="rgb(255,255,255)" data-max-spot-color="rgb(255,255,255)" data-spot-color="rgb(255,255,255)" data-offset="90" data-width="100%" data-height="100%" data-line-width="2" data-line-color="rgba(255,255,255,0.7)" data-fill-color="rgba(0, 188, 212, 0)">
	                <canvas width="620" height="360" style="display: inline-block; width: 320px; height:105px; vertical-align: top;"></canvas></div>
	            </div>
	        </div>
            @if (Auth::user()->id_rol == 1) 
                        <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('persona')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">person</i>
                        </div>
                        <div class="content">
                            <div class="text">PERSONAL</div>
                            <div class="number count-to" data-from="" data-to="INICIO" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('cargo')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">account_box</i>
                        </div>
                        <div class="content">
                            <div class="text">CARGO</div>
                            <div class="number count-to" data-from="" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('asigperson')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">group</i>
                        </div>
                        <div class="content">
                            <div class="text">ASIGNACIÓN DEL PERSONAL</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('usuario')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">settings</i>
                        </div>
                        <div class="content">
                            <div class="text"> USUARIO</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
            </div>
            @endif
            @if (Auth::user()->id_rol == 2) 
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('home')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">home</i>
                        </div>
                        <div class="content">
                            <div class="text">INICIO</div>
                            <div class="number count-to" data-from="" data-to="INICIO" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('proyecto')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">folder</i>
                        </div>
                        <div class="content">
                            <div class="text"> PROYECTO</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('asigproyect')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">folder_shared</i>
                        </div>
                        <div class="content">
                            <div class="text"> ASIGNACIÓN DE PROYECTO</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('segproyect')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">visibility</i>
                        </div>
                        <div class="content">
                            <div class="text">SEGUIMIENTO DE PROYECTO</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
            </div>
            @endif
            @if (Auth::user()->id_rol == 3) 
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('home')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">home</i>
                        </div>
                        <div class="content">
                            <div class="text">INICIO</div>
                            <div class="number count-to" data-from="" data-to="INICIO" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('segproyect')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">visibility</i>
                        </div>
                        <div class="content">
                            <div class="text">SEGUIMIENTO DE PROYECTO</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('repProyectEstFin')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">content_paste</i>
                        </div>
                        <div class="content">
                            <div class="text text-justify"><font size="1">REPORTE DE PROYECTOS<br>PORESTADOS FINALES</font></div>
                            <div class="number count-to" data-from="" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">insert_chart</i>
                        </div>
                        <div class="content">
                            <div class="text text-justify"><font size="1">REPORTE GRÁFICO DE <br>PROYECTOS DE OBRAS CONCLUIDAS</font></div>
                            <div class="number count-to" data-from="" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if (Auth::user()->id_rol == 4) 
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('home')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">home</i>
                        </div>
                        <div class="content">
                            <div class="text">INICIO</div>
                            <div class="number count-to" data-from="" data-to="INICIO" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('area')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">account_balance</i>
                        </div>
                        <div class="content">
                            <div class="text">ÁREAS</div>
                            <div class="number count-to" data-from="" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('fiscalizador')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">perm_identity</i>
                        </div>
                        <div class="content">
                            <div class="text">FISCALIZADOR</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="{{asset('proyecto')}}">
                    <div class="info-box bg-black hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-orange">folder</i>
                        </div>
                        <div class="content">
                            <div class="text"> PROYECTO</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div></a>
                </div>
            </div>
            @endif
</div>
@endsection
