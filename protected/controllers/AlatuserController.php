<?php

class AlatuserController extends Controller {

    const ERROR_NONE = 0;
    const ERROR_ALAT_NOT_EXIST = 1;
    const ERROR_ALAT_WAS_USED = 2;

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('admin','create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array( 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $model = $this->loadModel($id);
        
        $criteria = new CDbCriteria;
        $criteria->compare('id_alat', $model->id_alat,true);
//        print_r($model->id_alat);
//        exit();
        $datasensor = new Datasensor('search',array(
        'criteria'=>array(
//            'condition'=>$criteria,
        )));
//        $criteria = new CDbCriteria();
//        $criteria->condition = 'id_alat = :id';
//        $criteria->params = array (':id'=>$model->id_alat);
//        $item_count = Datasensor::model()->count($criteria);
//        $pages = new CPagination($item_count);
//        $pages->setPageSize(Yii::app()->params['listPerPage']);
//        $pages->applyLimit($criteria);  // the trick is here!
//        
        $this->render('view', array(
            'model' => $model,
            'datasensor'=>  $datasensor,//Datasensor::model()->findAllByAttributes(array('id','a5378660d461721073a7dde756caddbc',)),
//            'item_count'=>$item_count,
//            'page_size'=>Yii::app()->params['listPerPage'],
//            'pages'=>$pages,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Alatuser;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Alatuser'])) {
            $model->attributes = $_POST['Alatuser'];
            $record = DaftarAlat::model()->findByAttributes(array('kode' => $model->id_alat));
            if ($record === null) {
                $error = "Alat not exist";
                $model->addError('id_alat', $error);// = self::ERROR_ALAT_NOT_EXIST;
            } else if ($record->status == 1) {
                $error = "Alat was used";
                $model->addError('id_alat', $error);
//                $this->errors = self::ERROR_ALAT_WAS_USED;
            } else {
                if ($model->save())
                    $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Alatuser'])) {
            $model->attributes = $_POST['Alatuser'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $criteria = new CDbCriteria;
        $criteria->compare('id_user', Yii::app()->user->id,true);
        $dataProvider = new CActiveDataProvider('Alatuser',array(
            'criteria'=>  $criteria,
        ));
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Alatuser('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Alatuser']))
            $model->attributes = $_GET['Alatuser'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Alatuser the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Alatuser::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Alatuser $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'alatuser-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
