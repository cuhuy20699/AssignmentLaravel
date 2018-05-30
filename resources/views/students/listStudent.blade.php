@extends('layout.master')
@section('title','List Student')
@section('content')

    <h3>Điểm danh</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Action</th>
            <th scope="col">Id</th>
            <th scope="col">RollNumber</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($student as $key =>$item)
            <tr id="{{$item->id}}">
                <td> <input type="checkbox" class="form-check-input checked" id="exampleCheck1"></td>
                <th scope="row">{{$item->id}}</th>
                <td >{{$item->rollnumber}}</td>
                <td >{{$item->name}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <div class="float-left">
        <form class="form-inline">
            <div class="form-check p-2">
                <input type="checkbox" class="form-check-input checkAll" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <div class="form-group p-2" >
                <select class="form-control form-control-sm">
                    <option>--select one--</option>
                    <option>Delete</option>
                    <option>Select</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div class="float-right">
        {{ $student->links() }}
    </div>

    <!-- Update Modal -->

    <script>
        $('.checkAll').change(function () {
            if ($(this).prop("checked")) $('.checked').prop('checked',true);
            else $('.checked').prop('checked',false);
        });
        $('.checked').change(function () {
            if (!$(this).prop("checked")) $('.checkAll').prop('checked',false);
        });
    </script>
    {{--<script src="{{asset('js/list-product.js')}}"> </script>--}}
@endsection
