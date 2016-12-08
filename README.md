# phpvms-simbrief-options-form
A form to allow options to be altered before generating the SimBrief OFP.

NOTE: This addon is designed to work with the SimBrief Addon by Vangelis on PHPVMS Forums. You must have this installed for this functionality to work. http://forum.phpvms.net/topic/21388-sim-brief-for-phpvms/
I am also using David Clark's version of PHPVMS where the templates are in .php format rather than .tpl. If you have an older version and your template files are .tpl, simply alter the file extension as required and the file should work.
You must also have a SimBrief API key which is expained in Vangelis' module.
You must also register for a free SimBrief account for the form to work as it needs to make a connection to SimBrief itself.

INSTALLATION
Download the "schedules_briefing.php" file.
It is optional if you want to download the "style.css" file. It gives you the custom styles I have used for my form and page. You may want to use your own sites styling for the form and tables.
If you are using a custom skin for phpvms then you will need to place the "schedules_briefing.php" file in /lib/skins/(your skin name).
If you are not using a custom skin, then you should place the file in /core/templates/.
If you wish to use my styling, you can just copy and paste the styles from my "style.css" to your style file. For a custom skin this is likely to be /lib/skins/(your skin name)/css/style.css.
For a vanilla phpvms install, your style file should be located in /lib/css/phpvms.css.
If you want to use your own styling, then you need to change the following html tag references in the "schedules_briefing.php" file you downloaded.
To add the "dynamically called fleet" from your database, you also need to download and install the "OperationsData.class.php file and copy it to your "core/common" directory. Rename your existing file to "OperationsData.class.phpOLD" so you have a backup, just incase anything breaks.

Change "classic-title5" to one of your own header styles

The "call-action" is a Boostrap3 box. The styling of the box is controlled by "call-action-style1.
div class="call-action call-action-boxed call-action-style1 no-descripton clearfix"

This controls the general styling of the container and it's elements that house the tables.
div class="schedule-briefing"

This controls the specific table style. You can simply overwrite "briefing-table" with your own style classname.
table class="briefing-table"

The "dispinput" styles the input and select form elements on the page.
select class="dispinput" name="date" id="date"

Once you've uploaded the schedule_briefing.php file, you need to also edit the following line at the bottom of the file.

Replace the url from my form.
button type="button" style="width:100%" class="btn btn-success btn-lg" onclick="simbriefsubmit('http://www.globalairalliance.com/index.php/SimBrief');" style="font-size:30px" value="Generate">Click to Generate OFP

with yours as shown below.
button type="button" style="width:100%" class="btn btn-success btn-lg" onclick="simbriefsubmit('http://Your website URL here/index.php/SimBrief');" style="font-size:30px" value="Generate">Click to Generate OFP

That's it, you should be good to go.

To test it, bid on a flight, go to "view my bids" and click on "pilot brief". You should now see your form. Adjust the settings as you need and press on the "Click to Generate OFP". You should now see your OFP complete with accurate timings and fuel predictions.

Enjoy!

Credits:
Vangelis - phpVMS forum
Web541 - phpVMS forum
Strider - phpVMS forum
Keith - phpVMS forum
