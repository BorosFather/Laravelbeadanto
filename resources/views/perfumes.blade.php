@extends( "layouts.master" )

@section( "content" )
<h1>Termékek</h1>

<a href="/new-perfume"><button>Új termék</button></a>

<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Termék</td>
            <td>Típus</td>
            <td>Ár</td>
            <td>Művelet</td>
        </tr>
    </thead>
    <tbody>
        @foreach( $perfumes as $perfume )
            <tr>
                <td>{{ $perfume->id }}</td>
                <td>{{ $perfume->name }}</td>
                <td>{{ $perfume->type }}</td>
                <td>{{ $perfume->price }}</td>
                <td>
                    <a href="/edit-perfume/{{ $perfume->id }}">
                        <button>Módosítás</button>
                    </a>
                    <a href="/delete-perfume/{{ $perfume->id }}">
                        <button>Törlés</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>   
</table>
@endsection