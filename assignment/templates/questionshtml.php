<section class="shop container">
    <div class="shop_content">
        <form method="POST" action="questions.php">
            <label>
                <input type="radio" name="answered" value="1"> Answered
            </label>
            <label>
                <input type="radio" name="unanswered" value="0"> Unanswered
            </label>
            <label>
                <input type="radio" name="allquestions" value="0"> All Questions
            </label>
            <button type="submit">Filter Questions</button>
        </form>
        <?php
foreach($templateVars['rows'] as $contact) { ?>
        <h3><?= $contact['productname']?></h3>
        <p><?= $contact['messagebox']?></p>
        <div class="details"><strong><?= $contact['fullname']?></strong><em><?= $contact['messagedate']?></em></div>
        <a href="answer.php?id=<?=$contact['id']?>">answer</a>
        </br>
        <?php } ?>
    </div>
</section>