<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $user_code
 * @property string $name
 * @property string $city
 * @property string $phone
 * @property string $email
 * @property string $second_phone
 * @property string $comment
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $valid
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_code, city , name', 'required'),
			array('create_time, update_time, valid', 'numerical', 'integerOnly'=>true),
			array('user_code, city, phone, second_phone', 'length', 'max'=>20),
			array('name', 'length', 'max'=>100),
			array('email', 'length', 'max'=>30),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_code, name, city, phone, email, second_phone, comment', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_code' => '客户代码',
			'name' => '姓名',
			'city' => '城市',
			'phone' => '电话',
			'email' => '邮箱',
			'second_phone' => '其他联系方式',
			'comment' => '备注',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'valid' => 'Valid',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_code',$this->user_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('second_phone',$this->second_phone,true);
		$criteria->compare('comment',$this->comment,true);
	//	$criteria->compare('create_time',$this->create_time);
	//	$criteria->compare('update_time',$this->update_time);
	//	$criteria->compare('valid',$this->valid);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
