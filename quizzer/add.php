<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h2>Add a Question</h2>
            <form method="post" action="add.php">
                <p>
                    <label>Question Number: </label>
                    <input type="number" name="question_number" />
                </p>
                <p>
                    <label>Question Text: </label>
                    <input type="text" name="question_text" />
                </p>
                <p>
                    <label>Choice #1: </label>
                    <input type="text" name="choice1" />
                </p>
                <p>
                    <label>Choice #2: </label>
                    <input type="text" name="choice1" />
                </p>
                <p>
                    <label>Choice #3: </label>
                    <input type="text" name="choice1" />
                </p>
                <p>
                    <label>Choice #4: </label>
                    <input type="text" name="choice1" />
                </p>
                <p>
                    <label>Choice #5: </label>
                    <input type="text" name="choice1" />
                </p>
                <p>
                    <label>Correct Choice Number: </label>
                    <input type="number" name="correct_choice" />
                </p>
                <p>
                    <input type="submit" name="submit" value="submit" />
                </p>
            </form>
        </div>
    </main>
    
    <footer>
        <div class="container">
            Copyright 2016 Jacob J. Zhang
        </div>    
    </footer>
    
</body>
</html>