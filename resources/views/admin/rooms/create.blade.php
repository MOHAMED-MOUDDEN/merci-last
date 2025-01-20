@extends('Admins.indexAdmin')

@section('content')
<div class="container">
    <h1>إضافة غرفة جديدة</h1>
    <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
    
        @csrf
        <div class="form-group">
            <label for="name">اسم الغرفة</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="stars">عدد النجوم</label>
            <input type="number" name="stars" id="stars" class="form-control" min="1" max="5" required>
        </div>

        <div class="form-group">
            <label for="price">السعر</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="description">الوصف</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="additional_info">معلومات إضافية</label>
            <textarea name="additional_info" id="additional_info" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="images">الصور</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>
        
        <div class="form-group">
            <label for="available">الصور</label>
            <input type="text" name="available" id="available" class="form-control" >
        </div>

        <button type="submit" class="btn btn-success">حفظ</button>
    </form>
</div>
@endsection
