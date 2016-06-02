<?php
	$this->layout('layout', ['title' => 'Super boutique']) 
?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="column">
			<h1 class="ui container">Mon Panier</h1>
			<!-- une boucle ! -->
			<table class="ui unstackable table">
  				<thead>
    				<tr>
    					<th>Name</th>
    					<th>Image</th>
    					<th class="right aligned">Price</th>
    				</tr>
  				</thead>
  				<?php foreach($products as $product) : ?>
					<tbody>
		    			<tr>
						    <td><?=$product->name?></td>
						    <td><img src="<?=$product->picture?>" width="30px" height="30px"></td>
						    <td class="right aligned"><?=$product->price?> &euro;</td>
						</tr>
		  			</tbody>
				<?php endforeach; ?>
			</table>
		</div>
		<div class="column">
			<div class="ui list">
				<br><br>
				<h4 class="item header">Montant total : <?=Cart::total()?> &euro;</h4>
				<h4 classs="item header">Nombre de produits : <?=Cart::count()?></h4>
				<div class="item">
					<a href="/cart/checkout" class="ui button">Finaliser ma commande</a>
				</div>
			</div>
		</div>
	</div>
</div>

