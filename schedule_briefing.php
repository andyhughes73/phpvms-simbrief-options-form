<div class="box">
  <h3 class="classic-title5"><span>Flight Plan Briefing</span></h3>
	<div class="call-action call-action-boxed call-action-style1 no-descripton clearfix">
    <form id="sbapiform">
        <div class="schedule-briefing">
            <table class="briefing-table">
            	<tr>
                	<th>Airline</th>
                    <th>Flight No.</th>
                    <th>Dep ICAO</th>
                    <th>Arr ICAO</th>
                    <th>Distance</th>
                    <th>Date</th>
                    <th>Dep Time (UTC)</th>
                </tr>
                <tr>
                    <td><?php echo $schedule->code.$schedule->airline; ?></td>
                    <td><?php echo $schedule->code.$schedule->flightnum; ?></td>
                    <td><?php echo "{$schedule->depname} ($schedule->depicao)"; ?></td>
                    <td><?php echo "{$schedule->arrname} ($schedule->arricao)"; ?></td>
                    <td><?php echo "{$schedule->distance}"; ?></td>
                    <td>
                    <script>
					  $(function() {
						$( "#datepicker" ).datepicker({dateFormat: "ddMy"
						});
					  });
					</script>
                    <input class="dispinput" name="date" size="7" type="text" id="datepicker">
                    </td>

                    <td>
                    <?php
                        $r = range(1, 24);
  
                         $selected = is_null($selected) ? date('H') : $selected;
                         $select = "<select name=deph id=dephour>\n";
                         foreach ($r as $hour)
                         {
                                 $select .= "<option value=\"$hour\"";
                                 $select .= ($hour==$selected) ? ' selected="selected"' : '';
                                 $select .= ">$hour</option>\n";
                         }
                         $select .= '</select>';
                         echo $select;
                         echo":";
                                                                 $rminutes = range(1, 60);

                         $selected = is_null($selected) ? date('i') : $selected;
                         $selectminutes = "<select name=depm id=dephour>\n";
                         foreach ($rminutes as $minutes)
                         {
                                 $selectminutes .= "<option value=\"$minutes\"";
                                 $selectminutes .= ($hour==$selected) ? ' selected="selected"' : '';
                                 $selectminutes .= ">$minutes</option>\n";
                         }
                         $selectminutes .= '</select>';
                         echo $selectminutes;
                         ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="box no-margin no-left-padding col-md-6">
  <h3 class="classic-title2"><span>Flight Plan Options</span></h3>
	<div class="call-action call-action-boxed call-action-style1 no-descripton clearfix">
    
    	<div class="schedule-briefing">
    <table class="schedule-briefing">
        <tr>
            <td>Aircraft:</td>
            <td><select class="dispinput" name="type">
            <?php
            $equipment = OperationsData::getAllAircraftSingle(true);
            if(!$equipment) $equipment = array();
            foreach($equipment as $equip)
            {
            echo '<option value="'.$equip->icao.'">'.$equip->icao.' - '.$equip->name.'</option>';
            }
            ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Origin:</td>
            <td><input class="dispinput" name="orig" size="5" type="text" placeholder="ZZZZ" maxlength="4" value="<?php echo "$schedule->depicao"; ?>"></td>
        </tr>
        <tr>
            <td>Destination:</td>
            <td><input class="dispinput" name="dest" size="5" type="text" placeholder="ZZZZ" maxlength="4" value="<?php echo "$schedule->arricao"; ?>"></td>
        </tr>
        <tr>
            <td>Units:</td>
            <td><select class="dispinput" name="units"><option value="KGS">KGS</option><option value="LBS" selected>LBS</option></select></td>
        </tr>
        <tr>
            <td>Cont Fuel: </td>
            <td><select class="dispinput" name="contpct"><option value="auto" selected>AUTO</option><option value="0">0 PCT</option><option value="0.02">2 PCT</option><option value="0.03">3 PCT</option><option value="0.05">5 PCT</option><option value="0.1">10 PCT</option><option value="0.15">15 PCT</option><option value="0.2">20 PCT</option></select></td>
        </tr>
        <tr>
            <td>Reserve Fuel: </td>
            <td><select class="dispinput" name="resvrule"><option value="auto">AUTO</option><option value="0">0 MIN</option><option value="15">15 MIN</option><option value="30">30 MIN</option><option value="45" selected>45 MIN</option><option value="60">60 MIN</option><option value="75">75 MIN</option><option value="90">90 MIN</option></select></td>
        </tr>	
        <tr>
            <td>Detailed Navlog: </td>
            <td><input type="hidden" name="navlog" value="0"><input type="checkbox" name="navlog" value="1" checked></td>
        </tr>
        <tr>
            <td>ETOPS Planning: </td>
            <td><input type="hidden" name="etops" value="0"><input type="checkbox" name="etops" value="1"></td>
        </tr>
        <tr>
            <td>Plan Stepclimbs: </td>
            <td><input type="hidden" name="stepclimbs" value="0"><input type="checkbox" name="stepclimbs" value="1" checked></td>
        </tr>
        <tr>
            <td>Runway Analysis: </td>
            <td><input type="hidden" name="tlr" value="0"><input type="checkbox" name="tlr" value="1" checked></td>
        </tr>
        <tr>
            <td>Include NOTAMS: </td>
            <td><input type="hidden" name="notams" value="0"><input type="checkbox" name="notams" value="1" checked></td>
        </tr>
        <tr>
            <td>FIR NOTAMS: </td>
            <td><input type="hidden" name="firnot" value="0"><input type="checkbox" name="firnot" value="1"></td>
        </tr>
        <tr>
            <td>Flight Maps: </td>
            <td><select class="dispinput" name="maps"><option value="detail">Detailed</option><option value="simple">Simple</option><option value="none">None</option></select></td>
        </tr>
        <tr>
            <td>Plan Layout:</td>
            <td><select class="dispinput" onchange="" name="planformat" id="planformat"><option value="lido" selected="">LIDO</option><option value="aal">AAL</option><option value="aca">ACA</option><option value="afr">AFR</option><option value="awe">AWE</option><option value="baw">BAW</option><option value="ber">BER</option><option value="dal">DAL</option><option value="dlh">DLH</option><option value="ezy">EZY</option><option value="gwi">GWI</option><option value="jbu">JBU</option><option value="jza">JZA</option><option value="klm">KLM</option><option value="ryr">RYR</option><option value="swa">SWA</option><option value="uae">UAE</option><option value="ual">UAL</option><option value="ual f:wz">UAL F:WZ</option></select></td> 
        </tr>
    </table>
    </div>
    </div>
