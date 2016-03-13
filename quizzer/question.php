<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    // Set question number
    $number = (int) $_GET['n'];
    
    /*
     *  Get total number
     */
     
     $query = "SELECT * FROM questions";
     $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
     $total = $results->num_rows;

    /*
    *  Get Question
    */
    $query = "SELECT * FROM questions
                WHERE question_number = $number";
    
    // Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $question = $result->fetch_assoc();
    
    /*
    *  Get Choices
    */
    $query = "SELECT * FROM choices
                WHERE question_number = $number";
    
    // Get result
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $choices_count = count($choices->fetch_assoc());
    
?>

  <?php include 'partials/header.php'; ?>
      
    <div class="jumbotron">
        <div class="container">
          <h2><?php echo $question['text'] ?></h2>
        </div>
    </div>

    <main>
        <div class="container text-center">
            <div class="current">
                Question <?php echo $question['question_number']; ?> of <?php echo $total; ?>
            </div>
            <form method="post" action="process.php" id="questionform">
                <div class="row">
                <ul id="sti-menu" class="sti-menu choices">
                    <!-- Set the array of choices, each choice being a $value -->
                    <?php foreach ($choices as $key=>$value): ?>
                    <!--<span class="hsjs"></span>-->
                        <a class="col-md-<?php echo 12/$choices_count; ?> choice-block" href="#" value="<?php echo $value['id']; ?>">
                            <i class="fa fa-2x fa<?php if ($value['id']<= 4) {echo $value['id'];} else { echo $value['id'] % $choices_count; } ?>"></i>
                            <h3 data-type="mText" class="sti-item text-center">
                      				Choice <?php echo $value['id']; ?>
                      			</h3>
                      			<h4 data-type="sText" class="sti-item text-center">
                      				<?php echo $value['text']; ?>
                      			</h4>
                      			<span data-type="icon" class="text-center sti-icon sti-icon-<?php echo $value['id']; ?> sti-item">
                      			</span>
                        </a>
                    <?php endforeach; ?>
                </ul>
                </div>
                <input type="hidden" name="number" value="<?php echo $number; ?>" />
            </form>
        </div>
    </main>
    
<?php include 'partials/footer.php'; ?>