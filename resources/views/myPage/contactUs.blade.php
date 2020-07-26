<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せ</title>
    <link rel="stylesheet" href="{{ secure_asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    <div id="header">
        <p>お問い合わせ</p>
    </div>
    <div id="nav">
        <ul>
            <li><a link href='top' >トップ</a></li>
            <li><a>ナビ2</a></li>
            <li><a>ナビ3</a></li>
            <li><a link href='selfIntroduce'>自己紹介</a></li>
            <li><a link href='contactUs'>お問い合わせ</a></li>
        </ul>        
    </div>
    <div id="main">
        <form class="form-horizontal" style="width:80%" method="post">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">名前</label>
                <div class="col-sm-10">
                    <input type="text" required="required" class="form-control" id="name" name="name" placeholder="名前" value="">
                </div>
            </div>
            <div class="form-group">　
                <label for="inputEmail" class="col-sm-2 control-label">メールアドレス</label>
                <div class="col-sm-10">
                    <input type="email" required="required" class="form-control" id="email" name="email" placeholder="メールアドレス" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAge" class="col-sm-2 control-label">年齢</label>
                <div class="col-sm-10">
                    <input type="number" required="required" class="form-control" id="age" name="age" placeholder="年齢"  value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">性別</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" required="required" name="sex" id="inlineRadio1" value="男性"> 男性
                    </label>
                    <label class="radio-inline">
                        <input type="radio" required="required" name="sex" id="inlineRadio2" value="女性"> 女性
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDetails" class="col-sm-2 control-label">問い合せ内容</label>
                <div class="col-sm-10">
                    <input type="text" required="required" class="form-control" id="inputDetail" name="detail" placeholder="問い合せ内容" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="送信" onclick="return onButtonClick();">
                </div>
            </div>
        </form>
    </div>
    <div id="footer">
        <p>&copy; 20xx oo All rights Reserved.</p>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>