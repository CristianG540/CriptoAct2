<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use app\assets\CustomAssets;

CustomAssets::register($this);

$baseUrl = Yii::$app->request->baseUrl;

$this->registerJsFile($baseUrl.'/js/mod-main.js', ['depends' => ['\yii\web\JqueryAsset']]);

$this->title = 'Cripto';

?>
<div class="site-index">
    <div class="section">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Entrada</h3>
            </div>
            <div class="panel-body">
        
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputEmail1">P</label>
                                    <input class="form-control" id="inputP" placeholder="Ingrese P" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">Q</label>
                                    <input class="form-control" id="inputQ" placeholder="Ingrese Q" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">e</label>
                                    <input class="form-control" id="inputE" placeholder="Ingrese e">
                                </div>
                            </div>
                            
                            <div class="row text-center">
                                <button type="submit" class="btn btn-default">Calcular</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                    
            </div>
        </div>
        
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Claves</h3>
            </div>
            <div class="panel-body">
                
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputEmail1">P</label>
                                    <input class="form-control" id="inputP" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">Q</label>
                                    <input class="form-control" id="inputQ" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">e</label>
                                    <input class="form-control" id="inputE" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>