@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Категории</h1>
        
        <div class="accordion accordion-flush " id="accordionFlushExample">
           @foreach ($categori as $categori)
            <div class="accordion-item border border-black">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                 {{ $categori->name}}
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="cart-bodypx-2">
                     <p >Описание</p>  {{ $categori->description }} <br>
                    </div>
                       <p> <a href="{{ route('upgratecategori', $categori->id) }}" class="btn btn-primary">Изменить</a></p>
                         <p><a href="{{ route('deletecategori', $categori->id) }}" class="btn btn-primary">Удалить</a></p> 
                      
                </div>
              </div>
            </div>
            @endforeach
            </div>
            
          </div>

    </div> 
    
                    
@endsection



