<?php
    $sentence=$_POST['sentString'];
?>

<html>
<body style="background-color:#D6EAF8;">
    <br>
    

    
    <?php
    echo "<hr>";
    echo "<h2>Character Frequency Count</h2>";
    echo "<hr>";
    $characters = count_chars($sentence,1);
    echo "<table border=1 width=600>";
    echo "<tr>";
    echo "<td align=left>character</td>";
    echo "<td align=right>count</td>";
    echo "</tr>";
    foreach($characters as $key => $value)
    {
        
        echo "<tr>";
        echo "<td align=left>".chr($key)."</td>";
        echo "<td align=right>$value</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    
    <form action="index.php">
        <button type="submit">Input Another String</button>
        
    </form>
    
    

    
    <?php
    echo "<h2>Word Count</h2>";
    $words = str_word_count($sentence,1);
    $frequency = array_count_values($words);
    
    arsort($frequency);
    
    echo "<table border=1 width=600>";
    echo "<tr>";
    echo "<td align=left>word</td>";
    echo "<td align=right>count</td>";
    echo "</tr>";
    foreach($frequency as $key => $value)
    {
        echo "<tr>";
        echo "<td align=left>$key</td>";
        echo "<td align=right>$value</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    
    <form action="index.php">
        <button type="submit">Input Another String</button>
        
    </form>
    

 </body>   
</html>