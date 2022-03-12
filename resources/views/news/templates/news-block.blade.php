<div class="row">
    <div class="col">
        <a href="/news/{{$newsRecord->id}}" class="row">
            <div class="col-3">
                <img src="{{$newsRecord->url}}" alt="">
            </div>
            <div class="col-9">
                <h4>{{$newsRecord->title}}</h4>
                <p>{{$newsRecord->created_at}}</p>
                <p>{{$newsRecord->getShortText()}}</p>
            </div>
        </a>
    </div>
</div>
