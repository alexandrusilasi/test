<style>
	div.mese div.img-wrapper,
	div.lemn div.img-wrapper,
	div.picioare div.img-wrapper,
	div.pigmenti-transparenti div.img-wrapper,
	div.pigmenti-metalici div.img-wrapper
	{
		padding-top: 100%;
		position: relative;
		margin-bottom: 20px;
	}
	div.mese div.img-wrapper img,
	div.lemn div.img-wrapper img,
	div.picioare div.img-wrapper img,
	div.pigmenti-transparenti div.img-wrapper img,
	div.pigmenti-metalici div.img-wrapper img
	{
		position: absolute;
		top: 0;
		left:0;
		width: 100% !important;
		height: 100% !important;
		object-position: 50%;
		object-fit: cover;
		transition: all 0.2s ease-out;
		cursor: pointer;
	}
	div.lemn,
	div.picioare div.coffee,
	div.picioare div.dining,
	div.picioare div.round,
	div.pigmenti-transparenti,
	div.pigmenti-metalici,
	div.date-contact
	{
		display: none;
	}
	div.lemn div.img-wrapper img
	{
		transition: all 0.2s ease-out;
		cursor: pointer;
	}
	div.lemn div.img-wrapper,
	div.picioare div.img-wrapper,
	div.pigmenti-transparenti div.img-wrapper,
	div.pigmenti-metalici div.img-wrapper,
	{
		margin-bottom: 20px;
	}
	div.mese div.img-wrapper img:hover,
	div.mese div.img-wrapper img.selected,
	div.lemn div.img-wrapper img.selected,
	div.lemn div.img-wrapper img:hover,
	div.picioare div.img-wrapper img.selected,
	div.picioare div.img-wrapper img:hover,
	div.pigmenti-transparenti div.img-wrapper img.selected,
	div.pigmenti-transparenti div.img-wrapper img:hover,
	div.pigmenti-metalici div.img-wrapper img.selected,
	div.pigmenti-metalici div.img-wrapper img:hover
	{
		-webkit-box-shadow: 0px 0px 30px 1px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 30px 1px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 30px 1px rgba(0,0,0,0.75);
	}
	div.mese h4,
	div.lemn h4,
	div.picioare h4,
	div.pigmenti-transparenti h4,
	div.pigmenti-metalici h4
	{
		margin-bottom: 45px;
	}
	div.date-contact input,
	div.date-contact textarea
	{
		width: 100%;
	}
</style>
<div class="row">
	<div class="col-md-12 mese">
		<h2>Alegeti tipul de masa</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/1_Tipul_mesei/Coffee_table.jpeg" />
				</div>
				<h4>Coffee Table</h4>
			</div>
			<div class="col-md-4">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/1_Tipul_mesei/Dining_table.jpeg" />
				</div>
				<h4>Dining Table</h4>
			</div>
			<div class="col-md-4">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/1_Tipul_mesei/round_sliced_coffee_table.jpeg" />
				</div>
				<h4>Round Sliced Coffee Table</h4>
			</div>
			<div class="col-md-12" style="text-align: center; padding-top: 50px;">
				<button type="button" class="btn mese-lemn"> Alegeti tipul lemnului <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>

	<div class="col-md-12 lemn">
		<h2>Alegeti tipul lemnului</h2>
		<div class="row">
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/bok_wood.jpeg" />
				</div>
				<h4>Bok Wood</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/cires.jpeg" />
				</div>
				<h4>Cires</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/dud.jpeg" />
				</div>
				<h4>Dud</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/jugastru.jpeg" />
				</div>
				<h4>Jugastru</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/mahon.jpeg" />
				</div>
				<h4>Mahon</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/mar_salbatic.jpeg" />
				</div>
				<h4>Mar Salbatic</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/maslin.jpeg" />
				</div>
				<h4>Maslin</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/nuc.jpeg" />
				</div>
				<h4>Nuc</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/padauk.jpeg" />
				</div>
				<h4>Padauk</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/parota.jpeg" />
				</div>
				<h4>Parota</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/salcam.jpeg" />
				</div>
				<h4>Salcam</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/stejar.jpeg" />
				</div>
				<h4>Stejar</h4>
			</div>
			<div class="col-md-2">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/2_Tipul_lemnului/ulm.jpeg" />
				</div>
				<h4>Ulm</h4>
			</div>
			<div class="col-md-12" style="text-align: center; padding-top: 50px;">
				<button type="button" class="btn lemn-mese"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Inapoi</button>
				<button type="button" class="btn lemn-picioare">Alegeti tipul picioarelor <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>

	<div class="col-md-12 picioare">
		<div class="coffee">
		<h2>Alegeti tipul picioarelor</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip1.jpeg" />
				</div>
				<h4>Tip 1</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip2.jpeg" />
				</div>
				<h4>Tip 2</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip3.jpeg" />
				</div>
				<h4>Tip 3</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip4.jpeg" />
				</div>
				<h4>Tip 4</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip5.jpeg" />
				</div>
				<h4>Tip 5</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip6.jpeg" />
				</div>
				<h4>Tip 6</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip7.jpeg" />
				</div>
				<h4>Tip 7</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip8.jpeg" />
				</div>
				<h4>Tip 8</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip9.jpeg" />
				</div>
				<h4>Tip 9</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip10.jpeg" />
				</div>
				<h4>Tip 10</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip11.jpeg" />
				</div>
				<h4>Tip 11</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_coffee_table/tip12.jpeg" />
				</div>
				<h4>Tip 12</h4>
			</div>
			<div class="col-md-12" style="text-align: center; padding-top: 50px;">
				<button type="button" class="btn picioare-lemn"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Inapoi</button>
				<button type="button" class="btn picioare-pigmenti-transparenti">Alegeti pigmentii transparenti <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</div>
		</div>
		</div>

		<div class="dining">
		<h2>Alegeti tipul picioarelor</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip1.jpeg" />
				</div>
				<h4>Tip 1</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip2.jpeg" />
				</div>
				<h4>Tip 2</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip3.jpeg" />
				</div>
				<h4>Tip 3</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip4.jpeg" />
				</div>
				<h4>Tip 4</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip5.jpeg" />
				</div>
				<h4>Tip 5</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip6.jpeg" />
				</div>
				<h4>Tip 6</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip7.jpeg" />
				</div>
				<h4>Tip 7</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip8.jpeg" />
				</div>
				<h4>Tip 8</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip9.jpeg" />
				</div>
				<h4>Tip 9</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip10.jpeg" />
				</div>
				<h4>Tip 10</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip11.jpeg" />
				</div>
				<h4>Tip 11</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_dining_table/tip12.jpeg" />
				</div>
				<h4>Tip 12</h4>
			</div>
			<div class="col-md-12" style="text-align: center; padding-top: 50px;">
				<button type="button" class="btn picioare-lemn"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Inapoi</button>
				<button type="button" class="btn picioare-pigmenti-transparenti">Alegeti pigmentii transparenti <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</div>
		</div>
		</div>

		<div class="round">
		<h2>Alegeti tipul picioarelor</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_round_sliced_coffee_table/tip1.jpeg" />
				</div>
				<h4>Tip 1</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_round_sliced_coffee_table/tip2.jpeg" />
				</div>
				<h4>Tip 2</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_round_sliced_coffee_table/tip3.jpeg" />
				</div>
				<h4>Tip 3</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/3_Tipul_picioarelor/Picioare_round_sliced_coffee_table/tip4.jpeg" />
				</div>
				<h4>Tip 4</h4>
			</div>
			<div class="col-md-12" style="text-align: center; padding-top: 50px;">
				<button type="button" class="btn picioare-lemn"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Inapoi</button>
				<button type="button" class="btn picioare-pigmenti-transparenti">Alegeti pigmentii transparenti <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</div>
		</div>
		</div>
	</div>

	<div class="col-md-12 pigmenti-transparenti">
		<h2>Alegeti tipul de pigmenti transparenti</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent1.jpg" />
				</div>
				<h4>Pigment Transparent 1</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent2.jpg" />
				</div>
				<h4>Pigment Transparent 2</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent3.jpg" />
				</div>
				<h4>Pigment Transparent 3</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent4.jpg" />
				</div>
				<h4>Pigment Transparent 4</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent5.jpg" />
				</div>
				<h4>Pigment Transparent 5</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent6.jpg" />
				</div>
				<h4>Pigment Transparent 6</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent7.jpg" />
				</div>
				<h4>Pigment Transparent 7</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent8.jpg" />
				</div>
				<h4>Pigment Transparent 8</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent9.jpg" />
				</div>
				<h4>Pigment Transparent 9</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent10.jpg" />
				</div>
				<h4>Pigment Transparent 10</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent11.jpg" />
				</div>
				<h4>Pigment Transparent 11</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent12.jpg" />
				</div>
				<h4>Pigment Transparent 12</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent13.jpg" />
				</div>
				<h4>Pigment Transparent 13</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/4_Pigmenti_transparenti/PigmentTransparent14.jpg" />
				</div>
				<h4>Pigment Transparent 14</h4>
			</div>
			<div class="col-md-12" style="text-align: center; padding-top: 50px;">
				<button type="button" class="btn pigmenti-transparenti-picioare"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Inapoi</button>
				<button type="button" class="btn pigmenti-transparenti-pigmenti-metalici">Alegeti pigmentii metalici <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>

	<div class="col-md-12 pigmenti-metalici">
		<h2>Alegeti tipul de pigmenti metalici</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic1.jpg" />
				</div>
				<h4>Pigment Metalic 1</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic2.jpg" />
				</div>
				<h4>Pigment Metalic 2</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic3.jpg" />
				</div>
				<h4>Pigment Metalic 3</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic4.jpg" />
				</div>
				<h4>Pigment Metalic 4</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic5.jpg" />
				</div>
				<h4>Pigment Metalic 5</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic6.jpg" />
				</div>
				<h4>Pigment Metalic 6</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic7.jpg" />
				</div>
				<h4>Pigment Metalic 7</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic8.jpg" />
				</div>
				<h4>Pigment Metalic 8</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic9.jpg" />
				</div>
				<h4>Pigment Metalic 9</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic10.jpg" />
				</div>
				<h4>Pigment Metalic 10</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic11.jpg" />
				</div>
				<h4>Pigment Metalic 11</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic12.jpg" />
				</div>
				<h4>Pigment Metalic 12</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic13.jpg" />
				</div>
				<h4>Pigment Metalic 13</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic14.jpg" />
				</div>
				<h4>Pigment Metalic 14</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic15.jpg" />
				</div>
				<h4>Pigment Metalic 15</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic16.jpg" />
				</div>
				<h4>Pigment Metalic 16</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic17.jpg" />
				</div>
				<h4>Pigment Metalic 17</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic18.jpg" />
				</div>
				<h4>Pigment Metalic 18</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic19.jpg" />
				</div>
				<h4>Pigment Metalic 19</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic20.jpg" />
				</div>
				<h4>Pigment Metalic 20</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic21.jpg" />
				</div>
				<h4>Pigment Metalic 21</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic22.jpg" />
				</div>
				<h4>Pigment Metalic 22</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic23.jpg" />
				</div>
				<h4>Pigment Metalic 23</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic24.jpg" />
				</div>
				<h4>Pigment Metalic 24</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic25.jpg" />
				</div>
				<h4>Pigment Metalic 25</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic26.jpg" />
				</div>
				<h4>Pigment Metalic 26</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic27.jpg" />
				</div>
				<h4>Pigment Metalic 27</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic28.jpg" />
				</div>
				<h4>Pigment Metalic 28</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic29.jpg" />
				</div>
				<h4>Pigment Metalic 29</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic30.jpg" />
				</div>
				<h4>Pigment Metalic 30</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic31.jpg" />
				</div>
				<h4>Pigment Metalic 31</h4>
			</div>
			<div class="col-md-3">
				<div class="img-wrapper">
					<img src="/autoinstalator/wordpressplugins4/wp-content/plugins/table-configurator/img/5_Pigmenti_metalici/PigmentMetalic32.jpg" />
				</div>
				<h4>Pigment Metalic 32</h4>
			</div>
			<div class="col-md-12" style="text-align: center; padding-top: 50px;">
				<button type="button" class="btn pigmenti-metalici-pigmenti-transparenti"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Inapoi</button>
				<button type="button" class="btn pigmenti-metalici-date-contact">Date contact <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>

	<div class="col-md-12 date-contact">
		<h2>Formular comanda</h2>
		<form id="comanda">
		<div class="row">
			<div class="col-md-6">
				<input type="text" name="nume" placeholder="Nume" required="required" />
			</div>
			<div class="col-md-6">
				<input type="email" name="email" placeholder="Email" required="required" />
			</div>
			<div class="col-md-6">
				<input type="number" name="telefon" placeholder="Telefon" required="required" />
			</div>
			<div class="col-md-6">
				<input type="text" name="tara" placeholder="Tara" required="required" />
			</div>
			<div class="col-md-12">
				<input type="text" name="adresa" placeholder="Adresa" required="required" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="number" name="lungime" placeholder="Lungime(cm)" min="0" step="0.1" required="required" />
			</div>
			<div class="col-md-4">
				<input type="number" name="latime" placeholder="Latime(cm)" min="0" step="0.1" required="required" />
			</div>
			<div class="col-md-4">
				<input type="number" name="inaltime" placeholder="Inaltime(cm)" min="0" step="0.1" required="required" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<textarea name="detalii" placeholder="Detalii suplimentare..." rows="5"></textarea>
				<input type="hidden" name="masa" required="required" />
				<input type="hidden" name="lemn" required="required" />
				<input type="hidden" name="picioare" required="required" />
				<input type="hidden" name="pigmenti-transparenti" required="required" />
				<input type="hidden" name="pigmenti-metalici" required="required" />
				<button type="button" class="btn date-contact-pigmenti-metalici"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Inapoi</button>
				<button type="submit" class="btn">Trimite comanda <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			</div>
		</div>
		</form>
	</div>
