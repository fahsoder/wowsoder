<?php
session_start();
if(empty($_SESSION)){
	echo "<script>
			alert('You must login with a GM account to access this page!');
            location.href='../login.php';
            </script>";
 }else{
	$level = $_SESSION['level'];
	$lg = $_SESSION['lg'];
	if($level != 3){
		echo "<script>
			alert('This page is available only for GMs!');
            location.href='../login.php';
            </script>";
	}
 } 

include_once('../db/SQLI.class.php');


if(!empty($_POST['submit'])){
	$id = $_POST('id');
	$id_display = $_POST('id_display');
	$nome = $_POST('nome');
	$qualidade = $_POST('qualidade');
	$coute = $_POST('coute');
	$classeItem = $_POST('class');
	$tipoItem = $_POST('tipo_item');
	$bainha = $_POST('bainha');
	$material = $_POST('material');
	$valorCompra = $_POST('compra');
	$valorVenda = $_POST('venda');
	$armor = $_POST('armor');
	$slot = $_POST('equipado_slot');
	$damageMin = $_POST('dmin');
	$damageMax = $_POST('dmax');
	$delay = $_POST('speed');
	$socket1 = $_POST('socket1');
	$socket2 = $_POST('socket2');
	$socket3 = $_POST('socket3');
	$atributo1 = $_POST('atributo1');
	$valor1 = $_POST('valor_atributo1');
	$atributo2 = $_POST('atributo2');
	$valor2 = $_POST('valor_atributo2');
	$atributo3 = $_POST('atributo3');
	$valor3 = $_POST('valor_atributo3');
	$atributo4 = $_POST('atributo4');
	$valor4 = $_POST('valor_atributo4');
	$atributo5 = $_POST('atributo5');
	$valor5 = $_POST('valor_atributo5');
	$atributo6 = $_POST('atributo6');
	$valor6 = $_POST('valor_atributo6');
	$atributo7 = $_POST('atributo7');
	$valor7 = $_POST('valor_atributo7');
	$atributo8 = $_POST('atributo8');
	$valor8 = $_POST('valor_atributo8');
	$atributo9 = $_POST('atributo9');
	$valor9 = $_POST('valor_atributo9');
	$spell1 = $_POST('id_pell1');
	$tipo1 = $_POST('spell1');
	$spell2 = $_POST('id_pell2');
	$tipo2 = $_POST('spell2');
	$spell3 = $_POST('id_pell3');
	$tipo3 = $_POST('spell3');
	$itemLevel = $_POST('item_lvl');
	$lvlUsavel = $_POST('usavel_lvl');

	$insert = "insert INTO item_template (entry, quality, class, subclass, name, description, displayid,

                                               inventorytype, bonding, buycount, buyprice, sellprice, stackable, maxcount, sheath, material, itemlevel, itemset,

                                               randomproperty, randomsuffix, gemproperties, socketColor_1, socketContent_1, socketColor_2, socketContent_2,

                                               socketColor_3, socketContent_3, socketbonus, totemcategory, foodtype, scriptname, statsCount, stat_type1,

                                               stat_type2, stat_type3, stat_type4, stat_type5, stat_type6, stat_type7, stat_type8, stat_type9, stat_type10,

                                               stat_value1, stat_value2, stat_value3, stat_value4, stat_value5, stat_value6, stat_value7, stat_value8,

                                               stat_value9, stat_value10, scalingStatDistribution, scalingStatValue, AllowableClass, AllowableRace, flags,

                                               flagsExtra, bagFamily, flagsCustom, armor, block, armorDamageModifier, MaxDurability, holy_res, frost_res, fire_res,

                                               shadow_res, nature_res, arcane_res, rangedModRange, ammo_type,

                                               dmg_type1, dmg_min1, dmg_max1, dmg_type2, dmg_min2, dmg_max2, requiredLevel, requiredReputationFaction,

                                               requiredReputationRank, requiredSkill, requiredSkillRank, requiredSpell, requiredCityRank, requiredHonorRank, delay,

                                               duration, requiredDisenchantSkill, disenchantID, containerSlots, itemLimitCategory, SoundOverrideSubclass, holidayID,

                                               map, `area`, minMoneyLoot, maxMoneyLoot, pageMaterial, pageText, languageID, lockID, startQuest, verifiedBuild,

                                               spellID_1, spellTrigger_1, spellCharges_1, spellppmRate_1, spellCooldown_1, spellcategory_1, spellcategorycooldown_1,

                                               spellID_2, spellTrigger_2, spellCharges_2, spellppmRate_2, spellCooldown_2, spellcategory_2, spellcategorycooldown_2,

                                               spellID_3, spellTrigger_3, spellCharges_3, spellppmRate_3, spellCooldown_3, spellcategory_3, spellcategorycooldown_3,

                                               spellID_4, spellTrigger_4, spellCharges_4, spellppmRate_4, spellCooldown_4, spellcategory_4, spellcategorycooldown_4,

                                               spellID_5, spellTrigger_5, spellCharges_5, spellppmRate_5, spellCooldown_5, spellcategory_5, spellcategorycooldown_5)

                                               VALUES($id, $qualidade, $classeItem, $tipoItem, $nome, $coute, $id_display, $slot, 1, 1, $valorCompra, $valorVenda,

                                               1, 2, $bainha, $material, $itemLevel, 0, 0,

                                               0, 0, $socket1, 0, $socket2, 0, $socket3, 0, 0, 0, 0, '', 10, $atributo1, $atributo2, $atributo3, $atributo4,

                                               $atributo5, $atributo6, $atributo7, $atributo8, $atributo9, 0, $valor1, $valor2, $valor3, $valor4, $valor5,

                                               $valor6, $valor7, $valor8, $valor9, 0, 0, 0,

                                               -1, -1, 0, 0, 0, 0, $armor, 0, 0, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, $damageMin, $damageMax, 0, 0, 0, $lvlUsavel, 0, 0,

                                               0, 0, 0, 0, 0, $delay, 0,

                                               -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12340, $spell1, $tipo1, 0, 0, -1, 0, 0, $spell2, $tipo2, 0, 0, -1, 0, 0,

                                               $spell3, $tipo3, 0, 0,

                                               -1, 0, 0, 0, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, -1, 0, 0)";

