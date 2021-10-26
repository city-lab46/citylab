<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>

<?php include "components/header.php"; ?>
    
    <div class="nav">
      <a class="activ" href="<?php echo BASEURL.'/patient/search'?>"><i class="fas fa-search"></i>Search</a> 
    </div>

      <div class="main">
          <table id="patient" class="styled-table">
            <thead>
              <tr>
                  <th>Patient Name</th>
                  <th>Patient Tests</th>
                  <th>Appoint Doctor</th>
                  <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>Miss. V.Hiruni</td>
                  <td><button class="viReport" onclick="window.location.href='test.php'">View Tests</button></td>
                  <td><button class="appoint" onclick="window.location.href='appoint.php'">Appoint New Doctor</button></td>
                  <td><button class="arti" onclick="openForm()"><i class="fas fa-comment-dots"></i></button></td>
              </tr>
              <tr>
                  <td>Mr. K.Kavin</td>
                  <td><button class="viReport" onclick="window.location.href='test.php'">View Tests</button></td>
                  <td><button class="appoint">Appoint New Doctor</button></td>
                  <td><button class="arti" onclick="openForm()"><i class="fas fa-comment-dots"></i></button></td>
              </tr>
              <tr>
                  <td>Mr. V.Nalin</td>
                  <td><button class="viReport" onclick="window.location.href='test.php'">View Tests</button></td>
                  <td><button class="appoint">Appoint New Doctor</button></td>
                  <td><button class="arti" onclick="openForm()"><i class="fas fa-comment-dots"></i></button></td>
              </tr>
              <tr>
                  <td>Mr. P.Nirushan</td>
                  <td><button class="viReport" onclick="window.location.href='test.php'">View Tests</button></td>
                  <td><button class="appoint">Appoint New Doctor</button></td>
                  <td><button class="arti" onclick="openForm()"><i class="fas fa-comment-dots"></i></button></td>
              </tr>
            </tbody>
          </table>
        </div>
        
          <!-- <ax href="#" class="next">Next</ax>
          <ax href="#" class="page">1</ax>
          <ax href="#" class="previous">Previous</ax> -->
        
        <div class="chat-popup" id="myForm">
          <form action="" class="form-container">      
            <label for="msg"><b>New message</b></label>
            <textarea placeholder="Message.." name="msg" required></textarea>
      
            <button type="submit" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
      
      </div>
  </div>
</body>