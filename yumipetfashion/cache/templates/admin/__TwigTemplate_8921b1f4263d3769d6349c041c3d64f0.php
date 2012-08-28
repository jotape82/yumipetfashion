<?php

/* liveperson_registration.tpl */
class __TwigTemplate_8921b1f4263d3769d6349c041c3d64f0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<label style=\"display: block;\"><input type=\"radio\" checked=\"checked\" name=\"lp_register\" onclick=\"ToggleLivePerson(this.value);\" value=\"1\" /> ";
        echo getLang("LivePersonDontHaveCreate");
        echo "</label>
<div id=\"lp_register_show\">
\t<img src=\"images/nodejoin.gif\" alt=\"\" /> <input type=\"button\" value=\"";
        // line 3
        echo getLang("LivePersonCreateAccount");
        echo "\" onclick=\"CreateLivePersonAccount()\" class=\"FormButton\" style=\"width:170px\" />
</div>
<label style=\"display: block;\"><input type=\"radio\" name=\"lp_register\" onclick=\"ToggleLivePerson(this.value);\" value=\"0\" /> ";
        // line 5
        echo getLang("LivePersonHaveAccount");
        echo "</label>
<div style=\"display: none;\" id=\"lp_existing_show\">
\t<img src=\"images/nodejoin.gif\" alt=\"\" style=\"float: left;\" />
\t<div style=\"float: left; padding-top: 5px; padding-left: 10px;\">
\t\t";
        // line 9
        echo getLang("LivePersonExistingUserInstructions");
        echo "
\t</div>
</div>
<script type=\"text/javascript\">
\tfunction ToggleLivePerson(value)
\t{
\t\tif(value == 1) {
\t\t\t\$('#lp_register_show').show();
\t\t\t\$('#lp_existing_show').hide();
\t\t\t\$('.properties_livechat_liveperson:gt(1)').hide();
\t\t}
\t\telse {
\t\t\t\$('#lp_register_show').hide();
\t\t\t\$('#lp_existing_show').show();
\t\t\t\$('.properties_livechat_liveperson:gt(2)').show();
\t\t}
\t}

