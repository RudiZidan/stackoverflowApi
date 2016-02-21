<?php
use Phalcon\Mvc\Model\Query;
class Moderators extends \Phalcon\Mvc\Model
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
    public $user_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('user_id', 'Users', 'id', array('alias' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'moderators';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Moderators[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Moderators
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public static function getModeratorsBasedOnLocation(){
        $modelManager = \Phalcon\Di::getDefault()->getShared('modelsManager');
        $query = $modelManager->createQuery("select Users.location, count(Moderators.id) as total_moderators from Moderators INNER JOIN Users on Users.id = Moderators.user_id GROUP BY Users.location ");
        $data  = $query->execute();
        $result = array();
        foreach ($data as $location) {
            $result[]=[0,$location->total_moderators];
        }
        return json_encode($result);
    }

}
