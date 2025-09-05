<?php
    define('IMAGES', '/assets/images/');
    define('CLEAR_PATH', preg_replace('/\\?.*/', '', $_SERVER['REQUEST_URI']));

    // Преобразование обычной ссылки на видео VK|RuTube|YouTube в embed
    function getVideoData($link) {
        if (!$link) return '';

        $out = [
            'source' => 'youtube',
            'link' => $link
        ];

        if (strpos($link, 'youtube.com') !== false) {
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match);
            $out['id'] = $match[1];
        }

        if (strpos($link, 'vk.com') !== false && strpos($link, 'video_ext') === false) {
            $oid = preg_replace('/.*video(.*)_.*/', '$1', $link);
            $id = preg_replace('/.*video.*_(.*)/', '$1', $link);

            $out = [
                'source' => 'vk',
                'link' => 'https://vk.com/video_ext.php?oid='.$oid.'&id='.$id.'&hd=4',
                'id' => $id
            ];
        }

        if (strpos($link, 'rutube.ru') !== false && strpos($link, 'embed') === false) {
            $id = preg_replace('/.*video\/(.*)/', '$1', $link);

            $out = [
                'source' => 'rutube',
                'link' => 'https://rutube.ru/play/embed/'.$id,
                'id' => $id
            ];
        }

        return $out;
    }

    // Вывод текста без тэгов и двойных кавычек
    function getClearText($text) {
        return str_replace('"', '', strip_tags($text));
    }

    // Удаление тэга <p>
    function deleteP($text) {
        return str_replace(['<p>', '</p>'], '', $text);
    }

    // Вывод телефона для ссылки
    function getThinPhone($phone) {
        return str_replace(['(', ')', '-', ' '], '', $phone);
    }

    /*
        Вывод типовой кнопки

        Существуют следующие классы для кнопок:
        - blue (по дефолту)
        - light
        - white
        - red

        Также есть три общих класса
        - active (копирует стили при наведении)
        - small
        - disable
    */
    function getBtn($params = []) {
        $text = $params['text'] ?? 'Подробнее';
        $link = $params['link'] ?? '';
        $class = $params['class'] ?? '';
        $attr = $params['attr'] ?? '';
        $image = $params['image'] ?? '';
        $position = $params['position'] ?? 'right';
        
        $tag = $link ? 'a' : 'button';
        $imageTag = '<img src="'.$image.'" alt="'.getClearText($text).'">';

        return '
            <'.$tag.($link ? ' href="'.$link.'"' : '').' class="btn '.$class.'" '.$attr.'>
                '.($image && $position == 'left' ? $imageTag : '').'
                <span>'.$text.'</span>
                '.($image && $position == 'right' ? $imageTag : '').'
            </'.$tag.'>
        ';
    }

    // Вывод карточки товара
    function getProductCard($params = []) {
        $name = $params['name'] ?? '';
        $image = $params['image'] ?? IMAGES.'empty.png';
        $article = $params['article'] ?? '-';
        $price = $params['price'] ?? '';
        $oldPrice = $params['oldPrice'] ?? '';
        $tag = $params['tag'] ?? '';
        $order = $params['order'] ?? false;
        $link = $params['link'] ?? '';
        $class = $params['class'] ?? '';

        $tagName = $tag == 'new' ? 'Новинка' : 'Популярное';
        ?>
        <article class="home__products-item <?=$class?>">
            <?php if ($tag) : ?>
                <div class="tags text_fz16">
                    <span class="<?=$tag?>">
                        <img src="<?=IMAGES?>icons/<?=$tag?>.svg" alt="<?=$tagName?>">
                        <?=$tagName?>
                    </span>
                </div>
            <?php endif; ?>
            <a href="<?=$link?>" class="preview">
                <img src="<?=$image?>" alt="<?=getClearText($name)?>">
            </a>
            <div class="article text_fz16">Артикул <?=$article?></div>
            <h3>
                <a href="<?=$link?>"><?=$name?></a>
            </h3>
            <div class="price text_fz24">
                <span class="<?=!$order ? 'text_red' : 'text_color'?>"><?=number_format($price, 0, '', ' ')?> ₽</span>
                <?php if ($oldPrice) : ?>
                    <span class="text_fz18"><?=number_format($oldPrice, 0, '', ' ')?> ₽</span>
                    <span class="text_fz16 text_color">-<?=ceil(($oldPrice - $price) / ($oldPrice / 100))?>%</span>
                <?php endif; ?>
            </div>
            <div class="bottom">
                <?php if(!$order) : ?>
                    <div class="counter">
                        <span class="decrease"></span>
                        <span class="num">1</span>
                        <span class="increase"></span>
                    </div>
                <?php endif; ?>
                <?=getBtn([
                    'text' => $order ? 'Под заказ' : 'В корзину',
                    'image' => IMAGES.'icons/'.($order ? 'car' : 'cart').'.svg',
                    'class' => ($order ? 'light ' : '').'small text_fz16'
                ])?>
            </div>
        </article>
        <?php
    }
?>