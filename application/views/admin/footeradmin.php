    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  Admin Desa &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
    
    
 <!--END MAIN WRAPPER -->


     <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

     <!-- PAGE LEVEL SCRIPTS -->\
     <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/fullcalendar-1.6.2/fullcalendar/fullcalendar.min.js"></script>  
    <script src="<?php echo base_url(); ?>asset/admin/assets/js/calendarInit.js"></script>
        <script>
            $(function () { CalendarInit(); });
        </script>
     <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>

