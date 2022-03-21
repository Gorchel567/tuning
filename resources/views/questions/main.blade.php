@extends('layout')

@section("content")
    <div class="container questions" id="questionArticle">
        <div class="accordion" id="accordionQuestions">
            @forelse($questions as $key => $questionsRecord)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{$key}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}"
                                aria-expanded="true" aria-controls="collapse{{$key}}">
                            {{$questionsRecord->title}}
                        </button>
                    </h2>
                    <div id="collapse{{$key}}" class="accordion-collapse collapse" aria-labelledby="heading{{$key}}"
                         data-bs-parent="#accordionQuestions">
                        <div class="accordion-body">
                            {{$questionsRecord->text}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col text-center">
                        <p>Вопросы отсутствуют</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>


@overwrite



