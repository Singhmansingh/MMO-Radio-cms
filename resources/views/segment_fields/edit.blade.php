@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Segment Field</h2>

    <form method="post" action="/console/segment_fields/edit/{{$segment_field->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="field_name">Field Name:</label>
            <input type="field_name" name="field_name" id="field_name" value="{{old('field_name', $segment_field->field_name)}}" required>
            
            @if ($errors->first('field_name'))
                <br>
                <span class="w3-text-red">{{$errors->first('field_name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="field_label">Field Label:</label>
            <input type="field_label" name="field_label" id="field_label" value="{{old('field_label', $segment_field->field_label)}}" required>
            
            @if ($errors->first('field_label'))
                <br>
                <span class="w3-text-red">{{$errors->first('field_label')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="field_data_type">Field Data Type:</label>
            <input type="field_data_type" name="field_data_type" id="field_data_type" value="{{old('field_data_type', $segment_field->field_data_type)}}" required>
            
            @if ($errors->first('field_data_type'))
                <br>
                <span class="w3-text-red">{{$errors->first('field_data_type')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="segment_type_id">Segment Type:</label>
            <select name="segment_type_id" id="segment_type_id">
                <option></option>
                @foreach($segment_type_id as $segment_type_id)
                    <option value="{{$segment_type_id->id}}"
                        {{$segment_type_id->id == old('segment_type_id', $segment_type_id->segment_type_id) ? 'selected' : ''}}>
                        {{$segment_type_id->type_name}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('segment_type_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('segment_type_id')}}</span>
            @endif
        </div>


        <button type="submit" class="w3-button w3-green">Edit Segment Field</button>

    </form>

    <a href="/console/segment_fields/list">Back to Segment Fields List</a>

</section>

@endsection
