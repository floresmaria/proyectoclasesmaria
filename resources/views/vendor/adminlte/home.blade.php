@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">

			<div class="container-fluid">
                	<div class="panel panel-default">
                    	<div class="container-fluid">
                        	

					<div class="box-header with-border">
						<h3 class="box-title">Inicio</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
					<center>	{{ trans('adminlte_lang::message.logged') }}. Bienvenido</center>

							<div class="img-sec">
               				 <img src="imagenes/clases.jpg" class="img-responsive">
             				</div>
					
					</div>
		

			</div>
              </div>
              </div>




		</div>
	</div>
@endsection
    


   				 


                    