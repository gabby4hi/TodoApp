@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
           <div class="input-group">


                     <FORM method= "POST" action= "/create/todo" class='form-control'>

                        {{ csrf_field() }}
        
                     <input type="text" class="form-control input-group-lg" name='todo' placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">

           </FORM>
                    
                
        
        </div>

        </div>
    </div>
    
    <hr>
    @foreach ($todo as $todos)
        {{$todos->todo}} <a href= "{{ route('todo.delete', ['id'=> $todos->id]) }}" class="btn btn-danger btn-xs">X</a>
        
        <br>
    @endforeach



@stop
