function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = t / 1000;
  return {
    'total': t,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
		$.ajax({
			  type: 'POST',
		      url: "stop.php",
			  data: { score : k},
    	  	  cache: false,
     	      success: function(datastop){
				//  console.log(data);
             $("#div1").html(datastop);} 
		          });
		  
      clearInterval(timeinterval);
	  return t.total;
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) +  60* 1000);
