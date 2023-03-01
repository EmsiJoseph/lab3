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
      
        <div class="contact-left">
          <br>
          <h1>Post your comment here</h1>
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

            <form action="/lab3/ci4/public/comments" method="post">
                <?= csrf_field() ?>

                <input type="input" name="name" placeholder="Your Name" value="<?= set_value('name') ?>" required>

                <input type="input" name="email" placeholder="Your Email" value="<?= set_value('email') ?>" required>

                <input type="input" name="website" placeholder="Your Website" value="<?= set_value('website') ?>" required>

                <textarea style="resize: none;" name="comment" rows="6" placeholder="Your Message"><?= set_value('comment') ?></textarea>
                
                <button type="submit" class="btn btn2">Submit</button>
            </form>
        </div>
        <div class="contact-right">
                    <h1 class="sub-title"><?= esc($title) ?></h1>
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


    
    
