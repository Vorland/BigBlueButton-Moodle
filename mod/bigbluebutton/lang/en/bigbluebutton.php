<?php
$string['pluginadministration'] = 'BigBlueButton';
$string['pluginname'] = 'Web conference';
$string['BigBlueButton'] = 'BigBlueButton';
$string['room'] = 'BigBlueButton Room';
$string['config_initial'] = 'PLEASE READ';
$string['config_dc'] = 'Hosted by Dual Code Inc.';
$string['config_my'] = 'Hosted by Myself';
$string['config_accountid'] = 'The Account ID provided to you by Dual Code Inc.';
$string['config_accountpwd'] = 'The Password provided to you by Dual Code Inc.';
$string['general_instructions'] = 'General Instructions';
$string['config_instructions'] = 'This plug-in allows your Moodle server to communicate with a BigBlueButton server. You may install and configure your BigBlueButton server yourself, or you may <a href="http://www.dualcode.com/bigbluebutton/signup.htm">subscribe to Dual Code\'s hosted BigBlueButton service</a> for a low monthly fee.';
$string['provider'] = 'Host';
$string['config_provider'] = 'The name of your BigBlueButton provider. If you are hosting your server in-house, select "Myself".';
$string['hostmyself'] = 'Myself (Other)';
$string['hostbydualcode'] = 'Dual Code Inc.';
$string['config_hostmyself'] = 'Complete this section only if you are hosting the BigBlueButton server yourself.';
$string['config_hostbydualcode'] = 'Complete this section only if your BigBlueButton server is hosted by Dual Code Inc.';
$string['config_server'] = 'The domain name or IP address of your BigBlueButton server. If your BigBlueButton server does not run on port 80, please enter the port number here (i.e. 10.10.0.0:8000)';
$string['config_salt'] = 'The security salt as configured in the bigbluebutton.properties file of your BigBlueButton server.';
$string['config_meetingrooms'] = 'Entering a * character will allow an unlimited amount of BigBlueButton rooms. If you want to restrict the number of rooms, please list the meeting IDs, separated by a comma.';
$string['config_checkupdates'] = 'Automatically check for updates to this plug-in (but do not install them).';
$string['mod_instructions'] = 'Please complete all of the fields below for the meeting room in question.';
$string['mod_instructions_readonly'] = 'This meeting has already been created and its parameters cannot be modified.';
$string['http'] = 'http://';
$string['securitysalt'] = 'Security Salt';
$string['meetingrooms'] = 'Meeting IDs';
$string['meetingname'] = 'Meeting Name';
$string['meetingid'] = 'Meeting ID';
$string['accountid'] = 'Account ID';
$string['accountpwd'] = 'Password';
$string['meetingid_empty'] = '<span style="color: red; text-align: center;">There are no BigBlueButton rooms available. Please contact your administrator.</span><br /><br />';
$string['attendeepw'] = 'Attendee Password';
$string['moderatorpw'] = 'Moderator Password';
$string['loginrules'] = 'Login Rules';
$string['newwindow_n'] = 'Open in current window';
$string['newwindow_y'] = 'Open in a new window';
$string['newwindow'] = 'Application Window';
$string['welcomemsg'] = 'Welcome Message';
$string['modulenameplural'] = 'BigBlueButtons';
$string['modulename'] = 'BigBlueButton';
$string['BigBlueButtonreport'] = 'BBB Report';
$string['seesession'] = 'See Session';
$string['deletesession'] = 'Delete Session';
$string['sessions'] = 'Sessions';
$string['nomessages'] = 'No Messages';
$string['nextsession'] = 'Next Session';
$string['joinmeeting_instructions'] = 'The meeting is now in progress.<br>Please click on the link below to join in.';
$string['joinmeeting_instructions_mod'] = 'Click on one of the links below to join<br>the meeting as an attendee or a moderator.';
$string['joinmeeting_instructions_guest'] = 'Please enter your name in the field below<br>and click on the link to join the meeting.';
$string['joinmeeting'] = 'Join Meeting';
$string['joinmeeting_asguest'] = 'Attendee';
$string['joinmeeting_asmoderator'] = 'Moderator';
$string['cannot_edit'] = 'Note that some of the fields cannot be modified when editing an existing meeting.';
$string['noguests'] = 'We\'re sorry, but this meeting room does not allow anonymous guests.';
$string['notrunning'] = 'The moderator has not yet joined the meeting.<br>Please wait here until the meeting begins.';
$string['autorefresh'] = 'This page automatically refreshes.';
$string['bigbluebutton:bigbluebutton'] = 'BigBlueButton';
$string['bigbluebutton:deletelog'] = 'Can delete logs';
$string['bigbluebutton:ismoderator'] = 'Can be a moderator';
$string['bigbluebutton:isattendee'] = 'Can attend meetings';
$string['bigbluebutton:readlog'] = 'Can read logs';
$string['webconference:deletelog'] = 'Can delete logs';
$string['webconference:ismoderator'] = 'Can be a moderator';
$string['webconference:isattendee'] = 'Can attend meetings';
$string['webconference:readlog'] = 'Can read logs';
$string['webconference:webconference'] = 'General WC privileges';
$string['update'] = 'A new version of this plug-in is now available. Click <a href=\"http://www.dualcode.com/bigbluebutton/\" target=\"_blank\">here to find out more or download the latest version</a>.';

// Error messages
$string['duplicateWarning'] = 'This conference was already in existance and may currently be in progress.';
$string['idNotUnique'] = 'A meeting already exists with that meeting ID. To reuse the same meeting ID, you must make sure that you configure the meeting with the same attendee password and moderator password as the original instance.';
$string['checksumError'] = 'The security salt for this module is incorrect. Please contact the system administrator.';
$string['invalidCredentials'] = 'Your subscription to the BigBlueButton service has expired or the credentials you entered are not valid. Please <a href=\"http://www.dualcode.com/bigbluebutton/\" target=\"_blank\">renew your subscription</a> or contact the system administrator.';
?>
