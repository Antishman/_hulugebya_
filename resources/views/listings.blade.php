<h1>welcome</h1>

<h1> {{$header}} </h1>

@if (count($listings) !== 0)

@foreach ($listings as $listing)
    <a href= "/listings/{{$listing['id']}}" > <h2> {{$listing['title']}}  </h2> </a>
    <h3> {{ $listing['description']}}  </h3>
@endforeach
   
@else
<p>no list</p>    
@endif