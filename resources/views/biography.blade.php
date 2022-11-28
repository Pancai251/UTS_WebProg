@extends('temp')
@section('title', 'Biography')
@section('content')

<table border=0>
    @foreach($biography as $bio)
        <tr>
            <td><img src = {{$bio->image}} class="book" alt="" ></td>
            <td>{{ $bio->title }}</td>
            <td>by</td>
            <td>{{ $bio->author }}</td>
            <td><a href="{{ url('bookdetail', $bio->id) }}" class="btn btn-info">Detail</a></td>
</tr>
    @endforeach
</table>
@endsection