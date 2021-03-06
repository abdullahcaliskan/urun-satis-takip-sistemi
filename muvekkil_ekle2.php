<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
<div class="page-content">
    <div class="content container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Form Masks</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-file-alt"></i>
              <h3>Masked Input Fields</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">
                <form action="#" class="form-horizontal row-border" />
                
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Date</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'alias': 'date'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">alias:date</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Phone</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">(999) 999-9999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Phone + Ext</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 999-9999 x999
                            99'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">(999) 999-9999 x99999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Int' Phone</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'+33 999 999 999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">+33 999 999 999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">TaxID</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'99-9999999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">99-9999999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">SSN</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'999-99-9999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">999-99-9999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Product Key</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'a*-999-a999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">a*-999-a999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Purchase Order</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'PO: aaa-999-***'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">PO: aaa-999-***</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Percent</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'99%'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">99%</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Currency</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'999,999,999.99 $', 'numericInput' : true" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">right alignment</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Currency 2</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'$ 999,999,999.99', 'greedy' : false, 'rightAlignNumerics' : false" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">left alignment</p>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>