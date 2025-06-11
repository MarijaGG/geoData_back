<x-layout title="Valstis">
    <h1>Valstu saraksts</h1>

    <ul>
        @foreach ($countries as $country)
            <li>
                <a href="{{ route('countries.show', $country) }}">
                    {{ $country->name }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
