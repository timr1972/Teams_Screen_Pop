/*
*
* This is a document created by Tim Russell
* Protected under GNU Public License v3: All rights reserved
*
* Please feel free to use, modify and distribute in any open source format
* GNU Public v3 doesn't allow closed source reproduction
*
*/
<html>
  <head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>My Test Page</title>
    <link href="/css/style.css?<?php echo md5(time());?>">
    </head>
    <body>
<div id="result">.</div>
<script>
  window.setInterval('refresh()', 1000); //every second we check to see the popup is still there
  function refresh() { 
    if (localStorage.getItem('tabOpen') == null) {
      console.log('Tab has been closed');
      localStorage.removeItem('myData');
      document.getElementById("result").innerHTML = "Please close this tab";
      window.close();
    } else {
      console.log('Tab still present');
    }
  }
    
  // get the value of the variable passed in the URL
  let urlParams = new URLSearchParams(window.location.search);
  let myVariable = urlParams.get('tel');
  const d = new Date();
  let time = d.getTime();
  if (typeof(Storage) !== "undefined") {
      localStorage.setItem('myData', JSON.stringify({ telephone: myVariable , stamp: time }));
      console.log(myVariable);
      console.log(time);
  } else {
        // Sorry no storage
  }
  
  document.getElementById("result").innerHTML = "Please see popup screen";
  if (localStorage.getItem('tabOpen') !== null) {
    console.log('Tab is open, do not launch');
  } else {
    // No window is seen so lets open a new one
    let newWindow = window.open('telephone-pop.php?var=<?php echo md5(time());?>' , "phone-screen",  "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
  }
}
</script>
</body>
