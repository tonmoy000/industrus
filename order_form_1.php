<?php include'includes/header.php';?>
<?php include'includes/navbar.php';?>

        <section id="tabs" class="project-tab">
            <div class="container">
                <div class="title">
                  <div class="row">
                    <div class="col-lg-6">
                        <h2>Product Order Form 1</h2>
                    </div>
                    <div class="col-lg-6">
                      <h4 class="pull-right" >Step 1/5 </h4>
                    </div>
                  </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="d-flex">
                              <form  action="controller/order_form_1_controller.php" method="post">
                              <label>
                                  <span class="fname">Buyer Name <span class="required">*</span></span>
                                  <input type="text" name="bname" required >
                              </label>
                              <label>
                                  <span>Company Name (Optional)</span>
                                  <input type="text" name="cn" required >
                              </label>

                              <!-- Yorder -->
                              <div class="well">
                              <label>
                                  <span class="pname">Product Name <span class="required">*</span></span>
                                  <input type="text" name="pname">
                              </label>

                              <div class="card">
                                  <div class="card-header">Size<span class="required">*</span></div>
                                  <div class="card-body">


                                <label>
                                    <span class="pname">M <span class="required">*</span></span>
                                    <input type="text" name="pname" placeholder="Quantity In Pices">
                                </label>
                                <label>
                                    <span class="pname">S <span class="required">*</span></span>
                                    <input type="text" name="pname" placeholder="Quantity In Pices">
                                </label>
                                <label>
                                    <span class="pname">L <span class="required">*</span></span>
                                    <input type="text" name="pname" placeholder="Quantity In Pices">
                                </label>
                                <label>
                                    <span class="pname">XL <span class="required">*</span></span>
                                    <input type="text" name="pname" placeholder="Quantity In Pices">
                                </label
                                <label>
                                    <span class="pname">2XL <span class="required">*</span></span>
                                    <input type="text" name="pname" placeholder="Quantity In Pices">
                                </label>
                                <label>
                                    <span class="pname">3XL <span class="required">*</span></span>
                                    <input type="text" name="pname" placeholder="Quantity In Pices">
                                </label>
                                <label>
                                    <span class="pname">4XL <span class="required">*</span></span>
                                    <input type="text" name="pname" placeholder="Quantity In Pices">
                                </label>
                                </div>
                                </div>

                                  <label>
                                      <span class="clr">Color<span class="required">*</span></span>
                                      <input type="text" name="clr">
                                  </label>

                                  <label>
                                      <span class="feb">Febreics<span class="required">*</span></span>
                                      <input type="text" name="feb">
                                  </label>

                                  <label>
                                      <span class="febde">Febrics Description<span class="required">*</span></span>
                                      <input type="text" name="febde">
                                  </label>

                                  <label>
                                      <span class="febwe">Febreics Weight<span class="required">*</span></span>
                                      <input type="text" name="febwe">
                                  </label>

                                  <label>
                                      <span class="febclr">Febrics Color<span class="required">*</span></span>
                                      <input type="text" name="febclr">
                                  </label>

                                  <label>
                                      <span class="img">Upload Image<span class="required">*</span></span>
                                      <input type="file" name="img">
                                  </label>
                                  <div class="text-center">
                                      <button type="submit" name="orderForm1" class="col-lg-4 "> Next Form </button>
                                  </div>
                                </div>
                            </form>

                      </div>
                </div>
            </div>
            </div>
        </section>

  <?php include'includes/footer.php';?>
