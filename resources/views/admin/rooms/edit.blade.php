@extends('Admins.indexAdmin')

@section('content')
<div class="container">
    <h1>تعديل الغرفة: {{ $room->name }}</h1>
    <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">اسم الغرفة</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $room->name }}" required>
        </div>

        <div class="form-group">
            <label for="stars">عدد النجوم</label>
            <input type="number" name="stars" id="stars" class="form-control" value="{{ $room->stars }}" min="1" max="5" required>
        </div>

        <div class="form-group">
            <label for="price">السعر</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $room->price }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="description">الوصف</label>
            <textarea name="description" id="description" class="form-control">{{ $room->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="additional_info">معلومات إضافية</label>
            <textarea name="additional_info" id="additional_info" class="form-control">{{ $room->additional_info }}</textarea>
        </div>

        <div class="form-group">
            <label for="images">الصور</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>
        <div class="form-group">
            <label for="available">الحالة</label>
            <select name="available" id="available" class="form-control">
                <option value="1" {{ $room->available ? 'selected' : '' }}>Disponible</option>
                <option value="0" {{ !$room->available ? 'selected' : '' }}>Indisponible</option>
            </select>
        </div>
        

        <button type="submit" class="btn btn-success">تحديث</button>
    </form>
</div>
@endsection
