<div class="box">
  <h3 class="classic-title5"><span>Flight Plan Briefing</span></h3>
	<div class="call-action call-action-boxed call-action-style1 no-descripton clearfix">
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
                    <td><select class="dispinput" name="date" id="date"><option value="1455408000">14FEB16</option><option value="1455494400">15FEB16</option><option value="1455580800">16FEB16</option><option value="1455667200">17FEB16</option><option value="1455753600">18FEB16</option><option value="1455840000">19FEB16</option><option value="1455926400">20FEB16</option><option value="1456012800" selected="">21FEB16</option><option value="1456099200">22FEB16</option><option value="1456185600">23FEB16</option><option value="1456272000">24FEB16</option><option value="1456358400">25FEB16</option><option value="1456444800">26FEB16</option><option value="1456531200">27FEB16</option><option value="1456617600">28FEB16</option><option value="1456704000">29FEB16</option><option value="1456790400">01MAR16</option><option value="1456876800">02MAR16</option><option value="1456963200">03MAR16</option><option value="1457049600">04MAR16</option><option value="1457136000">05MAR16</option><option value="1457222400">06MAR16</option><option value="1457308800">07MAR16</option><option value="1457395200">08MAR16</option><option value="1457481600">09MAR16</option><option value="1457568000">10MAR16</option><option value="1457654400">11MAR16</option><option value="1457740800">12MAR16</option><option value="1457827200">13MAR16</option><option value="1457913600">14MAR16</option><option value="1458000000">15MAR16</option><option value="1458086400">16MAR16</option><option value="1458172800">17MAR16</option><option value="1458259200">18MAR16</option><option value="1458345600">19MAR16</option><option value="1458432000">20MAR16</option><option value="1458518400">21MAR16</option><option value="1458604800">22MAR16</option></select>
                    </td>
                    <td><select class="dispinput" name="dephour" id="dephour"><option value="0">00</option><option value="3600">01</option><option value="7200">02</option><option value="10800">03</option><option value="14400">04</option><option value="18000">05</option><option value="21600">06</option><option value="25200">07</option><option value="28800">08</option><option value="32400">09</option><option value="36000">10</option><option value="39600">11</option><option value="43200">12</option><option value="46800">13</option><option value="50400">14</option><option value="54000">15</option><option value="57600">16</option><option value="61200" selected="">17</option><option value="64800">18</option><option value="68400">19</option><option value="72000">20</option><option value="75600">21</option><option value="79200">22</option><option value="82800">23</option></select>
                    
                    :<select class="dispinput" name="dephour" id="dephour"><option value="0">00</option><option value="3600">01</option><option value="7200">02</option><option value="10800">03</option><option value="14400">04</option><option value="18000">05</option><option value="21600">06</option><option value="25200">07</option><option value="28800">08</option><option value="32400">09</option><option value="36000">10</option><option value="39600">11</option><option value="43200">12</option><option value="46800">13</option><option value="50400">14</option><option value="54000">15</option><option value="57600">16</option><option value="61200" selected="">17</option><option value="64800">18</option><option value="68400">19</option><option value="72000">20</option><option value="75600">21</option><option value="79200">22</option><option value="82800">23</option></select></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="box no-margin no-left-padding col-md-6">
  <h3 class="classic-title2"><span>Flight Plan Options</span></h3>
	<div class="call-action call-action-boxed call-action-style1 no-descripton clearfix">
    <form id="sbapiform">
    	<div class="schedule-briefing">
    <table class="schedule-briefing">
        <tr>
            <td>Aircraft:</td>
            <td><select class="dispinput" name="type"></option><option value="A306">A306  -  A300F4-600</option><option value="A310">A310  -  A310-304</option><option value="A318">A318  -  A318-100</option><option value="A319">A319  -  A319-100</option><option value="A320">A320  -  A320-200</option><option value="A321">A321  -  A321-200</option><option value="A332">A332  -  A330-200</option><option value="A333">A333  -  A330-300</option><option value="A343">A343  -  A340-343</option><option value="A345">A345  -  A340-542</option><option value="A346">A346  -  A340-643</option><option value="A388">A388  -  A380-800</option><option value="AT72">AT72  -  ATR72-500</option><option value="B190">B190  -  B1900D</option><option value="B350">B350  -  KINGAIR</option><option value="B463">B463  -  BAE-146</option><option value="B703">B703  -  B707-320B</option><option value="B712">B712  -  B717-200</option><option value="B722">B722  -  B727-200</option><option value="B732">B732  -  B737-200</option><option value="B733">B733  -  B737-300</option><option value="B734">B734  -  B737-400</option><option value="B735">B735  -  B737-500</option><option value="B736">B736  -  B737-600</option><option value="B737">B737  -  B737-700</option><option value="B738" selected>B738  -  B737-800</option><option value="B739">B739  -  B737-900</option><option value="B744">B744  -  B747-400</option><option value="B748">B748  -  B747-8</option><option value="B74F">B74F  -  B747-400F</option><option value="B752">B752  -  B757-200</option><option value="B753">B753  -  B757-300</option><option value="B75F">B75F  -  B757-200PF</option><option value="B763">B763  -  B767-300ER</option><option value="B764">B764  -  B767-400ER</option><option value="B76F">B76F  -  B767-300F</option><option value="B772">B772  -  B777-200ER</option><option value="B77F">B77F  -  B777-F</option><option value="B77L">B77L  -  B777-200LR</option><option value="B77W">B77W  -  B777-300ER</option><option value="B788">B788  -  B787-800</option><option value="B789">B789  -  B787-900</option><option value="BBJ1">BBJ1  -  B737 BBJ</option><option value="BBJ2">BBJ2  -  B737 BBJ2</option><option value="BBJ3">BBJ3  -  B737 BBJ3</option><option value="BE20">BE20  -  KINGAIR</option><option value="C208">C208  -  CESSNA 208</option><option value="C404">C404  -  C404 TITAN</option><option value="C510">C510  -  C510 MUSTANG</option><option value="C550">C550  -  CITATION</option><option value="C750">C750  -  CITATION X</option><option value="CRJ2">CRJ2  -  CRJ-200</option><option value="CRJ7">CRJ7  -  CRJ-700</option><option value="CRJ9">CRJ9  -  CRJ-900</option><option value="DC10">DC10  -  DC-10-30</option><option value="DH8A">DH8A  -  DHC8-102</option><option value="DH8B">DH8B  -  DHC8-200</option><option value="DH8C">DH8C  -  DHC8-311</option><option value="DH8D">DH8D  -  DH8D-402</option><option value="DHC2">DHC2  -  BEAVER</option><option value="DHC6">DHC6  -  TWIN OTTER</option><option value="E135">E135  -  ERJ-135LR</option><option value="E13L">E13L  -  EMB-135BJ</option><option value="E145">E145  -  EMB-145LR</option><option value="E170">E170  -  EMB-170</option><option value="E175">E175  -  EMB-175</option><option value="E190">E190  -  EMB-190</option><option value="E195">E195  -  EMB-195</option><option value="F50">F50  -  FOKKER F50</option><option value="GLF4">GLF4  -  GULFSTREAM</option><option value="H25B">H25B  -  HAWKER 800A</option><option value="JS41">JS41  -  BAE JS-41</option><option value="L101">L101  -  L1011-500</option><option value="LJ45">LJ45  -  LEAR 45</option><option value="MD11">MD11  -  MD-11</option><option value="MD1F">MD1F  -  MD-11F</option><option value="MD82">MD82  -  DC-9-82</option><option value="MD83">MD83  -  DC-9-83</option><option value="MD88">MD88  -  MD-88</option><option value="MD90">MD90  -  MD-90-30</option><option value="RJ1H">RJ1H  -  AVRO RJ100</option><option value="RJ70">RJ70  -  AVRO RJ70</option><option value="RJ85">RJ85  -  AVRO RJ85</option><option value="SW4">SW4  -  METROLINER</option><option value="T154">T154  -  TU-154B2</option></select></td>
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
						<a href="http://flightaware.com" id="falink" target="_blank">
                        <img class="routeimg" src="<?php echo fileurl('/images/logos/flightaware.png');?>" alt="Flightaware" title="FlightAware"></a> 
						<a href="http://skyvector.com/?ll=0,0&amp;chart=304&amp;zoom=16&amp;fpl=" id="sklink" target="_blank">
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
    	<button type="button" style="width:100%" class="btn btn-success btn-lg" onclick="simbriefsubmit('http://www.globalairalliance.com/index.php/SimBrief');" style="font-size:30px" value="Generate">Click to Generate OFP</button>
    </form>
</div>


