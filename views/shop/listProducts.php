<div style="position:relative">
    <form method="get" action="<?=BASE_URL?>shop/search">
        <input name="search" type="text" placeholder="Search..." style="position: absolute;height: 33px;padding-left: 9px;font-size:15px;width: 242px;border-radius: 4px 0 0 4px;border: none;">
        <button type="submit" id="searchProducts" style="background: none;border: none;margin-left: 241px"><img src="/public/img/search.png" style="height: 36px;margin-top: -2px"></button>
    </form>
</div>
<?php include (__DIR__ . '/menuProducts.php');?>
<div class="container">
    <!-- Codrops top bar -->
    <div class="main">
        <div id="mi-slider" class="mi-slider">
            <ul>
                <?php if (!empty($listProducts)) : ?>
                    <?php foreach ($listProducts as $list) : ?>
                        <?php if (!empty($list['id_categories']) && $list['id_categories'] != 0) : ?>
                            <li><a href="/shop/detail-product/<?= $list['id'] ?>/<?= $list['alias'] ?><?= HTML ?>">
                                    <img src="<?= BASE_DIR ?>/products/<?= $list['image'] ?>"
                                         alt="<?= $list['name'] ?>"><br>
                                    <a style="font-size: 14px"><?= $list['name'] ?></a>
                                    <h5 style="color: #888">U$<?= $list['price'] ?></h5>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <?php
    if ($currentPage > 1 && $totalPage > 1) : ?>
        <a style="color: white" href="/shop/list-all-products?page=<?=($currentPage-1)?>"> << </a>
    <?php endif; ?>
    <?php
    for ($i = 1; $i <= $totalPage; $i++) {
        echo "<a style=\"color: white\" class=\"page\" href='/shop/list-all-products?page=$i'> $i </a>";
    }
    ?>
    <?php if ($totalPage > 1 && $totalPage > $currentPage) : ?>
        <a style="color: white" href="/shop/list-all-products?page=<?=($currentPage+1)?>"> >> </a>
    <?php endif; ?>
</div><!-- /container -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#mi-slider').catslider();
    });
</script>