$conn = new SQLI();
$inserir = $conn->executar($insert);

if($inserir){
	echo "<script>
	alert('Item registrado com sucesso!');
             location.href='edit-item.php';
	</script>";
}else{
	echo "<script>
	alert('Falha no registro do item!');
             location.href='edit-item.php';
	</script>";
}
}
?>




<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>Wow Soder</title>
    <meta charset = 'UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "author" content = "Fabiano Soder">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../css/bg.css">
    <link rel="stylesheet" href="../css/border.css">
    <link rel="icon" href="../img/wow_store.icon" type="image/ico">    
</head>
<body class="bg8">
    <?php 
		if($lg == 'en'){
			include_once('header-en.php');
		}else if($lg == 'pt'){
			include_once('header-pt.php');
		}	 
	?>           
    <div class = 'container-fluid ' style = "overflow: hidden;">
        <div class = "row">
            <div class = "col-md-3">
			<div class="jumbotron col-lg-15" style="width: 100%; padding-bottom: 120vh; position: absolute; opacity: 0.8;"></div>
                <div class="jumbotron col-lg-15" style="position: relative; background: none">
                    <form class="form-horizontal" action="edit-item.php" method="POST">	
                        <div>
                            <div class="border-1" style="text-align: center;">Informações do Item</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="login">ID:</label>						
                            <input type="text" name="id" autocomplete="off" class="form-control" id="id" placeholder="Ex: 100000">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Display ID:</label>						
                            <input type="text" name="id_display" value="<?php if(!empty($_POST['id_display'])){echo '$_POST[id_display]';} ?>" autocomplete="off" class="form-control" id="id_display" placeholder="Ex: 123">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="nome_completo" >Nome:</label>						
                            <input type="text" name="nome" value="<?php if(!empty($_POST['nome'])){echo '$_POST[nome]';} ?>" autocomplete="off" class="form-control" id="nome" placeholder="Ex: Thunderfury">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="email" >Classe:</label>						
                            <input type="text" name="class" value="<?php if(!empty($_POST['class'])){echo '$_POST[class]';} ?>" autocomplete="off" class="form-control" id="class" placeholder="">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Qualidade:</label>						
                            <input type="text" name="qualidade" value="<?php if(!empty($_POST['qualidade'])){echo '$_POST[qualidade]';} ?>" autocomplete="off" class="form-control" id="qualidade" placeholder="Ex: Rare">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Coute:</label>						
                            <input type="text" name="coute" value="<?php if(!empty($_POST['coute'])){echo '$_POST[coute]';} ?>" autocomplete="off" class="form-control" id="coute" placeholder="">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Tipo:</label>						
                            <input type="text" name="tipo_item" value="<?php if(!empty($_POST['tipo_item'])){echo '$_POST[tipo_item]';} ?>" autocomplete="off" class="form-control" id="tipo_item" placeholder="">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Bainha:</label>						
                            <input type="text" name="bainha" value="<?php if(!empty($_POST['bainha'])){echo '$_POST[bainha]';} ?>" autocomplete="off" class="form-control" id="bainha" placeholder="">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Material:</label>						
                            <input type="text" name="material" value="<?php if(!empty($_POST['material'])){echo '$_POST[material]';} ?>" autocomplete="off" class="form-control" id="material" placeholder="">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Valor de compra:</label>						
                            <input type="text" name="compra" value="<?php if(!empty($_POST['compra'])){echo '$_POST[compra]';} ?>" autocomplete="off" class="form-control" id="compra" placeholder="Ex: 1000">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Valor de venda:</label>						
                            <input type="text" name="venda" value="<?php if(!empty($_POST['venda'])){echo '$_POST[venda]';} ?>" autocomplete="off" class="form-control" id="venda" placeholder="Ex: 500">
                        </div>
                    
                </div>                    
			</div>
			<div class = "col-md-3">
			<div class="jumbotron col-lg-15" style="width: 100%; padding-bottom: 120vh; position: absolute; opacity: 0.8;"></div>
                <div class="jumbotron col-lg-15" style="position: relative; background: none">
                        <div>
                            <div class="border-1" style="text-align: center;">Características/Atributos</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="login">Armor:</label>						
                            <input type="text" name="armor" value="<?php if(!empty($_POST['armor'])){echo '$_POST[armor]';} ?>" autocomplete="off" class="form-control" id="armor" placeholder="Ex: 1500">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Dano Mínimo</label>						
                            <input type="text" name="dmin" value="<?php if(!empty($_POST['dmin'])){echo '$_POST[dmin]';} ?>" autocomplete="off" class="form-control" id="dmin" placeholder="Ex: 1000">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="nome_completo" >Dano Máximo:</label>						
                            <input type="text" name="dmax" value="<?php if(!empty($_POST['dmax'])){echo '$_POST[dmax]';} ?>" autocomplete="off" class="form-control" id="dmax" placeholder="Ex: 2000">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="email" >Delay/Speed:</label>						
                            <input type="text" name="speed" value="<?php if(!empty($_POST['speed'])){echo '$_POST[speed]';} ?>" autocomplete="off" class="form-control" id="speed" placeholder="1.50">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Socket 1:</label>						
                            <input type="text" name="socket1" value="<?php if(!empty($_POST['socket1'])){echo '$_POST[scoket1]';} ?>" autocomplete="off" class="form-control" id="socket1" placeholder="Ex: Meta Socket">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Socket 2:</label>						
                            <input type="text" name="socket2" value="<?php if(!empty($_POST['socket2'])){echo '$_POST[socket2]';} ?>" autocomplete="off" class="form-control" id="socket2" placeholder="Red Socket">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Socket 3:</label>						
                            <input type="text" name="socket3" value="<?php if(!empty($_POST['socket3'])){echo '$_POST[socket3]';} ?>" autocomplete="off" class="form-control" id="socket3" placeholder="Red Socket">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Slot Equipado:</label>						
                            <input type="text" name="equipado_slot" value="<?php if(!empty($_POST['equipado_slot'])){echo '$_POST[equipado_slot]';} ?>" autocomplete="off" class="form-control" id="equipado_slot" placeholder="Head">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Item Level:</label>						
                            <input type="text" name="item_lvl" value="<?php if(!empty($_POST['item_lvl'])){echo '$_POST[item_lvl]';} ?>" autocomplete="off" class="form-control" id="item_lvl" placeholder="258">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="email" >Requer o level:</label>						
                            <input type="text" name="usavel_lvl" value="<?php if(!empty($_POST['usavel_lvl'])){echo '$_POST[usavel_lvl]';} ?>" autocomplete="off" class="form-control" id="usavel_lvl" placeholder="Ex: 80">
                        </div>
                    
                </div>                    
			</div>
			<div class = "col-md-3">
			<div class="jumbotron col-lg-15" style="width: 100%; padding-bottom: 120vh; position: absolute; opacity: 0.8;"></div>
                <div class="jumbotron col-lg-15" style="position: relative; background: none">
                        <div>
                            <div class="border-1" style="text-align: center;">Atributos</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 1:</label>						
                            <input type="text" name="atributo1" value="<?php if(!empty($_POST['atributo1'])){echo '$_POST[atributo1]';} ?>" autocomplete="off" class="form-control" id="atributo1" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 1</label>						
                            <input type="text" name="valor_atributo1" value="<?php if(!empty($_POST['valor_atributo1'])){echo '$_POST[valor_atributo1]';} ?>" autocomplete="off" class="form-control" id="valor_atributo1" placeholder="Ex: 100">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 2:</label>						
                            <input type="text" name="atributo2" value="<?php if(!empty($_POST['atributo2'])){echo '$_POST[atributo2]';} ?>" autocomplete="off" class="form-control" id="atributo2" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 2</label>						
                            <input type="text" name="valor_atributo2" value="<?php if(!empty($_POST['valor_atributo2'])){echo '$_POST[valor_atributo2]';} ?>" autocomplete="off" class="form-control" id="valor_atributo2" placeholder="Ex: 100">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 3:</label>						
                            <input type="text" name="atributo3" value="<?php if(!empty($_POST['atributo3'])){echo '$_POST[atributo3]';} ?>" autocomplete="off" class="form-control" id="atributo3" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 3</label>						
                            <input type="text" name="valor_atributo3" value="<?php if(!empty($_POST['valor_atributo3'])){echo '$_POST[valor_atributo3]';} ?>" autocomplete="off" class="form-control" id="valor_atributo3" placeholder="Ex: 100">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 4:</label>						
                            <input type="text" name="atributo4" value="<?php if(!empty($_POST['atributo4'])){echo '$_POST[atributo4]';} ?>" autocomplete="off" class="form-control" id="atributo4" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 4</label>						
                            <input type="text" name="valor_atributo4" value="<?php if(!empty($_POST['valor_atributo4'])){echo '$_POST[valor_atributo4]';} ?>" autocomplete="off" class="form-control" id="valor_atributo4" placeholder="Ex: 100">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 5:</label>						
                            <input type="text" name="atributo5" value="<?php if(!empty($_POST['atributo5'])){echo '$_POST[atributo5]';} ?>" autocomplete="off" class="form-control" id="atributo5" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 5</label>						
                            <input type="text" name="valor_atributo5" value="<?php if(!empty($_POST['valor_atributo5'])){echo '$_POST[valor_atributo5]';} ?>" autocomplete="off" class="form-control" id="valor_atributo5" placeholder="Ex: 100">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 6:</label>						
                            <input type="text" name="atributo6" value="<?php if(!empty($_POST['atributo6'])){echo '$_POST[atributo6]';} ?>" autocomplete="off" class="form-control" id="atributo6" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 6</label>						
                            <input type="text" name="valor_atributo6" value="<?php if(!empty($_POST['valor_atributo6'])){echo '$_POST[valor_atributo6]';} ?>" autocomplete="off" class="form-control" id="valor_atributo6" placeholder="Ex: 100">
                        </div>
                </div>                    
			</div>
            <div class = "col-md-3">
                <div class="jumbotron col-lg-15" style="width: 100%; padding-bottom: 120vh; position: absolute; opacity: 0.8;"></div>
                <div class="jumbotron col-lg-15" style="position: relative; background: none">
                        <div>
                            <div class="border-1" style="text-align: center;">Atributos / Spells</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 7:</label>						
                            <input type="text" name="atributo7" value="<?php if(!empty($_POST['atributo7'])){echo '$_POST[atributo7]';} ?>" autocomplete="off" class="form-control" id="atributo7" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 7</label>						
                            <input type="text" name="valor_atributo7" value="<?php if(!empty($_POST['valor_atributo7'])){echo '$_POST[valor_atributo7]';} ?>" autocomplete="off" class="form-control" id="valor_atributo7" placeholder="Ex: 100">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 8:</label>						
                            <input type="text" name="atributo8" value="<?php if(!empty($_POST['atributo8'])){echo '$_POST[atributo8]';} ?>" autocomplete="off" class="form-control" id="atributo8" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 8</label>						
                            <input type="text" name="valor_atributo8" value="<?php if(!empty($_POST['valor_atributo8'])){echo '$_POST[valor_atributo8]';} ?>" autocomplete="off" class="form-control" id="valor_atributo8" placeholder="Ex: 100">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="login">Atributo 9:</label>						
                            <input type="text" name="atributo9" value="<?php if(!empty($_POST['atributo9'])){echo '$_POST[atributo9]';} ?>" autocomplete="off" class="form-control" id="atributo9" placeholder="Ex: Agility">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Valor Atributo 9</label>						
                            <input type="text" name="valor_atributo9" value="<?php if(!empty($_POST['valor_atributo9'])){echo '$_POST[valor_atributo9]';} ?>" autocomplete="off" class="form-control" id="valor_atributo9" placeholder="Ex: 100">
                        </div>
						
						<div class="form-group">
                            <label class="control-label border-2" for="login">ID Spell 1:</label>						
                            <input type="text" name="id_spell1" value="<?php if(!empty($_POST['id_spell1'])){echo '$_POST[id_spell1]';} ?>" autocomplete="off" class="form-control" id="id_spell1" placeholder="Ex: 2404">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Tipo Spell 1</label>						
                            <input type="text" name="spell1" value="<?php if(!empty($_POST['spell1'])){echo '$_POST[spell1]';} ?>" autocomplete="off" class="form-control" id="spell1" placeholder="Ex: Chance on Hit">
                        </div>
						
						<div class="form-group">
                            <label class="control-label border-2" for="login">ID Spell 2:</label>						
                            <input type="text" name="id_spell2" value="<?php if(!empty($_POST['id_spell2'])){echo '$_POST[id_spell2]';} ?>" autocomplete="off" class="form-control" id="id_spell2" placeholder="Ex: 2404">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Tipo Spell 2</label>						
                            <input type="text" name="spell2" value="<?php if(!empty($_POST['spell2'])){echo '$_POST[spell2]';} ?>" autocomplete="off" class="form-control" id="spell2" placeholder="Ex: Chance on Hit">
                        </div>
						<div class="form-group">
                            <label class="control-label border-2" for="login">ID Spell 3:</label>						
                            <input type="text" name="id_spell3" value="<?php if(!empty($_POST['id_spell3'])){echo '$_POST[id_spell3]';} ?>" autocomplete="off" class="form-control" id="id_spell3" placeholder="Ex: 2404">
                        </div>
                        <div class="form-group">
                            <label class="control-label border-2" for="senha" >Tipo Spell 3</label>						
                            <input type="text" name="spell3" value="<?php if(!empty($_POST['spell3'])){echo '$_POST[spell3]';} ?>" autocomplete="off" class="form-control" id="spell3" placeholder="Ex: Chance on Hit">
                        </div>
						</div>                    
				</div>
			</div>
		</div>
		<div class = "form-group text-center">
			<input type = "submit" name = "submit" id="2" value = 'Inserir' class="btn btn-success btn-lg col-lg-4">
		</div>
	</form>		                   
                
    <?php include_once('../footer_horizontal.php'); ?>
</body>
</html>