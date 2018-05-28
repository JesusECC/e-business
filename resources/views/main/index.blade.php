@extends ('layouts.pagina')
@section ('contenido')
     <div class="map">
     	<img src="{{asset('images/map.jpg')}}" alt=""/>
     </div>
     <div class="content-box">
     	<div class="wrap">
     		<ul class="events">
				<li class="active"><a href="main.index">Eventos Recientes</a></li> 
				
			</ul>
     	   <div class="clear"></div>
     	</div>
     </div>
     <div class="main">
     	@foreach ($evento as $eve)
     	<div class="wrap">
     		<div class="section group">
     			
				<div class="col_1_of_3 span_1_of_3">
					<img src="{{asset('images/eventos/'.$eve->imagen)}}" alt=""/>
					<ul class="m_fb">
						<li>
							<span class="m_22"><a href="#"><img src="{{asset('images/fb.png')}}" alt=""/></a>
							</span>

						    <span class="m_23"><a href="#"><img src="{{asset('images/heart.png')}}" alt=""/></a></span>
						     <div class="clear"></div>
						</li>
					</ul>
					  <div class="desc">
						<h3><a href="#">{{$eve->nombre}}</a></h3>
						<h4 class="m_2">Fecha :{{$eve->fecha}} - Hora: {{$eve->hora}}</h4>
						<h5 class="m_3">{{$eve->descripcion}}</p>
					   </div>
					   <div class="section group example">
						<div class="col_1_of_2 span_1_of_2">
						   <ul>
							  <li><img src="images/men.png" alt=""/><div class="m_desc"><span class="m_2">13%</span><br><span class="m_3">Hombres</span></div> <div class="clear"></div></li>
						   </ul>
		 				</div>
						<div class="col_1_of_2 span_1_of_2">
						  <ul>
							 <li><img src="images/women.png" alt=""/><div class="m_desc"><span class="m_2">87%</span><br><span class="m_3">Mujeres</span></div> <div class="clear"></div></li>
						  </ul>
						</div>
						<center >
							<div class="get_btn1" style="margin-top: 10px;"><a href="">Buy Tickets</a></div>
						</center>
						
						<div class="clear"></div>
		    		  </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		@endforeach
     </div>
     {{$evento->render()}}
@endsection