<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <main>
    <form action="formhandler.php" method="post">
      <label for="firstname">FirstName?</label>
      <input type="text" id="firstname" name="firstname" placeholder="Firstname...?">
<br><br>
      <label for="lastname">LastName</label>
      <input type="text" id="lastname" name="lastname" placeholder="LastName...?">
 <br><br>
       <label for="favouritepet">Favourite Pet</label> 
        <select name="favouritepet" id="favouritepet">
          <option value="none">none</option>
          <option value="cat">cat</option>
          <option value="dog">dog</option>
          <option value="bird">bird</option>
        </select>
        <br><br> 

        <button type="submit">SUBMIT</button>
    </form>
  </main>
</body>
</html>