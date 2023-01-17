/*
*
* This is a document created by Tim Russell
* Protected under GNU Public License v3: All rights reserved
*
* Please feel free to use, modify and distribute in any open source format
* GNU Public v3 doesn't allow close source reproduction
*
*/
<html>
  <head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Result Page</title>
    <link href="/css/style.css?<?php echo md5(time());?>">
    </head>
    <body>
<B>Telephone Number</B><p id="result">-</p>
<script>
  // Make sure we clear variables if the window is closed by the user
  //
  window.addEventListener('beforeunload', (event) => {
    localStorage.removeItem('tabOpen');
  });
 
  // Every 200ms the window will check it is displaying the correct CLID
  // If it changes for example when another call comes in the display will be updated
  window.setInterval('refresh()', 200);
  function refresh() {
    localStorage.setItem('tabOpen', 'true');
    let myData = JSON.parse(localStorage.getItem('myData'));
    document.getElementById("result").innerHTML = myData.telephone;
    const d = new Date();
    let time = d.getTime();
    // You can change this timer but I have set it to 30 seconds after a cli number 
    // was received the popup windowwill automatically close itself and reset the variables.
    //
    if ((time - myData.stamp) > (30*1000) ) {
        // Reset LocalSession after timeout and close the window
        localStorage.removeItem('myData');
        localStorage.removeItem('tabOpen');
        window.close();
    }
  }
</script>
</body>
