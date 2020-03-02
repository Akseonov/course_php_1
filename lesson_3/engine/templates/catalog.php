Каталог

<?foreach ($catalog as $item):?>
<div class="item">
    <h3><?=$item['name']?></h3>
    <p><?=$item['price']?></p>
    <button class="buy" @click="handleBuyClick(id)">Buy</button>
</div>
<?endforeach;?>