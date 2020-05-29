@if(Session::has('erro'))
    <p class="alert alert-danger">{{Session::get('erro')}}</p>
@endif
@foreach($errors->all() as $erro)
    <p class="alert alert-danger">{{$erro}}</p>
    @endforeach
