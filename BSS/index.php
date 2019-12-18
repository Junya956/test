<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog</title>
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
	
	<body>
	<p><img src="4eachblog_logo.jpg"></p>
		<header>
			<ul>
				<li>トップ</li>
				<li>プロフィール</li>
				<li>4eachについて</li>
				<li>登録フォーム</li>
				<li>問い合わせ</li>
				<li>その他</li>
			</ul>
		</header>
		

		<main>
			
		
			
		 <div class="left">
			
			<h1 class="title4">プログラミングに役立つ書籍</h1>
			 
			 
		<form method="post" action="insert.php">
			 <h3 class="title3">入力フォーム</h3>
		
				<div>
					<label>ハンドルネーム</label>
					<br>
					<input type = "text" class = "text" size = "50" name="name">
				</div>
			
				<div>
					<label>タイトル</label>
					<br>
					<input type = "text" class = "text" size = "50" name="title">
				</div>
			
			   <div>
			   	<label>コメント</label>
				<br>
				<textarea cols="100" rows="8" name="comment"></textarea>
			</div>
			<div>
				<input type="submit" class="submit" value="送信する">
			</div>
		</form>
		
		<div class="keiji">
			 <?php
		mb_check_encoding("utf8");
		$pdo = new PDO("mysql:dbname=BSS;host=localhost;", "root", "root");
		$stmt = $pdo->query("select*from BSS");
		
	
		
		while($row=$stmt->fetch()){
			echo "<div class='kiji'>";
			echo "<h3>".$row['title']."</h3>";
			echo $row['comment'];
			echo "<div class='name'>posted by".$row['name']."</div>";
			echo "</div>";
		}
	    ?>
		</div>
			 
		
		 </div>
		
	
		<div class="right">
			<ul>
				<li class="title2">人気の記事</li>	
				<li class="sub2">PHP オススメ本</li>
				<li class="sub2">PHP MyAdminの使い方</li>
				<li class="sub2">今人気のエディタ Top5</li>
				<li class="sub2">HTMLの基礎</li>
		    </ul>	
			
			<ul>
				<li class="title2">オススメリンク</li>	
				<li class="sub2">インターノウス株式会社</li>
				<li class="sub2">XAMPPのダウンロード</li>
				<li class="sub2">Eclipseのダウンロード</li>
				<li class="sub2">Braketsのダウンロード</li>
		    </ul>	
			
			<ul>
				<li class="title2">カテゴリ</li>	
				<li class="sub2">HTML</li>
				<li class="sub2">PHP</li>
				<li class="sub2">MySQL</li>
				<li class="sub2">JavaScript</li>
		    </ul>	
		
			
		</div>
			
		
		
		</main>
		
		
		<footer>
			copyright ©︎ Internous | 4each blog is the one which provides A to Z about programming.
		
		</footer>
		
		
	
		
	
	</body>

</html>