<!-- タスクの要録画面 -->
<!DOCTYPE html>
<html lang="ja">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>タスク表の作成</title>
        <link rel="stylesheet" href="../css/reset.css" />
        <link rel="stylesheet" href="../css/style.css" />
</head>

<body id="taskBody">

        <h1 id="title">タスクの登録</h1>
        <div id="topBack"><a href="http://localhost/kadai06_basic_php_20231202" target="_blannk" rel="noopener">トップに戻る</a></div>

        <div id="wrapTaskChoice">
                <form class="taskChoice" method="post" action="task.php">

                        <h1 class="taskTitle">挙式</h1>
                        <div class="taskChoiceWedding">
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="ウエディングケーキ">ウエディングケーキ</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="司会者">司会者</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="ブーケトス">ブーケトス</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="ドレス当てクイズ">ドレス当てクイズ</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="プロフィールブック">プロフィールブック</p>
                                </div>
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="席次表">席次表</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="乾杯の挨拶">乾杯の挨拶</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="新郎の言葉">新郎の言葉</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="新婦の言葉">新婦の言葉</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wedding[]" value="新郎父の言葉">新郎父の言葉</p>
                                </div>
                        </div>

                        <h1 class="taskTitle">披露宴</h1>
                        <div class="taskChoiceParty">
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="メインテーブル花">メインテーブル花</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="ゲストテーブル花">ゲストテーブル花</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="ゲストテーブルクロス">ゲストテーブルクロス</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="ゲストテーブル演出">ゲストテーブル演出</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="音楽">音楽</p>
                                </div>
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="オープニングムービー">オープニングムービー</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="プロフィールムービー">プロフィールムービー</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="ウェディングドレス">ウェディングドレス</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="タキシード">タキシード</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="party[]" value="衣装替え">衣装替え</p>
                                </div>
                        </div>

                        <h1 class="taskTitle">ウェルカムスペース</h1>
                        <div class="taskChoiceWelcome">
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="スペースデザイン">スペースデザイン</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="ウェルカムボード">ウェルカムボード</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="ゲストへのレター">ゲストへのレター</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="ゲスト写真">ゲスト写真</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="新郎新婦写真">新郎新婦写真</p>
                                </div>
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="スペース用花">スペース用花</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="席次表">席次表</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="ウォールレター写真">ウォールレター写真</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="ウォールレター">ウォールレター</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="wel[]" value="ブーケ">ブーケ</p>
                                </div>
                        </div>


                        <h1 class="taskTitle">受付</h1>
                        <div class="taskChoiceReception">
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="rec[]" value="受付担当">受付担当</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="rec[]" value="">受付用写真</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="rec[]" value="受付への御礼">受付への御礼</p>
                                </div>
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="rec[]" value="受付用席次表">受付用席次表</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="rec[]" value="受付用ペン">受付用ペン</p>
                                </div>
                        </div>


                        <h1 class="taskTitle">引き出物</h1>
                        <div class="taskChoicePresent">
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="prs[]" value="親族用引き出物">親族用引き出物</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="prs[]" value="上司用引き出物">上司用引き出物</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="prs[]" value="友人用引き出物">友人用引き出物</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="prs[]" value="引き出物用袋">引き出物用袋</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="prs[]" value="引き出物ない人用の袋（妻）">引き出物ない人用の袋（妻）</p>
                                </div>
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="prs[]" value="不参加の方用の引き出物">不参加の方用の引き出物</p>
                                </div>
                        </div>


                        <h1 class="taskTitle">入金</h1>
                        <div class="taskChoiceMoney">
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="mny[]" value="一時金">一時金</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="mny[]" value="全額入金">全額入金</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="mny[]" value="お車代用袋">お車代用袋</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="mny[]" value="お車代用新札">お車代用新札</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="mny[]" value="御礼代用袋">御礼代用袋</p>
                                </div>
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="mny[]" value="御礼代用新札">御礼代用新札</p>
                                </div>
                        </div>


                        <h1 class="taskTitle">招待状</h1>
                        <div class="taskChoiceInvitation">
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="invi[]" value="招待状の作成">招待状の作成</p>
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="invi[]" value="招待状の発送">招待状の発送</p>
                                </div>
                                <div class="halfTaskChoice">
                                        <p class="wrapTaskChoiceItem"><input class="taskChoiceItem" type="checkbox" name="invi[]" value="招待状の回収">招待状の回収</p>
                                </div>
                        </div>
                        <p><input id="submitBtn" type="submit" value="登録する"></p>

                </form>
        </div>

        <div class="wrapNextLink">
                <p id="nextLink">
                        <a style="color: blue;" href="./task.php">タスク表の確認</a>
                </p>
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
                $("#submitBtn").on("click", function() {
                        alert("タスク表を作成しました");
                })
        </script>
</body>

</html>