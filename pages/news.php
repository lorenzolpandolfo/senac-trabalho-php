<section class="news" id="news">
    <div class="news-top">
        <span class="title">Notícias</span>
    </div>
    
    <?php
    $slides = [
    ["image" => "assets/images/news.jpg", "title" => "Sendo Criativo", "text" => "Ser criativo é a capacidade de transformar ideias comuns em soluções originais, enxergando possibilidades onde outros veem limites. "],
    ["image" => "assets/images/news2.jpg", "title" => "Descobrindo o Time", "text" => "Se redescobrir no time é um processo de renovação e autoconhecimento que permite reconectar-se com seus objetivos e com a dinâmica da equipe."],
    ["image" => "assets/images/news3.jpg", "title" => "Acelerando Ideias", "text" => "Receber ideias de melhoria é um ato fundamental para o crescimento e a inovação em qualquer empresa."]
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