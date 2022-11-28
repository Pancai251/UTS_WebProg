@extends('temp')
@section('title', 'Novel')
@section('content')

<table border=0>
    @foreach($novel as $n)
        <tr>
            <td><img src = {{$n->image}} class="book" alt="" ></td>
            <td>{{ $n->title }}</td>
            <td>by</td>
            <td>{{ $n->author }}</td>
            <td><a href="{{ url('bookdetail', $n->id) }}" class="btn btn-info">Detail</a></td>
</tr>
    @endforeach
</table>

@endsection