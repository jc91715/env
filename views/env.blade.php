@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h1>
                        <i class="glyphicon glyphicon-edit"></i>
                        ENV 设置

                    </h1>
                </div>

                @include('common.error')

                <div class="panel-body">
                    <form action="{{ route('env.store') }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">


                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @foreach($env as $k=>$v)
                        <div class="form-group">
                            <label for="name-field">{{$k}}</label>

                            <input class="form-control" type="text" name="env[{{$k}}]" id="name-field" value="{{$v}}" />
                        </div>
                        @endforeach



                        <div class="well well-sm">
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection