<?php
$this->layout('layout', ['title' => 'Super boutique']) 
?>
<div class="ui container">
	<h1 class="ui center aligned header">Récapitulatif de votre commande.</h1>
	<h3><?=$customer->first_name?> , <?=$customer->last_name?></h3>
	<table class="ui unstackable table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Image</th>
				<th class="right aligned">Price</th>
			</tr>
		</thead>
		<?php foreach($order as $o) : ?>
		<tbody>
			<tr>
				<td><?=$o->name?></td>
				<td><img src="<?=$o->picture?>" width="30px" height="30px"></td>
				<td class="right aligned"><?=$o->price?> &euro;</td>
			</tr>
		</tbody>
	<?php endforeach; ?>
</table>
<div class="sixteen wide column center aligned">
			<div class="ui list"><br>
				<h4 class="item">Montant total : <?=Cart::total()?> &euro;</h4>
				<h4 classs="item">Nombre de produits : <?=Cart::count()?> </h4>
			</div>
		</div>
<a href="/logout" class="ui button right floated">Annuler</a>
<form action="/cart/confirmation" method="POST">
	<input type="submit" value="Valider" class="ui button right floated"/>
	<input type="hidden" name="customer_id" value="<?=$customer->id?>"/>
</form>
</div>