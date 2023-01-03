@extends('layouts.main_admin')
@section('content')
<h1>User</h1>

@foreach ($user as $index => $item)
<tr>
    <th scope="row">{{ $index + 1 }}</th>
    <td>{{ $item->name }}</td>
</tr>
@endforeach
@endsection