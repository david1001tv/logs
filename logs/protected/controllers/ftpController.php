<?php

class ftpController extends Controller {

    /**
	 * @var array the config of projects 
	 */
    private $projConfig;
    
    /**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
    public $layout = '//layouts/column2';
    
    /**
     * @var object the object of class EFtpConnection
     */
    private $ftp;

    /**
     * @var array the array of log files from ftp server
     */
    private $files = array();

    public function __construct()
    {
        $this->projConfig = require Yii::getPathOfAlias('application').DIRECTORY_SEPARATOR.'/config/projectsConfig.php';
    }

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index', 'dump' and 'view' actions
				'actions' => array('index', 'filter', 'download', 'watch'),
				'users' => array('*'),
			),
		);
    }
    
    /**
     * Lists all logs
     * @param string $projId the ID of project whose DB will be dumped
     * @return array all log files
     */
    public function actionIndex($projId) {
        $this->ftp = $this->projConfig[$projId]['ftp'];
        ftp_pasv($this->ftp->getConnect(), true);
        $this->files = $this->ftp->listFiles($this->ftp->currentDir());
        $this->render('index',array(
			'files' => $this->files,
		));
    }

    /** TODO: make filtration of log files
     * @param array array of criteries for filtration
     * @return array list of filtered log files
     */
    public function actionFilter($criteies) {
        #code
        return $this->files;
    }

    /** TODO: make dowloading
     * @param string name of file
     * @return bool is downloaded
     */
    public function actionDownload($name) {
        #code
        return true;
    }

    /** TODO: make preview of file
     * @param string name of file
     * @return bool is true preview
     */
    public function actionWatch($name) {
        # code...
        return true;
    }
}