<div class="row news-block">
    <div class="col">
        <a href="/news/{{$newsRecord->id}}" class="row">
            <div class="col-3">
                <img src="{{$newsRecord->url}}" alt="" class="w-100">
            </div>
            <div class="col-9 p-top-15">
                <h4 class="news-block-header">{{$newsRecord->title}}</h4>
                <p class="news-block-date">
                    <i>{{$newsRecord->created_at}}</i>
                </p>
                <p class="news-block-text">{{$newsRecord->getShortText()}}</p>
            </div>
        </a>
    </div>
</div>
