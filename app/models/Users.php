<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $id;

    /**
     *
     * @var string
     */
    public $account_id;

    /**
     *
     * @var integer
     */
    public $is_employee;

    /**
     *
     * @var string
     */
    public $last_modified_date;

    /**
     *
     * @var string
     */
    public $last_access_date;

    /**
     *
     * @var integer
     */
    public $age;

    /**
     *
     * @var string
     */
    public $reputation_change_year;

    /**
     *
     * @var string
     */
    public $reputation_change_quarter;

    /**
     *
     * @var string
     */
    public $reputation_change_month;

    /**
     *
     * @var string
     */
    public $reputation_change_week;

    /**
     *
     * @var string
     */
    public $reputation_change_day;

    /**
     *
     * @var string
     */
    public $reputation;

    /**
     *
     * @var string
     */
    public $creation_date;

    /**
     *
     * @var string
     */
    public $user_type;

    /**
     *
     * @var string
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    public $accept_rate;

    /**
     *
     * @var string
     */
    public $location;

    /**
     *
     * @var string
     */
    public $website_url;

    /**
     *
     * @var string
     */
    public $link;

    /**
     *
     * @var string
     */
    public $profile_image;

    /**
     *
     * @var string
     */
    public $display_name;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    public function beforeSave(){
        $this->creation_date = $this->convertToDate($this->creation_date);
        $this->last_modified_date = $this->convertToDate($this->last_modified_date);
        $this->last_access_date = $this->convertToDate($this->last_access_date);
    }
    private function convertToDate($timestamp){
        return date('Y-m-d H:i:s',$timestamp);
    }
    public static function insertStackUsers($usersInJson){
        //print_r($usersInJson);die;
        foreach ($usersInJson->items as $stackUser) {
            $user = new Users();
            if($user->save(json_decode(json_encode($stackUser), true)))
                print 'User: '.$stackUser->display_name.'</br>';
            else
                print_r($user->getMessages());
        }
    }

}
