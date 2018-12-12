<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script>
            function setTime(duration) {
                // alert(i);
                var nowDate = new Date();
                var startTime = document.getElementById("iPut");
                var timePart1 = startTime.value.substring(0, 2);
                var timePart2 = startTime.value.substring(3, 5);
                var newStartTime = timePart1+"."+timePart2;
                      
                var newDate = new Date(nowDate.getFullYear(),nowDate.getMonth(),nowDate.getDay(),timePart1,timePart2);
                var endDate = new Date(nowDate.getFullYear(),nowDate.getMonth(),nowDate.getDay(),timePart1,parseInt(timePart2)+parseInt(duration));
                var hour = ""+endDate.getHours();
                var minute =""+endDate.getMinutes();
                
                if (hour.length < 2) hour = '0' + hour;
                if (minute.length < 2) minute = '0' + minute;
                var endTime = hour+"."+minute;
                
                document.getElementById("sTime").value = newStartTime;
                document.getElementById("eTime").value = endTime;
                document.getElementById("bsubmit").click();
               // document.getElementById("form2").submit();
               // alert(endTime);
                

            }

            // function myFunction() {
            //     var x = document.getElementById("form2");
            //     if (x.style.display === "none") {
            //         x.style.display = "block";
            //     } else {
            //         x.style.display = "none";
            //     }
            //     }
            </script>

</head>
<body>
        <center>
            <form id="form2" name="form2" method="POST" >
                <input type="hidden" name="etime" id="eTime">
                <input type="hidden" name="stime" id="sTime">
                <P><h1> เวลาเริ่มลดน้ำ:</h1> </P><input size="8" type="time" id="iPut" style="height:30px;font-size:160%;text-align: center;" required ><br>
              <input type="submit" id="bsubmit">
</form>
<P><h1>ระยะเวลาลดน้ำ</h1>
     </center>
          <br>
         
   
        <table align="center" border="0" width="10%" >
            <tr>
              <td>  
               <img border="0" onclick="setTime('10')" alt="W3Schools"  src="ENDCODE/10.jpg" width="200" height="200">
               
                
            </td>
             
                <img border="0" onclick="setTime('15')" alt="W3Schools" src="ENDCODE/15.jpg" width="200" height="200">
               </td>
             
            </tr>
            <tr>
              <td>
                <img border="0" onclick="setTime('20')" alt="W3Schools" src="ENDCODE/20.jpg" width="200" height="200">
                </td>
              <td>
                <img border="0" onclick="setTime('30')" alt="W3Schools" src="ENDCODE/30.jpg" width="200" height="200">
                </td>
              
            </tr>
            <tr>
            
              
            </tr>
            <tr>
             
            </tr>
          </table>
        
</body>
</html>
