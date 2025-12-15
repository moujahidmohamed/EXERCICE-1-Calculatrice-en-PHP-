<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice PHP</title>
</head>
<body>
    <h2>Calculatrice</h2>
    
    <form method="post" action="">
        <label>Nombre 1: </label>
        <input type="number" name="num1" step="any" required><br><br>
        
        <label>Nombre 2: </label>
        <input type="number" name="num2" step="any" required><br><br>
        
        <label>Opération: </label>
        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Soustraction (-)</option>
            <option value="multiply">Multiplication (×)</option>
            <option value="divide">Division (÷)</option>
        </select><br><br>
        
        <input type="submit" name="calculate" value="Calculer">
    </form>
    
    <?php
    if(isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;
        
        switch($operation) {
            case 'add':
                $result = $num1 + $num2;
                $symbol = '+';
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $symbol = '-';
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $symbol = '×';
                break;
            case 'divide':
                if($num2 != 0) {
                    $result = $num1 / $num2;
                    $symbol = '÷';
                } else {
                    echo "<p style='color:red;'>Erreur: Division par zéro!</p>";
                    break;
                }
                break;
        }
        
        if($num2 != 0 || $operation != 'divide') {
            echo "<h3>Résultat: $num1 $symbol $num2 = $result</h3>";
        }
    }
    ?>
</body>
</html>