<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>入力内容をご確認ください。</h1>
    <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1" cellpadding="5">
        <tr>
            <th>社員名</th>
            <td><?php echo htmlspecialchars($_POST['employee_name'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo htmlspecialchars($_POST['employee_age'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>所属部署</th>
            <td><?php echo htmlspecialchars($_POST['department'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    </table>

    <form action="complete.php" method="post" style="display:inline;">
        <!-- 入力値をhiddenで保持して次画面に送る -->
        <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($_POST['employee_name'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($_POST['employee_age'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="department" value="<?php echo htmlspecialchars($_POST['department'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="submit" value="確定">
    </form>

    <form action="form.php" method="post" style="display:inline;">
        <input type="submit" value="キャンセル">
    </form>
</body>
</html>