  <form name="npc_add" method="post" action="index.php?editor=npc&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&action=26">
    <div class="edit_form">
      <div class="edit_form_header">
        Add an NPC to <?=$currzone?>
      </div>
      <div class="edit_form_content">
        <center>
          <fieldset style="text-align: left;">
            <legend><strong><font size="4">General</font></strong></legend>
            <table width="100%">
              <tr>
                <td valign="top">
                  Suggested NPCID:<br/>
                  <input type="text" name="id" value="<?=$suggestedid?>"/><br/><br/>
                  NPC Name: <br/><input type="text" name="name" size="40" value=""/><br/><br/>
                  Title:    <br/><input type="text" name="lastname" size="40" value=""/><br/><br/>
                  Level:    <br/><input type="text" name="level" size="10" value="<?=$level?>"/><br/><br/>
                  Max Level:<br/><input type="text" name="maxlevel" size="10" value="0"/><br/><br/>
                  <td valign="top">
                    Race:<br/>
                    <select name="race" style="width: 265px;">
<?foreach($races as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == 1)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                    </select><br/><br/>
                    Class:<br/>
                    <select name="class" style="width: 265px;">
<?foreach($classes as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == 1)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                    </select><br/><br/>
                    Bodytype:<br/>
                    <select name="bodytype" style="width: 265px;">
<?foreach($bodytypes as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == 1)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                    </select><br/><br/>
                    Gender:<br/>
                    <select name="gender">
<?foreach($genders as $key=>$value):?>
                      <option value="<?=$key?>"><?=$value?></option>
