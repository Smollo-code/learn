<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="assets/stylecalc.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div>
    <form action="calc.php" method="post">
        <h2>Taschenrechner</h2>
        <div class="input">
            <label for="input_1"></label>
            <input type="text" id="input_1" name="input_1" required>
        </div>

        <div class="operator">
            <select name="Operation" id="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>

        <div class="input">
            <label for="input_2"></label>
            <input type="text" id="input_2" name="input_2" required>
        </div>

        <button type="submit">Berechne</button>

        <div class="special_div">
            <input type="text" name="Result" value="<?= $result ?? 0 ?>" disabled>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>