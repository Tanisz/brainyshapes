<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $users_id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $activation_code
 * @property integer $activate
 * @property string $reg_date
 * @property string $storno
 * @property string $storno_date
 *
 * The followings are the available model relations:
 * @property UsersAddress[] $usersAddresses
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, email, password, activation_code', 'required'),
			array('activate', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>45),
			array('email', 'length', 'max'=>200),
			array('password', 'length', 'max'=>500),
			array('activation_code', 'length', 'max'=>2000),
			array('storno', 'length', 'max'=>1),
			array('reg_date, storno_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('users_id, username, email, password, activation_code, activate, reg_date, storno, storno_date', 'safe', 'on'=>'search'),
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
			'usersAddresses' => array(self::HAS_MANY, 'UsersAddress', 'users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'users_id' => 'Users',
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'password hash',
			'activation_code' => 'generated code
',
			'activate' => '0 - not activate 1 - acitvate',
			'reg_date' => 'Reg Date',
			'storno' => 'Storno',
			'storno_date' => 'Storno Date',
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

		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('activation_code',$this->activation_code,true);
		$criteria->compare('activate',$this->activate);
		$criteria->compare('reg_date',$this->reg_date,true);
		$criteria->compare('storno',$this->storno,true);
		$criteria->compare('storno_date',$this->storno_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
