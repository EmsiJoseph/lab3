<body>
  <div class="header">
    <div class="container">
      <nav>
        <a href="home">
          <img src="img/icon.png" class="logo">
        </a>
        <ul>
          <li><a href="/lab3/ci4/public/home#home">Home</a></li>
          <li><a href="/lab3/ci4/public/home#about">About</a></li>
          <li><a href="/lab3/ci4/public/home#portfolio">Portfolio</a></li>
          <li><a href="/lab3/ci4/public/home#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
</div>

 <div id="contact">
    <div class="container">
      <div class="row">
        <!-- <div class="contact-left">
          <hi class="sub-title">Contact Me</hi>
            <p><i class="fa-sharp fa-solid fa-paper-plane"></i> mcagbanlog@student.apc.edu.ph</p>
            <p><i class="fa-solid fa-phone"></i> 09762623231</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/emsijusep"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://twitter.com/emsheesh"><i class="fa-brands fa-twitter-square"></i></a>
              <a href="https://www.instagram.com/emshiiisunn/"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/mc-joseph-agbanlog-6a8387218/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <a href="/lab3/ci4/public/comments/create">
        <button class="btn btn2">Post a comment</button>
    </a>
        </div> -->
        <div class="contact-left">
        <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

            <form action="/lab3/ci4/public/comments/index" method="post">
                <?= csrf_field() ?>

                <input type="input" name="name" placeholder="Your Name" value="<?= set_value('name') ?>" required>

                <input type="input" name="email" placeholder="Your Email" value="<?= set_value('email') ?>" required>

                <input type="input" name="website" placeholder="Your Website" value="<?= set_value('website') ?>" required>

                <textarea style="resize: none;" name="comment" rows="6" placeholder="Your Message"><?= set_value('comment') ?></textarea>
                
                <button type="submit" class="btn btn2">Submit</button>
            </form>
        </div>
        <div class="contact-right">
                    <hi class="sub-title"><?= esc($title) ?></hi>
                    <br><br>
                    
                    <?php if (! empty($comments) && is_array($comments)): ?>

                        <?php foreach ($comments as $comment): ?>

                            <div class="portfolio-box">
                                <h3><?= esc($comment['name']) ?></h3>
                                <p><?= esc($comment['email']) ?></p><br>
                                <p><?= esc($comment['comment']) ?></p><br>
                               <em><p><?= esc($comment['friendly_reg_date']) ?></p></em> 
                        
                            </div>
                            <br>

                        <?php endforeach ?>

                        <?php else: ?>

                        <h3>No Comments</h3>

                        <p>Nothing to see here yet.</p>

                        <?php endif ?>
        </div>
      </div>
    </div>
</div>


    
    
