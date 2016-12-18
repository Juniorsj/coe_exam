<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>ข้อสอบ กว.</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/exam.css') }}"/>

</head>
<body>
    <div class="index_content">
        <div>
            <h2>ข้อสอบใบประกอบวิชาชีพ (กว.)</h2>
        </div>
        <div class="col-xs-12"> 
            @foreach($data as $subject => $detail)
            <form id= "{{ $subject }}_form" action="{{ route($detail['route']) }}" method="get" class="subject">
                <div class="col-xs-3">
                    <span>{{ $detail['title']}}</span>
                </div>
                <input type="text" id="number_{{ $subject}}" name="number" value="{{ $detail['number']}}">
                <button class="btn btn-primary btn-sm">Go!</button>
            </form>
            @endforeach
        </div>
    </div>

</body>
</html>