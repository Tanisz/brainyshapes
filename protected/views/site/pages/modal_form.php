<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/bootstrap/css/bootstrap.min.css');
?>
<style scoped>

    #myModal {
        top:10%;
    }
    .modal-body{
        height: 500px;
        overflow-y: auto;
    }
    .modal-content {
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #303030;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
    p {
        font-size: 12px;
        line-height:normal;
    }

    .modal-body::-webkit-scrollbar {
        width: 1em;
    }

    .modal-body::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    }

    .modal-body::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid slategrey;
    }

</style>

<div class="se-pre-con"></div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">
                    <?php echo $modal_title; ?>
                </h3>
            </div>

            <div class="modal-body">
                <?php $this->renderPartial($modal_content); ?>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">Bezár</button>
            </div>
        </div>
    </div> 
</div>    

<script>
    $(document).ready(function () {
        $('#myModal').modal('show');


    });
</script>

