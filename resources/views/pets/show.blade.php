<h1>Name: {{ $pet->name }}</h1>
<h2>Breed: {{ $pet->breed }}</h2>
<ul>
    <li>Age: {{ $pet->age }} year</li>
    <li>Weight: {{ $pet->weight }} kg</li>
    <li>Client id: {{ $pet->client_id }}</li>
</ul>

<img src="/images/pets/{{ $pet->photo }}" alt="{{ $pet->name }}">


