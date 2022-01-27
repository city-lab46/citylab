<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/forms.css'?>"/>
<?php include "components/sidenav.php"; ?>  

    <div class="main">
        <div class="contents">
          <div class="container">
            <form action="<?php echo BASEURL.'/finance/add'?>" method="post">
                              <div class="row">
                                        <div class="col-25">
                                          <label for="account">Account</label>
                                        </div>
                                        <div class="col-75">
                                          <select id="account" name="account">
                                            <option value="Cash">Cash</option>
                                            <option value="Cheque">Cheque</option>

                                          </select>
                                        </div>
                                      </div>
                              <div class="form-group">
                              <div class="row">
                              <div class="col-25">
                                  <label>Date</label></div>
                                  <div class="col-75">
                                  <input type="date" name="date" class="form-control" required></div>
                                  </div>
                              </div>
                              <div class="form-group">
                              <div class="row">
                              <div class="col-25">
                                  <label>Description</label></div>
                                  <div class="col-75">
                                   <input type="text" name="description" class="form-control" required></div>
                                   </div>
                              </div>
         <div class="form-group">
                                       <div class="row">
                                       <div class="col-25">
                                           <label>Income Money In</label></div>
                                           <div class="col-75">
                                            <input type="text" name="income_money" class="form-control" ></div>
                                            </div>
                                       </div>
                                       <div class="form-group">
                                                                     <div class="row">
                                                                     <div class="col-25">
                                                                         <label>Expense Money In</label></div>
                                                                         <div class="col-75">
                                                                          <input type="text" name="expense_money" class="form-control" ></div>
                                                                          </div>
                                                                     </div>

    <div class="row">

                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            <input type="reset" class="btn btn-primary" name="cancel" value="Cancel"></a>
                              </div>
                          </form>
    </div>


  </div>
</div>
</body>

</html>