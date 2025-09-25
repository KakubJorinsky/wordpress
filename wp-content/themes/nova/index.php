<?php get_header(); ?>

<header>
    <h1 class="hero-title">Šiša Pangma: Nejnižší osmitisícovka světa</h1>
</header>

<main>
    <section class="section">
        <div class="facts">
            <h2>Fakta o Šiša Pangmě</h2>
            <div class="fact-item">
                <strong>Výška:</strong> 8027 m n. m.<grok-card data-id="113654" data-type="citation_card"></grok-card>
            </div>
            <div class="fact-item">
                <strong>Poloha:</strong> Tibet, Himálaje – poslední osmitisícovka, která byla zdobýta (1964, Čína).
            </div>
            <div class="fact-item">
                <strong>Český výstup:</strong> V 90. letech česká expedice na vrcholu zavítala s vlajkou svobodného Tibetu!<grok-card data-id="4a428a" data-type="citation_card"></grok-card>
            </div>
            <!-- Přidej víc faktů nebo použij WP custom fields -->
        </div>
        <div class="map-placeholder">
            <!-- Sem vlož embed mapy, např. Google Maps s polohou hory -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d... (najdi souřadnice: 28.4361° N, 85.3087° E)" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <section class="gallery">
        <h2>Galerie: Výhledy z vrcholu</h2>
        <?php
        // WP loop pro galerii – předpokládám, že máš custom post type 'photos' nebo použij media library
        $images = get_posts(array('post_type' => 'attachment', 'posts_per_page' => 6, 'post_mime_type' => 'image'));
        foreach ($images as $image) {
            echo '<img src="' . wp_get_attachment_url($image->ID) . '" alt="Fotka Šiša Pangmy">';
        }
        ?>
    </section>
</main>

<?php get_footer(); ?>