@extends('temp')
@section('title', 'Comic')
@section('content')

<table border=0>
    @foreach($comic as $c)
        <tr>
            <td><img src = {{$c->image}} class="book" alt="" ></td>
            <td>{{ $c->title }}</td>
            <td>by</td>
            <td>{{ $c->author }}</td>
            <td><a href="{{ url('bookdetail', $c->id) }}" class="btn btn-info">Detail</a></td>
</tr>
    @endforeach
</table>

@endsection