@extends('Admins.indexAdmin')
<style>
    td .btn {
        width: 100%
    }

</style>
@section('content')
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />
        <section class="mb-5"
            style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
            <h2 class="tit6 t-center" style="    font-size: 3rem;
            text-align: center;
            text-shadow: 0px 0 20px black;">
                FEEDBAK CLIENT
            </h2>
        </section>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col" style="width: 350px">message</th>
                    <th scope="col">Envoyé à</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $item)
                    <tr>
                        <td data-label="nom">{{ $item->name }}</td>
                        <td data-label="email" style="overflow: auto;">{{ $item->email }}</td>
                        <td data-label="phone">{{ $item->phone }}</td>
                        <td data-label="message" style="white-space: wrap; overflow: auto;"><br>{{ $item->message }}</td>
                        <td data-label="Envoyé à">
                            {{ $item->created_at }}
                        </td>

                        <td> <a class="btn btn-primary" href="{{ route('contact.show', $item->id) }}">show</a>

                            <form action="{{ secure_url(route('contact.destroy', $item->id)) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $contacts->links() }}
        @if ($msg = Session::get('succes'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

    </div>
@endsection
