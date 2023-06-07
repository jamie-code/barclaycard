<?php
if(isset($_SESSION['access_level'])){
    if($_SESSION['access_level']==1){?>
        <h3><a href='/admin/addservice.php'>Add a service</a></h3>
<?php
    } 
}
foreach($services as $s){
?>
<article class="product">
    <img src="/product.png" alt="product name">
    <section class="details">
    <h2><?=$s['service_name']?></h2>
    <p class="price">Price: £<?=$s['service_price']?></p>
    <p class="description"><?=$s['service_desc']?></p>
    <button class="back"><a class="back" href='/admin/editservice.php?id=<?=$s['id']?>'>Edit</a></button>
    <button class="back"><a class="back" href='/admin/services.php?delid=<?=$s['id']?>'>Delete</a></button>
    <?php
    if(isset($_SESSION['access_level'])){
        if($_SESSION['access_level']==1){?>
            <button><a href='/admin/editservice.php?id=<?=$s['id']?>'>Edit</a></button>
            <button><a href='/admin/services.php?delid=<?=$s['id']?>'>Delete</a></button>
    <?php } 
    } ?>
    </section>

</article>
<?php
}
?>