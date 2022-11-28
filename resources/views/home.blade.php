@extends('temp')
@section('title', 'Home')
@section('content')

 
<table border=0>
    @foreach($books as $b)
        <tr>
            <td><img src = {{$b->image}} class="book" alt="" ></td>
            <td>{{ $b->title }}</td>
            <td>by</td>
            <td>{{ $b->author }}</td>
            <td><a href="{{ url('bookdetail', $b->id) }}" class="btn btn-info">Detail</a></td>
</tr>
    @endforeach
</table>



@endsection
