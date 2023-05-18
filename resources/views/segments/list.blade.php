@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage segments</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Name</th>
            <th>Slug</th>
            <th>Type</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($segments as $segment)
            <tr>
                <td>
                    @if ($segment->image)
                        <img src="{{asset('storage/'.$segment->image)}}" width="200">
                    @endif
                </td>
                <td>{{$segment->title}}</td>
                <td>
                    <a href="/segment/{{$segment->slug}}">
                        {{$segment->slug}}
                    </a>
                </td>
                <td>{{$segment->type->title}}</td>
                <td>{{$segment->created_at->format('M j, Y')}}</td>
                <td><a href="/console/segments/image/{{$segment->id}}">Image</a></td>
                <td><a href="/console/segments/edit/{{$segment->id}}">Edit</a></td>
                <td><a href="/console/segments/delete/{{$segment->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/segments/add" class="w3-button w3-green">New Segment</a>

</section>

@endsection