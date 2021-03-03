<h2><?php echo $title; ?></h2>
<br>
Vers PAGE ajout articles à la table... <br>
        <!-- CodeIgniterHospital/index.php/news/create  -->
        <p><a href="<?php echo site_url('news/create'); ?>">ADD NEW article</a></p>
<?php 
echo 'ma page arborescence : views/news/index.php ';

foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title'] .'by VB'; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
       <!--  essai bis  CodeIgniterHospital/index.php/news/article1  -->
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>




<?php endforeach; ?>

