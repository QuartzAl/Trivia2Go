<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="./assets/css/create.css">
    <script>
        const container = document.querySelector("#questions-box");
        const add = document.querySelector("#btn-add");
        var count = 0
        add.onClick = function(){
            count++;
            container.innerHTML += `
    <div>
        <input id="question-${count}" type="text">
        <label for="question-${count}">Question ${count}:</label>


    </div>`
        };
    </script>
</head>
<body>
<form>
    <input type="submit" value="Save Quiz">
    <div class="txt_field">
        Trivia name:
        <input type="text">
    </div>
    <div class="txt_field">
        Description:
        <input type="text">
    </div>
    <div>

        <div id="answers-box">
            <div>
                <input id="question-${count}" type="text">
                <label for="question-${count}">Question ${count}:</label>


            </div>`
        </div>
        <br>
        <button id="btn-add"></button>
    </div>


</form>

</body>
</html>
