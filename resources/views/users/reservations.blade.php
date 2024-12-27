@extends('Admins.indexAdmin')
@section('content')
    <br />
    <br />
    <br />
    <div class="container">
        <br />
        <br />
        <br />
        @if ($reservations)
            @foreach ($reservations as $item)
                <div class="card w-75 mb-3" style="width: 18rem; background-color:gray;color:black">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;font-size:2em">{{ $item->nom }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" style="color:burlywood">{{ $item->phone }} </h6>
                        <p class="card-text">{{ $item->email }}.</p>
                        <p class="card-link">nombre de personne: {{ $item->gens }}</p>
                        <hr>
                        <p class="card-link">{{ $item->date }} {{ $item->heure }} </p>
                    </div>
                </div>
                <br />
                <br />
            @endforeach
        @else
            <h2>aucun reservation</h2>
        @endif
        <style>
            .side-note {
                position: fixed;
                bottom: 20px;
                right: 20px;
                max-width: 300px;
                padding: 15px 20px;
                background-color: #f8f9fa;
                border: 1px solid #ced4da;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                font-family: Arial, sans-serif;
                font-size: 14px;
                color: #343a40;
                z-index: 1000;
            }

            .side-note .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                background: none;
                border: none;
                font-size: 16px;
                font-weight: bold;
                color: #6c757d;
                cursor: pointer;
            }

            .side-note .close-btn:hover {
                color: #dc3545;
            }

            .side-note p {
                margin: 0;
            }

            .side-note strong {
                color: #007bff;
            }
        </style>
    </head>
    <body>
        <!-- Note latérale -->
        <div class="side-note" id="sideNote">
            <button class="close-btn" onclick="closeSideNote()">×</button>
            <p>
                Les réservations des chambres se distinguent par leur <strong>simplicité et précision dans les dates</strong>.
            </p>
        </div>

        <script>
            // Fonction pour fermer la note latérale
            function closeSideNote() {
                const sideNote = document.getElementById('sideNote');
                if (sideNote) {
                    sideNote.style.display = 'none';
                }
            }
        </script>
    </div>
@endsection
