<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap4 フォームコンポーネント</title>

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!--自作CSS -->
    <style type="text/css">
        <!--
        /*ここに調整CSS記述*/
        -->
    </style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-light navbar-dark bg-dark">
    <a class="navbar-brand" href="#!">Bootstrap4 フォームコンポーネント</a>
</nav>

<!-- Page Content -->
<div class="container mt-5 p-lg-5 bg-light">

    <form>

        <!--氏名-->
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="lastName">名字</label>
                <input type="text" class="form-control" id="lastName" placeholder="名字">
            </div>
            <div class="col-md-6 mb-3">
                <label for="inputName">名前</label>
                <input type="text" class="form-control" id="inputName" placeholder="名前">
            </div>
        </div>
        <!--/氏名-->

        <!--Eメール-->
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Eメール</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Eメール">
            </div>
        </div>
        <!--/Eメール-->

        <!--パスワード-->
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">パスワード</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="パスワード">
                <small id="passwordHelpBlock" class="form-text text-muted">パスワードは、文字と数字を含めて8～20文字で、空白、特殊文字、絵文字を含むことはできません。</small>
            </div>
        </div>
        <!--/パスワード-->

        <!--住所-->
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="inputAddress01">郵便番号</label>
                <input type="text" class="form-control" id="inputAddress01" placeholder="郵便番号">
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputAddress02">都道府県</label>
                <select class="custom-select" id="inputAddress02">
                    <option selected disabled value="">選択...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="inputAddress03">住所</label>
                <input type="text" class="form-control" id="inputAddress03" placeholder="住所">
            </div>
        </div>
        <!--/住所-->

        <!--性別-->
        <div class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">性別</legend>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">女性</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">男性</label>
                    </div>
                </div>
            </div>
        </div>
        <!--/性別-->

        <!--スキル-->
        <div class="form-group row">
            <div class="col-sm-2">スキル</div>
            <div class="col-sm-10">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">PHP／Laravel</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Ruby on Rails</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Vue.js</label>
                </div>
            </div>
        </div>
        <!--/スキル-->

        <!--評価-->
        <div class="form-group">
            <label for="Evaluation">評価:</label>
            <select id="Evaluation" class="form-control">
                <option>よかった</option>
                <option>普通</option>
                <option>悪かった</option>
            </select>
        </div>
        <!--/評価-->

        <!--ファイル選択-->
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">ファイル選択...</label>
        </div>
        <!--/ファイル選択-->

        <!--備考欄-->
        <div class="form-group mb-3">
            <label for="Textarea">備考欄</label>
            <textarea class="form-control" id="Textarea" rows="3" placeholder="その他、質問などありましたら"></textarea>
        </div>
        <!--/備考欄-->

        <!--ボタンブロック-->
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">登録</button>
            </div>
        </div>
        <!--/ボタンブロック-->

    </form>

</div><!-- /container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script srcsudo chmod 777 -Rf storage="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>
