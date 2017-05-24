<form action="rong17.php" method="get">

    Name:<input type="text" name="account"/><br>

    Password:<input type="password" name="password"/><br>

    Birthday:<input type="date" name="birthday"/><br>
    <select name="area">
        <option value="401">北屯區</option>
        <option value="402">西屯區</option>
        <option value="403">東屯區</option>
        <option value="404">南屯區</option>
    </select><br>
    <input type="radio" name="gender" value="F" checked>Female
    <input type="radio" name="gender" value="M">male
    <br>
    <input type="checkbox" name="like[]" value="1">打電腦
    <input type="checkbox" name="like[]" value="2">打籃球
    <input type="checkbox" name="like[]" value="3">打麻將<br>
    <input type="checkbox" name="like[]" value="4">打毛線
    <input type="checkbox" name="like[]" value="5">打小孩
    <input type="checkbox" name="like[]" value="6">打電動<br>
    <textarea name="memo"></textarea><br>
    <input type="file" name="upload" /><br>
    <input type="submit" value="送出">
</form>