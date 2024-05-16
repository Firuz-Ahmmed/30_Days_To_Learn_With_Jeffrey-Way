@extends('components.layouts')

@section('heading')
All the available Jobs
@foreach ( $jobs as $job )
<a href="/jobs/{{$job['id']}}">
<li>{{$job['title']}}</li>
<li>{{$job['salary']}}</li>
</br>
</a>
@endforeach
@endsection