\tfunction CreateLivePersonAccount()
\t{
\t\ttb_show('', \"index.php?ToDo=liveChatSettingsCallback&module=livechat_liveperson&func=ShowLivePersonRegistration&height=320&width=460&modal=true&TB_iframe=true\");
\t}

\tfunction IntegrateLivePerson(siteId)
\t{
\t\tif(\$('#livechat_liveperson_position').val() == 'panel') {
\t\t\tcode = \$('#lp_side_button').val();
\t\t}
\t\telse {
\t\t\tcode = \$('#lp_top_button').val();
\t\t}
\t\tcode = code.replace(/%%SIDEID%%/g, siteId);
\t\t\$('#livechat_liveperson_buttontag').val(code);
\t\tcode = \$('#lp_monitor_tag').val();
\t\tcode = code.replace(/%%SIDEID%%/g, siteId);
\t\t\$('#livechat_liveperson_monitortag').val(code);
\t\t\$('#livechat_liveperson_siteid').val(siteId);
\t\t\$('#frmLiveChatSettings').submit();
\t}

\tfunction UpdatePosition(position)
\t{
\t\t\$('#livechat_liveperson_position').val(position);
\t}
</script>
<textarea name=\"lp_side_button\" id=\"lp_side_button\" style=\"display: none\">
\t<!-- BEGIN LivePerson Button Code --><div  ><table border='0' cellspacing='2' cellpadding='2'><tr><td align=\"center\"></td><td align='center'><a id=\"_lpChatBtn\" href='https://server.iad.liveperson.net/hc/%%SIDEID%%/?cmd=file&amp;file=visitorWantsToChat&amp;site=%%SIDEID%%&amp;byhref=1&imageUrl=https://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/English/General/2a' target='chat%%SIDEID%%'  onClick=\"lpButtonCTTUrl = 'https://server.iad.liveperson.net/hc/%%SIDEID%%/?cmd=file&file=visitorWantsToChat&site=%%SIDEID%%&imageUrl=https://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/English/General/2a&referrer='+escape(document.location); lpButtonCTTUrl = (typeof(lpAppendVisitorCookies) != 'undefined' ? lpAppendVisitorCookies(lpButtonCTTUrl) : lpButtonCTTUrl); window.open(lpButtonCTTUrl,'chat%%SIDEID%%','width=475,height=400,resizable=yes');return false;\" ><img src='https://server.iad.liveperson.net/hc/%%SIDEID%%/?cmd=repstate&site=%%SIDEID%%&channel=web&&ver=1&imageUrl=https://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/English/General/2a' name='hcIcon' border=0></a></td></tr><tr><td>&nbsp;</td><td align='center'><div style=\"margin-top:5px;\"><span style=\"font-size:10px; font-family:Arial, Helvetica, sans-serif;\"><a href=\"http://solutions.liveperson.com/live-chat\" style=\"text-decoration:none; color:#000\" target=\"_blank\"><b>Live Chat</b></a><span style=\"color:#000\"> by </span><a href=\"http://www.liveperson.com/\" style=\"text-decoration:none; color:#FF9900\" target=\"_blank\">LivePerson</a></span></div></td></tr><tr><td>&nbsp;</td><td align='center'><a href='http://solutions.liveperson.com/customer-service/?site=%%SIDEID%%&amp;domain=server.iad.liveperson.net&amp;origin=chatbutton' target='_blank'  onClick=\"javascript:window.open('http://solutions.liveperson.com/customer-service/?site=%%SIDEID%%&domain=server.iad.liveperson.net&origin=chatbutton&referrer='+escape(document.location));return false;\" ><img src='https://server.iad.liveperson.net/hc/%%SIDEID%%/?cmd=rating&site=%%SIDEID%%&type=indicator' name='hcRating' alt='Customer Service Rating by LivePerson' border=0></a></td></tr>
\t</table>
\t</div><!-- END LivePerson Button code -->
</textarea>
<textarea name=\"lp_top_button\" id=\"lp_top_button\" style=\"display: none\">
<!-- BEGIN LivePerson Button Code --><div  ><a id=\"_lpChatBtn\" href='https://server.iad.liveperson.net/hc/12177928/?cmd=file&amp;file=visitorWantsToChat&amp;site=12177928&amp;byhref=1&imageUrl=https://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/English/General/1a' target='chat12177928'  onClick=\"javascript:window.open('https://server.iad.liveperson.net/hc/12177928/?cmd=file&file=visitorWantsToChat&site=12177928&imageUrl=https://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/English/General/1a&referrer='+escape(document.location),'chat12177928','width=475,height=400,resizable=yes');return false;\" >Live Chat <img src=\"%%IMG_DIRECTORY%%/ChatIcon.gif\" border=\"0\" alt=\"\" /></a></div><!-- END LivePerson Button code -->
</textarea>
<textarea name=\"lp_monitor_tag\" id=\"lp_monitor_tag\" style=\"display: none\">
\t<!-- BEGIN Invitation Positioning  -->
\t<script type=\"text/javascript\">
\tvar lpPosY = 100;
\t</script>
\t<!-- END Invitation Positioning  -->

\t<!-- BEGIN HumanTag Monitor. DO NOT MOVE! MUST BE PLACED JUST BEFORE THE /BODY TAG --><script language='javascript' src='https://server.iad.liveperson.net/hc/%%SIDEID%%/x.js?cmd=file&file=chatScript3&site=%%SIDEID%%&&imageUrl=https://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/English/General/2a'> </script><!-- END HumanTag Monitor. DO NOT MOVE! MUST BE PLACED JUST BEFORE THE /BODY TAG -->
</textarea>";
    }

}
