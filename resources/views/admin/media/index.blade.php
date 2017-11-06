@extends('layouts.admin')

@section('content')

    <h1>Media</h1>

    @if($photos)

        <form method="post" action="delete/media" class="form-inline">
            {{csrf_field()}}
            {{method_field('delete')}}
            <div class="form-group">
                <select name="checkBoxArray" id="" class="form-control">
                    <option value="">Delete</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="delete_all" value="Submit">
            </div>



    <table class="table">
        <thead>
        <tr>
            <th><input type="checkbox" id="options"></th>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>

            @foreach($photos as $photo)

                <tr>
                    <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                    <td>{{$photo->id}}</td>
                    <td><img height="50" src="{{$photo->file}}"></td>
                    <td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
                    <td>

                            <div class="form-group">
                                <input type="submit" name="delete_single[{{$photo->id}}]" value="Delete" class="btn btn-danger">
                            </div>

                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>

        </form>

    @endif

@stop

@section('scripts')
<script>
    $(document).ready(function() {

        $("#options").click(function() {

            if(this.checked) {
                $('.checkBoxes').each(function() {
                    this.checked = true;
                });
            } else {
                $(".checkBoxes").each(function() {
                    this.checked = false;
                });
            }
        });

    });
</script>

@stop