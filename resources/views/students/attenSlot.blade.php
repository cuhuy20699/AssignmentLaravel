@extends('layout.master')
@section('title','Môn Học')
@section('content')

    <h3>Điểm danh</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Thời Gian</th>
            <th scope="col">Lớp</th>
            <th scope="col">Môn Học</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($attenSlot as $key =>$item)
            <tr id="{{$item->id}}">
                <th scope="row">{{$item->slotid}}</th>
                <td  >{{$item->date}}</td>
                <td  >{{$item->classId}}</td>
                <td >{{$item->subject}}</td>
                <td><a href="/students/create" class="btn-take">Take</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="float-right">
        {{ $attenSlot->links() }}
    </div>
    <script>
        $('.btn-take').click(function () {

        });
    </script>
@endsection
