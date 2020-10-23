<h1>List of Pets</h1>

@foreach($pets as $p)
<h2>{{$p->name}}</h2>
<h3>Breed: {{$p->breed}}</h3>

<img src="/images/pets/{{$p->photo}}">
{{-- asset($pet->image_file) --}}
@endforeach