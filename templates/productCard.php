<?php
$products = [
    [
        'title'    => 'Dámská halenka Tom Tailor v bílo-modré barvě se vzorem',
        'variants' => ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
        'selected' => 'M',
    ],
    [
        'title'    => 'MacBook Pro 15" 2,5 GHz s Retina displejem, 512 GB (2015)',
        'variants' => ['256 GB', '512 GB', '1 TB', '2 TB'],
        'selected' => '512 GB',
    ],
    [
        'title'    => 'iPhone 5s',
        'variants' => ['Space Gray', 'Stříbrná', 'Zlatá'],
        'selected' => 'Space Gray',
    ],
];
$product = $products[array_rand($products)];
?>
<article class="ProductCard">
    <a href="#product" class="ProductCard-link" aria-label="<?php echo htmlspecialchars($product['title'], ENT_QUOTES); ?>"></a>
    <div class="ProductCard-header">
        <div class="ProductCard-imageWrapper">
            <img src="public/images/product-<?php echo rand(0,1); ?>.png" width="652" height="560" alt="" class="ProductCard-image ProductCard-image--primary" loading="lazy">
        </div>
        <div class="ProductCard-tertiaryBadges">
            <div class="Badge Badge--rectangle" style="--background: #132736">Novinka</div>
            <div class="Badge Badge--rectangle" style="--background: #00519E">Doprodej</div>
            <div class="Badge Badge--rectangle" style="--background: #D91242">Sleva -18&nbsp;%</div>
        </div>
        <div class="ProductCard-variants" aria-hidden="true">
            <div class="ProductCard-variantsLabel">Zvolte si variantu:</div>
            <div class="ProductCard-variantsList">
                <?php foreach ($product['variants'] as $variant): ?>
                    <?php $selected = $variant === $product['selected']; ?>
                    <button type="button" class="ProductCard-variant<?php echo $selected ? ' is-selected' : ''; ?>" tabindex="-1">
                        <?php echo htmlspecialchars($variant); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="ProductCard-body">
        <h2 class="ProductCard-title">
            <?php echo htmlspecialchars($product['title']); ?>
        </h2>
    </div>
    <div class="ProductCard-footer">
        <div class="ProductCard-priceWrapper">
            <span class="ProductCard-price">1&nbsp;199&nbsp;Kč</span>
            <s class="ProductCard-priceOld">2&nbsp;390&nbsp;Kč</s>
        </div>
    </div>
</article>
