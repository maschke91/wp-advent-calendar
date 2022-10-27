<?php

get_header();

$fields = get_fields();

?>
<link rel='stylesheet' id='font-css' href='https://use.typekit.net/zsw0zlh.css?ver=5.8.2' media='all' />

<style>
    h1,
    h2 {
        font-family: "orgovan-rounded-web";
        font-weight: 400;
    }

    .welcome__section {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
    }

    .column_left {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-align-content: stretch;
        -ms-flex-line-pack: stretch;
        align-content: stretch;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #1D3E6D;
        padding: 57px 50px 81px 50px;
        min-width: 450px;
        min-height: 400px;
    }

    .column_left img {
        width: 150px;
        height: 150px;
    }

    .column_left h1 {
        max-width: 320px;
        width: 100%;
        font-size: 40px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 0;
        text-transform: uppercase;
    }

    .column_right {
        -webkit-order: 0;
        -ms-flex-order: 0;
        order: 0;
        -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        -webkit-align-self: stretch;
        -ms-flex-item-align: stretch;
        align-self: stretch;
        background-position: 48% 6%;
        background-size: cover;
    }

    .advent__intro-wrap {
        margin: 25px auto 40px;
        text-align: center;
    }

    .advent__intro-wrap h2 {
        color: #A12026;
    }

    .advent__intro-wrap p {
        max-width: 727px;
        width: 100%;
        margin: 0 auto 0;
    }

    .product__img-wrap {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .product__img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .product__img[src=""] {
        display: none;
    }

    .product__button-wrap {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 60px;
        text-align: center;
    }

    .days__row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-template-rows: auto;
        gap: 30px 30px;
    }

    .day__item-wrap {
        width: 100%;
    }

    .day__item {
        position: relative;
        width: 250px;
        height: 250px;
        margin: 0 auto;
    }

    .day__item-background,
    .day__closed-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 250px;
        height: 250px;
    }

    .day__closed {
        position: relative;
    }

    .day__closed-overlay {
        width: 250px;
    }

    .day__number {
        position: absolute;
        z-index: 5;
        right: 10px;
        top: 10px;
        width: 34px;
        height: 34px;
        line-height: 30px;
        text-align: center;
        font-family: "orgovan-rounded-web";
        font-size: 24px;
        font-weight: 400;
        color: #ffffff;
        text-shadow: 2px 2px 0px #000000;
        background-color: #8EC641;
        border: 2px solid #000000;
        border-radius: 12px;
    }

    .day__front,
    .day__back {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 2;
    }

    .product__buttons-button {
        display: -ms-inline-flexbox;
        display: -webkit-inline-flex;
        display: inline-flex;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 120px;
        font-size: 18px;
        font-weight: 600;
        color: #ffffff;
        text-transform: uppercase;
        background-color: #1D3E6D;
        padding: 10px 15px;
        border-radius: 6px;
        -webkit-transition: all 321ms ease-in-out;
        -moz-transition: all 321ms ease-in-out;
        -ms-transition: all 321ms ease-in-out;
        -o-transition: all 321ms ease-in-out;
        transition: all 321ms ease-in-out;
    }

    .product__buttons-button:hover {
        background-color: #132A4A !important;
        color: #ffffff !important
    }

    .product__buttons-button svg {
        width: 20px;
    }

    .button-add-to-cart {
        background-color: #A12026;
    }

    .product__buttons-button.button-add-to-cart:hover {
        background-color: #79161A !important;
    }

    @media screen and (max-width: 767px) {
        .welcome__section {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .column_left {
            display: block;
            text-align: center;
            min-width: 100%;
            width: 100%;
            padding: 3em 0.8em;
            min-height: 100%;
        }

        .column_left h1 {
            text-align: center;
            font-size: 32px;
            max-width: 100%;
        }

        .column_right {
            height: 40vh;
        }

        .advent__intro-wrap {
            padding: 0 1em;
        }
    }
</style>

<div id="ttr_main">
    <article>
        <section class="welcome__section">
            <div class="column_left">
                <div>
                    <h1><?php echo $fields['nadpis'] ?></h1>
                </div>
            </div>
            <div class="column_right" style="background-image: url('<?php echo $fields['obrazek_v_zahlavi']['url'] ?>')">
            </div>
        </section>
    </article>
    <article>
        <section class="section advent__intro-wrap">
            <h2><?php echo $fields['nadpis_nad_textem'] ?></h2>
            <p><?php echo $fields['text'] ?></p>
        </section>
    </article>
    <section class="section">
        <div class="days__row">
            <?php
            $i = 0; // day number
            if (have_rows('kalendar')) :
                while (have_rows('kalendar')) : the_row();
                    $i++;
                    $pn = get_sub_field('pn'); // string
                    $img = get_sub_field('image'); // string with url

                if ($pn) {
                    $productId = wc_get_product_id_by_sku($pn);
                    $product = wc_get_product($productId);
                    $title = $product->get_title();
                    $permaLink = $product->get_permalink();
                    $dateText = "2022-12-" . $i;
                    $compareTime = $_SERVER['REQUEST_TIME'] + 3600; 

                    if (strtotime($dateText) > $compareTime) {
                        $timeState = "future";
                    }
                    if (strtotime($dateText) < $compareTime) {
                        $timeState = "past";
                    }
                    if (strtotime($dateText) == $compareTime) {
                        $timeState = "today";
                    }
                   
                ?>
                    <div class="day__item-wrap" data-date="2021-12-<?php echo $i ?>">
                        <div class="day__item">
                            <span class="day__number"><?php echo $i ?></span>
                            <img class="day__item-background" src="<?php echo get_template_directory_uri(); ?>/img/advent-calendar/day-background.jpg" alt="Background image of day" />
                            <?php if ($timeState == "future") { ?>
                                <div class="day__front">
                                    <img class="day__closed-overlay" src="<?php echo get_template_directory_uri(); ?>/img/advent-calendar/day/grafika-kalendar_<?php echo $i ?>.svg" alt="XEVOS obrázek dárku" />
                                </div>
                            <?php } else { ?>
                                <div class="day__back">
                                    <div class="product__img-wrap">
                                        <img class="product__img" src="<?php echo $img ?>" alt="<?php echo $title ?>" />
                                    </div>
                                    <div class="product__button-wrap">
                                        <a class="product__buttons-button button-add-to-cart" href="<?php echo $permaLink ?>" title="<?php echo str_replace('""', '', $title); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.4 25">
                                                <path d="M13.713 0a10.69 10.69 0 0 0-9.045 16.391l-.023.01L0 21.05 3.951 25l4.817-4.819v-.02A10.688 10.688 0 1 0 13.713 0Zm0 4.747a5.939 5.939 0 1 1-5.939 5.939 5.938 5.938 0 0 1 5.939-5.939Z" fill="#fff"></path>
                                            </svg>
                                            Detail
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
            <?php
                } // if ($pn) {
                endwhile;
            endif;
            ?>
        </div>
    </section>
</div>
<?php 

// Load footer
get_footer(); 
?>