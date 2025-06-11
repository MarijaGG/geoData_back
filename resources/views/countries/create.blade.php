<x-layout title="Pievienot valsti">
    <h1>Pievienot valsti</h1>

    <form method="POST" action="{{ route('countries.store') }}">
        @csrf
        <label>Nosaukums:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required maxlength="100"><br>

        <label>Platība (km²):</label><br>
        <input type="number" step="0.01" name="area_km2" value="{{ old('area_km2') }}" required><br>

        <label>Iedzīvotāju skaits:</label><br>
        <input type="number" name="population" value="{{ old('population') }}" required><br>

        <button type="submit">Saglabāt</button>
    </form>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>
