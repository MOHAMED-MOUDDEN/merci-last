@extends('Admins.indexAdmin')

@section('content')
<div class="container">
    <h1>قائمة الغرف</h1>
    <a href="{{ route('admin.rooms.create') }}" class="btn btn-primary mb-3">إضافة غرفة جديدة</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>اسم الغرفة</th>
                <th>عدد النجوم</th>
                <th>السعر</th>
                <th>خيارات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->stars }}</td>
                <td>{{ $room->price }} درهم</td>
                <td>
                    <a href="{{ route('admin.rooms.edit', $room->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                    <form action="{{ route('admin.rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من حذف هذه الغرفة؟')">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
