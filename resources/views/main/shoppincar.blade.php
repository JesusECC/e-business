@extends ('layouts.pagina')
@section ('contenido')
     <div class="content-box">
     	<div class="wrap">
     		<ul class="events">
				<li class="active"><a href="main.index">Paquetes</a></li> 
			</ul>
     	   <div class="clear"></div>
     	</div>
     </div>

<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						
						<th class="hidden-lg" >id</th>
						<th>Paquete</th>
						<th>Precio</th>
					</thead>
					@foreach ($paquete as $p)
					<tr>
						<td class="hidden-lg">{{$p->id}}</td>
						<td>{{$p->nombre}}</td> 
                        <td>{{$p->precio}}</td> 
						<td>
						</td>
					</tr>
					@endforeach
                    <tr>
                        <td>total</td>
                        <td>{{$total}}</td>
                    </tr>
                    <tr>
                    <td></td>
                        <td>
                        <a href="">
					<button class="btn btn-primary">Pagar</button>
				</a>
                        </td>
                    </tr>
				</table>
                
			</div>
		</div>
	</div>
@endsection