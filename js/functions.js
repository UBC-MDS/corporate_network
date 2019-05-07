function firstDayInPreviousMonth(yourDate) {
	return new Date(yourDate.getFullYear(), yourDate.getMonth() - 1, 1);
}

function numberWithCommas(x) {
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
var loc = window.location.toString(),
params = loc.split('?')[1],
iframe = document.getElementById('distribution');
iframe.src = iframe.src + '?' + params;

function pad(num, size) {
        var s = num+"";
        while (s.length < size) s = "0" + s;
        return s;
}

function getParameterByName(name)
{
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regexS = "[\\?&]" + name + "=([^&#]*)";
        var regex = new RegExp(regexS);
        var results = regex.exec(window.location.search);

        // default options
        if(results == null)
                if (name == "source"){
                        return "composite";
                }
                else if (name == "metric"){
                        return "borda";
                }
                else if (name == "year"){
                        return firstDayInPreviousMonth(new Date()).getYear() + 1900;
                }
                else if (name == "month"){
                        return firstDayInPreviousMonth(new Date()).getMonth() + 1;
                }
                else if (name == "org"){
                        return 1004702;
                }
                else{
                        return "";
                }
        else
                return decodeURIComponent(results[1].replace(/\+/g, " "));
}

function autoResize(id){
        var newheight;
        var newwidth;
        if(document.getElementById){
                newheight=document.getElementById(id).contentWindow.document.body.scrollHeight + 5;
                newwidth=document.getElementById(id).contentWindow.document.body.scrollWidth + 5;
        }
        document.getElementById(id).height= (newheight) + "px";
        document.getElementById(id).width= (newwidth) + "px";
}
function changeHeadline(this){
        this.innerHTML = "<a title='SpamRankings.net' href='http://www.spamrankings.net/about/'> <img style='vertical-align:middle' alt='SpamRankings.net' src='logoline.png'></a> for " + getParamterByName("org");
}


