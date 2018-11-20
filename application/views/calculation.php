<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<br>
<br>
<form action="Calculator/calculate" method="POST">
    <input type="text" name="firstValue" id="firstValue" autocomplete="off" value="<?php echo (isset($firstValue)?$firstValue:0) ?>">
    <select name="operator" id="operator">
        <option value="+" <?php echo isset($operator) && $operator=='+' ? 'selected':'' ?>>Addition</option>
        <option value="-" <?php echo isset($operator) && $operator=='-' ? 'selected':'' ?>>Subtraction</option>
        <option value="*" <?php echo isset($operator) && $operator=='*' ? 'selected':'' ?>>Multiplication</option>
        <option value="/" <?php echo isset($operator) && $operator=='/' ? 'selected':'' ?>>Divide</option>
    </select>
    <input type="text" name="secondValue" id="secondValue" autocomplete="off" value="<?php echo (isset($secondValue)?$secondValue:0) ?>">
    <input type="submit" name="submit" value="Calculate">
    <hr>
    <br>
    <div>
        <div class="row">
            <?php if (isset($answer)): ?>
                <strong>
                   Answer is : <?php echo $answer ?>
                </strong>
            <?php endif ?>
        </div>
    </div>

</form>
</body>
</html>