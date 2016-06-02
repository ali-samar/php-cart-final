<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<h1 class="ui header">My Super Products</h1>
	<hr class="ui divider">
	<section class="ui three stackable cards">
		<!-- boucle des produits ui card -->
		<?php foreach ($products as $product) : ?>
			<div class="ui card">
	  			<div class="image">
	    			<img src="<?= $product->picture?>">
	  			</div>
				<div class="content">
	    			<a class="header"><?= $product->name?></a>
				</div>
	  			<div class="extra content"><?= $product->price?> &euro;
					<form method="post" action="/cart/add">
						<input type="hidden" name="product" value="<?= $product->id ?>"/> 
						<button class="ui button right floated">Ajouter au panier</button>
	    			</form>
	      		</div>
			</div>
		<?php endforeach; ?>
	</section>
</div>