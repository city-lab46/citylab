<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Report</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/all.min.css'?>"/>
    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/report.css'?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

    </head>
    <body id="report">
        <page size="A4">
            <div class="header">
                <header>
                    <img src="assets/favicon.png" alt=""></img>
                    <h1> CITY LAB</h1>
                    <div class="address">
                        <p># 114, D.S. SENANAYAKE MW, PANADURA,SRI LANKA.<br> <p>TEL : 0385686844, HOT LINE:071-4411187<br>E-mail : citylab@yahoo.com</p>
                    </div>
                   
                </header>
            </div>
            <div class="deta">
                <hr class="solid">
                    <div class="column">
                        <table>
                        <tr>
                            <td>NAME OF THE PATIENT  </td>
                            <td> :- MR. ADELINE</td>
                        </tr>
                        <tr>
                            <td>DATE  </td>
                            <td> :- 1-OCT-2021</td>
                        </tr>
                        <tr>
                            <td>SPECIMEN EXAMINED  </td>
                            <td> :- BLOOD</td>
                        </tr>
                        <tr>
                            <td>NAME OF THE TEST  </td>
                            <td> :- F.B.S</td>
                        </tr>
                        </table>
                    </div>
                    <div class="column" >
                        <table>
                        <tr>
                            <td>PATIENT ID  </td>
                            <td> :- 0001</td>
                        </tr>
                        <tr>
                            <td>AGE  </td>
                            <td> :- 52Y</td>
                        </tr>
                        <tr>
                            <td>TEST ID :- </td>
                            <td> :- 0001</td>
                        </tr>
                        </table>
                    </div>
                
            </div>
           
                 <h2 class="bar"> LABORATORY REPORT</h2>
                 <div class="table">
                     <table class="report">
                        <tr>
                            <th>TEST</th>
                            <th>RESULT</th>
                            <th>UNIT</th>
                            <th>REFERENCE RANGE</th>
                        </tr>
                        <tr>
                            <th>FASTING BLOOD SUGAR</th>
                            <th>233.5</th>
                            <th>mg/dl</th>
                            <th>65-110</th>
                        </tr>
                     </table>
                 </div>
                 <div class="footer">
                    <hr class="solid">
                    <div class="column1">
                        <table>
                            <tr>
                                <th><br>Mr. Bandula Pethangoda <br>Registered Medical Laboratory Technologist <br>
                                Diploma in Medical Laboratory Technology <br>(MLT)Gov. Reg.No : 0684</th>
                            </tr>
                        </table>
                 </div>
                 <div class="column1">
                    <table>
                        <tr>
                            <th><br>Ms.Anula Jayasinghe Pethangoda <br>Registered Medical Laboratory Technologist <br>
                            Diploma in Medical Laboratory Technology <br>(MLT)Gov. Reg.No : 0683 <br> Retaired Microbiology Tutor NIHS</th>
                        </tr>
                    </table>
             </div>
          
        </page>
    
    </body>
    <script>
        var doc= new jsPDF()
        var h1=document.querySelector('#report')
        doc.fromHTML(h1,15,15)
        doc.save("Report.pdf")

    </script>
</html>