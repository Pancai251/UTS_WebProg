@extends('temp')
@section('title', 'Encyclopedia')
@section('content')

<table border=0>
    @foreach($encyclopedia as $en)
        <tr>
            <td><img src = {{$en->image}} class="book" alt="" ></td>
            <td>{{ $en->title }}</td>
            <td>by</td>
            <td>{{ $en->author }}</td>
            <td><a href="{{ url('bookdetail', $en->id) }}" class="btn btn-info">Detail</a></td>
</tr>
    @endforeach
</table>

@endsection
