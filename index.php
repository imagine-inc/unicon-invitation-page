<!DOCTYPE html>
<html>
<head>
	<title>チームへの招待状 - wewe</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0" >
    <meta name="description" content="hogehoge">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
</head>

<style type="text/css" media="screen">
	html, body {
		background: #ffcc33;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to top, #ffb347, #ffcc33);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to top, #ffb347, #ffcc33); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}
	.wrapper {
		padding: 10px 10px 50px 10px;
		width: 100%;
		height: 100%;
	}

	.white-wrapper {
		background-color: white;
		width: 100%;
		height: 100%;
	}

</style>

<body>

	<div class="wrapper">
		<div class="white-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="text-align: center; padding: 100px 10px;">
						<h2 style="font-weight: bold; font-size: 20px; text-align: center;">チームへの招待が届いています。</h2>
					</div>
					<div class="col-md-12" style="text-align: center; padding: 100px 10px;">
						<h2 style="font-weight: bold; font-size: 20px; text-align: center;">まずはチームIDをコピー。<br>アプリ内で使うよ！</h2>
						<p style="padding: 5px; background-color: #DBDBDB;"><?php echo htmlspecialchars($_GET["team_id"]) ?></p>
						<button class="btn btn-primary">チームIDをコピー</button>
					</div>
					<div class="col-md-12" style="text-align: center; padding: 100px 10px;">
						<h2 style="font-weight: bold; font-size: 20px; text-align: center;">weweをインストール！</h2>
						<a href="https://itunes.apple.com/jp/app/%E3%83%8B%E3%82%B7%E3%82%AD%E3%82%B4%E3%82%A4-%E4%BF%B3%E5%8F%A5-%E5%B7%9D%E6%9F%B3%E3%81%AEsns/id1321285792?mt=8" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/assets/shared/badges/ja-jp/appstore-lrg.svg) no-repeat;width:135px;height:40px;background-size:contain;"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>