var newDate = new Date();
var month = newDate.getMonth() + 1;
var day = newDate.getDate();
var year = newDate.getFullYear();
var currentDate = year+"-"+month+"-"+day;
document.write(month + "/" + day + "/" + year);
if(getUrlVars()["venue"]){
var venue = getUrlVars()["venue"];	
}else{
	venue = "f01";
}
 
    var url = "generateDataCalendar.php?venue="+venue;
	$(document).ready(function() {
		$.getJSON(url, function (result) {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: currentDate,
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: result
		});
		});
	});

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
