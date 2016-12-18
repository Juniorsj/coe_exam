<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ข้อสอบ กว.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/exam.css') }}"/>

    </head>
    <body>
        <div class="content">
            <div>
                <h2>
                    ข้อสอบวิชา {{ $title }}
                </h2>
            </div>
        {{-- <div class="flex-center position-ref full-height"> --}}
            @foreach ($data as $key => $exam)
            <div>
                <div class="question">
                    <span>{{ $key}}. </span>
                    <span class="question">{{ $exam['question']}}</span>
                    @if (isset($exam['question_img']))
                        <div>
                            <img class="exam_image" src="{{ $exam['question_img']}}" alt="">
                        </div>
                    @endif
                    <ul>
                    @foreach ($exam['choice'] as $key_choice => $choice)
                       @if( is_array($choice))
                            <li type="1">{{ $choice['msg']}}</li>
                            <img class="exam_image" src="{{ $choice['img'] }}" alt="">
                       @else
                            <li type="1">{{ $choice }}</li>
                       @endif
                    @endforeach
                    </ul>

                </div>
                <div>
                    <input 
                        class="form-control input-ans"
                        id="answer{{ $key}}" 
                        type="text" 
                        name="answer" 
                        data-answer="{{ $exam['answer']}}" 
                        data-no="{{ $key }}"
                    >
                    <img class="correct" id="correct{{ $key }}" src="{{ asset('images/correct.png') }}" alt="" style="display:none">

                </div>
            </div>
            @endforeach
        </div>
        {{-- </div> --}}
        <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('js/exam.js') }}"></script>

    </body>
</html>
