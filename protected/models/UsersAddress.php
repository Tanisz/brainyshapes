<?php

/**
 * This is the model class for table "users_address".
 *
 * The followings are the available columns in table 'users_address':
 * @property integer $users_address_id
 * @property integer $users_id
 * @property string $first_name
 * @property string $last_name
 * @property string $zip_code
 * @property string $city
 * @property string $street
 * @property string $hnumber
 * @property string $floor
 * @property string $dnumber
 * @property string $text
 *
 * The followings are the available model relations:
 * @property Users $users
 */
class UsersAddress extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('users_id', 'required'),
			array('users_id', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, city, street', 'length', 'max'=>100),
			array('zip_code', 'length', 'max'=>45),
			array('hnumber, floor, dnumber', 'length', 'max'=>20),
			array('text', 'length', 'max'=>2000),
                        array('text','safe','on'=>''),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('users_address_id, users_id, first_name, last_name, zip_code, city, street, hnumber, floor, dnumber, text', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'users_address_id' => 'Users Address',
			'users_id' => 'Users',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'zip_code' => 'Zip Code',
			'city' => 'City',
			'street' => 'Street',
			'hnumber' => 'Hnumber',
			'floor' => 'Floor',
			'dnumber' => 'Dnumber',
			'text' => 'Text',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('users_address_id',$this->users_address_id);
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('hnumber',$this->hnumber,true);
		$criteria->compare('floor',$this->floor,true);
		$criteria->compare('dnumber',$this->dnumber,true);
		$criteria->compare('text',$this->text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersAddress the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
