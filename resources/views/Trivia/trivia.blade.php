<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
<div class="container mt-sm-5 my-1">
    {{$question_number = 0}}
    @foreach($questions as $question)
        {{$question_number++}}
        <div class="question ml-sm-5 pl-sm-5 pt-2">
            <div class="py-2 h5"><b>{{$question_number}}. {{$question->question}}</b></div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                {{}}
                @foreach()
                <label class="options">Small Business Owner or Employee
                    <input type="radio" name="radio">
                    <span class="checkmark"></span> </label>
                <label class="options">
                    Nonprofit Owner or Employee
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="options">
                    Journalist or Activist
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label> <label class="options">Other
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="d-flex align-items-center pt-3">
            <div class="ml-auto mr-sm-5">
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
