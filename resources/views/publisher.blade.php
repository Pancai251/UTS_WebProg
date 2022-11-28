@extends('temp')
@section('title', 'Publisher')
@section('content')

<table border=0>
    @foreach($publishers as $p)
        <tr>
            <td><img src = {{$p->image}} class="pub" alt="" ></td>
            <td>{{ $p->name }} <br>{{ $p->address }}</td>
            <td><a href="{{ url('publisherdetail', $p->id) }}" class="btn btn-info">Detail</a></td>
            
</tr>
    @endforeach
</table>



@endsection