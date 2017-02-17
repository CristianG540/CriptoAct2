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
<div class="site-index" data-url="<?= Yii::$app->request->baseUrl ?>">
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
                                    <input class="form-control" id="inputP" placeholder="Ingrese P" v-model="p">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">Q</label>
                                    <input class="form-control" id="inputQ" placeholder="Ingrese Q" v-model="q">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">e</label>
                                    <input class="form-control" id="inputE" placeholder="Ingrese e" v-model="e">
                                </div>
                            </div>
                            
                            <div class="row text-center">
                                <button type="button" class="btn btn-default" @click="calc" :disabled="!validData" >Calcular</button>
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
                                    <label class="control-label" for="exampleInputEmail1">N</label>
                                    <input class="form-control" id="inputN" readonly v-model="n">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">phi</label>
                                    <input class="form-control" id="inputPhi" readonly v-model="phi">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">d</label>
                                    <input class="form-control" id="inputD" readonly v-model="d">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Salida</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputEmail1">Introduzca el mensaje para descifrar:</label> <br>
                                    <textarea id="areaMensaje" cols="70" rows="10" v-model="msg"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputEmail1">Resultado:</label> <br>
                                    <textarea id="areaResultado" cols="70" rows="10" readonly v-model="resultado"></textarea>
                                </div>
                            </div>
                        </form>
                        <div class="row text-center">
                            <button type="button" class="btn btn-default" @click="desencriptar" :disabled="!msg">Desencriptar</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
