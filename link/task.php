<!DOCTYPE html>
<html lang="ja">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>タスク表</title>
      <link rel="stylesheet" href="../css/reset.css" />
      <link rel="stylesheet" href="../css/style.css" />
      <style>
            button {
                  background-color: black;
                  color: white;
                  padding: 10px 20px;
                  font-size: 16px;
                  border: none;
                  cursor: pointer;
                  margin: 10px;
            }

            button a {
                  text-decoration: none;
                  color: #fff;
            }

            button:hover {
                  background-color: gray;
            }

            .taskTitle {
                  background-color: #99FFFF;
                  color: black;
                  padding: 10px;
                  font-size: 20px;
                  margin-bottom: 10px;
                  margin: 15px;
            }

            .taskText {
                  background-color: #fff;
                  padding: 10px;
                  margin: 15px;
                  border-radius: 5px;
                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            input[type="text"] {
                  width: 80%;
                  padding: 8px;
                  margin-top: 5px;
                  box-sizing: border-box;
                  border: 1px solid #ccc;
                  border-radius: 4px;
            }

            .taskText {
                  animation-name: fadeUpAnimeLinkBtn;
                  animation-duration: 5s;
                  animation-fill-mode: forwards;
                  opacity: 0;
                  transform: translateY(20px);
            }

            @keyframes fadeUpAnimeLinkBtn {
                  from {
                        opacity: 0;
                        transform: translateY(20px);
                  }

                  to {
                        opacity: 1;
                        transform: translateY(0);
                  }
            }
      </style>

</head>

<body id="taskSbmitBody">
      <!-- タスクの登録画面へ遷移 -->
      <button><a href="./task_post.php">タスク表の登録へ</a></button>

      <!-- タスクの削除 -->
      <button>
            削除
      </button>

      <!-- ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ -->
      <!-- 登録したタスクを表示する -->
      <!-- task_post.phpからのデータを変数に代入 -->
      <?php
      $weddingTask = $_POST["wedding"];
      $partyTask = $_POST["party"];
      $welcomeTask = $_POST["wel"];
      $recTask = $_POST["rec"];
      $prsTask = $_POST["prs"];
      $mnyTask = $_POST["mny"];
      $inviTask = $_POST["invi"];
      ?>

      <!-- 挙式のタスクを洗い出す -->
      <div class="taskContainer">
            <h1 class="taskTitle">挙式</h1>
            <?php
            if (!empty($weddingTask)) {
                  foreach ($weddingTask as $WedTask) { ?>
                        <div class="taskText">
                              <?php echo $WedTask; ?>
                              <input type="text" placeholder="状況">
                        </div>
            <?php }
            } else {
                  echo "<p>選択されたタスクはありません。</p>";
            } ?>
      </div>

      <!-- 披露宴のタスクを洗い出す -->
      <div class="taskContainer">
            <h1 class="taskTitle">披露宴</h1>
            <?php
            if (!empty($partyTask)) {
                  foreach ($partyTask as $ParTask) { ?>
                        <div class="taskText">
                              <?php echo $ParTask; ?>
                              <input type="text" placeholder="状況">
                        </div>
            <?php }
            } else {
                  echo "<p>選択されたタスクはありません。</p>";
            } ?>
      </div>

      <!-- ウェルカムスペースのタスクを洗い出す -->
      <div class="taskContainer">
            <h1 class="taskTitle">ウェルカムスペース</h1>
            <?php
            if (!empty($welcomeTask)) {
                  foreach ($welcomeTask as $WelTask) { ?>
                        <div class="taskText"><?php echo $WelTask; ?>
                              <input type="text" placeholder="状況">
                        </div>
            <?php }
            } else {
                  echo "<p>選択されたタスクはありません。</p>";
            } ?>

      </div>

      <!-- 受付のタスクを洗い出す -->
      <div class="taskContainer">
            <h1 class="taskTitle">受付</h1>
            <?php if (!empty($recTask)) {
                  foreach ($recTask as $RecTask) { ?>
                        <div class="taskText"><?php echo $RecTask; ?>
                              <input type="text" placeholder="状況">
                        </div>
            <?php }
            } else {
                  echo "<p>選択されたタスクはありません。</p>";
            } ?>

      </div>

      <!-- 引き出物のタスクを洗い出す -->
      <div class="taskContainer">
            <h1 class="taskTitle">引き出物</h1>
            <?php if (!empty($prsTask)) {
                  foreach ($prsTask as $prsTask) { ?>
                        <div class="taskText"><?php echo $prsTask; ?>
                              <input type="text" placeholder="状況">
                        </div>
            <?php }
            } else {
                  echo "<p>選択されたタスクはありません。</p>";
            } ?>

      </div>

      <!-- 入金のタスクを洗い出す -->
      <div class="taskContainer">
            <h1 class="taskTitle">入金</h1>
            <?php if (!empty($mnyTask)) {
                  foreach ($mnyTask as $MnyTask) { ?>
                        <div class="taskText"><?php echo $MnyTask; ?>
                              <input type="text" placeholder="状況">
                        </div>
            <?php }
            } else {
                  echo "<p>選択されたタスクはありません。</p>";
            } ?>

      </div>

      <!-- 招待状のタスクを洗い出す -->
      <div class="taskContainer">
            <h1 class="taskTitle">招待状</h1>
            <?php if (!empty($inviTask)) {
                  foreach ($inviTask as $InvTask) { ?>
                        <div class="taskText"><?php echo $InvTask; ?>
                              <input type="text" placeholder="状況">
                        </div>
            <?php }
            } else {
                  echo "<p>選択されたタスクはありません。</p>";
            } ?>

      </div>

</body>

</html>