<x-layout title="Rediģēt valsti">
    <h1>Rediģēt valsti – {{ $country->name }}</h1>

    <form method="POST" action="{{ route('countries.update', $country) }}">
        @csrf @method('PUT')

        <label>Nosaukums:</label><br>
        <input type="text" name="name" value="{{ old('name', $country->name) }}" required><br>

        <label>Platība (km²):</label><br>
        <input type="number" step="0.01" name="area_km2" value="{{ old('area_km2', $country->area_km2) }}" required><br>

        <label>Iedzīvotāju skaits:</label><br>
        <input type="number" name="population" value="{{ old('population', $country->population) }}" required><br>

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
