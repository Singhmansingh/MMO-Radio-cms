@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Segment Image</h2>

    <div class="w3-margin-bottom">
        @if($segment->image)
            <img src="{{asset('storage/'.$segment->image)}}" width="200">
        @endif
    </div>

    <form method="post" action="/console/segment_forms/image/{{$segment->id}}" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        @csrf

        <div class="w3-margin-bottom">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" value="{{old('image')}}" required>
            
            @if ($errors->first('image'))
                <br>
                <span class="w3-text-red">{{$errors->first('image')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Image</button>

    </form>

    <a href="/console/segment_forms/list">Back to Segment List</a>

</section>

@endsection
