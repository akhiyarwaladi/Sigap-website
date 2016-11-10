<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function setPassword($password) {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function check_password($hash, $password) {
        $full_salt = substr($hash, 0, 29);
        $new_hash = crypt($password, $full_salt);
        return ($hash == $new_hash);
    }
    private static $algo = '$2a';
    // cost parameter
    private static $cost = '$10';
    
    public static function hash($password) {

        return crypt($password, self::$algo .
                self::$cost .
                '$' . self::unique_salt());
    }
    
    public static function unique_salt() {
        return substr(sha1(mt_rand()), 0, 22);
    }

    private $_id;

    public function authenticate() {
        $record = Users::model()->findByAttributes(array('name' => $this->username));  // here I use Email as user name which comes from database
        $hasil = self::check_password($record->password_hash, $this->password);
        if ($record === null) {
            $this->_id = 'user Null';
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if (!$hasil) {            // here I compare db password with passwod field
            $this->_id = $this->username;
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        }
        //else if($record['E_STATUS']!=='Active')                //  here I check status as Active in db
        //    {        
        //                             $err = "You have been Inactive by Admin.";
        //                    $this->errorCode = $err;
        //   }
        else {
            $this->_id = $record['id']; //kenapa _id?
            //$this->setState('title', $record['id_user']);
            $this->errorCode = self::ERROR_NONE;
//            $this->setState('role', $user->role);
        }
        return !$this->errorCode;
    }

    public function getId() {       //  override Id
        return $this->_id;
    }

}
