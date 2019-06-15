<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link href="Styles/style.css" rel="stylesheet" type="text/css" /><link href="Styles/CssCAP.css" rel="Stylesheet" type="text/css" />
    <script language="javascript" src="JSFiles/jquery-1.3.2.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        try {
            var response = StudentMaster.GetPhotoPath();
            if (response.error == null && response.value != '') {
                var _imgleft = $("#imgHead").position().left;
                var _left = ($("#imgHead").attr("width") + _imgleft) - 100;
                var _top = $("#imgHead").position().top; // +85;
                $("#imgstudent").attr("src", response.value);
                $("#divimg").css({
                    "position": "absolute",
                    "left": _left,
                    "top": _top
                });
                $("#imgHead").css("z-index", -1);
                $("#imgstudent").css("z-index", 999);
            }
            var response = StudentMaster.FillScreens();
            if (response.error == null) {
                $("#divscreens").html(response.value);
                
                if ($("#tblscreens").attr("name") == "Y")
                    $("#capIframeId").attr("src", "Academics/StudentProfile.aspx?scrid=17");
                else
                    $("#capIframeId").attr("src", $("#tblscreens tr:eq(0)").attr("name"));
                ResizeIFrame();
            }

        }
        catch (e) {
            alert(e.error);
        }
    });
function ResizeIFrame()
{
    var sourceHeight=document.body.scrollHeight+50;
    //document.parentWindow.frames[0].height=sourceHeight;
    $("#capIframeId", parent.document).css("height", sourceHeight);
}
function closeDiv()
{
    hideDialg("divGreetings", true);
}
    </script>

    <style type="text/css">

</style>
    <title>

</title></head>
<body style="margin: 0;" >
    <form name="form1" method="post" action="StudentMaster.aspx" id="form1">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE5NzQyMjgyMjYPZBYCAgMPZBYEAgEPFgIeCWlubmVyaHRtbAX+ATxtYXJxdWVlIHNjcm9sbGRlbGF5PScxNTAnIHRydWVzcGVlZD0ndHJ1ZXNwZWVkJyA+KioqS2luZGx5IENoZWNrIHRoZSBEYXRlLCBDbGFzcyAtU2VjdGlvbi1TdWJqZWN0ICBQcm9wZXJseSBCZWZvcmUgcG9zdGluZyB0aGUgQXR0ZW5kYW5jZSoqKioqLCBNaWQgTWFya3MgVXBkYXRlOjpBQ0FERU1JQ1MtPkludGVybmFsIE1hcmtzLT5TZWxlY3QgQ291cnNlLFNlbWVzdGVyLSBCcmFuY2gtU2VjdGlvbi1EZXNjcmlwdGl2ZS0xLCA8L21hcnF1ZWU+ZAIDDw8WAh4EVGV4dAUdSGkuLi5QRU5VTUFSVEhJIFNBSSBSSVNITUlUSEFkZGShhSQjS7AZRld4l0rtpkHU/SwggA==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script type="text/javascript" src="/AEC/ajax/common.ashx"></script><script type="text/javascript" src="/AEC/ajax/StudentMaster,App_Web_baun3bo0.ashx"></script>
<div>

    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWAgKt1ZTIDQKQ8eCaBs3P1zZyDzxjbciLFlqzuGRFxqRH" />
</div>
    <center>
        <div align="center" style="width: 1200px; padding: 10px; background-color: #fff;">
            
                <table width="1200" id="Table_01" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <img src="CollegeImages/title_head.jpg"  alt="" id="imgHead"></td>
                    </tr>
                    <tr>
                        <td class="newsBG">
                            <div id="divNews"><marquee scrolldelay='150' truespeed='truespeed' >***Kindly Check the Date, Class -Section-Subject  Properly Before posting the Attendance*****, Mid Marks Update::ACADEMICS->Internal Marks->Select Course,Semester- Branch-Section-Descriptive-1, </marquee></div>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr class="userData">
                        <td valign="top">
                            <table width="100%">
                                <tr>
                                    <td align="left" style="width: 50%">
                                        <span id="lblUser">Hi...PENUMARTHI SAI RISHMITHA</span></td>
                                    <td style="width: 30%">
                                        <a href="Admin/changepassword.aspx?ctype=S" target="capIframe" class="welcomeLink">Change
                                            Password</a></td>
                                    <td align="right">
                                        <a id="lnkLogOut" class="welcomeLink" href="javascript:__doPostBack('lnkLogOut','')">Logout</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                        <td>
                            <table width="100%" cellspacing="0" cellpadding="0" >
                                <tr>
                                    <td style="width: 178px;padding-left:4px;" class="linksBG"  align="left" valign="top">
                                        <div id="divscreens"></div>
                                       
                                    </td>
                                    <td style="width:5px">&nbsp;</td>
                                    <td valign="top" class="iframeBorder">
                                        <table width="100%" cellspacing="0">
                                            <tr>
                                                <td>
                                                    <iframe id="capIframeId" allowtransparency="true" name="capIframe" width="100%" onload="ResizeIFrame(capIframe)"
                                                        scrolling="no" frameborder="0"></iframe>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                   
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            
            <div id="divGreetings" style="background-color: White; border-width: 1px; border-color: Gray;
                border-style: solid; z-index: 1px; position: absolute; width: 600px; height: 490px;
                left: 236px; top: 27px; display: none">
            </div>
        </div>
        </center>
        <div id="divimg">
                <img id="imgstudent" alt="" src="" width="105px" height="105px" />
            </div>
    </form>
</body>
</html>
