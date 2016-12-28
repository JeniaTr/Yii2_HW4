<?php


/* @var $this yii\web\View */

$this->title = 'Мой сайт';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
<!--            -->
            <div class="col-sm-12, col-md-6, col-lg-6">
                <div class="blockcube">
                    <div class="text-center">
                        <h2>Чтото1</h2>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="button" onclick="count_rabbits()" value="Считать кролей!"/>
                        <br>
                        <br>
                        <br>
                        <p></p>
                        <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
                     </div>

                </div>
<!--                -->
            </div>
                <div class="col-sm-12, col-md-6, col-lg-6">
                 <div class="blockcube">

                     <h2 class="text-center">Чтото2</h2>



                     <p class="text-center"><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
                 </div>
            </div>
<!---->

        </div>
            <div class="col-sm-12, col-md-12, col-lg-12">
            <div class="blockcube">
                <h2 class="text-center">Чтото2</h2>
                <br>

                <!-- Button trigger modal -->
                <div CLASS="text-center">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Launch demo modal
                    </button>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>
</div>
