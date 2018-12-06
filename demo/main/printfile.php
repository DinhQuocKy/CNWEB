<?php
    class PrintFile{
        function printF($id){
            $html ='<style>
                    a.btn.btn-danger {
                        display: none;
                    }
                    a.btn.btn-info {
                        display: none;
                    }
                    a.btn.btn-warning {
                        display: none;
                    }
                    a.btn.btn-success {
                        display: none;
                    }
                </style>';
            $html.='<script>
                    window.print();
                    </script>';
            $html.= "<META http-equiv='refresh' content='0;URL=http://localhost:8080/webtech/demo/main/index.php?id=$id'>";

            return $html;
        }
    }

?>