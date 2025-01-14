@extends('client.command')

@section('meta')
<title>حجز الغرفة - Merci Laayoune</title>
<meta name="description" content="قم بحجز غرفتك الآن في Merci Laayoune. اختر تفاصيل الحجز مثل التاريخ والوقت وعدد الأشخاص لإكمال حجزك بسهولة.">
<meta name="keywords" content="حجز الغرف، Merci Laayoune، تفاصيل الحجز، خدمات الغرف">
<meta property="og:locale" content="ar_AR">
<meta property="og:type" content="website">
<meta property="og:title" content="حجز الغرفة - Merci Laayoune">
<meta property="og:url" content="{{ route('rooms.reserve', $id) }}">
<meta property="og:site_name" content="Merci Laayoune">
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('clientpage/css/validation.css') }}">

<div class="container cntnr">
    <div class="row" style="width: 100%; margin: auto;">
        @if ($msg = Session::get('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ $msg }}</li>
                </ul>
            </div>
        @elseif ($msg = Session::get('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $msg }}</li>
                </ul>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-xl-8 mod-8">
            <div class="card">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3">
                        <h5 class="font-size-16">معلومات الحجز</h5>
                        <p>يرجى إدخال تفاصيل الحجز لإتمام العملية.</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('room-reservations.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="room_id" value="{{ $id }}">

                        <div class="mb-3">
                            <label for="nom" class="form-label">الاسم <span style="color: #cf2227">*</span></label>
                            <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" required>
                            @error('nom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني <span style="color: #cf2227">*</span></label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">التاريخ <span style="color: #cf2227">*</span></label>
                            <input type="date" class="form-control" name="date" value="{{ old('date') }}" required>
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="heure" class="form-label">الوقت <span style="color: #cf2227">*</span></label>
                            <input type="time" class="form-control" name="heure" value="{{ old('heure') }}" required>
                            @error('heure')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gens" class="form-label">عدد الأشخاص <span style="color: #cf2227">*</span></label>
                            <input type="number" class="form-control" name="gens" value="{{ old('gens') }}" required>
                            @error('gens')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">رقم الهاتف <span style="color: #cf2227">*</span></label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">إتمام الحجز</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
