<?php require "partials/head.php"; ?>

<h2 class="centered">Syötä uutinen</h2>

<div class="inputarea">
<form  action="/add_article" method="post">
    <label for="title">Otsikko:</label>
    <input id="title" type="text" name="newstitle" maxlength=30 value="">
    <label for="text">Uutinen:</label>
    <textarea id="text" name="newstext" rows="5" cols="30"></textarea>
    <label for="date">Valitse artikkelin päivämäärä</label>
    <input id="date" type="datetime-local"  name="newstime" value=""> 
    <label for="rdate">Poistopäivä:</label>
    <input id="rdate" type="date" name="removedate" value="">
    <label for="section">Osasto:</label>
    <select name="section">
        <option value="Kotimaa">Kotimaa</option>
        <option value="Ulkomaat">Ulkomaat</option>
        <option value="Viidhe">Viihde</option>
    </select>
    <input id="sendbutton" type="submit" value="Lähetä">
</form>
</div>

<?php require "partials/footer.php"; ?>