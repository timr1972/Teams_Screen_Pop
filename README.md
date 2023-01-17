# Teams_Screen_Pop
A snippet of code to allow screen pops using inbound calling information for a PSTN call, supplied and called by Microsoft Teams.

There are three files and they are designed to be functional not pretty!

The first file calling.php is called by the screenpop configuration in Teams.  In the URL you pust follow the file name by the question mark and then variable name 'tel' and equals sign and the word phone in curly brackets. This should then look like this:https://server/calling.php?tel={phone}  Microsoft Teams will only support https links, so please bear this in mind when hosting the file

You also need to configure the Teams Voice Plicy and User settings to make this demo work, to see this in a walk through please visit: https://www.linkedin.com/posts/tim-russell-eu_msftadvocate-mspartneruk-microosftteams-activity-6996133683933904896-IDeM

