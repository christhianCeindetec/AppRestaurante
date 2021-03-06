@extends('layouts.general.principal')
	@section('content')
		<?php for ($i=0; $i<count($dataInfoSucursales); $i++)
		{?>
			<div class="panel panel-danger">
				<div  align="center" class="panel-heading">
            		<div><b>{{$dataInfoSucursales[$i] ->nombreSucursal}} </b> &nbsp; <b>{{ $dataInfoSucursales[$i] ->puntuacionSucursal }} </b></div>
        		</div>
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="row">
		                        <div class="col-md-4">
		                            <picture>
		                                <img src="data:image/png;base64,{!! $dataInfoSucursales[$i] ->logoSucursal !!}" width="180" height="180" 
		                                alt="Imagen no disponible"/>
		                            </picture>
		                        </div>
		                        <div class="col-md-4">
		                       		<div><b>Direccion:&nbsp;</b>{{ $dataInfoSucursales[$i] ->direccionSucursal }} </div>
		                       		<div><b>Teléfono:&nbsp;</b>{{ $dataInfoSucursales[$i] ->telefonoSucursal }} </div>
		                       		<div><b>Horario:&nbsp;</b>{{ $dataInfoSucursales[$i] ->horarioSucursal }} </div>
		                       		<div><b>Comida:&nbsp;</b>{{ $dataInfoSucursales[$i] ->categoriaSucursal }} </div>
		                       		<div><b>Distancia:&nbsp;</b>{{ $dataInfoSucursales[$i] ->distancia }} <b>Km</b></div>
		                        </div>
		                        <!-- Sentencia en blanco para acomodar informacion -->
		                        <div class="col-md-4">
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
		<?php
		}?>
	@endsection