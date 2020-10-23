<h1>Name: {{ $pet->name }}</h1>
<h2>Breed: {{ $pet->breed }}</h2>
<ul>
    <li>Age: {{ $pet->age }} year</li>
    <li>Weight: {{ $pet->weight }} kg</li>
</ul>

<h3>Client info</h3>
<ul>
  <li>Full Name : {{ $client->first_name }} {{ $client->surname }}</li>
</ul>

<form action="/pets/{{$pet->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Pet</button>
</form>
<img src="/images/pets/{{ $pet->photo }}" alt="{{ $pet->name }}">

