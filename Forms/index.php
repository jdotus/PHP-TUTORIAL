<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submittion</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">

            <label for="firstname">FirstName</label>
            <input required id="firstname" placeholder="FirstName....." type="text" name="firstname">

            <label for="lastname">LastName</label>
            <input id="lastname" placeholder="LastName....." type="text" name="lastname">

            <label for="favouritepet">Favourite Pet</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>      
</body>
</html>