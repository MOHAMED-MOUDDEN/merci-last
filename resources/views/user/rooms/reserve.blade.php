@extends('client.layout')

@section('content')
<div class="container">
    <h1>حجز الغرفة: {{ $room->name }}</h1>
    <br><br><br><br>
    <p><strong>السعر:</strong> {{ $room->price }} درهم</p>
    <p><strong>عدد الأشخاص المسموح:</strong> {{ $room->capacity }}</p>
    <p><strong>الوصف:</strong> {{ $room->description }}</p>

    <!-- نموذج الحجز -->
    <form action="{{ route('room-reservations.store') }}" method="POST">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room->id }}">
        <input type="hidden" name="price" value="{{ $room->price }}">  <!-- إضافة حقل الثمن بشكل مخفي -->

        <div class="mb-3">
            <label for="nom" class="form-label">الاسم الكامل</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">البريد الإلكتروني</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">تاريخ الحجز</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="heure" class="form-label">الوقت</label>
            <input type="time" class="form-control" id="heure" name="heure" required>
        </div>

        <div class="mb-3">
            <label for="gens" class="form-label">عدد الأشخاص</label>
            <input type="number" class="form-control" id="gens" name="gens" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">رقم الهاتف</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <button type="submit" class="btn btn-primary">إتمام الحجز</button>
    </form>
</div>
@endsection
