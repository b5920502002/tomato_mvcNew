    <?php $accession_number = $this->accession_number; ?>
    <style>
      input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: white;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid #ff6258;
      }

      input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ff6258;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid #ff6258;
      }

      input[type='radio'] {
        cursor: pointer;
      }

      .option_none,
      .option_none2 {
        display: none;
      }
    </style>

    <form id="MyForm" name="MyForm" method="post" action="table_display" target="myframe">
      <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12">
          <div class="form-group row">
            <label class="" style="padding-top:18px;">Accession Number :</label>

            <div class="col-sm-2" style="padding-top:10px; ">
              <select id="test_accession_number" name="accession_number[]" class="js-example-basic-multiple select2-hidden-accessible" multiple="" style="width:100%;" tabindex="-1" aria-hidden="true">
                <?php foreach ($accession_number as $key => $value) { ?>
                  <option value="<?php echo $value['accession_number']; ?>"><?php echo $value['accession_number']; ?></option>
                <?php } ?>
              </select>
            </div>


            <div class="" style="padding-top: 10px;">
              <button id="btnSearch" style="margin-left: 20px;" type="button" class="btn btn-primary btn-fw">Search</button>
            </div>
            <a id="Advenced_search"><span class="fa fa-sort-down" id="icon-AS"></span>Advenced search</a>



          </div>
        </div>
      </div>

      <div class="advancedSearch">

        <div class="row">
          <div class="form-group row AS">

            <label class="col-form-label" style="margin-right: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp; Position </label>
            <div class="col-jump">
              <input name="pos1" type="text" class="form-control" placeholder="0">
            </div>
            <label class="col-form-label">-</label>
            <div class="col-jump">
              <input name="pos2" type="text" class="form-control" placeholder="50000">
            </div>

            <div class="col-jump" style="margin: 7px 0 0 50px ;">
              <input type="radio" class="form-check-input" name="radio_position" id="membershipRadios1" value="all" checked="">
              <p>All</p>
            </div>
            <div class="col-jump" style="margin: 7px 0 0 40px ;">
              <input type="radio" class="form-check-input" name="radio_position" id="membershipRadios1" value="same">
              <p>Same</p>
            </div>
            <div class="col-jump" style="margin: 7px 0 0 35px ;">
              <input type="radio" class="form-check-input" name="radio_position" id="membershipRadios1" value="diff">
              <p>Different</p>
            </div>


          </div>
        </div>

        <div class="row">
          <div class="form-group row AS">

            <label class="col-form-label" style="margin-right: 10px;">&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Alleles </label>
            <div class="col-jump">
              <select class="form-control" name="allele[]" id="allele1">
                <option value="">None</option>
                <option value="A">A</option>
                <option value="T">T</option>
                <option value="C">C</option>
                <option value="G">G</option>
              </select>
            </div>
            <label class="col-form-label">/</label>
            <div class="col-jump">
              <select class="form-control" name="allele[]" id="allele2" disabled="">
                <option value="">None</option>
                <option value="A">A</option>
                <option value="T">T</option>
                <option value="C">C</option>
                <option value="G">G</option>
              </select>
            </div>
            <label class="col-form-label">/</label>
            <div class="col-jump">
              <select class="form-control" name="allele[]" id="allele3" disabled="">
                <option value="">None</option>
                <option value="A">A</option>
                <option value="T">T</option>
                <option value="C">C</option>
                <option value="G">G</option>
              </select>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="form-group row AS">
            <label class="col-form-label" style="margin-right: 10px;">&emsp;&emsp;&emsp; Chromosome </label>
            <div class="col-jump">

              <select id="select_chrom" name="chrom[]" class="select2-chrom js-example-basic-multiple select2-hidden-accessible" multiple="" style="width:100%;" tabindex="-1" aria-hidden="true">
                <?php for ($i = 1; $i <= 12; $i++) {
                  echo "<option value='$i'>$i</option>";
                } ?>
              </select>

            </div>
          </div>
        </div>



      </div>

    </form>

    <div id="bar-loader" class="bar-loader hidden" style="margin-top: 100px; margin-bottom: 100px;">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <iframe style="height: 1200px;" id='myframe' class="hidden " name="myframe" src="table_display" frameborder='0' width='100%' height='100%' scrolling='no'></iframe>
    <script>
      $("#allele1").on("change", function() {
        var allele1 = $("#allele1").val();
        var allele2 = $("#allele2").val();
        var allele3 = $("#allele3").val();
        $(".option_none").removeClass("option_none");
        if (allele1 != "") {
          $("#allele2").find("option[value=" + allele1 + "]").addClass("option_none");
        }
        if (allele1 == allele2 || allele1 == allele3) {
          $(".option_none").removeClass("option_none");
          $(".option_none2").removeClass("option_none2");
          $("#allele2").val("");
          $("#allele3").val("");
          if (allele1 != "") {
            $("#allele2").find("option[value=" + allele1 + "]").addClass("option_none");
          }
        }

      });
      $("#allele2").on("change", function() {
        var allele1 = $("#allele1").val();
        var allele2 = $("#allele2").val();
        $(".option_none2").removeClass("option_none2");
        if (allele2 != "") {
          $("#allele3").find("option[value=" + allele1 + "]").addClass("option_none2");
          $("#allele3").find("option[value=" + allele2 + "]").addClass("option_none2");
        }
      });
    </script>