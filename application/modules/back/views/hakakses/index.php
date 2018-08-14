<h1>Manage Hak Akses</h1>
 


<!-- Pesan --> 
<?php echo $this->session->flashdata('pesan'); ?>
<!-- End Pesan -->



<!-- Start Table -->
<div class="table-responsive">
<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>   
            <th>Nama Menu</th>  
            <th>Banyak role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody> 
</table>
</div>


<!-- Start JS --> 
<script type="text/javascript">

    var table;

    $(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.

         "language": {
        "processing": "<img src='<?=base_url('assets/assets_backend/images/loading/default.gif')?>'/>" //add a loading image,simply putting <img src="loader.gif" /> tag.
        },

        
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('back/hak_akses/ambildata')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });

});
</script>

</body>
</html>