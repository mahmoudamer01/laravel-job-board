<div>
    <h1>job dashboard</h1>

    @foreach ($Jobs as $Job) 

        <div>{{ $Job['title']}}</div> 
        @endforeach
</div>
    