</div>

<div class="box no-margin no-right-padding col-md-6">
  <h3 class="classic-title4"><span>Route Planner</span></h3>    
    <div class="call-action call-action-boxed call-action-style1 no-descripton clearfix">            
        <div class="schedule-briefing">
        	<table class="schedule-briefing">
                <tr>
					<td>
                    	<span class="disphead">Route</span> (<a href="guide.php#routeguide" target="_blank">?</a>)
						<span style="font-size:14px;font-weight:bold;padding:0px 5px">&rarr;</span>
						<a href="http://flightaware.com/analysis/route.rvt?origin=<?php echo $schedule->depicao ; ?>&destination=<?php echo $schedule->arricao ; ?>" id="falink" target="_blank">
                        <img class="routeimg" src="<?php echo fileurl('/images/logos/flightaware.png');?>" alt="Flightaware" title="FlightAware"></a> 
						<a href="https://skyvector.com/?chart=304&zoom=6&fpl=<?php echo $schedule->depicao ; ?>%20%20<?php echo $schedule->arricao ; ?>" id="sklink" target="_blank">
                        <img class="routeimg" src="<?php echo fileurl('/images/logos/routes_skv.png');?>" alt="SkyVector" title="SkyVector"></a>
						<a href="http://rfinder.asalink.net/free/" id="rflink" target="_blank">
                        <img class="routeimg" src="<?php echo fileurl('/images/logos/routefinder.png');?>" alt="RouteFinder" title="RouteFinder"></a>
						<a target="_blank" style="cursor:pointer" onclick="validate_cfmu();">
                        <img class="routeimg" src="<?php echo fileurl('/images/logos/euro-ctl.png');?>" alt="CFMU Validation" title="CFMU Validation"></a>
					</td>
                </tr>
				<tr>
                    <td><textarea class="dispinput" name="route" placeholder="Enter your route here"></textarea></td>
				</tr>
                <tr>
                	<td><em><strong>Note: Remove any reference to &quot;SID&quot; &amp; &quot;STAR&quot; in your route, before generating your OFP. You may get errors if you don't.</strong></em></td>
                </tr>
			</table>
        </div>      
	</div>
    	<p><em><strong>Note: Remember to sign up for your free <a href="http://www.simbrief.com" title="Sign up for SimBrief">SimBrief</a> account before using this feature. It won't work without it!</strong></em></p>   
    	<button type="button" style="width:100%" class="btn btn-success btn-lg" onclick="simbriefsubmit('http://www.globalairalliance.com/index.php/SimBrief');" style="font-size:30px" value="Generate SimBrief">Click to Generate OFP</button>
    </form>
</div>


