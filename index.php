<body>
<?php
if (isset($_POST['submit'])){
    $n=$_POST['n1'];
    $s=0;
    while ($n!=0){
    $b=$n%10;
    $s=$s*10+$b;
    $n=floor($n/10);
    }
    echo $s;
}
?>
<form method="post">
    <label>number:</label><br/>
    <input type="number" name="n1"/>
    <input type="submit" name="submit" value="run"/>
</form>
</body>