<?php
include "header.php";
include "sidebar.php";
?>
<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="col-md-3">

    </div>
    <div class="container-fluid col-md-6">
      <!-- OVERVIEW -->
      <div class="panel panel-headline" style="width: 100%;padding:25px;margin-left:10px;">
        <div class="panel-heading">
          <h3 class="panel-title">Pengecekan Dokumen Terkait</h3>
          <p class="panel-subtitle">Tanggal Hari Ini: <?php  echo date("d M Y"); ?></p>
        </div>
        <!-- TABLE HOVER -->
          <div class="panel-body">
            <table width="100%">
              <tr>
                <td width="40%">Nama</td>
                <td width="2%">:</td>
                <td> Chalid Ade Rahman</td>
              </tr>
              <tr>
                <td width="8%">Kode</td>
                <td>:</td>
                <td> AB001</td>
              </tr>
              <tr>
                <td width="8%">Letak</td>
                <td>:</td>
                <td> PLTU1  </td>
              </tr>

              <tr>
                <td width="8%">Tanggal Pengecekan</td>
                <td>:</td>
                <td> <?php  echo date("d M Y"); ?>  </td>
              </tr>
            </table>
            <br>
            <h4>Upload Berkas</h4>
            <hr>
            <div class="col-md-12" style="margin:8px;">
              <div class="row">
                <div class="col-md-6">
                 <input type="checkbox" name="a"><font style="font-size:16px;vertical-align: super;"> Dokumen A </font>
                </div>
                <div class="col-md-6">
                  <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Upload Dokumen
                  </label>
                  <input id="file-upload" name="a" type="file"/>
                </div>
                </div>
              </div>
            <hr>
            <div class="col-md-12" style="margin:8px;">
              <div class="row">
                <div class="col-md-6">
                 <input type="checkbox" name="b"><font style="font-size:16px;vertical-align: super;"> Dokumen B </font>
                </div>
                <div class="col-md-6">
                  <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Upload Dokumen
                  </label>
                  <input id="file-upload" name="b" type="file"/>
                </div>
                </div>
              </div>
            <hr>
            <div class="col-md-12" style="margin:8px;">
              <div class="row">
                <div class="col-md-6">
                 <input type="checkbox" name="c"><font style="font-size:16px;vertical-align: super;"> Dokumen C </font>
                </div>
                <div class="col-md-6">
                  <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Upload Dokumen
                  </label>
                  <input id="file-upload" name="c" type="file"/>
                </div>
                </div>
              </div>
            <div class="col-md-12" style="margin:8px;">
            <input type="button" value="Simpan" style="margin-top:20px;color:#fff;width:100%;height: 45px;background: #ffb300;border-radius: 6px;font-weight: 700;border: #ffb300;">
            </div>
            <hr>
          </div>
        </div>
        <!-- END TABLE HOVER -->
      <!-- END OVERVIEW -->
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
<?php include "footer.php"; ?>