<?endforeach;?>
                    </select>
                  </td>
                </td>
              </tr>
            </table>
          </fieldset><br/>
        </center>
        <fieldset>
          <legend><strong><font size="4">Vitals</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="17%">HP:       <br/><input type="text" name="hp" size="10" value="<?=$hp?>"/></td>
              <td align="left" width="17%">Mana:     <br/><input type="text" name="mana" size="10" value="<?=$mana?>"/></td>
              <td align="left" width="17%">AC:       <br/><input type="text" name="AC" size="10" value="<?=$ac?>"/></td>
              <td align="left" width="17%">Scalerate:<br/><input type="text" name="scalerate" size="10" value="100"/></td>
              <td align="left" width="16%">Runspeed: <br/><input type="text" name="runspeed" size="10" value="1.25"/></td>
			  <td align="left" width="16%">Walkspeed: <br/><input type="text" name="walkspeed" size="10" value="0.677"/></td>
            </tr>
              <tr>
              <td align="left">ATK:      <br/><input type="text" name="ATK" size="10" value="0"/></td>
              <td align="left">Accuracy: <br/><input type="text" name="Accuracy" size="10" value="0"/></td>
              <td align="left">
                See Invis:<br/>
                <select name="see_invis">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
              </td>
              <td align="left">
                See ITU:<br/>
                <select name="see_invis_undead">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
              </td>
              <td align="left">
                See Sneak:<br/>
                <select name="see_sneak">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
              </td>
              <td align="left">
                See IH:<br/>
                <select name="see_improved_hide">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
              </td>
              <td>&nbsp;</td>

            </tr>
          </table>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Stats</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="14%">STR:<br/><input type="text" name="STR" size="5" value="<?=$stats?>"/></td>
              <td align="left" width="14%">STA:<br/><input type="text" name="STA" size="5" value="<?=$stats?>"/></td>
              <td align="left" width="14%">DEX:<br/><input type="text" name="DEX" size="5" value="<?=$stats?>"/></td>
              <td align="left" width="14%">AGI:<br/><input type="text" name="AGI" size="5" value="<?=$stats?>"/></td>
              <td align="left" width="14%">INT:<br/><input type="text" name="_INT" size="5" value="<?=$stats?>"/></td>
              <td align="left" width="15%">WIS:<br/><input type="text" name="WIS" size="5" value="<?=$stats?>"/></td>
              <td align="left" width="15%">CHA:<br/><input type="text" name="CHA" size="5" value="<?=$stats?>"/></td>
            </tr>
          </table>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Resists</font></strong></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td colspan="7">1 Resist = 0.5%<br/>250 Resist = 100%</td>
              </tr>
              <tr>
                <td align="left" width="20%">MR:      <br/><input type="text" name="MR" size="5" value="<?=$resists?>"/></td>
                <td align="left" width="20%">CR:      <br/><input type="text" name="CR" size="5" value="<?=$resists?>"/></td>
                <td align="left" width="20%">FR:      <br/><input type="text" name="FR" size="5" value="<?=$resists?>"/></td>
                <td align="left" width="20%">PR:      <br/><input type="text" name="PR" size="5" value="<?=$resists?>"/></td>
                <td align="left" width="20%">DR:      <br/><input type="text" name="DR" size="5" value="<?=$resists?>"/></td>
              </tr>
            </table>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Combat</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
                <td align="left" width="20%">Min Dmg:     <br/><input type="text" name="mindmg" size="5" value="0"></td>
                <td align="left" width="20%">HP Regen:    <br/><input type="text" name="hp_regen_rate" size="5" value="0"></td>
                <td align="left" width="20%">Combat HP Regen:<br/><input type="text" name="combat_hp_regen" size="5" value="0"></td>
				        <td align="left" width="20%">Aggroradius: <br/><input type="text" name="aggroradius" size="5" value="0"></td>
                <td align="left" width="20%">Attack Count:<br/><input type="text" name="attack_count" size="5" value="0"></td>
              </tr>
              </tr>
                <td align="left" width="20%">Max Dmg:     <br/><input type="text" name="maxdmg" size="5" value="0"></td>
                <td align="left" width="20%">MP Regen:    <br/><input type="text" name="mana_regen_rate" size="5" value="0"></td>
                <td align="left" width="20%">Combat MP Regen:<br/><input type="text" name="combat_mana_regen" size="5" value="0"></td>
                <td align="left" width="20%">Assistradius:<br/><input type="text" name="assistradius" size="5" value="0"></td>
                <td align="left" width="20%">Atk Delay:   <br/><input type="text" name="attack_delay" size="5" value="0"></td>
               </tr>
              </tr>
                <td align="left" width="20%">Ignore Distance:     <br/><input type="text" name="ignore_distance" size="5" value="0"></td>
                <td align="left" width="20%">Heal Scale:  <br/><input type="text" name="healscale" size="5" value="0">%</td>
				        <td align="left" width="20%">Spell Scale: <br/><input type="text" name="spellscale" size="5" value="0">%</td>
				        <td align="left" width="20%">Slow Mit:    <br/><input type="text" name="slow_mitigation" size="5" value="0"></td>
                <td align="left" width="20%">&nbsp;</td>
             </tr>
          </table>
          <center>
            <table cellpadding="20px">
              <tr>
                <td valign="top" align="left">
                  Summon (1): <br><input type="text" name="1" size="10"><br>
                  Enrage (2):  <br><input type="text" name="2" size="10"><br>
                  Rampage (3):  <br><input type="text" name="3" size="10"><br>
                  AE Rampage (4):  <br><input type="text" name="4" size="10"><br>
                  Flurry (5):  <br><input type="text" name="5" size="10"><br>
                  Ranged Attack (11):  <br><input type="text" name="11" size="10"><br>
                  Tunnel Vision (29): <br><input type="text" name="29" size="10"><br>
                  Leashed (32): <br><input type="text" name="32" size="10"><br>
                  Tethered (33): <br><input type="text" name="33" size="10"><br>
		              Flee Percent (37): <br><input type="text" name="37" size="10"><br>
		              Chase Distance (40): <br><input type="text" name="40" size="10"><br>
                  Corpse Camper (49):<br/><input type="text" name="49" size="10"><br/>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="6" value="6,1^"/>  Triple Attack<br>
                  <input type="checkbox" name="7" value="7,1^"/>  Innate Dual Wield<br>
                  <input type="checkbox" name="10" value="10,1^"/>  Magic Attack<br>
                  <input type="checkbox" name="9" value="9,1^"/>  Bane Attack<br>
                  <input type="checkbox" name="8" value="8,1^"/>  Do Not Equip Items<br>
                  <input type="checkbox" name="12" value="12,1^"/>  Unslowable<br>
                  <input type="checkbox" name="50" value="50,1^"/>  Reverse Slow<br>
                  <input type="checkbox" name="51" value="51,1^"/>  Immune to Haste<br>
                  <input type="checkbox" name="13" value="13,1^"/>  Unmezable<br>
                  <input type="checkbox" name="14" value="14,1^"/>  Uncharmable<br>
                  <input type="checkbox" name="15" value="15,1^"/>  Unstunable<br>
                  <input type="checkbox" name="16" value="16,1^"/>  Unsnareable<br>
                  <input type="checkbox" name="17" value="17,1^"/>  Unfearable<br>
                  <input type="checkbox" name="31" value="31,1^"/>  Unpacifiable<br>
                  <input type="checkbox" name="18" value="18,1^"/>  Immune to Dispell<br>
                  <input type="checkbox" name="35" value="35,1^"/>  No Harm from Players<br>
                  <input type="checkbox" name="44" value="44,1^"/>  Use Warrior SKills<br>
                  <input type="checkbox" name="47" value="47,1^"/>  Block handins if KOS<br/>
		              <input type="checkbox" name="39" value="39,1^"/>  Disable Melee<br>
                  <input type="checkbox" name="48" value="48,1^"/>  PC Deathblow Creates Corpse<br/>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="26" value="26,1^"/>  Resist Ranged Spells<br>
                  <input type="checkbox" name="28" value="28,1^"/>  Immune to Taunt<br>
                  <input type="checkbox" name="19" value="19,1^"/>  Immune to Melee<br>
                  <input type="checkbox" name="20" value="20,1^"/>  Immune to Magic<br>
                  <input type="checkbox" name="21" value="21,1^"/>  Immune to Fleeing<br>
                  <input type="checkbox" name="23" value="23,1^"/>  Immune to non-Magical Melee<br>
                  <input type="checkbox" name="22" value="22,1^"/>  Immune to non-Bane Melee<br>
                  <input type="checkbox" name="52" value="52,1^"/>  Immune to Disarm<br>
                  <input type="checkbox" name="53" value="53,1^"/>  Immune to Riposte<br>
                  <input type="checkbox" name="24" value="24,1^"/>  Will Not Aggro<br>
                  <input type="checkbox" name="25" value="25,1^"/>  Immune to Aggro<br>
                  <input type="checkbox" name="27" value="27,1^"/>  See through Feign Death<br>
                  <input type="checkbox" name="npc_aggro" value="1"/> Can Aggro NPCs<br>
                  <input type="checkbox" name="pc_aggro" value="1"/> Always Aggro PCs<br>
                  <input type="checkbox" name="30" value="30,1^"/>  Does NOT buff/heal friends<br>
		              <input type="checkbox" name="36" value="36,1^"/>  Always Flee<br>
                  <input type="checkbox" name="45" value="45,1^"/>  Always Flee if Low Con<br/>
                  <input type="checkbox" name="34" value="34,1^"/>  Permaroot Flee<br/>
                  <input type="checkbox" name="46" value="46,1^"/>  No Loitering<br/>
  		            <input type="checkbox" name="38" value="38,1^"/>  Allow Beneficial<br>
		              <input type="checkbox" name="41" value="41,1^"/>  Allow Tank<br>
		              <input type="checkbox" name="42" value="42,1^"/>  Proximity Aggro<br>
                  <input type="checkbox" name="43" value="43,1^"/>  Always Call for Help<br>
                </td>
              </tr>
            </table>
          </center>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Appearance</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="17%">Size:       <br/><input type="text" name="size" size="10" value="5"></td>
              <td align="left" width="17%">Face:       <br/><input type="text" name="face" size="10" value="0"></td>
              <td align="left" width="16%">Haircolor:  <br/><input type="text" name="luclin_haircolor" size="10" value="0"></td>
              <td align="left" width="16%">Hairstyle:  <br/><input type="text" name="luclin_hairstyle" size="10" value="0"></td>
              <td align="left" width="17%">Eyecolor:  <br/><input type="text" name="luclin_eyecolor" size="10" value="0"></td>
              <td align="left" width="17%">Eyecolor2: <br/><input type="text" name="luclin_eyecolor2" size="10" value="0"></td>
            </tr>
            <tr>

              <td align="left" width="17%">Beard:     <br/><input type="text" name="luclin_beard" size="10" value="0"></td>
              <td align="left" width="17%">Beardcolor:<br/><input type="text" name="luclin_beardcolor" size="10" value="0"></td>
              <td align="left" width="16%">Melee1:    <br/><input type="text" name="d_melee_texture1" size="10" value="0"></td>
              <td align="left" width="16%">Melee2:    <br/><input type="text" name="d_melee_texture2" size="10" value="0"></td>
              <td align="left" width="17%">Armor Tint ID:    <br/><input type="text" name="armortint_id" size="10" value="0"></td>
		          <td align="left" width="17%">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" width="17%">Armor Red:  <br/><input type="text" name="armortint_red" size="10" value="0"></td>
              <td align="left" width="17%">Armor Green:<br/><input type="text" name="armortint_green" size="10" value="0"></td>
              <td align="left" width="17%">Armor Blue: <br/><input type="text" name="armortint_blue" size="10" value="0"></td>
			        <td align="left" width="17%">Light Source: <br/><input type="text" name="light" size="10" value="0"></td>
              <td align="left" width="16%">Texture:    <br/><input type="text" name="texture" size="10" value="0"></td>
              <td align="left" width="16%">HelmTexture:<br/><input type="text" name="helmtexture" size="10" value="0"></td>
             </tr>
             <tr>
              <td align="left" width="16%">FeetTexture:  <br/><input type="text" name="feettexture" size="10" value="0"></td>
              <td align="left" width="16%">ChestTexture:  <br/><input type="text" name="chesttexture" size="10" value="0"></td>
              <td align="left" width="17%">ArmTexture:       <br/><input type="text" name="armtexture" size="10" value="0"></td>
              <td align="left" width="17%">BracerTexture:    <br/><input type="text" name="bracertexture" size="10" value="0"></td>
              <td align="left" width="17%">HandTexture:<br/><input type="text" name="handtexture" size="10" value="0"></td>
              <td align="left" width="17%">LegTexture:       <br/><input type="text" name="legtexture" size="10" value="0"></td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="50%">
                Melee1 Type:<br/>
                <select name="prim_melee_type" style="width: 200px;">
