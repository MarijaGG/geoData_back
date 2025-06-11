<x-layout title="Valsts informācija">
    <h1>{{ $country->name }}</h1>

    <p><strong>Platība:</strong> {{ $country->area_km2 }} km²</p>
    <p><strong>Iedzīvotāji:</strong> {{ $country->population }}</p>

    <h2>Pilsētas</h2>
    @if ($country->cities->count())
        <ul>
            @foreach ($country->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Nav pievienotu pilsētu.</p>
    @endif

    <a href="{{ route('countries.edit', $country) }}">Rediģēt valsti</a>

    <form action="{{ route('countries.destroy', $country) }}" method="POST" style="display:inline;">
        @csrf @method('DELETE')
        <button type="submit" onclick="return confirm('Vai tiešām vēlies dzēst šo valsti?')">Dzēst valsti</button>
    </form>
</x-layout>
