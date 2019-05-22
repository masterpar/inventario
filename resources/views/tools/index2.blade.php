@extends('tools.base')
@section('action-content')

      

<!-- Main content -->
    <section class="content">
      <div class="row">


        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
           <br>       
              {!!Form::open(['route'=>'tool.index', 'method'=>'get' ,'class' => 'form-inline float-right','role' => 'search'])!!}
               <div class="input-group input-group-sm col-md-4" style=" margin-left: 5px;">
                 {!!Form::select('category_id', $categories , null , ['class'=>'form-control'  , 'id' => 'categ' , 'placeholder'=>'Seleccione categoría'])!!}
               </div>
              <div class="input-group input-group-sm col-md-4">                
                <input type="text" name="nombre" class="form-control">
                    <span class="input-group-btn">                    
                      {!!Form::submit('Buscar',['class'=>'btn btn-info btn-flat'])!!}
                    </span>
              </div>
          {!!Form::close()!!}
              <br>
          </div>
          <!-- /.box -->

  </div>
</div>

  

      <!-- Info boxes -->
      <div class="row">
     @foreach ($tools as $tool)

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-black" style="background: none !important;"><img src="{{$tool->imagen}}" width="90" height="90" /></span>
            <div class="info-box-content">
              <span class="info-box-number">{{$tool->nombre}}</span>
              <span class="">Disponibles: {{$tool->cantidad_disponible}}</span>
                <hr>
              <a href="{{ route('tool.show', ['id' => $tool->id]) }}" class="btn btn-success btn-md margin" data-toggle="tooltip" data-placement="top" title="Ver más">
                        <i class="fa fa-eye fa-lg"></i>
                        </a> 
                  <a href="{{ route('cart-add', ['id' => $tool->id]) }}" class="btn btn-info btn-md margin" data-toggle="tooltip" data-placement="top" title="Lo necesito">
                        <i class="fa fa-cart-plus fa-lg"></i>
                        </a>
            </div> 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
    @endforeach


      </div>
    </section>




@endsection