<?php

/**
 * This is the model class for table "ticket".
 *
 * The followings are the available columns in table 'ticket':
 * @property string $id
 * @property string $order_id
 * @property string $order_number
 * @property integer $send_time
 * @property string $user_code
 * @property string $package_name
 * @property integer $package_num
 * @property string $weight
 * @property string $size
 * @property double $total_money
 * @property integer $package_size
 * @property string $package_type
 * @property string $density
 * @property double $price
 * @property double $evalatue_money
 * @property double $insurance
 * @property integer $packages
 * @property double $pay_before
 * @property double $receive_by
 * @property string $exchange_rate
 * @property string $sender_city
 * @property string $receive_city
 * @property string $delivery_type
 * @property string $comment
 * @property string $partner
 * @property integer $user_id
 * @property string $reward
 * @property double $normal_price
 * @property double $pay_money
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $valid
 */
class Ticket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Ticket the static model class
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
		return 'ticket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('user_code','unique','message'=>'客户代码已存在'),
			array('order_id, order_number , send_time , package_name , size', 'required'),
			array('send_time, package_num, package_size, packages, user_id, create_time, update_time, valid', 'numerical', 'integerOnly'=>true),
			array('total_money, price, evalatue_money, insurance, pay_before, receive_by, normal_price, pay_money', 'numerical'),
			array('order_id, order_number, sender_city, receive_city, delivery_type, reward', 'length', 'max'=>20),
			array('package_name', 'length', 'max'=>60),
			array('weight, size, package_type, density, exchange_rate, partner', 'length', 'max'=>30),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, order_id, order_number, send_time, package_name, package_num, weight, size, total_money, package_size, package_type, density, price, evalatue_money, insurance, packages, pay_before, receive_by, exchange_rate, sender_city, receive_city, delivery_type, comment, partner, user_id, reward, normal_price, pay_money, create_time, update_time, valid', 'safe', 'on'=>'search'),
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
			'order_id' => '批次',
			'order_number' => '票号',
			'send_time' => '发货日期',
			'user_code' => '客户代码',
			'package_name' => '品名',
			'package_num' => '件数',
			'weight' => '重量',
			'size' => '体积',
			'total_money' => '合计',
			'package_size' => '包数',
			'package_type' => '材质',
			'density' => '密度',
			'price' => '单价',
			'evalatue_money' => '货值',
			'insurance' => '保费',
			'packages' => '套包',
			'pay_before' => '垫付',
			'receive_by' => '代收',
			'exchange_rate' => '汇率',
			'sender_city' => '发货地',
			'receive_city' => '收货地',
			'delivery_type' => '运输方式',
			'comment' => '备注',
			'partner' => '业务',
			'user_id' => '客户',
			'reward' => '返点',
			'normal_price' => '低价',
			'pay_money' => '应付款',
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
		$criteria->compare('order_id',$this->order_id,true);
		$criteria->compare('order_number',$this->order_number,true);
		$criteria->compare('send_time',$this->send_time);
		//$criteria->compare('user_code',$this->user_code,true);
		$criteria->compare('package_name',$this->package_name,true);
		$criteria->compare('package_num',$this->package_num);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('total_money',$this->total_money);
		$criteria->compare('package_size',$this->package_size);
		$criteria->compare('package_type',$this->package_type,true);
		$criteria->compare('density',$this->density,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('evalatue_money',$this->evalatue_money);
		$criteria->compare('insurance',$this->insurance);
		$criteria->compare('packages',$this->packages);
		$criteria->compare('pay_before',$this->pay_before);
		$criteria->compare('receive_by',$this->receive_by);
		$criteria->compare('exchange_rate',$this->exchange_rate,true);
		$criteria->compare('sender_city',$this->sender_city,true);
		$criteria->compare('receive_city',$this->receive_city,true);
		$criteria->compare('delivery_type',$this->delivery_type,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('partner',$this->partner,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('reward',$this->reward,true);
		$criteria->compare('normal_price',$this->normal_price);
		$criteria->compare('pay_money',$this->pay_money);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('valid',$this->valid);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
