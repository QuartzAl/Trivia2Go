<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="./assets/css/welcome.css">
</head>
<body>
    <div class="header">
        <a href="{{route('register')}}" class="signup">Sign Up</a>
        <a href="{{route('login')}}" class="signup">Log In</a>
    </div>

    <div>
        <h1>Try a new way to play quizzes</h1>
    </div>
    <div class="img2" style=" background-image: url('./assets/img/BG Mask.svg');">

        <img src="./assets/img/Mail Icon.svg" alt=""/>
        <div >
            <h1>Join a game now</h1>
            <div class="box">
                <form name="form" method="get">
                    <input type="text" placeholder="Game Invite ID" name="game_id" id="game_id" class="text-input">
                </form>

            <a href="{{route('trivia.show', 1)}}" class="button-join">Join the Game!</a>
            </div>

        </div>


    </div>
    <div class="img3" style=" background-image: url('./assets/img/Circle BG.svg');">

    </div>

</body>

</html>
