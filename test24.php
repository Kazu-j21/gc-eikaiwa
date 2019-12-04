<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>English Lesson</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:700,400">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/test06+.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>GOOD CONVERSATION<br>EIKAIWA CLUB</h1>
            <p>check out our activities.</p>
        </header>
    </div>
    <section class="about">
        <h2 class="heading">ABOUT US</h2>
        <p class="about-text-a">
            はじめまして。私たちはグッドカンバセーション英会話というどんなレベルの英語力の方でも自由に参加できる
            英会話教室をやっています。<br>毎週第１＆３金曜日の19時から21時までとなっています。参加費は1000円です。<br>ぜひ興味のある方はご連絡ください.
        </p>
        <h2 class="heading">ADDRESS</h2>
        <p class="about-text-b">
            〒５６５－０８５１　吹田市千里山西５丁目１０－１高島ビル３階　Hana's Kitchen　<br>
            阪急千里線　千里山駅西口から徒歩３分
        </p>
    </section>
    <section class="pictures">
        <h2 class="heading">PICTURES</h2>
        <div>
            <img class='button' src='test_img/back.png' onclick='backPhoto()'>
            <img class='photo'  src='test_img/photo01.jpg' width="500" height="400">
            <img class='button' src='test_img/next.png' onclick='nextPhoto()'>
        </div>
        <script src="js/jquery.min.js"></script>
        <script>
    
                var photo=$(".photo");

                var photoNumber=0;

                function nextPhoto(){
                    photoNumber++;

                    if(photoNumber>=3){
                        photoNumber=0;
                    }

                    setPhoto();
                };

                function backPhoto(){
                    photoNumber--;

                    if(photoNumber<0){
                        photoNumber=2;
                    }

                    setPhoto();
                };

                function setPhoto(){
                    if(photoNumber==0){
                        photo.attr('src', 'test_img/photo01.jpg');
                    }
                    else if(photoNumber==1){
                        photo.attr('src', 'test_img/photo02.jpg');
                    }
                    else if(photoNumber==2){
                        photo.attr('src', 'test_img/photo03.jpg');
                    }
                };

        </script>
    </section>
    <section class="videos">
        <h2 class="heading">VIDEOS</h2>
        <div>
            <video class="edit" autoplay loop controls>
                <source src="test_img/video01.MP4">
            </video>
        </div>
    </section>
    <section class="members">
        <h2 class="heading">MEMBERS</h2>
        <div class="members-wrapper">
            <div class="member-box">
                <i class="member-icon fa fa-lightbulb-o"></i>
                <div class="member-title">Member1</div>
                <p class="member-text">
                    何かを考えることが好きです。<br>
                    新しいことを思いついては試しています。<br>
                    ディレクションの経験もあります。
                </p>
            </div>
            <div class="member-box">
                <i class="member-icon fa fa-paint-brush"></i>
                <div class="member-title">Member2</div>
                <p class="member-text">
                    何かを考えることが好きです。<br>
                    新しいことを思いついては試しています。<br>
                    ディレクションの経験もあります。
                </p>
            </div>
            <div class="member-box">
                <i class="member-icon fa fa-code"></i>
                <div class="member-title">Member3</div>
                <p class="member-text">
                    何かを考えることが好きです。<br>
                    新しいことを思いついては試しています。<br>
                    ディレクションの経験もあります。
                </p>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <h2 class="heading">CONTACT</h2>
        <form class="contact-form" action="test25.php" method="post">
            <input type="text" name="name" placeholder="NAME">
            <textarea name="message" placeholder="MESSAGE"></textarea>
            <button type="submit" class="btn btn-default">SEND</button>
        </form>
    </section>

    <footer class="footer">
        @sample site
    </footer>

</body>
</html>

