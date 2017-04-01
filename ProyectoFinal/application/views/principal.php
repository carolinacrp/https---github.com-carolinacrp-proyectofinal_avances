<?php 
session_start();


plantilla::inicio();

$todosanuncios = cargar_anuncios();


$url = base_url('');
 ?>


 <div class="product"> 
		<div class="container">
			<div class="product-top">
				<div class="product-one">

<?php foreach ($todosanuncios as $anuncio): ?>
	
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="<?php echo "{$url}/publicar/ver/{$anuncio->id}";?>" class="mask"><img style="height: 150px;" class="img-responsive zoom-img" src="<?php echo "{$url}fotos/{$anuncio->id}0.jpg"; ?>" alt="" /></a>
							<div class="product-bottom">
								<h3><?php echo "$anuncio->nombre"; ?></h3>
								
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ <?php echo "$anuncio->peso"; ?></span></h4>
							</div>
							<div class="srch">
								<span>-<?php echo "$anuncio->id"; ?></span>
							</div>
						</div>
					</div>


<?php endforeach ?>

	</div>
	</div>
	</div>
	</div>