</div>

<script>
	var $ = jQuery.noConflict();

	$(document).ready(function(){
		$("div.mese img").on("click", function(){
			$("div.mese img").removeClass("selected");
			$(this).addClass("selected");

			$("input[name='masa']").val($(this).parents("div.col-md-4").find("h4").html());
		});
		$("div.lemn img").on("click", function(){
			$("div.lemn img").removeClass("selected");
			$(this).addClass("selected");

			$("input[name='lemn']").val($(this).parents("div.col-md-2").find("h4").html());
		});
		$("div.picioare img").on("click", function(){
			$("div.picioare img").removeClass("selected");
			$(this).addClass("selected");

			$("input[name='picioare']").val($(this).parents("div.col-md-3").find("h4").html());
		});
		$("div.pigmenti-transparenti img").on("click", function(){
			$("div.pigmenti-transparenti img").removeClass("selected");
			$(this).addClass("selected");

			$("input[name='pigmenti-transparenti']").val($(this).parents("div.col-md-3").find("h4").html());
		});
		$("div.pigmenti-metalici img").on("click", function(){
			$("div.pigmenti-metalici img").removeClass("selected");
			$(this).addClass("selected");

			$("input[name='pigmenti-metalici']").val($(this).parents("div.col-md-3").find("h4").html());
		});


		$("button.mese-lemn").on("click" , function(){
			if($("input[name='masa']").val() != '')
			{
				$("div.lemn").slideDown();
				$("div.mese").slideUp();
			}
			else
			{
				alert("Va rugam sa selectati tipul de masa!");
				return false;
			}
		});



		$("button.lemn-mese").on("click" , function(){
			$("div.mese").slideDown();
			$("div.lemn").slideUp();
		});
		$("button.lemn-picioare").on("click" , function(){
			if($("input[name='lemn']").val() != '')
			{
				if($("input[name='masa']").val() == 'Coffee Table')
				{
					$("div.picioare div.dining, div.picioare div.round").slideUp();
					$("div.picioare div.coffee").slideDown();
				}
				if($("input[name='masa']").val() == 'Dining Table')
				{
					$("div.picioare div.coffee, div.picioare div.round").slideUp();
					$("div.picioare div.dining").slideDown();
				}
				if($("input[name='masa']").val() == 'Round Sliced Coffee Table')
				{
					$("div.picioare div.coffee, div.picioare div.dining").slideUp();
					$("div.picioare div.round").slideDown();
				}
				$("div.lemn").slideUp();
			}
			else
			{
				alert("Va rugam sa selectati tipul lemnului!");
				return false;
			}
		});



		$("button.picioare-lemn").on("click" , function(){
			$("div.lemn").slideDown();
			$("div.picioare div.coffee, div.picioare div.dining, div.picioare div.round").slideUp();
		});
		$("button.picioare-pigmenti-transparenti").on("click" , function(){
			if($("input[name='picioare']").val() != '')
			{
				$("div.pigmenti-transparenti").slideDown();
				$("div.picioare div.coffee, div.picioare div.dining, div.picioare div.round").slideUp();
			}
			else
			{
				alert("Va rugam sa selectati tipul de picioare!");
				return false;
			}
		});



		$("button.pigmenti-transparenti-picioare").on("click" , function(){
			if($("input[name='masa']").val() == 'Coffee Table')
			{
				$("div.picioare div.dining, div.picioare div.round").slideUp();
				$("div.picioare div.coffee").slideDown();
			}
			if($("input[name='masa']").val() == 'Dining Table')
			{
				$("div.picioare div.coffee, div.picioare div.round").slideUp();
				$("div.picioare div.dining").slideDown();
			}
			if($("input[name='masa']").val() == 'Round Sliced Coffee Table')
			{
				$("div.picioare div.coffee, div.picioare div.dining").slideUp();
				$("div.picioare div.round").slideDown();
			}
			$("div.pigmenti-transparenti").slideUp();
		});
		$("button.pigmenti-transparenti-pigmenti-metalici").on("click" , function(){
			$("div.pigmenti-metalici").slideDown();
			$("div.pigmenti-transparenti").slideUp();
		});



		$("button.pigmenti-metalici-pigmenti-transparenti").on("click" , function(){
			$("div.pigmenti-transparenti").slideDown();
			$("div.pigmenti-metalici").slideUp();
		});
		$("button.pigmenti-metalici-date-contact").on("click" , function(){
			$("div.date-contact").slideDown();
			$("div.pigmenti-metalici").slideUp();
		});


		$("button.date-contact-pigmenti-metalici").on("click" , function(){
			$("div.pigmenti-metalici").slideDown();
			$("div.date-contact").slideUp();
		});		

	});
</script>