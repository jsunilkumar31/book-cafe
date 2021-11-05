<script type="text/javascript" src="http://yadcf-showcase.appspot.com/resources/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://yadcf-showcase.appspot.com/resources/js/jquery.dataTables.yadcf.0.9.2.js"></script>

<style type="text/css">

.bcimg{
  width: 40px;
}
</style>
<script>
 
function img_hl(x) {
    if (x.substring(0, 7) == 'uploads') {
        return "<img style='width:20px; height:30px;' src=" + baseUrl + x +">";
        
    }else{
      return "<img style='width:20px; height:30px;' src=" + baseUrl + 'assets/uploads/book_covers/' + x +">";

    }
}

function isPdf(x) {
  var div = document.createElement('div');
  div.innerHTML = x // Make it a complete tag
  var link = div.firstChild.getAttribute("href");
  var title = div.firstChild.getAttribute("title");

  if (title == null || title == '') {
    return "Not Available";
  }else{
    return "<a href='"+link+"'>Read</a>";
    
  }
}
function bkFormat(x) {
    if (x != null) {
        var d = '', pqc = x.split("___");
        d = '<strong>' + pqc[0] + '</strong><br>';
        d += '<strong>Publisher: </strong>'+pqc[1] + '<br>';
        d += '<strong>Authors: </strong>' + pqc[2] + '<br>';

        return d;
    } else {
        return '';
    }
}

    $(document).ready(function () {
        var oTable = $('#PRData').dataTable({
            "aaSorting": [[3, "asc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "iDisplayLength": 10,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('panel/issued/getEBooks') ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            }, 

            "aoColumns": [
              // {
              //     "data": "image",
              //     "mRender": img_hl,
              //     "bSortable": false,
              // }, {
              //     "data": "book_title",
              //     "mRender": bkFormat,

              // },{
              //     "data": "category_name",
              // }, {
              //     "data": "price",
              // },
              // { "data": "read", 
              //     "mRender": isPdf,

              //  },
              //  { 
              //   "data": "description", 
              //   'visible' : false,
              //  }
              null, null, null, null, null,
             ],
        }).yadcf([

        // 5== category_name
        // 7== description
        // 8== book_title
        // 9== authors_name

            {
                column_number : 5,
                filter_container_id: 'external_filter_book_title',
                filter_type: "type", 
                style_class: 'form-control',
            },
            {
                column_number : 7,
                filter_container_id: 'external_filter_book_title',
                filter_type: "text", 
                style_class: 'form-control',
            },
        ], {   externally_triggered: true});
              
    });
     
</script>
 <!-- Main content -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><?= lang('book_label'); ?></label>
                                <span id="external_filter_book_title"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><?= lang('author_label'); ?></label>
                                <span id="external_filter_author"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><?= lang('add_desc_label'); ?></label>
                                <span id="external_filter_description"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label><?= lang('add_category_label'); ?></label>
                                <span id="external_filter_category"></span>
                            </div>
                        </div>
                        
                       
                       
                    </div>
                </div>
              <table id="PRData" class="table table-bordered table-striped">
                <thead>
                <tr>
               
                  <th><?= lang('image_label'); ?></th>
                  <th><?= lang('book_label'); ?></th>
                  <th><?= lang('category_label'); ?></th>
                  <th><?= lang('price_label'); ?></th>
                  <th><?= lang('read_label'); ?></th>



                  
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td colspan="2" class="dataTables_empty">Loading</td>
                        </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th><?= lang('image_label'); ?></th>
                  <th><?= lang('book_label'); ?></th>
                  <th><?= lang('category_label'); ?></th>
                  <th><?= lang('price_label'); ?></th>
                  <th><?= lang('read_label'); ?></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