<?foreach($skilltypes as $key=>$value):?>
                  <option value="<?=$key?>"<?echo ($key == 28)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                </select>
              </td>
              <td align="left" width="50%">
                Melee2 Type:<br/>
                <select name="sec_melee_type" style="width: 200px;">
<?foreach($skilltypes as $key=>$value):?>
                  <option value="<?=$key?>"<?echo ($key == 28)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                </select>
              </td>
               <td align="left" width="50%">
                Ranged Type:<br/>
                <select name="ranged_type" style="width: 200px;">
<?foreach($skilltypes as $key=>$value):?>
                  <option value="<?=$key?>"<?echo ($key == 7)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                </select>
              </td>
            </tr>
          </table>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Misc</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="17%">Spawn Limit:     <br/><input type="text" name="spawn_limit" size="10" value="0"></td>
              <td align="left" width="17%">Emote ID:           <br/><input type="text" name="emoteid" size="10" value="0"></td>
              <td align="left" width="17%">Loot ID:     <br/><input type="text" name="loottable_id" size="10" value="0"></td>
              <td align="left" width="17%">Spells ID:   <br/><input type="text" name="npc_spells_id" size="10" value="0"></td>
              <td align="left" width="17%">Spells Effcects ID:   <br/><input type="text" name="npc_spells_effects_id" size="10" value="0"></td>
              <td align="left" width="16%">Faction ID:   <br/><input type="text" name="npc_faction_id" size="10" value="0"></td>
            </tr>
          </table><br/>
          <center>
            <table cellpadding="20px">
              <tr>
                <td valign="top" align="left">
                  <input type="checkbox" name="qglobal" value="1"/> Enable Quest Globals<br/>
                  <input type="checkbox" name="encounter" value="1"/> Enable Encounter Handins<br/>
                  <input type="checkbox" name="isquest" value="1"> Has Quest File<br/>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="unique_spawn_by_name" value="1"/> Unique by Name<br/>
                  <input type="checkbox" name="underwater" value="1"/> Underwater NPC<br>
                  <input type="checkbox" name="ignore_despawn" value="1"/> Ignore Despawn<br>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="pet" value="1"/> NPC is a Pet<br/>
                  <input type="checkbox" name="private_corpse" value="1"/> Corpse does not Unlock<br/>
                  <input type="checkbox" name="raid_target" value="1"/> Raid Target<br/>
                </td>
              </tr>
            </table>
          </center>
        </fieldset><br/>
        <center>
          <input type="submit" value="Submit Changes"/>
        </center>
      </div>
    </div>
  </form>
