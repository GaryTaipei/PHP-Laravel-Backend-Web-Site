@extends('app')
@section('content')
    <section class="container">
        <a href="{{ url('article/create') }}" role="btn" class="btn btn-primary pull-right" >新增</a>
        <table class="table table=hover">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Active</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            @foreach($query as $var)
                <tr>
                    <td>{{$var->id}}</td>
                    <td>{{$var->title}}</td>
                    <td>{{$var->active}}</td>
                    <td><a href="{{ url('article/'. $var->id . '/edit') }}" role="button" class="btn btn-warning">編輯</a></td>
                    <td>
                        <form action="{{ url('article/'. $var->id ) }}" method="POST" onsubmit="return confirm('確定要刪除這個項目嗎?');">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" role="button" class="btn btn-danger" value="刪除">
                        </form>
                    </td>
                </tr>
            @endforeach
            {{ $query->links() }}
        </table>
    </section>
@stop