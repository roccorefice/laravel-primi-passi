<main>
    @php
    $contents =
    [
    [
    "title" => "Lorem",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ea labore, soluta neque facilis aut eius eveniet fuga veritatis optio?
    "
    ],
    [
    "title" => "Lorem",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ea labore, soluta neque facilis aut eius eveniet fuga veritatis optio?
    "
    ],[
    "title" => "Lorem",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ea labore, soluta neque facilis aut eius eveniet fuga veritatis optio?
    "
    ]
    ];
    @endphp
    <div class="d_flex">

        @foreach($contents as $content)
        <div class="card">
            <h4>{{$content['title']}}</h4>
            <p>{{$content['description']}}</p>
        </div>
        @endforeach


    </div>

</main>