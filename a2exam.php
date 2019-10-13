<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A2 exam</title>
</head>
<body>

    <form name="form03" action="">
        <br>
        <h1>Part 03</h1>
        <label for="myP"></label>
        <textarea id="myP" rows="10" name="tarea" cols="80" maxlength="255" required></textarea><br><br>

        <input class="btn-primary" type="button" id="1" value="uppercase" onclick="toggle(this);">
        <input class="btn-primary" type="button" id="2" value="Clear all" onclick="clearContents();">
        <input class="btn-primary" type="button" id="3" value="Sort Alphabetically" onclick="alphabetSort()">
        <input class="btn-primary" type="button" id="4" value="Sort Numerically" onclick="sortvalues(1)">
        <input class="btn-primary" type="button" id="5" value="Reverse"
               onclick="reverseLines(document.form03.tarea)">
        <input class="btn-primary" type="button" id="six" value="Strip Blank">
        <input class="btn-primary" type="button" id="seven" value="Add Line Numbers" onclick="lineNum();">
        <input class="btn-primary" type="button" id="eight" value="Shuffle" onclick="shuffleLines();">
    </form>

</body>
</html>