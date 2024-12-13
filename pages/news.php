<section class="news" id="news">
    <div class="news-top">
        <span class="title">Notícias</span>
    </div>
    
    <?php
    $slides = [
    ["image" => "https://via.placeholder.com/800x400", "title" => "Título da Notícia 1", "text" => "Resumo da notícia 1."],
    ["image" => "https://via.placeholder.com/800x400", "title" => "Título da Notícia 2", "text" => "Resumo da notícia 2."],
    ["image" => "https://via.placeholder.com/800x400", "title" => "Título da Notícia 3", "text" => "Resumo da notícia 3."]
    ];
    ?>
    <div class="carousel">
        <div class="carousel-images">
        <?php foreach ($slides as $slide): ?>
            <div class="carousel-item">
            <img src="<?= $slide['image']; ?>" alt="<?= $slide['title']; ?>">
            <div class="carousel-caption">
                <h5><?= $slide['title']; ?></h5>
                <p><?= $slide['text']; ?></p>
            </div>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="carousel-controls">
        <button class="carousel-control" id="prev">&#8249;</button>
        <button class="carousel-control" id="next">&#8250;</button>
    </div>
        
</section>