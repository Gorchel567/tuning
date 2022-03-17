<div class="col-12 col-md-6">
    <p class="text-center"><img src="{{$reviewRecord->url}}" alt="{{$reviewRecord->title}}" class="review-logo"></p>
    <p>
        <span class="review-title"><b>{{$reviewRecord->title}}</b></span>
        <span class="review-date">{{$reviewRecord->created_at}}</span>
    </p>
    <p>&#8220;<i>{{$reviewRecord->text}}</i>&#8221;</p>
</div>
