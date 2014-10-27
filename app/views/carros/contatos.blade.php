@extends('layouts.master')

@section('conteudo')
    <div style="height:100px;"></div>
	<div class="container">
			 <div class="well">
			 	<address><strong>EMAIL: </strong>tlveiculos2014@gmail.com </address>
			    <address><strong>TIM: </strong>  TIM (61) 9294-2671 / (61) 8168-3394 </address>
			    <address><strong>WHATSAPP: </strong>  (61) 8165-8800  </address>
			    <address><strong>VIVO: </strong>  (61) 9683-3493  </address>
			    <address><strong>CLARO: </strong>  (61) 9323-0339  </address>
			    <div class="row">
				    <div class="col-md-4 col-md-offset-4">
				   		{{ HTML::image('img/carros-nacionais.png', 'Carros', array( 'style'=>'margin-top:9px;', 'class' => 'img-responsive')) }}
				    </div>
				</div>
			</div>
		
	</div>
 <div style="height:100px;"></div>
@stop