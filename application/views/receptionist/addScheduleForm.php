<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">

        <div class="contents">
            <div class="container">

                <form action="">
                    <div class="row">
                        <div class="col-25">
                            <label for="booking_date">Date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="booking_date" name="booking_date" value="dd/mm/yyyy">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="booking_time">Time</label>
                        </div>
                        <div class="col-75">
                            <select id="booking_time" name="booking_time" placeholder="--select--">
                                <option value=""><--select--></option>
                                <option value="">11.30</option>
                                <option value="">13.00</option>
                                <option value="">15.30</option>
                            </select>
                        </div>
                    </div>
      
                    <div class="row">
                        <input type="submit" value="Submit">
                        <input type="submit" name="cancel" value="Cancel">
                    </div>
                    
                </form>
    
            </div>

        </div>
    
    </div>
    
</body>