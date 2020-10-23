<h1>List of Pets</h1>

<button style="padding: 1%"><a style="text-decoration: none" href="http://www.hackathon.test/create">Add your pet</a></button>

@foreach($pets as $p)
<h2>{{$p->name}}</h2>
<h3>Breed: {{$p->breed}}</h3>

<img src="/images/pets/{{$p->photo}}">


<a style="text-decoration: none" href="{{ action('PetController@show', $p->id) }}"><h3>Details of pet</h3></a>

<hr>

@endforeach