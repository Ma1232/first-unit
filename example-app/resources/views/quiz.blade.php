

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiple Choice Quiz</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  <link rel="stylesheet" {{ asset('/public/style.css') }} >
  <link rel="stylesheet" {{ asset('/public/style.css') }}>

</head>
<body>
<header>
    @include('layouts.navbar')
</header>
  <div class="container mt-5">
    <h1>Welcome to the Quiz!</h1>
    @foreach ($Quiz as $quiz)
        <p>Test your knowledge on {{$quiz->title}}</p>

        <form id="quiz-form-{{$quiz->id}}" method="POST" action="/score/{{$quiz->id}}">
            @csrf
            <input type="hidden" name="quiz" value="{{$quiz->id}}">

@foreach ($questions as $question)
@if ($question->quiz_id==$quiz->id)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-header">Question {{$question->id}}</div>
                            <p class="card-text">{{$question->question}}</p>

                            @foreach ($answers as $answer)
                                @if ($answer->question_id == $question->id)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer{{$question->id}}" value="{{$answer->id}}">
                                        <label class="form-check-label">{{$answer->answer}}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach


    @endforeach
    <input type="submit" class="btn btn-primary">
</form>
</div>


  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bskAUcGYLNBsTw6CpCt6zurEuqxSUL+8lwSY/qUjIHqCwlP13691P3lU++XxBgz" crossorigin="anonymous"></script>
</body>
</html>
