@extends('Admins.indexAdmin')

@section('content')


    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />
        @if ($contacts)
            <div class="container">
                <h4 class="font-weight-bold mb-3 text-center text-lg-start">les messages:</h4>

                <section style="background-color: #f4ecec;">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($contacts as $item)
                                        <li class="p-2 border-bottom d-flex justify-content-between mb-4">
                                            <img src="{{ $item->user->profile->image }}" alt="avatar"
                                                class="rounded-circle d-flex align-self-start me-3 shadow-1-strong"
                                                width="60">
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between p-3">
                                                    <p class="fw-bold mb-0">{{ $item->user->name }}</p>
                                                    <p class="text-muted small mb-0"><i
                                                            class="far fa-clock"></i>{{ $item->created_at }}</p>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">
                                                        {{ $item->message }}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <br />
                                    @endforeach
                                </ul>

                            </div>

                        </div>
                    </div>
            </div>
            </section>
        @else
            <h2>aucun contacts</h2>
        @endif
    </div>
@endsection
</div>
