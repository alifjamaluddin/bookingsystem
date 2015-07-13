	function cancel(a,b){
		var oneDay = 24*60*60*1000; 
		var currentDate = new Date();
		var secondDate = new Date(a*1000);

		var diffDays = Math.round((secondDate.getTime() - currentDate.getTime())/(oneDay));
		var txt;

		if(diffDays < 2){
			var r = confirm("Are you confirm?");
			if (r == true) {
				window.location.href = '../php/cancel-reservation.php?id='+b;
			} 
		}else{
			alert("Cancellation must be made in 2 days after reservation created");
		}
	}