<?php
$this->layout('layout', ['title' => 'Super boutique']) 
?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="sixteen wide column center aligned">
			<div class="ui list"><br>
				<h1>Récapitulatif de ma commande</h1>
				<h4 class="item">Montant total : <?=Cart::total()?> &euro;</h4>
				<h4 classs="item">Nombre de produits : <?=Cart::count()?> </h4>
			</div>
		</div>
		<form class="ui form column sixteen wide" method="POST">
			<div class="ui clearing divider"></div>
			<div class="field">
				<div class="two fields">
					<div class="field"><br>
						<label>First Name</label>
						<input placeholder="First Name" type="text">
					</div>
					<div class="field"><br>
						<label>Last Name</label>
						<input placeholder="Last Name" type="text">
					</div>
				</div>
			</div>
			<div class="field">
				<div class="two fields">
					<div class="field">
						<label>Adress</label>
						<input placeholder="Adress" type="text">
					</div>
					<div class="two wide field">
						<label>Postcode</label>
						<input placeholder="Postcode" type="text">
					</div>
				</div>
			</div>
			<div class="four wide field">
				<label>Phone</label>
				<input type="text" name="phone" placeholder="Phone">
			</div>
		</form>	
	</div><br>
	<a href="/cart/valid" class="ui inverted green button right floated">Terminer la commande</a>
</div>



