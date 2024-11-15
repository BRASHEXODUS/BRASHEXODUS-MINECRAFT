<html>
    
    <head>
        
          <link rel="stylesheet" href="css/style.css">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
          
          <?php require "config.php";?>
          

        <title><?php echo $servername?> - Official Website</title>
        
        <meta name="deseription" content="<?php echo $serverdescription?>">
        
        <meta property="og:title" content="<?php echo $servername?> - Official Website Portal">
        
        <meta property="og:site_nane" content="<?php echo $servername?>">
        
        <meta property="og:description" content="<?php echo $serverdescription?>">
        
        <meta charset="utf-8">

        <link rel="icon" type="image/png" href="<?php echo $serverlogo?>">
        
    </head>
    
    
    

    <body>


    <?php 
        
        if ($animation_2 != false) {
        
            ?>

    <section id="stars"></section>
    <script type="text/javascript">
      function stars() {
        const count = 170;
        const stars = document.getElementById('stars');
        var i = 0;
        while(i < count) {
          const star = document.createElement('i');
          const x = Math.floor(Math.random() * window.innerWidth)
          const y = Math.floor(Math.random() * window.innerHeight)
          const size = Math.random() * 5;
          star.style.left = x+'px';
          star.style.top = y+'px';
          star.style.height = 1+size+'px';
          star.style.width = 1+size+'px';
          const duration = Math.random() * 2;
          star.style.animationDuration = 2+duration+'s';
          stars.appendChild(star);
          i++
        }
      }
      stars();
    </script>
    
      <?php 
    } else {
    ?>
    
                <div id="particles-js"></div>
    
        <?php } ?>
    
        <?php 
        
        if ($serverlogo != null) {
        
            ?>
        <img src="<?php echo $serverlogo?>" class="centered logo"><br><br>
        
        <?php 
    } else {
    ?>
    
        <h1 class="font" id="title"><?php echo $servernamedisplay?></h1>
        <h1 class="font subtext" id="title"><?php echo $servernamesubtext?></h1>
    
    <?php } ?>
    
    	<div class="items">

			<a href="<?php echo $forumurl?>" class="item forums">
			<div>
				<img src="<?php echo $forumimageurl?>" alt="Minecraft forums icon" class="img">
				<p class="subtitle">Chat & get help on our</p>
				<p class="title">Forums</p>
			</div>
			</a>

			<a href="<?php echo $storeurl?>" class="item store">
			<div>
				<img src="<?php echo $storeimageurl?>" alt="Minecraft store icon" class="img">
				<p class="subtitle">Donate & buy ranks on our</p>
				<p class="title">Store</p>
			</div>
			</a>

			<a href="<?php echo $voteurl?>" class="item vote">
			<div>
				<img src="<?php echo $voteimageurl?>" alt="Minecraft voting icon" class="img">
				<p class="subtitle">Support us by</p>
				<p class="title">Voting</p>
			</div>
			</a>


		</div>
    
    
    <div class="playercount">
        
			<p>&nbsp;There are currently <span class="sip" data-ip="<?php echo $serverip;?>" data-port="25565">
			</span> other players playing on <span class="ip"><?php echo $serverip?>
			</span>&nbsp;
			<br><brk></brk>
			
			<?php
			
			if ($show_play_button == true) {
			
			?>
			<span class="btn glow">
			<a href="minecraft://?addExternalServer=<?php echo $servername?>|<?php echo $serverip?>:<?php echo $serverport?>">Play Now</a>
			</span>
			</p>        
        <?php } ?>
    </div>
        
        
        
        
    </body>
    
    <script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
    
    <style>
    body{
        background-image:url(<?php if(bg_2 != true){echo $bg;} else {echo $bg_2_link;}?>);
    }
    
    
    @font-face {
    font-family: title;
    src: url(<?php echo $custom_font;?>);
}
        .font {
            
            font-family: <?php if ($enable_custom_font == true) {echo "title";} else {echo $default_font;}?>;
            
        }


    .btn:hover {
        cursor:pointer;
    }
    
.details {
    width: 100px;
    height:100px;
    border-radius: 50%;
    background-color: rgba(165, 165, 165, 0.089);
}

.details.one {
    position: absolute;
    top: 20px;
    left: 40px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: transparent;
    box-shadow: inset 2px 0 4px rgba(167, 167, 167, 0.685);
}
.details.two {
    position: absolute;
    top: 60px;
    left: 16px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: transparent;
    box-shadow: inset -2px 0 4px rgba(167, 167, 167, 0.685);
}
.details.three {
    position: absolute;
    top: 70px;
    left: 70px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: transparent;
    box-shadow: inset 2px 0 4px rgba(167, 167, 167, 0.685);
}

.details.four.small {
    position: absolute;
    top: 40px;
    left: 60px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: transparent;
    box-shadow: inset 2px 0 4px rgba(167, 167, 167, 0.585);
}

#stars > i {
    position: absolute;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 0 5px #fff, 
                0 0 15px #fff, 
                0 0 25px #fff;
    animation: animate linear infinite; 
}

@keyframes animate {
    0% {
        opacity: 0;
    }
    25% {
        opacity: 1;
    }
    50% {
        opacity: 1;
    }
    95% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}
    
    </style>
    
    
    
</html>